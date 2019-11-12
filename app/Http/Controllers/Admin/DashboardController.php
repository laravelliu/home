<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    //
    public function index()
    {
       return view('admin/dashboard');
    }

    /**
     * 计数器
     * @author: liuFangShuo
     */
    public function count()
    {

    }
}
