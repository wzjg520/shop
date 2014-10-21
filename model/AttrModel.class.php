<?php
class AttrModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','way','item','nav');
		$this->tables=array(DB_FREFIX.'attr');
		$this->check=new AttrCheck();
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['name'],
				$this->R['goodsid'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_GET['goodsid']) ? $_GET['goodsid'] : null,
		));
	}
	public function add(){
		$where=array('where'=>"name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this, $where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['nav']=implode(',', $addData['nav']);
		return parent::add($addData);
	}
	public function delete(){
		return parent::delete(array("id='{$this->R['id']}'"));
	}
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this, $where))$this->check->showError();
		if(!$this->check->checkUpdate($this,array("id<>'{$this->R['id']}'","name='{$this->R['name']}'")))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		$updateData['nav']=implode(',', $updateData['nav']);
		return parent::update($where,$updateData);
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	public function findAll(){
		$allAttr=parent::select(array('id','name','item','nav'));
		$this->tables=array(DB_FREFIX.'nav');
		$allNav=tool::setFormItem(parent::select(array('id','name','sid'),
				array('where'=>array('sid != 0'))), 'id', 'name');		
		if($allAttr){
			foreach($allAttr as $key=>$value){
				if(!empty($value->nav)){
					$nav=explode(',', $value->nav);
					$value->nav='';
					foreach($nav as $val){
						$value->nav .=$allNav[$val].',';	
					}
					$value->nav=substr($value->nav, 0,-1);
				}else{
					$value->nav='无';
				}					
			}
		}
		return $allAttr;		
	}
	
	//用于商品模块获得相关id
	public function getGoodsAttr(){
		$goodsAttr=parent::select(array('id','name','item','nav'),array('like'=>array('nav'=>$this->R['id'])));
		return json_encode($goodsAttr);
	}
	//用于前台显示属性类型radio 或 checkbox
	public function getAttrType(){
		$this->tables=array(DB_FREFIX.'goods');
		$attr=parent::select(array('attr'),array('where'=>array("id='{$this->R['goodsid']}'")));
		$array=explode(';', $attr[0]->attr);
		$str='';
		foreach($array as $value){
			$str .=mb_substr($value, 0,mb_strpos($value, ':',0,'utf-8'),'utf-8').',';
		}
		$str=str_replace(array(',','　　'), array("','",''), substr($str, 0,-1));
		$this->tables=array(DB_FREFIX.'attr');
		$type=parent::select(array('way'),array('where'=>array("name IN ('$str')")));
		$str='';
		foreach($type as $value){
			$str .=$value->way.';';
		}
		return  substr($str, 0,'-1');
	}
	//查询一条数据
	public function findOne(){		
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		$oneAttr=parent::select(array('id','name','item','nav','way'),
				array('where'=>$where,'limit'=>'1'));
		$oneAttr[0]->nav=explode(',', $oneAttr[0]->nav);
		return $oneAttr[0];
	}
	
}