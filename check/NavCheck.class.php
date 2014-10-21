<?php
class NavCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['name'], 2, 'min')){
			$this->message[]='导航名称长度不得小于2位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 4, 'max')){
			$this->message[]='导航名称长度不得大于4位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='导航信息不得大于200位';
			$this->flag=false;
		}
		
		if($model->isOne($param)){
			$this->message[]='导航已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(){
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='导航信息不得大于200位';
			$this->flag=false;
		}
		return $this->flag;
	}
	//用于ajax检测数据是否存在
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}