<?php
class Redirect {
	static private $instance=null;
	static public function getInstance(TPL &$tpl=null){
		if(!(self::$instance instanceof self)){
			self::$instance=new self();
			self::$instance->tpl=$tpl;
		}
		return self::$instance;
	}
	private function __construct(){}
	private function __clone(){}
	public function success($info='',$url){
		if(!empty($info)){
			$this->tpl->assign('message',$info);
			$this->tpl->assign('url',$url);
			$this->tpl->display(ADMIN_STYLE.'public/succ.tpl');
		}else{
			header('Location:'.$url);
		}
		
		exit();
	}
	public function error($info){
		$this->tpl->assign('message',$info);
		$this->tpl->assign('prev_url',PREV_URL);
		$this->tpl->display(ADMIN_STYLE.'public/error.tpl');
		exit();
	}
	
}