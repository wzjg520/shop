<?php
class IndexAction extends Action{
	private $nav=null;
	private $goods=null;
	private $brand=null;
	private $cart=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->goods=new GoodsModel();
		$this->brand=new BrandModel();
		$this->cart=new Cart();
		$this->rotator=new RotatorModel();
	}
	public function index(){
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('hotSale',$this->goods->getHotSale());
		$this->tpl->assign('promoteGoods',$this->goods->getPromoteGoods());
		$this->tpl->assign('recommendGoods',$this->goods->getRecommendGoods());
		$this->tpl->assign('allBrand',$this->brand->getAll());
		$this->tpl->assign('rotator',$this->rotator->getAll());
		$this->tpl->display(FRONT_STYLE.'public/index.tpl');
	}
	
	//显示验证码
	public function validateCode(){
		$code=new ValidateCode();
		$code->showimg();
		$_SESSION['validateCode']=strtolower($code->getCode());
	}
	
}