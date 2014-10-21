<?php
class AttrAction extends Action{
	private $nav=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
	}
	public function index(){
		$this->tpl->assign('allAttr',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'attr/show.tpl');
	}
	public function runAdd(){
		if($_POST['send']){
			$this->model->add() ? $this->redirect->success('添加属性成功','?a=attr') : $this->redirect->error('添加属性失败');
		}
		$this->tpl->assign('way',array(0=>'单选',1=>'复选'));
		$this->tpl->assign('allNav',$this->nav->getAllGoodsNav());
		$this->tpl->display(ADMIN_STYLE.'attr/add.tpl');
	}	
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('属性删除成功', PREV_URL) : $this->redirect->error('属性删除失败');
		}
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send']))$this->model->update() ? $this->redirect->success('修改成功',$_POST['prev_url']) : $this->redirect->error('修改失败');
		if(isset($_GET['id']) && $_GET['m']=='runUpdate'){
			$this->tpl->assign('oneAttr',$this->model->findOne());
			$this->tpl->assign('way',array(0=>'单选',1=>'复选'));
			$this->tpl->assign('allNav',$this->nav->getAllGoodsNav());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'attr/update.tpl');
		}
		
	}
	//ajax验证属性名是否被占用
	public function isExist(){
		echo $this->model->isExist();
	}	
}