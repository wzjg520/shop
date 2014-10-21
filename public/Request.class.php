<?php
class Request{
	static private $instance = null;
	static public function getInstance(&$model,&$check){
		if(!(self::$instance instanceof self)){
			self::$instance=new self();		
		}
		return self::$instance;	
		
	}
	private function __clone(){}
	private function __construct(){
		Tool::setRequest();
		
	}
	//处理新增请求数据转化为array($key=>$value)格式
	public function filter(Array $fields){
		$selectDate=array();		
		if(Validate::isArray($_POST) && !Validate::isNullArray($_POST)){			
			foreach ($_POST as $key=>$value){
				if(Validate::inArray($key, $fields)){
					$selectDate[$key]=$value;
				}
			}		
		}
		return $selectDate;
	}

	//处理表单提交的数据
	public function getParam(Array $param){
		$getParam=array();
		foreach($param as $key=>$value){								
			if("$key"=='in'){
				$getParam[]=str_replace(',', "','", $value);
			}else{
				$getParam[]=$value;
			}		
		}
		return $getParam;
	}
}