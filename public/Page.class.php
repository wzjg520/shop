<?php
class Page{
	private $total;
	private $pagesize;
	private $limit;
	private $page;
	private $pageNum;
	private $url;
	private $bothPage;
	function __construct($total,$pagesize=PAGE_SIZE,$bothPage=3){
		$this->total=$total ? $total : 1;
		$this->pagesize=$pagesize;
		$this->bothPage=$bothPage;
		$this->pageNum=ceil($this->total/$this->pagesize);
		$this->page=$this->setPage();
		$this->url=$this->setUrl();
		$this->limit=$this->pagesize*($this->page-1). ", $this->pagesize ";
	}
	public function getLimit(){
		return $this->limit;
	}
	public function getPage(){
		return $this->page;
	}
	public function setPage(){
		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}else{
			$page=1;
		}
		if(!empty($page)){
			if($page>0&&$page<$this->pageNum){
				return $this->page=$page;
			}else{
				return $this->page=$this->pageNum;
			}
		}else{
			return $this->page=1;
		}
	}
	public function setUrl(){
		$url=$_SERVER['REQUEST_URI'];
		$par=parse_url($url);
		if(isset($par['query'])){
			parse_str($par['query'],$query);
			unset($query['page']);
			$url=$par['path'].'?'.http_build_query($query);
		}
		return $url;
	}

	public function pageList(){
		$pageList='';
		for($i=$this->bothPage;$i>=1;$i--){
			$page=$this->page-$i;
			if($page<1)continue;
			$pageList .='<a href="'.$this->url.'&page='.$page.'">'.$page.'</a>';
		}

		$pageList .='<a href="'.$this->url.'&page='.$this->page.'" class="index">'.$this->page.'</a>';
		for($i=1;$i<=$this->bothPage;$i++){
			$page=$this->page+$i;
			if($page>$this->pageNum)break;
			$pageList .='<a href="'.$this->url.'&page='.$page.'">'.$page.'</a>';
		}

		return $pageList;
	}
	public function indexPage(){
		if($this->page>$this->bothPage){
			return '<a href="'.$this->url.'&page=1">1</a>...';
		}
	}
	public function endPage(){
		if($this->page<$this->pageNum-$this->bothPage){
			return '...<a href="'.$this->url.'&page='.$this->pageNum.'">'.$this->pageNum.'</a>';
		}
	}
	public function prevPage(){
		if($this->page==1){
			return '<span class="disable">上一页</span>';
		}
		return '<a href="'.$this->url.'&page='.($this->page-1).'">上一页</a>';
	}
	public function nextPage(){
		if($this->page==$this->pageNum){
			return '<span class="disable">下一页</span>';
		}
		return '<a href="'.$this->url.'&page='.($this->page+1).'">下一页</a>';
	}
	public function pageShow(){
		$page ='';
		$page .=$this->indexPage();
		$page .=$this->pageList();
		$page .=$this->endPage();
		$page .=$this->prevPage();
		$page .=$this->nextPage();

		return $page;
	}
}
