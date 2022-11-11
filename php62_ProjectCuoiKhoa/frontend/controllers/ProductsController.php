<?php 
	include "models/productsModel.php";
	class ProductsController extends Controller{
		use productsModel;
		// danh sách sản phẩm hiển thị theo danh mục
		public function category(){
			$categoryId = isset($_GET["catId"]) ? $_GET["catId"] : 0;
			//so ban ghi tren mot trang
			$recordPerPage = 20;
			//tong so trang
			$numPage = ceil($this->modelTotalRecord($categoryId)/$recordPerPage);
			$data = $this->modelRead($recordPerPage,$categoryId);
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		// chi tiết sản phẩm
		public function detail(){
			$id = isset($_GET['id'])?$_GET['id'] : 0;
			//modelRecord : lay 1 ban ghi tuong ung voi id truyen vao
			$record = $this->modelGetRecord($id);
			//goi hien thi view
			$this->loadView("ProductsDetailView.php",["record"=>$record,"id"=>$id]);
		}
		// phan danh gias san pham cungx thuoc danh muc hien thi len chi tiet san pham
		public function rating(){

		}
	}
 ?>