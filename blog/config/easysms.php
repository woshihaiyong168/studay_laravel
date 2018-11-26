<?php
return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'yuntongxun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        //'yunpian' => [
        //    'api_key' => env('YUNPIAN_API_KEY'),
        //],
        'yuntongxun' => [
            'app_id' => env('YUN_TONG_XUN_APP_ID'),
            'account_sid' => env('YUN_TONG_XUN_ACCOUNT_SID'),
            'account_token' => env('YUN_TONG_XUN_ACCOUNT_TOKEN'),
            'is_sub_account' => false,
        ],
    ],
];