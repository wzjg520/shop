<?php
class GoodsAction extends Action{
	private $nav;
	private $brand;
	private $attr;
	private $service;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->brand=new BrandModel();
		$this->attr=new AttrModel();
		$this->service=new ServiceModel();
	}
	public function index(){
		$this->page(10);
		$allGoods=$this->model->findAll();
		$this->tpl->assign('allGoods',$allGoods);
		$this->tpl->display(ADMIN_STYLE.'goods/show.tpl');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('商品新增成功','?a=goods');
			}else{
				$this->redirect->error('商品新增失败');
			};
		}
		$this->tpl->assign('allService',$this->service->getAllService());
		$this->tpl->assign('selected',$this->service->getFirst());
		$this->tpl->assign('goodsNav',$this->nav->getAllGoodsNav());
		$this->tpl->display(ADMIN_STYLE.'goods/add.tpl');
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('商品修改成功', $_POST['prev_url']) : $this->redirect->error('商品修改失败');
		if(isset($_GET['id'])){
			$oneGoods=$this->model->findOne();
			$this->tpl->assign('oneGoods',$oneGoods[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('goodsNav',$this->nav->getAllGoodsNav());
			$this->tpl->assign('bool',array(1=>'是',0=>'否'));
			$this->tpl->assign('allService',$this->service->getAllService());
			$this->tpl->display(ADMIN_STYLE.'goods/update.tpl');
		}
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('商品删除成功', PREV_URL) : $this->redirect->error('商品删除失败');
		} 
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	//用于ajax检测数据是否存在update
	public function isUpExist(){
		echo $this->model->isUpExist();
	}
	//用于ajax跟随类型刷新品牌
	public function ajaxBrands(){
		$id=$this->nav->getUpdateBrands();
		if(!empty($id)){
			$in=implode("','",$id);
			echo $this->brand->ajaxBrands($in);
		}			
	}
	//用于ajax获得商品属性
	public function ajaxGetAttr(){
		echo $this->attr->getGoodsAttr();
	}
	//用于商品上下架
	public function isUP(){
		if($this->model->isUp())$this->redirect->success('','?a=goods');
	}
	//用于商品是否促销
	public function isPromote(){
		if($this->model->isPromote())$this->redirect->success('','?a=goods');
	}
	//用于商品是否推荐
	public function isRecommend(){
		if($this->model->isRecommend())$this->redirect->success('','?a=goods');
	}
}