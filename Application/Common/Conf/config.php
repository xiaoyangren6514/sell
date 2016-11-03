<?php
return array(
    //'配置项'=>'配置值'
    // 设置是否显示追踪信息
    'SHOW_PAGE_TRACE' => true,
    'DEFAULT_MODULE' => 'Home',
    'MODULE_ALLOW_LIST' => array('Home', 'Admin'),
    /* 数据库设置 */
    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'sell',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => 'root',          // 密码
    'DB_PREFIX' => 'sw_',    // 数据库表前缀
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE' => true,        // 启用字段缓存
    'DB_CHARSET' => 'utf8',      // 数据库编码默认采用utf8

    // 开始smarty模版引擎
    'TMPL_ENGINE_TYPE' => 'Smarty',

);