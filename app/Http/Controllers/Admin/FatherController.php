<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CardRepository;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    //身份证查询页面
    public function card()
    {
        return view('admin/card');
    }

    //身份证提交
    public function postCard(Request $request,CardRepository $repository)
    {
        $this->validateCard($request);

        $name = $request->post('name');
        $number = $request->post('number');
        $message = $repository->verifyExit($name,$number);

        return view('admin/card-result');
    }

    private function validateCard(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'number' => ['required','min:18','max:18']
        ]);
    }

}
