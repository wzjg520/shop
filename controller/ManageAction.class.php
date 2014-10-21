<?php
class ManageAction extends Action{
	private $level;
	public function __construct(){
		parent::__construct();
		$this->level=new LevelModel();
	}
	public function index(){
		$this->page();
		$allManage=$this->model->findAll();
		$this->tpl->assign('allManage',$allManage);
		$this->tpl->display(ADMIN_STYLE.'manage/show.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('管理员删除成功', PREV_URL) : $this->redirect->error('管理员删除失败');
		}
	} 
	public function runAdd(){		
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('管理员新增成功','?a=manage');
			}else{
				$this->redirect->error('管理员新增失败');
			};
		}
		$this->tpl->assign('allLevel',Tool::setFormItem($this->level->findAll(), 'id', 'level_name'));
		$this->tpl->display(ADMIN_STYLE.'manage/add.tpl');
	}
	public function runUpdate(){	
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('管理员修改成功', $_POST['url']) : $this->redirect->error('管理员修改失败');
		if(isset($_GET['id'])){
			$this->tpl->assign('allLevel',Tool::setFormItem($this->level->findAll(), 'id', 'level_name'));
			$oneManage=$this->model->findOne();
			$this->tpl->assign('oneManage',$oneManage[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'manage/update.tpl');
		}
		
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
	
}