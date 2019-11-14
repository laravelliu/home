<?php
/**
 * 用户获取调用方的加密数据
 * Created by liuFangShuo.
 * User: lfs
 * Date: 2019-11-12
 * Time: 15:13
 */

return [
    'card' => [
        'url' => env('SDK_CARD_URL',''),
        'appKey' => env('SDK_CARD_APP_KEY',''),
        'secretKey' => env('SDK_CARD_SECRET_KEY',''),
        'appCode' => env('SDK_CARD_CODE','')
    ]
];