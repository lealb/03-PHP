<?php
return array(
	//'配置项'=>'配置值'

    // 允许访问的模块列表
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',  // 默认模块

    // 设置禁止访问的模块列表
    'MODULE_DENY_LIST'      =>  array('Common','Runtime','User'),
    //配置模板路径
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public/'. MODULE_NAME,
        '__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
        '__JSON__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/json',
        '__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '__VIDEO__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/video',
        '__DATA__'   => __ROOT__ . '/Public/' . MODULE_NAME . '/data',
        '__COMMON__' => __ROOT__ . '/Public/Common',
    ),


    //伪静态
    'URL_HTML_SUFFIX'=>'html|shtml',
    //配置路由
    'URL_ROUTER_ON'  => true,
    'URL_MAP_RULES'  =>array(
        'Home/Index/index/p/:p\d' => 'Home/Index/index',
        'Home/Index/index/tag/key' => 'Home/Index/index'
    ),

);