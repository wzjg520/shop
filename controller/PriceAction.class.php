<?php
class PriceAction extends Action{
	private $brand=null;
	public function __construct(){
		parent::__construct();
	}
	//导航条列表显示
	public function index(){
		$this->page();
		$this->tpl->assign('allPrice',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'price/show.tpl');
	}
	//用于数据排序
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('排序失败');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('价格区间新增成功','?a=price');
			}else{
				$this->redirect->error('价格区间新增失败');
			};
		}
		$this->tpl->display(ADMIN_STYLE.'price/add.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('价格区间删除成功', PREV_URL) : $this->redirect->error('价格区间删除失败');
		}
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('价格区间修改成功', $_POST['prev_url']) : $this->redirect->error('价格区间修改失败');
		}
		if(isset($_GET['id'])){
			$this->tpl->assign('onePrice',$oneNav=$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'price/update.tpl');
		}
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
}