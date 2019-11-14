<?php
namespace App\Interfaces;
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-12
 * Time: 14:59
 */
interface SdkInterface
{
    public function sign();

    public function getInfo(...$args);
}