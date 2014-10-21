<?php
class PriceModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','price_left','price_right');
		$this->tables=array(DB_FREFIX.'price');
		$this->check=new PriceCheck();
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['price_left'],
				$this->R['price_right'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['price_left']) ? $_POST['price_left'] : null,
				isset($_POST['price_right']) ? $_POST['price_right'] : null,
		));
	}
	
	
	
	
	
	
	
	
	
	
	//查询所有数据
	public function findAll(){
		return parent::select(array('id','price_left','price_right'),array('order'=>' price_left ASC,price_right ASC ','limit'=>$this->limit));
	}
	//查询所有数据用于nav显示
	public function getAllNavPrice(){
		$all=parent::select(array('id','price_left','price_right'),array('order'=>' price_left ASC,price_right ASC '));		
		foreach($all as $value){
			$value->price ='';
			$value->price .=$value->price_left.'-'.$value->price_right;	
		}
		return tool::setFormItem($all, 'price', 'price');
	}
	//查询一条数据
	public function findOne(){		
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','price_left','price_right'),array('where'=>$where,'limit'=>'1'));
	}
	//新增一条数据
	public function add(){
		$where=array("price_left='{$this->R['price_left']}'","price_right='{$this->R['price_right']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		return parent::add($addData);
	}
	//修改一条数据
	public function update(){
		$where=array("price_left='{$this->R['price_left']}'","price_right='{$this->R['price_right']}'");
		if(!$this->check->checkOne($this,array("id='{$this->R['id']}'")))$this->check->showError();
		if(!$this->check->checkUpdate($this,$where))$this->check->showError();			
		$updateData=$this->getRequest()->filter($this->fields);
		return parent::update(array("id='{$this->R['id']}'"),$updateData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}

	//获得数据总量
	public function total(){
		return parent::total();
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("price_left='{$this->R['price_left']}'","price_right='{$this->R['price_right']}'");
		return $this->check->isExist($this,$where);
	}
	
}