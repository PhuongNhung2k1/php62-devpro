<?php 
	class Connection{
		public static function getInstance(){
			$server_name = "localhost";
			$database_name = "php62_freshfruit";
			$username = "root";
			$password = "";
			// ket noi csdl va tra ve bien ket noi

			$conn = new PDO("mysql:host=$server_name;dbname=$database_name",$username,$password);
			$conn->exec("set names utf8");
			return $conn;
		}
	}
 ?>