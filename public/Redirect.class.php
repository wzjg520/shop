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
	public function success($info='',$url,$type=0){
		if(!empty($info)){
			$this->tpl->assign('message',$info);
			$this->tpl->assign('url',$url);
			if($type==0){
				$this->tpl->display(ADMIN_STYLE.'public/succ.tpl');
			}elseif($type==1){
				$this->tpl->display(ADMIN_STYLE.'public/succ_index.tpl');
			}
			
		}else{
			header('Location:'.$url);
		}
		
		exit();
	}
	public function error($info,$type=0){
		$this->tpl->assign('message',$info);
		$this->tpl->assign('prev_url',PREV_URL);
		if($type==0){
			$this->tpl->display(ADMIN_STYLE.'public/error.tpl');
		}elseif($type==1){
			$this->tpl->display(ADMIN_STYLE.'public/error_index.tpl');
		}
		exit();
	}
	
}