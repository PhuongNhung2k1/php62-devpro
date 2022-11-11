<?php 
 	include "models/CartModel.php";
 	class CartController extends Controller{
 		use CartModel;
 		// ham rao su dung va ktra khoi tao gio hang
 		public function __construct(){
 			// kiem tra neu gio hang chua ton tai thi khoi tao no
 			if(isset($_SESSION["cart"])== false)
 				$_SESSION['cart'] = array();

 		}
 		// hien thi danh sach san pham trong gio hang
 		public function index(){
 			$this->loadView("CartView.php");
 		}
 		// them san pham vao gio hang
 		public function create(){
 			$id = isset($_GET['productId'])?$_GET['productId']:0;
 			// goi ham trong CartModel de them phan tu vao gio hang
 			$this->cartAdd($id);
 			// quay laij trang gio hang
 			header("location:index.php?controller=cart");
 		}
 		// xoa san pham trong gio hang
 		public function delete(){
 			$id = isset($_GET['productId'])?$_GET['productId']:0;
 			//goi ham  trong model de xoa phan tu khi gio hhang
 			$this->cartDelete($id);
 			//quay lai trang gio hang
 			header("location:index.php?controller=cart");
 		}
 		// xoa toan bo san pham khoi gio hang
 		public function destroy(){
 			$this->cartDestroy();
 			//quay lai trang gio hang
 			header("location:index.php?controller=cart");
 		}
 		// cap nhat so luong san pham trong gio hang
 		public function update(){
 			foreach($_SESSION['cart'] as $product){
			$name = "product_".$product['id'];
			$number = $_POST[$name];
			$this->cartUpdate($product['id'],$number);
		}
		// quay lai trang gio hang
		header("location:index.php?controller=cart");
 		}

 		// thanh toan gio hang
 		public function checkout(){
 			// kiem tra neu user chua dang nhap thi yc dang nhap
 			if(isset($_SESSION['customer_email'])== false)
 				header("location:index.php?controller=account&action=login");
 			else{
 				//goi ham cartCheckout trong cartModel
 				$this->cartCheckout();
 				header("location.index.php?controller=cart&notify=order-success");
 			}
 		}

 	}
 ?>