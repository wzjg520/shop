<?php
class TPL extends Smarty {
	//用于存放实例化后的对象
	private static $instance;
	//公共静态方法用于获取实例化之后的对象
	static public function getInstance() {
		if (! (self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	//是由克隆
	public function __clone () {
	}
	//私有构造方法
	public function __construct(){
		parent::__construct();
		$this->setConfigs();
	}
	//配置函数
	private function setConfigs(){
		$this->setCacheDir(SMARTY_SETCACHEDIR);
		$this->setTemplateDir(SMARTY_SETTEMPLATEDIR);
		$this->setCompileDir(SMARTY_SETCOMPILEDIR);
		$this->setConfigDir(SMARTY_SETCONFIGDIR);
		$this->caching=SMARTY_CACHING;
		//缓存的生命周期
		$this->cache_lifetime=SMARTY_CACHE_LIFETIME;
	}
	
}




?>