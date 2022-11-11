<?php 
		
	include "models/LoginModel.php";

	class LoginController extends Controller {
		use LoginModel;

		public function index(){
			$this->loadView("LoginView.php");
		}
		public function doLogin(){
			$this->modelLogin();
		}

		public function logout(){
			unset($_GET["email"]);
			header("location:index.php");
		}
	}
 ?>