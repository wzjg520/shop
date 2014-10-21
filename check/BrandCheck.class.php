<?php
class BrandCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='品牌名称不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['type'])){
			$this->message[]='品牌类型不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='品牌网址不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='品牌名称不得大于20位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='品牌简介不得大于20位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='品牌网址不得大于40位';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='该品牌已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model){
		if(Validate::isNullStr($_POST['url'])){
			$this->message[]='品牌网址不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['type'])){
			$this->message[]='品牌类型不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['info'], 200, 'max')){
			$this->message[]='品牌简介不得大于20位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['url'], 40, 'max')){
			$this->message[]='品牌网址不得大于20位';
			$this->flag=false;
		}
		return $this->flag;
	}
	//用于ajax验证
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}