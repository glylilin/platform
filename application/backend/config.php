<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/10
 * Time: 16:36
 */
return [
    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'backend_',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
        'cache_expire'  =>'1800'
    ],
];