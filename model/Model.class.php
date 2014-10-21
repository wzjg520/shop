<?php
class Model extends DB{
	protected $db;
	protected $fields;
	protected $tables=array();
	protected $check=null;
	protected $limit='';
	protected $R=array();									//用于存放索引
	protected function __construct(){
		$this->db=parent::getInstance();
	}
	//获得request对象
	public function getRequest(){
		return Request::getInstance($this, $this->check);
	}
	protected function add($addData){
		return $this->db->add($addData,$this->tables);
	}
	protected function delete(Array $deleteData){
		return $this->db->delete($deleteData,$this->tables);
	}
	protected function update(Array $where,Array $updateData){
		return $this->db->update($where,$updateData,$this->tables);
	}
	//检测数据是否存在
	public function isOne(Array $where){
		return $this->db->isOne($where,$this->tables);
	}
	public function setLimit($limit){
		$this->limit=$limit;
	}
	//检查数据是否存在
	public function isExist(){
		return $this->check->isExist($this);
	}
	//得到下一条即将被新增的数据的id 
	protected function nextId(){
		return $this->db->nextId($this->tables);
	}
	protected function select($selectFields,$param=array()){
		return $this->db->select($selectFields,$param,$this->tables);
	}
	public function total($param=array()){
		return $this->db->total($this->tables,$param);
	}
}