<?php
define('FRONT_STYLE', 'default/');
define('ADMIN_STYLE','admin/');
define('SMARTY_SETCACHEDIR',ROOT_PATH.'/cache/');
define('SMARTY_SETTEMPLATEDIR',ROOT_PATH.'/view/');
define('SMARTY_SETCOMPILEDIR',ROOT_PATH.'/compile/');
define('SMARTY_SETCONFIGDIR',ROOT_PATH.'/configs/');
define('SMARTY_CACHING',0);
define('SMARTY_CACHE_LIFETIME',60*60*24);

//前一个url
define('PREV_URL',@$_SERVER['HTTP_REFERER']);
define('PAGE_SIZE',10);
//定义水印目录
define('WATER_DIR',ROOT_PATH.'/view/admin/images/ihuahua.png');
//上传文件目录
define('UPLOAD_DIR','upload/');

//数据库连接配置
define('DB_DSN','mysql:host=localhost;dbname=mall');
define('DB_USER','root');
define('DB_PWD', 'ABC201314');
define('DB_CHARESET','SET NAMES UTF8');
//设置表前缀
define('DB_FREFIX','mall_');




?>