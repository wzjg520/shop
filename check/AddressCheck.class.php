<?php
class AddressCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='收货人长度不得小于2位';
			$this->flag=false;
		}
		if(!Validate::isLength($_POST['code'], 6)){
			$this->message[]='邮政编码必须为6位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='收货人不得大于20位';
			$this->flag=false;
		}
		if(!Validate::checkEmail($_POST['email'])){
			$this->message[]='邮箱格式不正确';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='收货人已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model,Array $param){
		return $this->checkAdd($model, $param);
	}
	//用于ajax验证
	public function isExist(& $model ,Array $param){
		 return $model->isOne($param) ? 'false' : 'true';		 
	}
}