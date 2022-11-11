<?php 
	trait ProductsModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET['p'])&& $_GET['p']>0 ?$_GET['p'] -1 :0;
			$from = $page*$recordPerPage;
			$conn= Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit $from,$recordPerPage");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		// lay tpng so ban ghi
		public function modelTotalRecord(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products");
			return $query->rowCount();
		}

		// xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET['id']) && is_numeric($_GET['id'])? $_GET['id']:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from products where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		// lay moit ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			// lay bien kn csdl
			$conn = Connection::getInstance();
			// thuc hien lay url truyen vao
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc thi truy van truyen tham so
			$query->execute(["var_id"=>$id]);
			return $query->fetch(PDO::FETCH_OBJ);
		}
		// chinh sua doi tuong
		public function modelUpdate($id){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$price = $_POST['price'];
			$hot = isset($_POST['hot']) ? 1 : 0;
			$category_id = $_POST['category_id'];
			$discount = $_POST['discount'];
			//update name
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update products set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,category_id=:var_category_id, discount=:var_discount,price=:var_price where id=:var_id");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_category_id"=>$category_id,"var_discount"=>$discount,"var_price"=>$price]);
			//nếu user chọn ảnh để upload thì tiến hành upload ảnh
			if($_FILES['photo']['name'] != ""){
				//lấy tên ảnh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload ảnh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/products/$photo");
				//update cột photo trong table users
				$query = $conn->prepare("update products set photo=:var_photo where id=:var_id");
				//thuc thi truy van, truyen tham so
				$query->execute(["var_id"=>$id,"var_photo"=>$photo]);
			}
		}
		public function modelCreate(){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$price = $_POST['price'];
			$hot = isset($_POST['hot']) ? 1 : 0;
			$category_id = $_POST['category_id'];
			$discount = $_POST['discount'];
			$photo = "";
			//neu user chon anh de upload thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/products/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into products set photo=:var_photo,name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,category_id=:var_category_id,discount=:var_discount,price=:var_price");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_photo"=>$photo,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_category_id"=>$category_id,"var_discount"=>$discount,"var_price"=>$price]);	
		}
	}
 ?>