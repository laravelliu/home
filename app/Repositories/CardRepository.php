<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-12
 * Time: 15:07
 */

namespace App\Repositories;
use App\Models\CardResultModel;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use App\Interfaces\SdkInterface;
use Illuminate\Support\Facades\DB;

class CardRepository implements SdkInterface
{
    public $url;
    public $app_key;
    public $secret_key;
    public $app_code;

    public $model;
    public $http;

    public function __construct(CardResultModel $model,Client $curl)
    {
        $this->model = $model;
        $this->http = $curl;

        $this->app_key = Config::get('sdk.card.appKey');
        $this->secret_key = Config::get('sdk.card.secretKey');
        $this->app_code = Config::get('sdk.card.appCode');
        $this->url = Config::get('sdk.card.url');
    }

    /**
     * 由于就一个所以可以暂时URL里面直接写全路径
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @author: liuFangShuo
     */
    public function getInfo(...$args)
    {
        $name = $args[0];
        $number = $args[1];

        $http = $this->http;
        $http_url = $this->url.'/idCardCert?'.'idCard='.$number.'&name='.$name;
        $headers = ['Authorization'=>'APPCODE '.$this->app_code];

        $option = [
            'headers' => $headers
        ];

        $respond =$http->request('GET', $http_url, $option);

        $data = [];

        if ($respond->getStatusCode() == 200 && !empty($content = $respond->getBody()->getContents())) {
            $data = json_decode($content, true);
        }

        return $data;
    }

    /**
     * 查询数据是否存在
     * @param $name
     * @param $number
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @author: liuFangShuo
     */
    public function verifyExit($name,$number)
    {
        //根据数据库获取数据
        $cardInfo =  $this->model::where(['name'=>$name, 'number'=>$number])->first();

        $return['message'] = '平台数据不存在';
        $return['address'] = '';

        if ( !empty($cardInfo )) {

           switch ($cardInfo->status) {
               case 0:
                   $return['message'] = '身份证不匹配';
                   break;
               case 1:
                   $return['message'] = '身份证匹配';
                   $return['address'] = $cardInfo->area;

                   break;
               case 2:
                   $return['message'] = '平台数据不存在';
                   break;
               default:
                   $return['message'] = '身份证不匹配';
                   break;
           }

           return $return;
        }

        //同步数据
        $info = $this->getInfo($name,$number);


        if ( !empty($info) ) {

            $insert['user_id'] = Auth::user()->id;
            $insert['number'] = $number;
            $insert['name'] = $name;

            switch ($info['status']) {
                case '01':
                    $insert['status'] = '1';
                    $return['message'] = '身份证匹配';
                    $insert['sex'] = $info['sex'] == '男' ? 1 : 0;
                    $insert['area'] = $info['area'];
                    $insert['province'] = $info['province'];
                    $insert['city'] = $info['city'];
                    $insert['prefecture'] = $info['prefecture'];
                    $insert['birthday'] = $info['birthday'];

                    $return['address'] = $info['area'];
                    break;
                case '02':
                    $insert['status'] = '0';
                    $return['message'] = '身份证不匹配';
                    break;
                case '202':
                case '203':
                    $insert['status'] = '2';
                     $return['message'] = '平台数据不存在';
                    break;
                default:
                    $insert['status'] = '2';
                    $return['message'] = '身份证不匹配';
                    break;
            }

            //插入数据
            DB::table('card_result')->insert($insert);

        }

        return $return;
    }

    public function sign()
    {
        // TODO: Implement sign() method.
    }

}