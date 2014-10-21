<?php
class CartAction extends Action{
	private $nav=null;
	private $cart=null;
	private $order=null;
	private $address=null;
	private $goods=null;
	private $delivery=null;
	public function __construct(){
		parent::__construct();
		if (!isset($_COOKIE['user'])) $this->redirect->success('购物前必须登录操作！','?a=user&m=login');
		$this->nav=new NavModel();
		$this->cart=new Cart();
		$this->order=new OrderModel();
		$this->address=new AddressModel();
		$this->goods=new GoodsModel();
		$this->delivery=new DeliveryModel();
	}
	public function index(){
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('frontProduct',$this->cart->getProduct());
		$this->tpl->display(FRONT_STYLE.'public/cart.tpl');
	}
	//从cookie添加商品
	public function addProduct(){
		if($this->cart->addProduct())$this->redirect->success('','?a=cart');
	}
	public function changeNum(){
		if($this->cart->changeNum())echo true;
	}
	public function deleteProduct(){
		if($this->cart->deleteProduct())$this->redirect->success('','?a=cart');
	}
	public function clearProduct(){
		if($this->cart->clearProduct())$this->redirect->success('','?a=cart');
	}
	//结算订单
	public function flow(){
		if($this->order->isCart()){
			if($this->goods->isFlow()){
				$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
				$this->tpl->assign('frontProduct',$this->cart->getProduct());
				$this->tpl->assign('frontUser',$this->address->findOne());
				$this->tpl->assign('frontDelivery',$this->delivery->findAllDelivery());
				$this->tpl->display(FRONT_STYLE.'public/flow.tpl');
			}
		}
	}
	//提交订单
	public function order(){
		$this->order->isCart();	
		if(isset($_POST['send'])){
				$id=$this->order->getNextId();
				if($this->order->order()){
					//扣除数据库中下单的商品
					$this->goods->setInventory();
					//清空购物车
					$this->cart->clearProduct();				
					if($_POST['pay']=='支付宝'){
						$this->redirect->success('','?a=user&m=alipay&id='.$id);
					}elseif($_POST['pay']=='银行转账'){
						$this->redirect->success('','?a=user&m=transfer&id='.$id);
					}elseif($_POST['pay']=='货到付款'){
						$this->redirect->success('','?a=user&m=cash&id='.$id);
					}				
				}
			}
		}
}