<?php
class Validate{
	static public function isLength($string,$length){
		return strlen($string)==$length ? true : false;
	}
	static public function isArray($array){
		return is_array($array) ? true : false;
	}
	static public function isObj($data){
		return is_object($data) ? true :false;
	}
	static public function isNullArray($array){
		return count($array)==0 ? true : false;
	}
	static public function isNumeric($data){
		return is_numeric($data) ? true : false;
	}
	static public function inArray($data,$arry){
		return in_array($data, $arry) ? true : false;
	}
	static public function isNullStr($data){
		return empty($data) ? true : false;
	}
	static public function checkStrLength($string,$length,$_flag,$chareset='utf-8'){
		if($_flag=='max'){
			if(mb_strlen(trim($string),$chareset)>$length){
				return true;
			}
		}elseif($_flag=='min'){
			if(mb_strlen(trim($string),$chareset)<$length){
				return true;
			}
		}elseif($_flag=='equals'){
			if(mb_strlen($string,$chareset) != $length)return true;
		}
		return false;
	}
	static public function checkStrEquals($string,$stringCompare){
		if(trim($string)==trim($stringCompare))return true;
		return false;
	}
	static public function checkEmail($data){
		if (preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/',$data)) return true;
		return false;
	}
	
	
	
	
	
	
	
	
	
}