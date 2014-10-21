<?php
class AttrCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['name'], 2, 'min')){
			$this->message[]='属性名长度不得小于2位';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='属性名不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 4, 'max')){
			$this->message[]='属性名长度不得大于4位';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='属性名已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model,Array $param){
		return $this->checkAdd($model, $param);
	}
	//用于ajax检测数据是否存在
	public function isExist(& $model ,Array $param){
		return $model->isOne($param) ? 'false' : 'true';
	}
}