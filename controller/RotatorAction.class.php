<?php
class RotatorAction extends Action{
	private $nav;
	private $brand;
	private $attr;
	private $service;
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->page(10);
		$allRotator=$this->model->findAll();
		$this->tpl->assign('allRotator',$allRotator);
		$this->tpl->display(ADMIN_STYLE.'rotator/show.tpl');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('轮播器新增成功','?a=rotator');
			}else{
				$this->redirect->error('轮播器新增失败');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'rotator/add.tpl');
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
}