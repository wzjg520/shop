<?php
class CommendCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if(Validate::isNullStr($_POST['content'])){
			$this->message[]='评论内容不得为空';
			$this->flag=false;
		}
		if(Validate::checkStrLength($_POST['content'], 200, 'max')){
			$this->message[]='评论内容不得大于200字';
			$this->flag=false;
		}
		if($model->isOne($param)){
			$this->message[]='一个订单只能评论一次';
			$this->flag=false;
		}		
		return $this->flag;
	}
	public function checkUpdate(){
		if(Validate::checkStrLength($_POST['re_content'], 200, 'max')){
			$this->message[]='回复评价不得大于200位';
			$this->flag=false;
		}
		return $this->flag;
	}
}