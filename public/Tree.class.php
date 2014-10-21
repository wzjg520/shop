<?php
class Tree{
	static private $instance=null;
	static public function getInstance(){
		if(!(self::$instance instanceof self)){
			self::$instance=new self();	
		}
		return self::$instance;
	} 
	private function __clone(){}
	private function __construct(){}
	public function getTree($all,$id){
		
		$one=$main=array();
		foreach($all as $key=>$value){
			$value->sid==0 ? $main[]=$value : $child[]=$value;
			if($value->id==$id){
				$one[0]=$value;
				$one[0]->sait[$value->id]=$value->name;
			}
			if($value->sid==$id){
				$one[0]->child[]=$value;
			}
		}
		if($one[0]->sid != 0){
			foreach($main as $key=>$value){
				if($value->id==$one[0]->sid){
					$child=$one;
					$one[0]=$value;
					$one[0]->sait[$value->id]=$value->name;
					$one[0]->sait[$child[0]->id]=$child[0]->name;
				}
			}
			foreach ($child as $key=>$value){
				if($value->sid==$one[0]->id)$one[0]->child[]=$value;
			}
		}
		return $one;
	}
}