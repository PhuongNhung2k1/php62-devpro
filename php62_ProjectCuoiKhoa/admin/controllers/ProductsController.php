<?php 
	
	include "models/ProductsModel.php";

	class ProductsController extends Controller{
		use ProductsModel;

		//hthi ds
		public function index(){
			$recordPerPage = 20;
			$totalRecord = $this->modelTotalRecord();
			$numPage = ceil($totalRecord/$recordPerPage);
			$data = $this->modelRead($recordPerPage);

			$this->loadView("ProductsView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		//sua ban ghi - GET
		public function update(){
			// lay id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] :0;
			// tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=products&action=updatePost&id=$id";
			$record = $this->modelGetRecord($id);
			$this->loadView("ProductsFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST-> khi an nut submit 
		// url : index.php?controller-products&action=updatePost=number
		public function updatePost(){
			// lay id truyeh tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay trtr lai trang usser
			header("location:index.php?controller=products");
		}
		//them ban ghi - GET
		public function create(){
			$action = "index.php?controller=products&action=createPost";
			$this->loadView("ProductsFormView.php",["action"=>$action]);
		}
		//them ban ghi - POST
		public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=products");
		}
		//xoa ban ghi - GET
		public function delete(){
			// goi ham modelDelete
			$this->modelDelete();
			header("location:index.php?controller=products");
		}
	}
?>