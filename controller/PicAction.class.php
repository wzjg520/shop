<?php
//图片管理控制器
class PicAction extends Action {
	
	public function __construct() {
		parent::__construct();
		$this->goods = new GoodsModel();
		$this->rotator=new RotatorModel();
		$this->user=new UserModel();
	}
	
	public function index() {
		$dirPath = opendir(dirname(dirname(__FILE__)).'/upload/');
		$dirName = '';
		$dirArr = array();
		while (!!$dirName = readdir($dirPath)) {
			if ($dirName != '.' && $dirName != '..') {
				$dirArr[$dirName.' 共 '.(count(scandir(dirname(dirname(__FILE__)).'/upload/'.$dirName.'/')) - 2).' 张'] = $dirName;
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
			 $fileObj=$this->rotator->fileRotator($this->goods->fileGoods($file));
			 $fileObj=$this->user->fileUser($fileObj);

			$this->tpl->assign('file', $fileObj);
			
			$this->tpl->display(ADMIN_STYLE.'pic/file.tpl');
		}
	}

	//删除空目录
	public function delDir(){
		if (isset($_GET['file'])) {
			$dirPath = dirname(__DIR__).'/upload/'.$_GET['file'];
			rmdir($dirPath);
			$this->redirect->success('目录删除成功',PREV_URL);
		}
	}
	
	
}
?>
