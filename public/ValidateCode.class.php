<?php
/*
* CMS VERSION 1.0
* ----------------------------------------
* COPY	2012-1013
* WEB :HTTP://jiajun.com
* =======================
* AUTHOR:WANG
* DATE:2014.3.11
* */
class ValidateCode{
	private $charset='ABCDEFGHJKMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
	private $code;
	private $codeLen=5;
	private $img;
	private $width=145;
	private $height=20;
	private $fontColor;

	public function __construct(){
		$this->fontFile= ROOT_PATH.'/font/COMICI.TTF';
	}
	//生成随机码
	public function createCode(){
		$_code= $this->charset;
		$_len=strlen($_code)-1;
		for($i=0;$i<$this->codeLen;$i++){
			$this->code .=$_code[mt_rand(0,$_len)];
		}
	}
	//生成图像背景
	public function createBg(){
return		$this->img=imagecreatefrompng(ROOT_PATH.'/view/default/images/bg_code'.mt_rand(1, 3).'.png');
		
	}
	//生成文字图形
	public function createFont(){
		$x=$this->width/$this->codeLen;
		for($i=0;$i<$this->codeLen;$i++){
			$this->fontColor=imagecolorallocate($this->img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
			imagestring($this->img, 5, $x * $i/2 + $this->width / 3.3, 2, $this->code[$i], $this->fontColor);
		}
	}
	//输出图片
	public function outPut(){
		header('Content-type: image/png'); 
		imagepng($this->img);
		imagedestroy($this->img);
	}
	//生成session
	public function getCode(){
		return $this->code;
	}
	//对外输出接口
	public function showimg(){
		$this->createCode();
		$this->createBg();
		$this->createFont();
		return $this->outPut();
	}


}














?>