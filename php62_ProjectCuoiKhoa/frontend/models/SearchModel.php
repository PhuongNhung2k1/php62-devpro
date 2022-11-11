<?php  
	trait SearchModel{

		public function modelReadSearchName($recordPerPage,$key){
			$page = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%' order by id desc limit $from, $recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecordSearchName($key){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%'");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}

		public function modelReadSearchPrice($recordPerPage,$fromPrice,$toPrice){
			$page = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from, $recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecordSearchPrice($fromPrice,$toPrice){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where price >= $fromPrice and price<= $toPrice");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung vi id truyen vao
		public function modelReadSearchAjax($key){
			
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%' order by id desc");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		
		//lấy một bản ghi tương ứng với id truyền vào
		public function modelGetCategory($categoryId){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn -> vì có biến truyền từ url vào nên thực hiện prepare để truyền tham số
			$query = $conn->prepare("select * from categories where id=:var_id");
			//thực hiện truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$categoryId]);
			//trả về một bản ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
	}
?>