<?php
class RotatorAction extends Action{

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
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('轮播器修改成功', $_POST['prev_url']) : $this->redirect->error('商品修改失败');
		if(isset($_GET['id'])){
			$one=$this->model->findOne();
			$this->tpl->assign('one',$one[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'rotator/update.tpl');
		}
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('轮播器删除成功', PREV_URL) : $this->redirect->error('商品删除失败');
		} 
	}

	//用于是否首页显示
	public function isShow(){
		if($this->model->isShow())$this->redirect->success('','?a=rotator');
	}

	//用于数据排序
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('排序失败');
	}
}