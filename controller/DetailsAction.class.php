<?php
class DetailsAction extends Action{
	private $nav=null;
	private $attr=null;
	private $goods=null;
	private $commend=null;
	private $record=null;
	public function __construct(){
		parent::__construct();
		$this->nav=new NavModel();
		$this->attr=new AttrModel();
		$this->goods=new GoodsModel();
		$this->commend=new CommendModel();
		$this->record=new RecordModel();
		$this->cart=new cart();
		
	}
	public function index(){
		parent::page('20',$this->commend);
		parent::page('20',$this->record,'recordPage');
		$this->tpl->assign('oneGoods',$this->goods->getDetailsGoods());
		$this->tpl->assign('oneFrontNav',$this->nav->getFrontNav());
		$this->tpl->assign('attrType',$this->attr->getAttrType());
		$this->tpl->assign('allRecord',$this->record->getDetailsRecord());
		$this->tpl->assign('frontTenNav',$this->nav->getFrontTenNav());
		$this->tpl->assign('domain',Tool::getDoMain());
		$this->tpl->assign('hotSale',$this->goods->getHotSale());
		$this->tpl->assign('history',$this->goods->getHistory());
		$this->tpl->assign('allCommend',$this->commend->findAll());
		$this->tpl->assign('cartGoodsCount',$this->cart->getCount());
		$this->tpl->display(FRONT_STYLE.'public/details.tpl');
	}
}