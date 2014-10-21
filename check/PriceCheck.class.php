<?php
class PriceCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(!Validate::isNumeric($_POST['price_left'])){
			$this->message[]='价格左区间必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_right'])){
			$this->message[]='价格右区间必须为数字';
			$this->flag=false;
		}
		if($_POST['price_right'] < $_POST['price_left']){
			$this->message[]='价格右区间必须大于左区间';
			$this->flag=false;
		}
		if($_POST['price_right'] == $_POST['price_left']){
			$this->message[]='价格右区间和左区间不得相等';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='该价格区间已被占用';
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