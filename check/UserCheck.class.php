<?php
class UserCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='用户名长度不得小于2位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='用户名长度不得大于20位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='密码不得小于6位';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['pwd'], $_POST['notpwd'])){
			$this->message[]='密码和确认码必须一致';
			$this->flag=false;
		}
		if(!Validate::checkEmail($_POST['email'])){
			$this->message[]='邮箱格式不正确';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['validateCode'],$_SESSION['validateCode'])){
			$this->message[]='验证码不正确';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='用户名已被占用';
			$this->flag=false;
		}
		return $this->flag;
	}
	/* public function checkUpdate(&$model){
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='密码不得小于6位';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['pwd'])){
			$this->message[]='密码不得为空';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals($_POST['pwd'], $_POST['notpwd'])){
			$this->message[]='密码和确认码必须一致';
			$this->flag=false;
		}
		if(Validate::isNullStr($_POST['level'])){
			$this->message[]='管理员等级不得为空';
			$this->flag=false;
		}
		return $this->flag;	
	} */
	//检查登陆数据
	public function checkLogin(&$model,Array $param){
	if(Validate::checkStrLength($_POST['user'], 2, 'min')){
			$this->message[]='用户名长度不得小于2位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['user'], 20, 'max')){
			$this->message[]='用户名长度不得大于20位';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['pwd'], 6, 'min')){
			$this->message[]='密码不得小于6位';
			$this->flag=false;
		}
		if(!$model->isOne($param)){
			$this->message[]='用户名或密码不正确';
			$this->flag=false;
		}
		if(!Validate::checkStrEquals(strtolower($_POST['validateCode']), $_SESSION['validateCode'])){
			$this->message[]='验证码不正确';
			$this->flag=false;
		}
		return $this->flag;
	}
	//用于ajax验证
	public function isExist(& $model ,Array $param){
		 return $model->isOne($param) ? 'false' : 'true';		 
	}
	//用于ajax验证密码用户名是否匹配
	public function checkPwd(& $model,Array $param){
		return $model->isOne($param) ? 'true' : 'false';
	}
	//用于ajax检测验证码是否正确
	public function checkCode($requestData){
		return Validate::checkStrEquals(strtolower($requestData['validateCode']), $_SESSION['validateCode']) ?  'true' : 'false';
	}
}