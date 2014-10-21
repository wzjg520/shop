<?php
class ServiceAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	//售后服务列表显示
	public function index(){
		$this->page();
		$this->tpl->assign('allService',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'service/show.tpl');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('售后服务新增成功','?a=service');
			}else{
				$this->redirect->error('售后服务新增失败');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'service/add.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('售后服务删除成功', PREV_URL) : $this->redirect->error('售后服务删除失败,请取消默认首选');
		}
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('售后服务修改成功', $_POST['prev_url']) : $this->redirect->error('售后服务修改失败');
		}
		if(isset($_GET['id'])){
			$this->tpl->assign('oneService',$oneService=$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'service/update.tpl');
		}
	}
	//设置默认首选
	public function setFirst(){
		if(isset($_GET['id'])){
			$this->model->setFirst() ? $this->redirect->success('',PREV_URL) : $this->redirect->error('执行出错');
		}
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
}