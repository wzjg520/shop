<?php
class ListAction extends Action{
	private $nav=null;
	private $goods=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->goods=new GoodsModel();
		$this->cart=new cart();
	}
	public function index($array=null){
		$this->page(15,$this->goods);
		$this->tpl->assign('listGoods',$this->goods->getListGoods());	
		$this->tpl->assign('oneFrontNav',$this->nav->getFrontNav());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('frontPrice',$this->nav->getFrontPrice());
		$this->tpl->assign('frontBrand',$this->nav->getFrontBrand());
		$this->tpl->assign('frontAttr',$this->nav->getFrontAttr());
		$this->tpl->assign('history',$this->goods->getHistory());
		$this->tpl->assign('hotSale',$this->goods->getHotSale());
		$this->tpl->assign('url', Tool::getUrl(true));
		$this->tpl->assign('brandUrl', Tool::getUrl(false,true,false));
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->assign('priceUrl', Tool::getUrl(false,false,true));
		$this->tpl->display(FRONT_STYLE.'public/list.tpl');
	}
	public function searchGoods(){
		$this->page(15,$this->goods);
		$this->tpl->assign('listGoods',$this->goods->searchGoods());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('history',$this->goods->getHistory());
		$this->tpl->assign('hotSale',$this->goods->getHotSale());		
		$this->tpl->display(FRONT_STYLE.'public/search.tpl');
		exit;
		
	}
	public function clearHistory(){
		$this->goods->clearHistory();
		$this->redirect->success('',PREV_URL);
	}	
}