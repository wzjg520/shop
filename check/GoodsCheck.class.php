<?php
class GoodsCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='商品名不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['nav'])){
			$this->message[]='种类不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['sn'])){
			$this->message[]='编号不得为空';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['weight'])){
			$this->message[]='商品重量必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_sale'])){
			$this->message[]='商品销售价必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_market'])){
			$this->message[]='商品成本价必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['price_cost'])){
			$this->message[]='商品成本价必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['inventory'])){
			$this->message[]='库存必须为数字';
			$this->flag=false;
		}
		if(!Validate::isNumeric($_POST['warn_inventory'])){
			$this->message[]='库存告急必须为数字';
			$this->flag=false;
		}
		
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='商品名不得大于20位';
			$this->flag=false;
		}
		
		if($model->isOne($param)){		
			$this->message[]='商品已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	//设置错误信息
	public function setMessage($info){
		$this->message[]=$info;
	}
	public function checkUpdate($model,Array $param){
		
		return $this->checkAdd($model, $param);
	}
	public function checkDelete(&$model,$requestData){
		if(!$model->isOne($requestData)){
			$this->message='找不到将要删除的管理员';
			$this->flag=false;
		}
		return $this->flag;
	}
	//用于ajax验证
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}