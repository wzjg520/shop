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
class Image{
	private $width;		//原图片宽度
	private $height;		//原图片高度
	private $file;			//原图片地址
	private $img;		//原图片资源句柄
	private $type;		//原图片格式
	private $thumb;	//缩略图的资源句柄
	public function __construct($file){
		$this->file=ROOT_PATH.'/'.$file;
		list($this->width,$this->height,$this->type)=getimagesize($this->file);
		$this->img=$this->getImageFrom($this->file,$this->type);
	}
	//1 = GIF，2 = JPG，3 = PNG
	private function getImageFrom($file,$type){
		switch($type){
			case 1:
				$img=imagecreatefromgif($file);
				break;
			case 2:
				$img=imagecreatefromjpeg($file);
				break;
			case 3:
				$img=imagecreatefrompng($file);
				break;
			default:
				Tool::alertBack('对不起，你上传的图片类型本系统不支持');
				break;
		}
		return $img;
	}
	//ckeditor专用
	public function thumbCkeditor($new_width=0,$new_height=0){
		list($water_width,$water_height,$water_type)=getimagesize(WATER_DIR);
		$water=$this->getImageFrom(WATER_DIR,$water_type);
		if(empty($new_height) && empty($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}elseif( !is_numeric($new_width) || !is_numeric($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}
		//固定一边缩放
		if($this->width>$new_width){
			$new_height=$new_width/$this->width*$this->height;
		}else{
			$new_width=$this->width;
			$new_height=$this->height;
		}
		if($this->height>$new_height){
			$new_width=$new_height/$this->height*$this->width;
		}else{
			$new_width=$this->width;
			$new_height=$this->height;
		}
		//水印的位置
		$water_x=$new_width-$water_width-5;
		$water_y=$new_height-$water_height -5 ;
		//创建一个画布用来存放缩略图
		$this->thumb=imagecreatetruecolor($new_width, $new_height);
		imagecopyresampled($this->thumb, $this->img, 0, 0,0,0, $new_width, $new_height, $this->width, $this->height);
		if($new_width>$water_width && $new_height>$water_height){
			imagecopy($this->thumb, $water,$water_x, $water_y, 0, 0,  $water_width, $water_height);
		}
		imagedestroy($water);
	}
	//缩略图固定长高，等比不变形，自动裁剪
	public function thumb($new_width=0,$new_height=0){
		if(empty($new_height) || empty($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}elseif( !is_numeric($new_width) || !is_numeric($new_width)){
			$new_height=$this->height;
			$new_width=$this->width;
		}
		//创建一个容器用来存放预定的宽高
		$n_w=$new_width;
		$n_h=$new_height;
		//穿甲裁剪点
		$cut_width=0;
		$cut_height=0;
		if($this->width<$this->height){
			$new_width=$new_height/$this->height*$this->width;
		}else{
			$new_height=$new_width/$this->width*$this->height;
		}

		if($n_w>$new_width){
			$per=$n_w/$new_width;			//计算出比例因子
			$new_width *=$per;
			$new_height *=$per;
			$cut_height=($new_height-$n_h)/2;
		}
		if($n_h>$new_height){
			$per=$n_h/$new_height;			//计算出比例因子
			$new_width *=$per;
			$new_height *=$per;
			$cut_width=($new_width-$n_w)/2;
		}

		//创建一个画布把新生成的图像放到画布上
		$this->thumb=imagecreatetruecolor($n_w,$n_h);
		imagecopyresampled($this->thumb, $this->img, 0, 0, $cut_width, $cut_height, $new_width, $new_height, $this->width, $this->height);
	}
	//输出图像
	public function outImage($param=''){
		$end=strrchr($this->file, '.');
		$start=substr($this->file,0,-strlen($end));
		$this->file=$start.$param.$end;
		imagepng($this->thumb,$this->file);
		imagedestroy($this->thumb);
		imagedestroy($this->img);
	}
	public function getPath(){
		return  strrchr($this->file,'upload/');
	}


}




?>