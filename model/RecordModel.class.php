<?php
class RecordModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->fields=array('id','name','user','attr','num','date','price','goods_id');
		$this->tables=array(DB_FREFIX.'record');
		list(
				$this->R['id'],
				$this->R['goodsid']
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_GET['goodsid']) ? $_GET['goodsid'] : null
		));
	}
	public function getDetailsRecord() {
		return parent::select(array('id','name','user','attr','date','price','num'),
				array('where'=>array("goods_id='{$this->R['goodsid']}'"),'limit'=>$this->limit,'order'=>'date DESC'));
	}
	public function total() {
		return parent::total(array('where'=>array("goods_id='{$this->R['goodsid']}'")));
	}

}