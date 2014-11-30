<?php
class CollectModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->fields=array('id','user','date','goods_id');
		$this->tables=array(DB_FREFIX.'collect');
		$this->check=new CollectCheck();
		list(
				$this->R['id'],
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
		));
	}
	public function runAdd(){
		$where=array("goods_id='{$this->R['id']}'","user='{$_COOKIE['user']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['user']=$_COOKIE['user'];
		$addData['goods_id']=$this->R['id'];
		$addData['date']=Tool::getDate();
		return parent::add($addData);
	}
	
	public function getAllCollect(){
		$result=parent::select(array('goods_id','user'),array('where'=>array("user='{$_COOKIE['user']}'"),'order'=>'date DESC'));
		$id='';
		foreach($result as $key=>$value){
			$id.=$value->goods_id.',';
		}
		$id=substr($id, 0,-1) ? substr($id, 0,-1) : 0 ;		
		$this->tables=array(DB_FREFIX.'goods g');
		$allGoods=parent::select(array('id','name','thumb','price_sale','price_market','unit','sale_count','thumb_small','nav','(SELECT COUNT(*) FROM mall_commend c WHERE c.goods_id=g.id) AS count'),
				array('where'=>array("id IN ($id)",'is_up=1'),'limit'=>$this->limit));	
		$this->tables=array(DB_FREFIX.'collect');
 		return $allGoods;
		
	}
	//取消收藏
	public function delete(){
		$where=array("goods_id='{$this->R['id']}'");
		return parent::delete($where);
	}
	public function total() {
		return parent::total(array('where'=>array("user='{$_COOKIE['user']}'")));
	}

}