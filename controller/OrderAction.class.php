<?php
class OrderAction extends Action{
	private $delivery=null;
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		parent::page();
		$this->tpl->assign('allOrder',$this->model->findAll());
		$this->tpl->display(ADMIN_STYLE.'order/show.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('订单删除成功', PREV_URL) : $this->redirect->error('订单删除失败，请确认订单是否是取消状态！');
		}
	}
	//取消24小时未操作的订单
	public function clear(){
		$this->model->clear() ? $this->redirect->success('订单清理成功', PREV_URL) : $this->redirect->error('订单清理失败');
		
	}
	//小改一条数据
	public function runUpdate(){
		$this->delivery=new DeliveryModel();
		if(isset($_POST['send'])) $this->model->update() ? $this->redirect->success('订单修改成功', $_POST['prev_url']) : $this->redirect->error('订单修改失败');
		if(isset($_GET['id'])){
			$oneOrder=$this->model->findOne();
			$this->tpl->assign('oneOrder',$oneOrder);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->assign('allDelivery',$this->delivery->getOrderDelivery());
			$this->tpl->display(ADMIN_STYLE.'order/update.tpl');
		}
	}
	
}