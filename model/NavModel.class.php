<?php
class NavModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','name','info','price','sort','sid','brand');
		$this->tables=array(DB_FREFIX.'nav');
		$this->check=new NavCheck();
		//用于查找数据
		list(
				$this->R['id'],
				$this->R['navid'],
				$this->R['sid'],
				$this->R['name'],
				$this->R['attr'],
				$this->R['n'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_GET['navid']) ? $_GET['navid'] : null,
				isset($_GET['sid']) ? $_GET['sid'] : null,
				isset($_POST['name']) ? $_POST['name'] : null,
				isset($_GET['attr']) ? $_GET['attr'] : null,
				isset($_GET['n']) ? $_GET['n'] : null,
		));
	}
	
	//前台显示获得10条导航栏
	public function getFrontTenNav(){
		return parent::select(array('id','name','sort'),array('where'=>array("sid='0'"),'order'=>'sort ASC','limit'=>'10'));
	}
	//显示商品导航
	public function getAllGoodsNav(){
		$mainNavs=$childNavs=array();
		$allFrontNavs=parent::select(array('id','name','sid'),array('order'=>'sort ASC'));
		foreach($allFrontNavs as $key=>$value){
			$value->sid==0 ? $mainNavs[]=$value : $childNavs[]=$value;
		}
		foreach($mainNavs as $key=>$value){
			foreach($childNavs as $k=>$v){
				if($value->id==$v->sid){
					$value->child[$v->id]=$v->name;
				}
			}
		}
		return $mainNavs;		
	}
	//获得所有导航用于树形图显示
	public function getFrontNav(){
		$where=array("id='{$this->R['navid']}'");
		$allFrontNavs=array();
		if(!$this->check->checkOne($this, $where))$this->check->showError('./');
		$allFrontNavs=parent::select(array('id','name','sid'),array('order'=>'sort ASC'));
		$oneFrontNav=Tree::getInstance()->getTree($allFrontNavs, $this->R['navid']);
		if(isset($oneFrontNav[0]->child)){
			$this->tables=array(DB_FREFIX.'goods');
			foreach($oneFrontNav[0]->child as $key=>$value){
				$result=parent::select(array('COUNT(*) as count'),array('where'=>array("nav='{$value->id}'")));
				$oneFrontNav[0]->child[$key]->count=$result[0]->count;
			};
			$this->tables=array(DB_FREFIX.'nav');
		}		
		return $oneFrontNav;
	}
	//点击导航后显示的价格区间
	public function getFrontPrice(){
		$where=array("id='{$this->R['navid']}'");
		$allPrice=parent::select(array('id','price'),array('where'=>$where));
		$allPrice[0]->price=unserialize(htmlspecialchars_decode($allPrice[0]->price));
		if(!empty($allPrice[0]->price)){
			foreach($allPrice[0]->price as $key=>$value){
				unset($allPrice[0]->price[$key]);
				$k=str_replace('-', ',', $value);
				$allPrice[0]->price[$k]=$value;
			}
		};	
		return $allPrice[0];
	}
	//前台品牌筛选
	public function getFrontBrand(){
		$where=array("id='{$this->R['navid']}'");
		$nav=parent::select(array('id','sid','brand'),array('where'=>$where));
		$this->tables=array(DB_FREFIX.'brand');
		if($nav[0]->sid==0){			
			$allBrand=parent::select(array('id','name','type'),
					array('where'=>array("type='{$nav[0]->id}'")));
		}elseif(!empty($nav[0]->brand)){
			$id=unserialize(htmlspecialchars_decode($nav[0]->brand));
			$id=str_replace(',', "','", implode(',', $id));
			$where=array("id IN ('$id')");
			$allBrand=parent::select(array('name','id','type'),array('where'=>$where));
		}
		$allBrand=tool::setFormItem($allBrand, 'id', 'name');
		$this->tables=array(DB_FREFIX.'nav');		
		return $allBrand;
	}
	//前台属性筛选
	public function getFrontAttr(){
		//用于存放所有的符合查询条件的导航信息id
		$array=array();
		//获得全部的导航
		$allNav=parent::select(array('id','sid'));		
		foreach($allNav as $key=>$value){
			//通过主导航保存子导航id
			if($value->sid==$this->R['navid']){
				$array[]=$value->id;
			}else{
				//保存子导航id
				$array[]=$this->R['navid'];
			};
		}		
		$this->tables=array(DB_FREFIX.'attr');
		//查询属性信息
		$allAttr=parent::select(array('name','item','id','nav'));
		//用于保存最终生成的属性信息
		$frontAttr=array();
		foreach($allAttr as $key=>$value){
			//属性中的nav字段转为数组
			$value->nav=explode(',', $value->nav);
			//如果导航id与属性nav集合之间有交集则证明该导航有相关属性信息
			if(array_intersect($array, $value->nav)){
				//转属性为数组
				$value->item=explode('|', $value->item);
				//转url属性为数组				
				$getAttr=explode('-', $this->R['attr']);
				//用于存放每组属性与url的交集，属性每组只有一个位于url中，所以该数组永远只有一个元素
				$attrArray=array_intersect($getAttr, $value->item);
				//显示“全部”是否被选中，用flag做判定，如果URL中已有信息为该属性的则证明已有属性被选中，flag为TRUE
				$value->flag= $attrArray ? true :false;	
				//存放前台显示全部按钮的具体href信息 显示全部即为去掉当前属性中的相关信息
				$value->all= implode('-', array_diff($getAttr, $value->item)) ? '&attr='.implode('-', array_diff($getAttr, $value->item)) : null;				
				//该循环用于过滤url中由于多次点击而重复出现的attr属性
				foreach($value->item as $k=>$v){					
					if(!Validate::isNullArray($attrArray)){
						//该处$attrArray永远只有一个元素，因为attr中相关属性只能有一个
						foreach($attrArray as $val){
							$attrArray[0]=$val;
						}
						//如果url中已有相关属性值用最新的替换之，temp用于存放生成的url地址栏信息
						$value->temp[]=$temp=str_replace($attrArray[0], $v, $this->R['attr']);
					}elseif(!isset($this->R['attr']) || empty($this->R['attr'])){
						//初次加载URL中没有相关attr时
						$value->temp[]=$v;
					}elseif(Validate::isNullArray($attrArray)){
						//用于不同属性之间的链接
						$value->temp[]=$this->R['attr'].'-'.$v;
					}						
				}
				//将item与temp链接item为key，temp为值
				$value->attr=array_combine($value->item,$value->temp);			
				$frontAttr[]=$value;
			}	
		}
		return $frontAttr;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	//查询所有主类导航
	public function getAllMainNavs(){
		return parent::select(array('id','name','sort'),
							array('where'=>array('sid=0'),'order'=>' sort ASC')
								);
	}	
	//查询所有数据
	public function findAll(){
		$where=array("sid='{$this->R['sid']}'");
		return parent::select(array('id','name','info','sort','sid','brand'),array('where'=>$where,'order'=>' sort ASC','limit'=>$this->limit));
	}
	//新增一条数据
	public function add(){
		$where=array("name='{$this->R['name']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['sort']=$this->nextId();
		if(!isset($_POST['brand']))$_POST['brand']=array('0'=>'1');
		$addData['brand']=serialize($_POST['brand']);
		$addData['price']=serialize($_POST['price']);
		return parent::add($addData);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkUpdate($this))$this->check->showError();
		if(!$this->check->checkOne($this,$where))$this->check->showError();		
		$updateData=$this->getRequest()->filter($this->fields);
		if(!isset($_POST['brand']))$_POST['brand']=array('0'=>'1');
		$updateData['brand']=serialize($_POST['brand']);
		$updateData['price']=serialize($_POST['price']);
		return parent::update($where,$updateData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	//排序
	public function sort(){
		foreach($_POST['sort'] as $key=>$value){
			if(!is_numeric($value))continue;
			$where=array("id=$key");
			parent::update($where, array('sort'=>$value));
		}
		return true;
	}
	//获得一条数据既可以是主类的子类列表，也可以是自身
	public function findOne(){
		$whereChildList=array("id='{$this->R['sid']}'");
		$whereItem=array("id='{$this->R['id']}'");
		if(isset($_GET['sid']))return parent::select(array('id','name','info','sid','sort'),array('where'=>$whereChildList,'limit'=>'1'));
		if(!$this->check->checkOne($this, $whereItem))$this->check->showError();
		$nav=parent::select(array('id','name','price','info','sid','sort','brand'),
				array('where'=>$whereItem,'limit'=>'1'));
		$nav[0]->price=unserialize(htmlspecialchars_decode($nav[0]->price));
		return $nav;
	}
	//获得将要被修改的数据的brand
	public function getUpdateBrands(){
		$updateBrands=parent::select(array('brand'),
				array('where'=>array("id='{$this->R['id']}'")));	
		if($updateBrands[0]->brand !='0'){		
			return unserialize(htmlspecialchars_decode($updateBrands[0]->brand));
		};
	}
	//获得数据总量
	public function total(){
		$where=array("sid='{$this->R['sid']}'");
		return parent::total(array('where'=>$where));
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("name='{$this->R['name']}'");
		return $this->check->isExist($this,$where);
	}
	
}