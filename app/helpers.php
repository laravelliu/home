<?php
namespace App;
/**
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-12-02
 * Time: 10:16
 */

if(!function_exists('getSuffix')){
    function getSuffix($name = '') {
        if ( empty($name) ) {
            return '';
        }

        $tmparr = parse_url($name);
        $pic = $tmparr['path'];
        $suffix = strrchr($pic, '.');

        return strtolower($suffix);
    }
}