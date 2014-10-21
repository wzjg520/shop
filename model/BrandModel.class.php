<?php
class BrandModel extends Model{

	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','url','info','reg_time','type');
		$this->tables=array(DB_FREFIX.'brand');
		$this->check=new BrandCheck();
		
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['name']
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
		));
	}
	//新增品牌
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['reg_time']=Tool::getDate();
		return parent::add($addData);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		return parent::update($where,$updateData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	//验证一条数据是否存在
	public function isOne(Array $where){
		return parent::isOne($where);
	}
	//查询所有数据用于分页
	public function findAll(){
		return parent::select(array('name','url','info','reg_time','id','type'),
				array('order'=>' reg_time DESC','limit'=>$this->limit));
	}
	//查询全部品牌不带limit
	public function getAll(){
		return parent::select(array('name','url','info','reg_time','id','type'),
				array('order'=>' reg_time DESC',));
	}
	//查询所有与主类相关的品牌
	public function getAllBrands(){
		$where=array("type='{$this->R['id']}'");
		return parent::select(array('id','name','url','info','type'),
				array('where'=>$where));
	}
	public function getAllUpdateBrands(){
		$this->tables=array(DB_FREFIX.'nav');
		$nav=parent::select(array('sid','id'),array('where'=>array("id='{$this->R['id']}'")));
		$this->tables=array(DB_FREFIX.'brand');
		return parent::select(array('id','name','type'),
				array('where'=>array("type='{$nav[0]->sid}'")));
	}
	//查询一条数据
	public function findOne(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','url','info','type'),
				array('where'=>$where,'limit'=>'1'));
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	//获取数据总条数
	public function total(){
		return parent::total();
	}
	//ajax获得子类关联品牌
	public function ajaxBrands($param){
		$temp= $this->select(array('name','id'),array('where'=>array("id IN ('$param')")));
		if(!empty($temp)){
			return urldecode(json_encode(Tool::setFormItem($temp, 'id', 'name')));
		}		
	}
}