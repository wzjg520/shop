<?php
class ServiceCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='售后服务名称不得超过20位';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='售后服务名称不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['content'])){
			$this->message[]='售后服务内容不得为空';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='该售后服务已被占用';
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