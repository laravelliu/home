<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SdkInterface;
use App\Repositories\CardRepository;
use Illuminate\Http\Request;
use Card;

class FatherController extends Controller
{
    //身份证查询页面
    public function card()
    {
        return view('admin/card');
    }

    //身份证提交
    public function postCard(Request $request)
    {
        $this->validateCard($request);

        $name = $request->post('name');
        $number = $request->post('number');
        $return = Card::verifyExit($name,$number);

        $data['name'] = $name;
        $data['address'] = $return['address'];
        $data['number'] = $number;
        $data['message'] = $return['message'];

        return view('admin/card-result',['data'=>$data]);
    }

    private function validateCard(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'number' => ['required','min:18','max:18']
        ]);
    }

}
