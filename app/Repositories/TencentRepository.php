<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-28
 * Time: 17:49
 */

namespace App\Repositories;

use Illuminate\Support\Facades\Config;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Facefusion\V20181201\FacefusionClient;
use TencentCloud\Facefusion\V20181201\Models\FaceFusionRequest;

class TencentRepository
{
    public $app_key='';
    public $secret_key='';

    public function __construct()
    {
        $this->app_key = Config::get('sdk.tencent.appKey');
        $this->secret_key = Config::get('sdk.tencent.secretKey');
    }

    /**
     * 换脸接口调用
     * @param $projectId
     * @param $modelId
     * @param $image
     * @param string $resImg
     * @return false|string
     * @author: liuFangShuo
     */
    public function face($projectId, $modelId, $image, $resImg = 'url')
    {
        try{
            $cred = new Credential($this->app_key, $this->secret_key);
            $httpProfile = new HttpProfile();
            $httpProfile->setEndpoint("facefusion.tencentcloudapi.com");

            $clientProfile = new ClientProfile();
            $clientProfile->setHttpProfile($httpProfile);
            $client = new FacefusionClient($cred, "ap-beijing", $clientProfile);

            $req = new FaceFusionRequest();

            $param = [
                'ProjectId' => $projectId,
                'ModelId' => $modelId,
                'Image' => $image,
                'RspImgType' => $resImg,
            ];

            $params = json_encode($param);
            $req->fromJsonString($params);

            $resp = $client->FaceFusion($req);

            return $resp->toJsonString();
        }catch (TencentCloudSDKException $e){
            return $e->getMessage();
        }
    }
}