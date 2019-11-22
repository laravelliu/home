<?php
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-22
 * Time: 11:39
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class CardFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'Card';
    }
}