<?php
class RotatorCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['name'])){
			$this->message[]='轮播器名称不得为空';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['thumb'])){
			$this->message[]='图片地址不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['name'], 20, 'max')){
			$this->message[]='轮播器名称不得大于50位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['link'], 50, 'max')){
			$this->message[]='链接网址不得大于50位';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='该轮播器名称已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	public function checkUpdate(&$model){
		if(Validate::isNullStr($_POST['link'])){
			$this->message[]='链接地址不得为空';
			$this->flag=false;
		}

		if(Validate::isNullStr($_POST['thumb'])){
			$this->message[]='图片地址不得为空';
			$this->flag=false;
		}

		if(Validate::checkStrLength($_POST['link'], 40, 'max')){
			$this->message[]='链接地址不得大于50位';
			$this->flag=false;
		}

		return $this->flag;
	}
}