<?php
class Factory{
	static private $obj=null;
	//自动加载控制器
	static public function setAction(){
		$temp=self::getA();
		if(Validate::inArray($temp, array('Manage','Nav','Level','Goods','Order'))){
			if(!isset($_SESSION['admin'])){
				Redirect::getInstance()->success('','?a=admin&m=runLogin');
			}
		}
		if(!file_exists(ROOT_PATH.'/controller/'.$temp.'Action.class.php'))$temp='Index';
		eval('self::$obj=new '.$temp.'Action();');
		return self::$obj;
	}
	static public function setModel(){
		$temp=self::getA();
		if(file_exists(ROOT_PATH.'/model/'.$temp.'Model.class.php')){
			eval('self::$obj=new '.$temp.'Model();');
		}		
		return self::$obj;
	}
	static public function getA(){
		return ucfirst(isset($_GET['a']) && !empty($_GET['a']) ? $_GET['a'] : 'Index');
	}
	
}