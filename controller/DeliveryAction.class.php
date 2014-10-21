<?php
class DeliveryAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	//导航条列表显示
	public function index(){
		$this->page();
		$this->tpl->assign('allDelivery',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'delivery/show.tpl');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('物流公司新增成功','?a=delivery');
			}else{
				$this->redirect->error('物流公司新增失败');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'delivery/add.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('物流配送删除成功', PREV_URL) : $this->redirect->error('物流配送删除失败');
		}
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('物流配送修改成功', $_POST['prev_url']) : $this->redirect->error('物流配送修改失败');
		}
		if(isset($_GET['id'])){
			$this->tpl->assign('oneDelivery',$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'delivery/update.tpl');
		}
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
}