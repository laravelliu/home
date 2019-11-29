<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $temp = $_FILES['file']['tmp_name'];

        $str = base64_encode(file_get_contents($temp));
        $projectId = '301360';
        $ModelId = 'qc_301360_454140_1';

        $return = Tencent::face($projectId,$ModelId,$str);
print_r($return);exit;

    }
}
