<?php
class AddressModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','tel','address','email','flag','time','buildings','user','selected','code');
		$this->tables=array(DB_FREFIX.'address');
		$this->check=new AddressCheck();
		//用于查找数据		
		list(
				$this->R['id'],
				$this->R['name'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id']: null,
				isset($_POST['name']) ? $_POST['name'] : null,

		));
	}
	public function add(){
		$where=array("name='{$this->R['name']}'","user='{$_COOKIE['user']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['user']=$_COOKIE['user'];
		$addData['selected']=1;
		parent::update(array("user='{$_COOKIE['user']}'"), array('selected'=>0));
		return parent::add($addData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this,array("id <> '{$this->R['id']}'","user='{$_COOKIE['user']}'","name='{$this->R['name']}'")))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);

		return parent::update($where,$updateData);
	}
	//查询所有数据
	public function findAll(){
		$where=array("user='{$_COOKIE['user']}'");
		return parent::select(array('id','name','email','address','tel','flag','selected','code','buildings'),array('where'=>$where,'order'=>'selected DESC'));
	}
	//查询一条数据
	public function findOne(){		
		$where=array("user='{$_COOKIE['user']}'","selected=1");
		if(isset($this->R['id']))$where=array("id='{$this->R['id']}'");
		//if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','email','address','flag','tel','time','code','buildings'),array('where'=>$where,'limit'=>'1'));
	}
	//设置收货人首选
	public function selected(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		parent::update(array("user='{$_COOKIE['user']}'"), array('selected'=>0));
		return parent::update($where,array('selected'=>1) );
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	//验证邮编是否正确
	public function ajaxCode(){
		return $this->check->checkCode($_POST);
	}
	//获取数据总条数
	public function total(){
		return parent::total();
	}
}