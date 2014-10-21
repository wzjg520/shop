<?php
class Action {
	protected $tpl=null;
	protected $model=null;
	protected $redirect=null;
	public function __construct(){
		$this->tpl=TPL::getInstance();
		$this->model=Factory::setModel();
		$this->redirect=Redirect::getInstance($this->tpl);
	}
	//运行控制器里面的方法
	public function run(){
		$m=isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $m) ? eval('$this->'.$m.'();') : $this->index();
	}
	public function page($pagesize=PAGE_SIZE,$model=null,$pageset='page'){
		$this->model=empty($model) ? $this->model : $model;
		$page=new Page($this->model->total(),$pagesize,3);		
		$this->model->setLimit($page->getLimit());
		$this->tpl->assign($pageset,$page->pageShow());
		$this->tpl->assign('num',($page->getPage()-1)*$pagesize);
	}
	
}