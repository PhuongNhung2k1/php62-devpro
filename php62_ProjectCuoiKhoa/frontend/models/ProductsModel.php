
<?php 
	trait ProductsModel{
		public function modelRead($recordPerPage,$categoryId){
			$page = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			$from = $page * $recordPerPage;
			$order = isset($_GET["order"])?$_GET["order"]:"";
			$sqlOrder = "order by id desc";
			switch ($order) {
				case 'priceAsc':
					$sqlOrder = "order by price asc";
					break;
				case 'priceDesc':
				$sqlOrder = "order by price desc";
					break;
				case 'range100_500':
				$sqlOrder = "and price>1000000";
				break;
				case '>500.000':
				$sqlOrder = "and price>5000000";
					// code...
					break;
				// sap xep theo ten
				case 'name_T':
				$sqlOrder = "and name like '%T%'";
				break;
				case 'nameAsc':
				$sqlOrder = "order by name Asc";
				break;
				case 'nameDesc':
				$sqlOrder = "order by name Desc";
				break;
					// code...
					break;
				default:
					// code...
					break;
			}

			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id= $categoryId $sqlOrder limit $from, $recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord($categoryId){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id= $categoryId");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		
		//lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn -> vì có biến truyền từ url vào nên thực hiện prepare để truyền tham số
			$query = $conn->prepare("select * from products where id=:var_id");
			//thực hiện truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$id]);
			//trả về một bản ghi
			return $query->fetch(PDO::FETCH_OBJ);
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
		// tin tuc noi bat
		public function modelGetNews(){
			$conn = Connection::getInstance();
			$query= $conn->query("select * from news where hot =1 order by id desc limit 0,2");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		//lay ra cac san pham tuong tu
		// cac san pham thuc danh muc ( ke ca san pham con thuoc danh muc do)
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,8");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		// lay san pham theo gia sap xep
		public function modelGetProductByPrice(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where price > 10000");
			$result = $query(fetchAll::FETCH_OBJ);
			return $result;
		}
		// lay san pham rieng

			public function modelProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 0,4");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		//đánh giá số sao sản phẩm
		public function modelRating(){
			$productId = isset($_GET["productId"]) ? $_GET["productId"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			//insert dữ liệu vào bảng rating
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn -> vì có biến truyền từ url vào nên thực hiện prepare để truyền tham số
			$query = $conn->prepare("insert into rating(product_id, star values(:var_id,:var_star)");
			//thực hiện truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$productId,"var_star"=>$star]);
		}
		//lấy số sao sản phẩm
		public function modelGetStar($product_id, $star){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select *from rating where product_id=$product_id and star=$star");
			return $query->rowCount();
		}
	}
 ?>