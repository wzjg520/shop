<?php
class CommendModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','user','goods_id','order_id','attr','star','content','date','flag','re_date','re_content');
		$this->tables=array(DB_FREFIX.'commend');
		$this->check=new CommendCheck();
		//用于查找数据		
		list(
				$this->R['id'],
				$this->R['order_id'],
				$this->R['goods_id'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id']: null,
				isset($_GET['order_id']) ? $_GET['order_id']: null,
				isset($_GET['goodsid']) ? $_GET['goodsid']: null,
		));
	}
	public function add(){
		$where=array("order_id='{$this->R['order_id']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['date']=Tool::getDate();
		$addData['attr']=mb_substr($_POST['attr'], 0,-1,'utf-8');
		$addData['user']=$_COOKIE['user'];
		return parent::add($addData);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate())$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		$updateData['re_date']=Tool::getDate();
		return parent::update($where,$updateData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	//获得一条评论用于前台显示
	public function findOne(){
		$where=array("user='{$_COOKIE['user']}'","order_id='{$this->R['order_id']}'");
		return parent::select(array('id','user','attr','goods_id','star','order_id','content','re_content','date'),
				array('where'=>$where,'limit'=>'1'));
	}
	//获得一条评论用于后台显示
	public function getOne(){
		$this->tables=array(DB_FREFIX.'commend c',DB_FREFIX.'goods g');
		$oneCommend=parent::select(array('c.id','c.user','c.attr','c.goods_id','c.star','c.order_id','c.content','c.re_content','c.date','c.flag','g.name','g.thumb_small','g.id as goodsid','g.nav'),
				array('where'=>array("c.goods_id=g.id","c.id='{$this->R['id']}'"),'limit'=>'1'));
		$this->tables=array(DB_FREFIX.'commend');
		return $oneCommend;
	}
	
	// 查询所有数据用于后台显示
	public function getAll(){
		$this->tables=array(DB_FREFIX.'commend c',DB_FREFIX.'goods g');
		$allCommend=parent::select(array('c.id','c.user','c.attr','c.goods_id','c.star','c.order_id','c.content','c.re_content','c.date','c.re_date','g.name'),
				array('where'=>array("c.goods_id=g.id"),'order'=>' date DESC'));
		$this->tables=array(DB_FREFIX.'commend');
		return $allCommend;		
	}
	//获得所有用户评论
	public function getAllUserCommend(){
		$this->tables=array(DB_FREFIX.'commend c',DB_FREFIX.'goods g');
		$allCommend=parent::select(array('c.id','c.user','c.attr','c.goods_id','c.star','c.order_id','c.content','c.re_content','c.date','c.re_date','g.name','g.thumb_small','g.id AS goodsid','g.nav'),
				array('where'=>array("c.goods_id=g.id","c.user='{$_COOKIE['user']}'"),'order'=>' date DESC','limit'=>$this->limit));
		$this->tables=array(DB_FREFIX.'commend');
		return $allCommend;
	}
	//查询所有数据
	public function findAll(){
		return parent::select(array('id','user','attr','goods_id','star','order_id','content','re_content','date','re_date'),
				array('where'=>array("goods_id='{$this->R['goods_id']}'","flag='1'"),'order'=>' date DESC','limit'=>$this->limit));
	}
	//获取数据总条数
	public function total(){		
		if($this->R['goods_id']){
			$where=array("goods_id='{$this->R['goods_id']}'");
		}else{
			$where=array("user='{$_COOKIE['user']}'");
		}
		return parent::total(array('where'=>$where));
	}
}