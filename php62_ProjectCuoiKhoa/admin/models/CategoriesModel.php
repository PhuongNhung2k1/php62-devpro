<?php 
	trait CategoriesModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET['p'])&& $_GET['p']>0 ?$_GET['p'] -1 :0;
			$from = $page*$recordPerPage;
			$conn= Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc limit $from,$recordPerPage");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		// lay tpng so ban ghi
		public function modelTotalRecord(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id =0");
			return $query->rowCount();
		}

		// xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET['id']) && is_numeric($_GET['id'])? $_GET['id']:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from categories where id=:var_id or parent_id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		// lay moit ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			// lay bien kn csdl
			$conn = Connection::getInstance();
			// thuc hien lay url truyen vao
			$query = $conn->prepare("select * from categories where id=:var_id");
			//thuc thi truy van truyen tham so
			$query->execute(["var_id"=>$id]);
			return $query->fetch(PDO::FETCH_OBJ);
		}
		// chinh sua doi tuong
		public function modelUpdate($id){
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			//update name 
			$conn = Connection::getInstance();
			$query=$conn->prepare("update categories set name=:var_name,parent_id=:var_parent_id where id=:var_id");
			//thuc thi truy van truyen tham so
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_parent_id"=>$parent_id]);
			
		}
		// tao moi mot doi tuong moi
		public function modelCreate(){
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into categories set name=:var_name,parent_id=:var_parent_id ");
			// thuc thi truy van truyen tham so
			$query->execute(["var_name"=>$name,"var_parent_id"=>$parent_id]);
		}
	}
 ?>