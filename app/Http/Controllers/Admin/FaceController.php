<?php

namespace App\Http\Controllers\Admin;

use function App\getSuffix;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Tencent;

class FaceController extends Controller
{
    /**
     * 人脸融合页面
     * @author: liuFangShuo
     */
    public function index()
    {
        return view('admin/face');
    }

    /**
     * 图片上传
     * @return false|string
     * @author: liuFangShuo
     */
    public function upload(Request $request)
    {
        $postName = $request->post('name');
        $temp = $_FILES['file']['tmp_name'];

        $date = date("Y-m-d").'/'.date('H');
        $savePath = public_path() . '/upload/'.$date;
        $fileExt = getSuffix($postName);
        $name = md5($postName.rand(10,100)).$fileExt;

        $picUrl = Config::get('app.url').'/upload/'.$date.'/'.$name;
        $filePath = $savePath . '/' . $name;

        if (!is_dir($savePath)) {
            @mkdir($savePath,0777,true);
        }

        $str = base64_encode(file_get_contents($temp));
        $projectId = '301360';
        $ModelId = 'qc_301360_454140_1';

        $respond = Tencent::face($projectId,$ModelId,$str);

        $return = [
            'message' => '成功',
            'code' => 200,
            'data' => []
        ];

        if ( !empty($respond) ) {

            $respondInfo = json_decode($respond, true);


            //成功保存到本地
            move_uploaded_file($temp, $filePath);
            $data['organ_url'] = $picUrl;
            $data['new_url'] = $respondInfo['Image'];

            $return['data'] = $data;
        } else {
            $return['code'] = 201;
            $return['message'] = '失败';
        }

        return json_encode($return);

    }
}
