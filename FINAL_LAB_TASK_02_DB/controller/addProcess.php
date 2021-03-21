<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['add'])){

		$name = $_POST['name'];
		$buying_price = $_POST['buying_price'];
		$selling_price = $_POST['selling_price'];

		if($name == "" || $buying_price == "" || $selling_price == ""){
			echo "null submission...";
		}else{
			if(isset($_POST['display'])){
				$products = [
					'name' => $name,
					'buying_price' => $buying_price,
					'selling_price' => $selling_price,
					'displayable' => 'yes'
				];
			}
			
			else{
				$products = [
					'name' => $name,
					'buying_price' => $buying_price,
					'selling_price' => $selling_price,
					'displayable' => 'no'
				];
			}
				$status = insertProduct($products);

				if($status){
					header('location: ../view/home.php');
				}else{
					echo "error";
				}
		}
	}
?>