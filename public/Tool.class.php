<?php
class Tool{
	static public function getIp(){
		return $_SERVER['REMOTE_ADDR'];	
	}
	static public function getOrderNum(){
		return date('YmdHis'.mt_rand(1, 9999));
	}
	static public function getDate(){
		return date('Y:m:d H:i:s');
	}
	//表单提交转义
	static public function setRequest(){
		if(isset($_GET))$_GET=self::setFormString($_GET);
		if(isset($_POST))$_POST=self::setFormString($_POST);
	}
	//表单提交字符转义
	static public function setFormString($data){
		if(!get_magic_quotes_gpc()){
			if(Validate::isArray($data)){
				foreach($data as $key=>$value){
					$data[$key]=self::setFormString($value);
				}
			}else {
				return addslashes($data);
			}
		}
		return $data;
	}
	//html字符串转换
	static public function setHtmlString($data){
			if(is_array($data)){
				foreach($data as $key=>$value){
					$data[$key]=self::setHtmlString($value);
				}
			}elseif(is_object($data)){
				foreach($data as $key=>$value){
					$data->$key=self::setHtmlString($value);
				}
			}else{
				return htmlspecialchars($data);
			}
		return $data;
	}
	//表单选项转换
	static public function setFormItem($data,$key,$value){
		$item=array();
		if(Validate::isArray($data)){
			foreach ($data as $v){
				$item[$v->$key]=$v->$value;
			}
		}
		
		return $item;
	}
	//过滤数据库数据用于转换json格式
	static public function parstr($str) {
		$search = array ('/\n/','/\'/','/\"/');
		$replace = array ("<br/>","&apos;","&quot;");
		return $text = preg_replace ( $search, $replace, $str );
	}
	//获得当前的网页地址
	static public function getUrl($attr=false,$brand=false,$price=false){
		$url=$_SERVER['REQUEST_URI'];
		$par=parse_url($url);
		if(isset($par['query'])){
			parse_str($par['query'],$query);
			if($attr){
				unset($query['attr']);
			}
			if($brand){
				unset($query['brand']);
			}
			if($price){
				unset($query['price']);
			}
			$url=$par['path'].'?'.http_build_query($query);
		}
		return $url;
	}
	static public function arrayFilter(array $array, $str) {
		foreach($array as $key=>$value){
			if($key == $str){
				unset($array[$key]);
			}
		}
		return $array;
	}
	//获取域名，如果有目录就是域名+目录
	static function getDoMain() {
		$_url = 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
		if (strpos($_url, 'index.php')) {
			$_url = substr($_url, 0, strpos($_url, 'index.php'));
		} else {
			$_url = substr($_url, 0, strpos($_url, '?'));
		}
		return $_url;
	}
	
}