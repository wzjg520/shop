<?php
class BrandAction extends Action{
	private $nav=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
	}
	public function index(){
		$this->page();
		$allFrand=$this->model->findAll();
		$allMainNavs=$this->nav->getAllMainNavs();
		foreach($allFrand as $key=>$value){
			foreach($allMainNavs  as $k=>$v){
				if($value->type==$v->id){
					$value->type=$v->name;
				}
			}
		}
		foreach($allFrand as $value){
			if($value->type=='0')$value->type='特殊类型';
		}
		$this->tpl->assign('allFrand',$allFrand);
		$this->tpl->display(ADMIN_STYLE.'brand/show.tpl');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('品牌新增成功','?a=brand');
			}else{
				$this->redirect->error('品牌新增失败');
			};
		}
		$this->tpl->assign('allMainNavs',Tool::setFormItem($this->nav->getAllMainNavs(), 'id', 'name'));
		$this->tpl->display(ADMIN_STYLE.'brand/add.tpl');
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('品牌修改成功', $_POST['prev_url']) : $this->redirect->error('品牌修改失败');
		if(isset($_GET['id'])){
			$oneBrand=$this->model->findOne();
			$this->tpl->assign('oneBrand',$oneBrand[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('allMainNavs',Tool::setFormItem($this->nav->getAllMainNavs(), 'id', 'name'));
			$this->tpl->display(ADMIN_STYLE.'brand/update.tpl');
		}
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('品牌删除成功', PREV_URL) : $this->redirect->error('品牌删除失败');
		}
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
}