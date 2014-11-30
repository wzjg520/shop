<?php
class UserAction extends Action{
	private $nav;
	private $address;
	private $order;
	private $commend;
	private $collect;
	private $goods;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->address=new AddressModel();
		$this->order=new OrderModel();
		$this->goods=new GoodsModel();
		$this->commend=new CommendModel();
		$this->collect=new CollectModel();
		$this->cart=new cart();
	}
	public function index(){
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('user',$this->model->findOne()[0]);
		$this->tpl->display(FRONT_STYLE.'public/user.tpl');
	}
	public function reg(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('会员注册成功','?a=user&m=login',1);
			}else{
				$this->redirect->error('会员注册失败',1);
			};
		}
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->display(FRONT_STYLE.'public/reg.tpl');
	}

	//后台
	public function update(){
		if(isset($_POST['send'])){
			if($this->model->update()){
				$this->redirect->success('会员修改成功','?a=user',1);
			}else{
				$this->redirect->error('会员注册失败',1);
			};
		}
	}

	//前台
	public function update2(){
		if(isset($_POST['send'])){
			if($this->model->update2()){
				$this->redirect->success('会员修改成功','?a=user',1);
			}else{
				$this->redirect->error('会员注册失败',1);
			};
		}
	}
	public function login(){
		if(isset($_POST['send'])){
			if($this->model->login()){
				$longer=$this->model->getLoginer();
				$this->model->setLoginDetails($longer[0]->id);
				$this->redirect->success('登陆成功','?a=index',1);
			}
		}
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->display(FRONT_STYLE.'public/login.tpl');
	}
	public function loginOut(){
		$this->model->loginOut() ? $this->redirect->success('','./') : $this->redirect->error('退出失败！',1);
	}
	//显示收藏商品
	public function mycollect(){
		$this->page(12,$this->collect);
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('allCollect',$this->collect->getAllCollect());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_mycollect.tpl');
	}
	//添加收藏并跳转到收藏页
	public function addCollect(){
		if(isset($_COOKIE['user'])){
			$this->collect->runAdd() ? $this->redirect->success('','?a=user&m=mycollect',1) : $this->redirect->error('收藏失败',1);
		}else{
			$this->redirect->error('请登录后再操作<a href="?a=user&m=login">[登陆]</a>',1);
		}	
	}
	//取消收藏
	public function deleteCollect(){
		if(isset($_GET['id']))$this->collect->delete() ? $this->redirect->success('','?a=user&m=mycollect',1) : $this->redirect->error('操作失败',1);
	}
	//显示并添加收货人地址
	public function address(){		
		if(isset($_POST['send']) && !isset($_GET['id']))$this->address->add() ? $this->redirect->success('新增成功','?a=user&m=address',1) : $this->redirect->error('添加失败',1);
		if(isset($_POST['send']) && isset($_GET['id'])) $this->address->update() ? $this->redirect->success('修改成功','?a=user&m=address',1) : $this->redirect->error('修改失败',1);
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('frontUser',$this->address->findOne());
		$this->tpl->assign('allAddress',$this->address->findAll());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_address.tpl');
	}
	//设置收货人为首选
	public function selected(){
		if(isset($_GET['id']))$this->address->selected() ? $this->redirect->success('','?a=user&m=address') : $this->redirect->error('操作失败',1);
	}
	//删除收货人
	public function runDelete(){
		if(isset($_GET['id']))$this->address->delete() ? $this->redirect->success('','?a=user&m=address') : $this->redirect->error('操作失败',1);
	}
	//显示订单列表
	public function order(){
		$this->page(10,$this->order);
		$this->tpl->assign('allOrder',$this->order->findAllFrontOrder());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_order.tpl');
		
	}
	//网银付款
	public function alipay(){
		if(isset($_GET['id'])){
			
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_alipay.tpl');	
		}
	}
	//银行转账
	public function transfer(){
		if(isset($_GET['id'])){
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_transfer.tpl');
		}
	}
	//货到付款
	public function cash(){
		if(isset($_GET['id'])){
			$this->tpl->assign('oneOrder',$this->order->findOne());
			$this->tpl->assign('history',$this->goods->getHistory());
			$this->tpl->assign('hotSale',$this->goods->getHotSale());
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_cash.tpl');
		}
	}
	//显示订单详情
	public function order_details(){
		if(!$this->order->findOne())exit('非法操作');
		$this->tpl->assign('oneOrder',$this->order->findOne());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_order_details.tpl');
	}
	//商品评论
	public function commend(){
		if(isset($_POST['send']))$this->commend->add() ? $this->redirect->success('',PREV_URL) : $this->redirect->error('发表评论失败',1);
		if(isset($_GET['goods_id']) && isset($_GET['order_id'])){
			$this->order->isCommendOrder();
			$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
			$this->tpl->assign('oneGoods',$this->order->getCommendGoods());
			$this->tpl->assign('oneCommend',$this->commend->findOne());
			$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
			$this->tpl->display(FRONT_STYLE.'public/user_commend.tpl');
		}
	}
	//显示我的评论
	public function mycommend(){
		$this->page('20',$this->commend);
		$this->tpl->assign('allCommend',$this->commend->getAllUserCommend());
		//var_dump($this->commend->getAllUserCommend());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/user_mycommend.tpl');
	}
	//取消订单
	public function cancel(){
		if(isset($_GET['id'])){
			$this->order->cancel() ? $this->redirect->success('','?a=user&m=order') : $this->redirect->error('执行出错！',1);
		} 
	}
	//申请退款
	public function refund(){
		if(isset($_GET['id'])){
			$this->order->refund() ? $this->redirect->success('',PREV_URL) : $this->redirect->error('执行出错！',1);
		}
	}
	//删除订单
	public function deleteOrder(){
		if(isset($_GET['id'])){
			$this->order->delete() ? $this->redirect->success('','?a=user&m=order') : $this->redirect->error('请确认订单是否已取消！',1);
		}
	}
	//ajax验证验证码是否正确
	public function ajaxCode(){
		echo $this->model->ajaxCode();
	}
	//用于ajax检测数据是否存在
	
	public function isExist(){
		echo $this->model->isExist();
	}

	//修改ajax验证是否存在
	public function isUpdateExist(){
		echo $this->model->isUpdateExist();
	}
	
	//ajax验证登陆
	public function ajaxLogin(){
		echo $this->model->isExist()=='true' ? 'false' : 'true';
	}
	
}