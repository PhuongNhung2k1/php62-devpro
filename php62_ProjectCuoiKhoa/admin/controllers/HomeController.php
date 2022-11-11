<?php 
	class HomeController extends Controller {
		// ham tao ngay khi ng dung dang nhap
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$this->loadView('HomeView.php');
		}
	}
 ?>