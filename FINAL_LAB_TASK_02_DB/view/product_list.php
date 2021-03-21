<?php
	require_once('../model/productModel.php');
	$title= "Product List";
	include('header.php');
?>

	<div id="page_title">
		<h1>Product List</h1>
	</div>

	<div id='nav_bar'>
		<a href="index.html"> Back</a> |
	</div>

	<div id="main_content">
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>Name</td>
				<td>Profit</td>
				<td>Action</td>
			</tr>
			<?php 
				$products=getAllProduct();

				for($i=0;$i<sizeof($products);$i++){
					$id=$products[$i]['id'];
					$name=$products[$i]['name'];
					$buying_price=$products[$i]['buying_price'];
					$selling_price=$products[$i]['selling_price'];
					$profit=$selling_price - $buying_price;
					
					echo "<tr>
							<td>$name</td>
							<td>$profit</td>
							<td>
								<a href='edit.php?id=$id'>EDIT</a> |
								<a href='../controller/delete.php?id=$id'>DELETE</a>
							</td>
						</tr>";
				}
			?>
		</table>
	</div>

<?php include('footer.php'); ?>