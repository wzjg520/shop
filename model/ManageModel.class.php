<?php
class ManageModel extends Model{
	public function __construct(){
		parent::__construct();
		$this->fields=array('id','user','pwd','level','login_count','last_time','reg_time','last_ip');
		$this->tables=array(DB_FREFIX.'manage');
		$this->check=new ManageCheck();
		//用于查找数据		
		list(
				$this->R['id'],
				$this->R['user'],
				$this->R['pwd'],
		)=$this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id']: null,
				isset($_POST['user']) ? $_POST['user'] : null,
				isset($_POST['pwd']) ? $_POST['pwd'] : null,
		));
	}
	public function add(){
		$where=array("user='{$this->R['user']}'");
		if(!$this->check->checkAdd($this,$where))$this->check->showError();
		$addData=$this->getRequest()->filter($this->fields);
		$addData['pwd']=sha1($addData['pwd']);
		$addData['last_ip']=Tool::getIp();
		$addData['last_time']=Tool::getDate();
		$addData['reg_time']=Tool::getDate();
		return parent::add($addData);
	}
	//删除一条数据
	public function delete(){
		$where=array("id='{$this->R['id']}'");
		return parent::delete($where);
	}
	//修改一条数据
	public function update(){
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		if(!$this->check->checkUpdate($this))$this->check->showError();
		$updateData=$this->getRequest()->filter($this->fields);
		$updateData['pwd']=sha1($updateData['pwd']);
		return parent::update($where,$updateData);
	}
	//查询所有数据
	public function findAll(){
		$this->tables=array(DB_FREFIX.'manage a',DB_FREFIX.'level b');
		return parent::select(array('a.id','a.user','a.level','a.login_count','a.last_time','a.last_ip','b.level_name'),
				array('where'=>array('a.level=b.id'),'order'=>' a.reg_time DESC','limit'=>$this->limit));
	}
	//查询一条数据
	public function findOne(){		
		$where=array("id='{$this->R['id']}'");
		if(!$this->check->checkOne($this,$where))$this->check->showError();
		return parent::select(array('id','user','level'),array('where'=>$where,'limit'=>'1'));
	}
	//验证登陆数据
	public function login(){
		$where=array("user='{$this->R['user']}'","pwd='".sha1($this->R['pwd'])."'");
		if(!$this->check->checkLogin($this, $where)){
			$this->check->showError();
		}else{
			return true;
		};
	}
	//获得登陆的管理员
	public function getLoginer(){
		$where=array("a.user='{$this->R['user']}'",'a.level=b.id',);
		$this->tables=array(DB_FREFIX.'manage a',DB_FREFIX.'level b');
		return parent::select(array('a.id','a.user','a.level','b.level_name'),
								array('where'=>$where,'limit'=>'1'));
	}
	//设置登录信息
	public function setLoginDetails() {
		$where = array("user='{$this->R['user']}'");
		$updateData['login_count'] = array('login_count+1');
		$updateData['last_ip'] = Tool::getIP();
		$updateData['last_time'] = Tool::getDate();
		parent::update($where, $updateData);
	}
	//ajax检查数据是否存在
	public function isExist(){
		$where=array("user='{$this->R['user']}'");
		return $this->check->isExist($this,$where);
	}
	//验证登陆密码是否正确
	public function ajaxPwd(){
		$where=array("user='{$this->R['user']}'","pwd='".sha1($this->R['pwd'])."'");
		return $this->check->checkPwd($this,$where);
	}
	//验证验证码是否正确
	public function ajaxCode(){
		return $this->check->checkCode($_POST);
	}
	//获取数据总条数
	public function total(){
		return parent::total();
	}
}