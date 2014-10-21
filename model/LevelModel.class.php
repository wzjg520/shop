<?php
class LevelModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','level_name');
		$this->tables=array(DB_FREFIX.'level');	
		list(
				$this->R['id'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
		));
		
	}
	//查询所有数据
	public function findAll(){
		return parent::select(array('id','level_name'));
	}
	
	
}