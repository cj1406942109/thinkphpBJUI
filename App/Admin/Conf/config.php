<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_THEME'=>'default',//默认模板主题名称
    'URL_MODEL'=>0,//URL访问模式，可选参数0、1、2、3，代表一下四种模式：

    /*以下是RBAC 认证配置信息*/
    'USER_AUTH_ON'=>true,
    'USER_AUTH_TYPE'=>1,//默认认证类型，1登录认证，2实时认证
    'USER_AUTH_KEY'=>'authId',//用户认证SESSION标记
    'ADMIN_AUTH_KEY'=>'2506597416@qq.com',
    'USER_AUTH_MODEL'=>'User',//默认验证数据表模型
    'AUTH_PWD_ENCODER'=>'md5',//用户认证密码加密机方式encrypt
    'USER_AUTH_GATEWAY'=>'/index.php/Index/Public/index',//默认认证网关

    'NOT_AUTH_MODULE'=>'Public',//默认无序认证模块
    'REQUIRE_AUTH_MODULE'=>'',//默认需要认证模块

    'NOT_AUTH_ACTION'=>'',//默认无需认证操作
    'REQUIRE_AUTH_ACTION'=>'',//默认需要认证操作

    'GUEST_AUTH_ON'=>false,//是否开启游客授权访问
    'GUEST_AUTH_ID'=>0,//游客的用户ID
    'RBAC_ROLE_TABLE'=>C('DB_PREFIX').'role',
    'RBAC_USER_TABLE'=>C('DB_PREFIX').'role_user',
    'RBAC_ACCESS_TABLE'=>C('DB_PREFIX').'access',
    'RBAC_NODE_TABLE'=>C('DB_PREFIX').'node',

    /*系统备份数据库时每个sql分卷大小，单位字节*/
    'sqlFileSize'=>5242880,//该值不可太大，否则会导致内存溢出备份、恢复失败，合理大小在512k~10M,建议5M一卷

    //配置调试信息
    'SHOW_PAGE_TRACE'=>true,

    'LOAD_EXT_CONFIG' => 'config_site', // 加载扩展配置文件
);
?>



