<?php
	
	trait HomeModel{
	public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,8");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
	// danh muc san pham
	public function modelCategories(){
		$conn = Connection::getInstance();
		$query =$conn->query("select * from categories where parent_id= 0 and id in (select category_id from products where categories.id = products.category_id) order by modelCategories.id
			desc");
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	// cac san pham thuc danh muc ( ke ca san pham con thuoc danh muc do)
		public function modelProducts($categoryId){
			$conn = Connection::getInstance();
			$query= $conn->query("select * from products where category_id in (select id from categories where id = $categoryId or parent_id = $categoryId) order by id desc limit 0,6");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
		// tin tuc noi bat
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query= $conn->query("select * from news where hot =1 order by id desc limit 0,2");
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			return $result;
		}
	}
?>