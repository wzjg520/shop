<?php
class CallAction extends Action{
	public function __construct(){
		parent::__construct();
	}
	//显示上传页面
	public function showUpTpl(){
		$this->tpl->assign('type',$_GET['type']);
		$this->tpl->display(ADMIN_STYLE.'public/uploadfile.tpl');
	}
	//处理上传文件
	public function upload(){
		if(isset($_FILES['userfile']['tmp_name'])){
			switch($_POST['type']){
				case 'face':
					$width=99;
					$height=100;
					$info='头像上传成功';
					break;
				case 'ok':
					$width=300;
					$height=300;
					$info='图片上传成功';
					break;
				case 'rotator':
					$width=1200;
					$height=530;
					$info='轮播器图片上传成功';
					break;
				default :
					exit('非法操作');
			}
			$upload= new UploadFile('userfile',$_POST['MAX_FILE_SIZE']);
			$path=$upload->getPath();		
			$thumb=new Image($path);
			$thumb->thumb($width, $height);
			$thumb->outImage();
			$upload->alertThumbClose($info,$path);
		}else{
			Tool::alertBack('警告：未知错误');
		}
		
	}
	public function ckeditor(){
		if(isset($_FILES['upload']['tmp_name'])){
			$upload= new UploadFile('upload',$_POST['MAX_FILE_SIZE']);
			$ckefn = $_GET['CKEditorFuncNum'];
			$path = $upload->getPath();
			$thumb=new Image($path);
			$thumb->thumbCkeditor(650,0);
			$thumb->outImage();
			
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($ckefn,\"$path\",'图片上传成功！');</script>";
			exit();
		}else{
			exit('警告：未知错误');
		}
	}
}