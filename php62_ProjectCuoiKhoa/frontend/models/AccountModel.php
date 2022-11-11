<?php 
	trait AccountModel{
		//dang ky
		public function modelRegister(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			// ma hoa password 
			$password = md5($password);
			// kiem tra new email ton tai trong csdl chua, chua thi insert
			$conn= Connection::getInstance();
			$check = $conn->prepare("select email from customers where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount()==0){
				// insert du lieu vao bang customer trong csdl
				$query = $conn->prepare("insert into customers(name,email,address,phone,password) values(:var_name,:var_email,:var_addess,:var_phone,:var_password)");
				$query->execute(["var_name"=>$name,"var_email"=>$email,"var_addess"=>$address,"var_phone"=>$phone,"var_password"=>$password]);

			}else {
				header("location:index.php?controller=account&action=register&notify=error");
			}
		}
		// dang nhap
		public function modelLogin(){

			$email = $_POST['email'];
			$password = $_POST['password'];
			// ma hoa password 
			$password = md5($password);
			// kiem tra new email ton tai trong csdl chua, chua thi insert
			$conn= Connection::getInstance();
			$check = $conn->prepare("select id,email,password from customers where email=:var_email");
			$check->execute(["var_email"=>$email]);
			if($check->rowCount()>0){
				// lay 1 ban ghi
				$record = $check->fetch(PDO::FETCH_OBJ);
				if($record->password == $password){
					// dang nhap thanh cong
					$_SESSION['customer_id']= $record->id;
					$_SESSION['customer_email']=$record->email;
					header("location:index.php");
				}else{
					header("location:index.php?controller=account&action=login&notify=error");
				}

			}else {
				header("location:index.php?controller=account&action=register&notify=error");
			}
		}
		// tin tuc noi bat
		public function modelGetNews(){
			$conn = Connection::getInstance();
			$query= $conn->query("select * from news where hot =1 order by id desc limit 0,2");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
	}
 ?>