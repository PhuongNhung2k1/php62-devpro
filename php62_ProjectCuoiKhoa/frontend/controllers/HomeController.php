<?php 
// load file model vao day
	include "models/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		public function index(){
			$this->loadView("HomeView.php");
		}
	}
 ?>