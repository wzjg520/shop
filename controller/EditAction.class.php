<?php
class EditAction extends Action{
	private $nav=null;
	public function __construct(){
		parent::__construct();
	}
	//显示模板目录
	public function dir(){
		if(isset($_GET['dir'])){
			$dirPath=dirname(__DIR__).'/view/'.$_GET['dir'].'/';
			$dir=opendir(dirname(__DIR__).'/view/'.$_GET['dir'].'/');
			$name='';
			$dirarray=array();
			while(!!$name=readdir($dir)){
				if($name !='.' && $name !='..' && $name != 'images')
				$dirarray[]=$name;
			}
			$this->tpl->assign('dir',$dirarray);
			$this->tpl->display(ADMIN_STYLE.'edit/dir.tpl');
		}
	}
	//显示目录内的文件
	public function file(){
		if(isset($_GET['dir'])&& isset($_GET['file'])){
			$filearray=scandir(dirname(__DIR__).'/view/'.$_GET['dir'].'/'.$_GET['file']);
			$this->tpl->assign('file',$filearray);
			$this->tpl->display(ADMIN_STYLE.'edit/file.tpl');
		}
	}
	//删除文件
	public function runDelete(){
		if (isset($_GET['dir']) && isset($_GET['file']) && isset($_GET['name'])) {
			unlink(dirname(dirname(__FILE__)).'/view/'.$_GET['dir'].'/'.$_GET['file'].'/'.$_GET['name']);
			$this->redirect->success('文件删除成功',PREV_URL);
		}
	}
	//添加文件
	public function runAddFile(){
		if(isset($_POST['send'])){
			$path=dirname(dirname(__FILE__)).'/view/'.$_GET['dir'].'/'.$_GET['file'].'/'.$_POST['name'];
			if(file_put_contents($path, $_POST['content'])){
				$this->redirect->success('文件新增成功','?a=edit&m=file&dir='.$_GET['dir'].'&file='.$_GET['file']);
			};
			
		}
		if(isset($_GET['dir']) && isset($_GET['file'])){
			$this->tpl->display(ADMIN_STYLE.'edit/addfile.tpl');
		}
	}
	//修改文件
	public function runUpdate(){
		if(isset($_POST['send'])){
			$filePath=dirname(__DIR__).'/view/'.$_GET['dir'].'/'.$_GET['file'].'/'.$_POST['name'];
			file_put_contents($filePath, $_POST['content']) ;
			$this->redirect->success('模板编辑成功',$_POST['prev_url']);
		}
		if(isset($_GET['dir'])&& isset($_GET['file']) && isset($_GET['name'])){
			$filePath=dirname(__DIR__).'/view/'.$_GET['dir'].'/'.$_GET['file'].'/'.$_GET['name'];
			$content=file_get_contents($filePath);
			$this->tpl->assign('content',$content);
			$this->tpl->assign('prev_url',PREV_URL);
			$this->tpl->display(ADMIN_STYLE.'edit/update.tpl');
		}
	}
	public function index(){
		$this->tpl->display(ADMIN_STYLE.'edit/show.tpl');
	}
}