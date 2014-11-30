<?php
class Check extends Validate{
	//判断验证是否通过
	protected $flag=true;
	//用于保存错误信息
	protected $message=array();
	//用于保存samrty对象
	private $tpl=null;
	public function __construct(){
		$this->tpl=new TPL();
	}
	//显示错误页面
	public function showError($url='',$type=0){
		if(empty($url)){
			$this->tpl->assign('message',$this->message);
			$this->tpl->assign('prev_url',PREV_URL);
			if($type==0){
				$this->tpl->display(ADMIN_STYLE.'public/error.tpl');
			}else{
				$this->tpl->display(ADMIN_STYLE.'public/error_index.tpl');
			}
			
			exit();
		}else{
			Redirect::getInstance()->success('','./');
		}
		
	}
	//手动设置错误信息
	public function setMessage($_message) {
		$this->message[] = $_message;
	}
	//用于修改数据时检测一条数据是否存在
	public function checkOne(Model &$model,Array $requestData){
		if(!$model->isOne($requestData)){
			$this->message='找不到指定数据';
			$this->flag=false;
		}
		return $this->flag;
	}
	
	
}