<?php
class RotatorModel extends Model{

	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','thumb','link','date','state','sort');
		$this->tables=array(DB_FREFIX.'rotator');
		$this->check=new RotatorCheck();
		
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['name'],
				$this->R['act']
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_GET['act']) ? $_GET['act'] : null
		));
	}
	//新增轮播器
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['date']=Tool::getDate();
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

	//是否上架
	public function isShow(){
		if(!Validate::isNullStr($this->R['id']) && !Validate::isNullStr($this->R['act'])){
			if($this->R['act']=='yes'){
				return parent::update(array("id='{$this->R['id']}'"), array('state'=>'1'));
			}elseif($this->R['act']=='no'){
				return parent::update(array("id='{$this->R['id']}'"), array('state'=>'0'));
			}
		}
	}

	//验证一条数据是否存在
	public function isOne(Array $where){
		return parent::isOne($where);
	}
	//查询所有数据用于分页
	public function findAll(){
		return parent::select(array('name','thumb','link','date','id','state','sort'),
				array('order'=>' date DESC','limit'=>$this->limit));
	}
	//查询不带limit
	public function getAll(){
		return parent::select(array('name','thumb','link','date','id','state'),
				array('order'=>' sort DESC',));
	}
	//查询一条数据
	public function findOne(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','name','thumb','link','state','date'),
				array('where'=>$where,'limit'=>'1'));
	}

	//排序
	public function sort(){
		foreach($_POST['sort'] as $key=>$value){
			if(!is_numeric($value))continue;
			$where=array("id=$key");
			parent::update($where, array('sort'=>$value));
		}
		return true;
	}

	//获取数据总条数
	public function total(){
		return parent::total();
	}

	//用于后台图片管理起过滤图片
	public function fileRotator($file) {
		foreach ($file as $key=>$value) {

			if(!is_object($value)){
				$rotator = parent::select(array('id,thumb,name'),
						array('where'=>array("thumb='upload/{$_GET['file']}/$value'")));
			
				if (!Validate::isNullArray($rotator)) {
					$rotator[0]->pic = $value;
					$rotator[0]->name=$rotator[0]->name.'[<strong style="color:green;font-size:12px;">轮播器</strong>]';
					$file[$key] = $rotator[0];
				}
			}						
		}
		return $file;
	}
}