<?php
session_start();
//错误处理
if(!ini_get('display_errors')){
	ini_set('display_errors', 'on');
}
error_reporting(E_ALL^E_STRICT^E_NOTICE); //^E_NOTICE
header('Content-type:text/html;charset=utf-8');
//设置时区
date_default_timezone_set('Asia/Shanghai');
//创建实际路径
define('ROOT_PATH',dirname(__DIR__));
require ROOT_PATH . '/configs/profile.inc.php';
require ROOT_PATH . '/smarty/Smarty.class.php';
//开启autoload函数
spl_autoload_register('__autoload');
function __autoload($_className){
	if(substr($_className,-5)=='Model'){
		require ROOT_PATH.'/model/'.$_className.'.class.php';
	}elseif(substr($_className,-6)=='Action'){
		require ROOT_PATH.'/controller/'.$_className.'.class.php';
	}elseif(substr($_className,-5)=='Check'){
		require ROOT_PATH.'/check/'.$_className.'.class.php';
	}else{
		require ROOT_PATH.'/public/'.ucfirst($_className).'.class.php';
	}
}

//设置smarty的初始值
$tpl = TPL::getInstance();
//运行控制器
Factory::setAction()->run();
?>