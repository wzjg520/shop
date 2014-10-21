<?php
//图片管理控制器
class PicAction extends Action {
	
	public function __construct() {
		parent::__construct();
		$this->goods = new GoodsModel();
	}
	
	public function index() {
		$dirPath = opendir(dirname(dirname(__FILE__)).'/upload/');
		$dirName = '';
		$dirArr = array();
		while (!!$dirName = readdir($dirPath)) {
			if ($dirName != '.' && $dirName != '..') {
				$dirArr[count(scandir(dirname(dirname(__FILE__)).'/upload/'.$dirName.'/')) - 2] = $dirName;
			}				
		}
		$this->tpl->assign('dir', $dirArr);
		$this->tpl->display(ADMIN_STYLE.'pic/show.tpl');
	}
	//删除图片
	public function runDelete(){
		if (isset($_GET['dir']) && isset($_GET['name'])) {
			unlink(dirname(dirname(__FILE__)).'/upload/'.$_GET['dir'].'/'.$_GET['name']);
			$this->redirect->success('文件删除成功',PREV_URL);
		}
	}
	//显示图片列表
	public function file() {
		if (isset($_GET['file'])) {
			$file = scandir(dirname(dirname(__FILE__)).'/upload/'.$_GET['file'].'/');
			$this->tpl->assign('file', $this->goods->fileGoods($file));
			$this->tpl->display(ADMIN_STYLE.'pic/file.tpl');
		}
	}
	
	
}
?>
