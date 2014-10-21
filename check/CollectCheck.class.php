<?php
class CollectCheck extends Check{
	public function checkAdd(&$model,Array $param){
		if($model->isOne($param)){
			$this->message[]='您已收藏过此商品';
			$this->flag=false;
		}
		return $this->flag;
	}
}









