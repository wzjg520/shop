<?php
class Cart{
	
	public function getProduct(){
		$cart=array();
		if($_COOKIE['cart']){
			foreach($_COOKIE['cart'] as $value){
				$cart[]=unserialize(stripslashes($value));
			}
		}
		return $cart;
	}
	public function getCount(){
		$total=array();
		$total['num']=0;
		$total['price']=0;
		foreach($this->getProduct() as $key=>$value){
			$total['num'] +=$value['num'];
			$total['price'] +=$value['num'] * $value['price_sale'];
		};
		return $total;
	}
	public function addProduct(){
		return setcookie('cart['.$_POST['id'].']',serialize(array(
				'id'=>$_POST['id'],
				'price_sale'=>$_POST['price_sale'],
				'price_market'=>$_POST['price_market'],
				'navid'=>$_POST['nav'],
				'attr'=>$_POST['attr'],
				'num'=>$_POST['num'],
				'thumb_small'=>$_POST['thumb_small'],
				'sn'=>$_POST['sn'],
				'weight'=>$_POST['weight'],
				'name'=>$_POST['name'],				
		)),time()+24*60*60*7);
	}
	
	public function changeNum(){
		if(isset($_COOKIE['cart'][$_POST['id']])){
			$array=unserialize(stripslashes($_COOKIE['cart'][$_POST['id']]));
			$array['num']=$_POST['num'];
		}
		return  setcookie('cart['.$_POST['id'].']',serialize($array),time()+24*60*60*7);
	}
	public function deleteProduct(){
		if(isset($_COOKIE['cart'][$_GET['id']]))return setcookie('cart['.$_GET['id'].']','',time()-24*60*60*7);
	}
	
	public function clearProduct(){
		if(isset($_COOKIE['cart'])){
			foreach($_COOKIE['cart'] as $key=>$value){
				setcookie('cart['.$key.']','',time()-24*60*60*7);
			}
		}
		return ture;
	}
	
	
	
	
	
}