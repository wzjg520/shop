<?php
class NavAction extends Action{
	private $brand=null;
	private $price=null;
	public function __construct(){
		parent::__construct();
		$this->brand=new BrandModel();
		$this->price=new PriceModel();
	}
	//导航条列表显示
	public function index(){
		$this->page();
		$flag=false;
		if(isset($_GET['sid'])){
			$this->tpl->assign('oneNav',$this->model->findOne());
			$this->tpl->assign('prev_url',PREV_URL);
			$flag=true;			
		}
		$this->tpl->assign('flag',$flag);
		$allNav=$this->model->findAll();
		if($flag){
			$allBrands=$this->brand->getAll();			
			foreach($allNav as $key=>$value){
				if(!empty($value->brand)){
					$value->brand=unserialize(htmlspecialchars_decode($value->brand));
				};
				if(Validate::isArray($value->brand)){
					$temp=$value->brand;
					$value->brand='';
					foreach($temp as $val){
						foreach($allBrands as $k=>$v){
							if($val==$v->id)$value->brand[$k]=$v->name;	
						}
					}
				}
				$value->brand= Validate::isArray($value->brand) ? implode(',', $value->brand) : '其他品牌';
			}		
		}
		
		$this->tpl->assign('allNav',$allNav);
		$this->tpl->display(ADMIN_STYLE.'nav/show.tpl');
	}
	//用于数据排序
	public function runSort(){
		if(isset($_POST['send']))$this->model->sort() ? $this->redirect->success(null,PREV_URL) : $this->redirect->error('排序失败');
	}
	//新增一条数据
	public function runAdd(){
		if(isset($_POST['send'])){
			if($this->model->add()){
				$this->redirect->success('导航新增成功',$_POST['prev_url']);
			}else{
				$this->redirect->error('导航新增失败');
			};
		}
		$this->tpl->assign('allPrice',$this->price->getAllNavPrice());		
		$this->tpl->assign('prev_url',PREV_URL);
		isset($_GET['id']) ? $oneNav=$this->model->findOne() : $oneNav= '';
		$allBrands=Tool::setFormItem($this->brand->getAllBrands(), 'id', 'name');
		$allBrands['1']='其他品牌';
		$this->tpl->assign('allBrands',$allBrands);
		$this->tpl->assign('oneNav',$oneNav);
		$this->tpl->display(ADMIN_STYLE.'nav/add.tpl');
	}
	//删除一条数据
	public function runDelete(){
		if(isset($_GET['id']) && $_GET['m']=='runDelete'){
			$this->model->delete() ? $this->redirect->success('导航删除成功', PREV_URL) : $this->redirect->error('导航删除失败');
		}
	}
	//修改一条数据
	public function runUpdate(){
		if(isset($_POST['send'])){
			$this->model->update() ? $this->redirect->success('导航修改成功', $_POST['url']) : $this->redirect->error('导航修改失败');
		}
		if(isset($_GET['id'])){
			$oneNav=$this->model->findOne();
			$allBrands=Tool::setFormItem($this->brand->getAllUpdateBrands(), 'id', 'name');
			$allBrands['1']='其他品牌';
			$this->tpl->assign('allPrice',$this->price->getAllNavPrice());
			$this->tpl->assign('allBrands',$allBrands);
			$this->tpl->assign('updateBrands',$this->model->getUpdateBrands());
			$this->tpl->assign('oneNav',$oneNav[0]);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'nav/update.tpl');
		}
	}
	//用于ajax检测数据是否存在
	public function isExist(){
		echo $this->model->isExist();
	}
	
}