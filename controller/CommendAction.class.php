<?php
class CommendAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->page();
		$allCommned=$this->model->getAll();
		$this->tpl->assign('allCommend',$allCommned);
		$this->tpl->display(ADMIN_STYLE.'commend/show.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('评价删除成功', PREV_URL) : $this->redirect->error('评价删除失败');
		}
	} 
	public function runUpdate(){	
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('评价修改成功', $_POST['url']) : $this->redirect->error('评价修改失败');
		if(isset($_GET['id'])){
			$oneCommend=$this->model->getOne();
			$this->tpl->assign('oneCommend',$oneCommend[0]);
			$this->tpl->assign('star',array(
					'5'=>'★★★★★',
					'4'=>'★★★★',
					'3'=>'★★★',
					'2'=>'★★',
					'1'=>'★'
			));
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'commend/update.tpl');
		}
		
	}
	
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
	
}