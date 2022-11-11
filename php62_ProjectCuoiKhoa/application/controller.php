<?php
	
	class Controller{
		public function loadView($fileName,$data=NULL){
			if($data != NULL)
				extract($data);
			if(file_exists("views/$fileName")){
				$view = NULL;
				$layout = NULL;
				ob_start();
				include "views/$fileName";
				$view = ob_get_contents();
				ob_get_clean();
				if($layout != NULL){
					include "views/$layout";
				}else
				//comment lại để tránh load 2 lần trên trang
				// cái này là cái sau load lên trang phía dưới
				echo $view;
			}
		}
		// dang nhap truoc khi su dung quyen admin
		public function authentication(){
			if(!isset($_SESSION["email"])){
				header("location:index.php?controller=login");
			}
		}
	}
?>