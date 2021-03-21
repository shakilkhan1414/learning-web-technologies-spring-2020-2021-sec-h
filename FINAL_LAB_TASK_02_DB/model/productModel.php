<?php
	
	require_once('db.php');

	function getProductById($id){

		$conn = getConnection();

		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$products =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row); 
		}

		return $products;
	}

	function insertProduct($products){

		$conn = getConnection();
		$sql = "insert into products (name,buying_price,selling_price,displayable) values('{$products['name']}','{$products['buying_price']}', '{$products['selling_price']}', '{$products['displayable']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($products){

		$conn = getConnection();
		$sql = "update products set name='{$products['name']}', buying_price='{$products['buying_price']}', selling_price='{$products['selling_price']}', displayable='{$products['displayable']}' where id='{$products['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function searchProduct($name){
		$conn = getConnection();
		$sql="select * from products where name like '%$name%'";
		$result = mysqli_query($conn, $sql);
		$products =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row); 
		}

		return $products;
	}
?>