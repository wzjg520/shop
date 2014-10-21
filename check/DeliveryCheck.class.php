<?php
class DeliveryCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='物流公司名称不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='物流公司网址不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='品牌网址不得大于40位';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_in'])){
			$this->message[]='省内起步费用必须为数字';
			$this->flag=false;
		}
		
		if(!Validate::isNumeric($_POST['price_out'])){
			$this->message[]='省外起步费用必须为数字';
			$this->flag=false;
		}
	
		if(!Validate::isNumeric($_POST['price_add'])){
			$this->message[]='额外费用必须为数字';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='该物流公司已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(& $model ,Array $param){
		return $this->checkAdd($model, $param);
	}
	//用于ajax检测数据是否存在
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}