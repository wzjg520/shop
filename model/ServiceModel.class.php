<?php
class ServiceModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','content','first','date');
		$this->tables=array(DB_FREFIX.'service');
		$this->check=new ServiceCheck();
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['name'],
				$this->R['first'],
				$this->R['ajax_id'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_POST['first']) ? $_POST['first'] : null,
				isset($_POST['ajax_id']) ? $_POST['ajax_id'] : null,
		));
	}
	//查询所有数据
	public function findAll(){
		return parent::select(array('id','name','content','date','first'),array('limit'=>$this->limit));
	}
	//获得所有数据用于商品添加属性
	public function getAllService(){
		$all=parent::select(array('id','name'));
		return Tool::setFormItem($all,'id','name');
	}
	//获得默认首选的id
	public function getFirst(){
		$array=parent::select(array('id'),array('where'=>array("first=1")));
		return $array[0]->id;
	}
	//查询一条数据
	public function findOne(){		
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','content','first'),array('where'=>$where,'limit'=>'1'));
	}
	//新增一条数据
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		if($this->R['first']==1)parent::update(array("first=1"), array('first'=>0));
		$addData=$this->getRequest()->filter($this->fields);
		return parent::add($addData);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this,array("id<>'{$this->R['id']}'","name='{$this->R['name']}'")))$this->check->showError();			
		if($this->R['first']==1)parent::update(array("first=1"), array('first'=>0));	
		$updateData=$this->getRequest()->filter($this->fields);	
		return parent::update($where,$updateData);
	}
	//设置首选
	public function setFirst(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,array("id='{$this->R['id']}'")))$this->check->showError();
		parent::update(array("first=1"), array('first'=>0));
		return parent::update($where, array('first'=>1));		
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		$service=parent::select(array('id','first'),array('limit'=>1,'where'=>$where));
		if($service[0]->first==1){
			return false;
		}else{
			return parent::delete($where);
		}
	}

	//获得数据总量
	public function total(){
		return parent::total();
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("name='{$this->R['name']}'","id<>'{$this->R['ajax_id']}'");
		return $this->check->isExist($this,$where);
	}
	
}