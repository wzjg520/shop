<?php
class AdminAction extends Action{
	private $manage=null;
	private $order=null;
	private $goods=null;
	public function __construct(){
		parent::__construct();
		$this->manage=new ManageModel();
		$this->order=new OrderModel();
		$this->goods=new GoodsModel();
	}
	public function index(){
		if(isset($_SESSION['admin'])){
			$this->tpl->assign('oneManage',$_SESSION['admin']);
			$this->tpl->display(ADMIN_STYLE.'public/admin.tpl');
		}else{
			
			$this->redirect->success('','?a=admin&m=runLogin');
		}
		
	}
	//登陆
	public function RunLogin(){
		if(isset($_POST['send'])){
			if($this->manage->login()){
				$longer=$this->manage->getLoginer();
				$_SESSION['admin']['name']=$longer[0]->user;
				$_SESSION['admin']['level']=$longer[0]->level_name;
				$this->manage->setLoginDetails();
				$this->redirect->success('登陆成功','?a=admin');			
			}			
		}
		$this->tpl->display(ADMIN_STYLE.'/public/login.tpl');
	}
	//退出登录
	public function loginOut(){
		if(isset($_SESSION['admin']))session_destroy();
		$this->redirect->success('','?a=admin');
	}
	//ajax验证登陆
	public function ajaxLogin(){
		echo $this->manage->isExist()=='true' ? 'false' : 'true';
 	}
 	//ajax验证密码和用户名是否匹配
 	public function ajaxPwd(){
 		echo $this->manage->ajaxPwd();
 	}
 	//ajax验证验证码是否正确
 	public function ajaxCode(){
 		echo $this->manage->ajaxCode();
 	}
	public function main(){
		$this->tpl->assign('server',$_SERVER);
		$this->tpl->assign('os',$_ENV["OS"]);
		$this->tpl->assign('allGoodsCount',$this->goods->getAllGoodsCount());
		//库存警告量
		$this->tpl->assign('warnInventoryCount',$this->goods->warnInventoryCount());
		//下架商品量
		$this->tpl->assign('downGoodsCount',$this->goods->downGoodsCount());
		//促销商品量
		$this->tpl->assign('promoteGoodsCount',$this->goods->promoteGoodsCount());
		//待发货订单
		$this->tpl->assign('count1',$this->order->getCount1());
		//未确认订单
		$this->tpl->assign('count2',$this->order->getCount2());
		//未支付
		$this->tpl->assign('count3',$this->order->getCount3());
		//申请退款
		$this->tpl->assign('count4',$this->order->getCount4());
		$this->tpl->display(ADMIN_STYLE.'public/main.tpl');
	}
	
}