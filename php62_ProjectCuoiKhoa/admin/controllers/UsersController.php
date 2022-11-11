<?php 
	
	include "models/UsersModel.php";

	class UsersController extends Controller{
		use UsersModel;

		//hthi ds
		public function index(){
			$recordPerPage = 4;
			$totalRecord = $this->modelTotalRecord();
			$numPage = ceil($totalRecord/$recordPerPage);
			$data = $this->modelRead($recordPerPage);

			$this->loadView("UsersView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		//sua ban ghi - GET
		public function update(){
			// lay id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] :0;
			// tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=users&action=updatePost&id=$id";
			$record = $this->modelGetRecord($id);
			$this->loadView("UsersFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST-> khi an nut submit 
		// url : index.php?controller-users&action=updatePost=number
		public function updatePost(){
			// lay id truyeh tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay trtr lai trang usser
			header("location:index.php?controller=users");
		}
		//them ban ghi - GET
		public function create(){
			$action = "index.php?controller=users&action=createPost";
			$this->loadView("UsersFormView.php",["action"=>$action]);
		}
		//them ban ghi - POST
		public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=users");
		}
		//xoa ban ghi - GET
		public function delete(){
			// goi ham modelDelete
			$this->modelDelete();
			header("location:index.php?controller=users");
		}
	}
?>