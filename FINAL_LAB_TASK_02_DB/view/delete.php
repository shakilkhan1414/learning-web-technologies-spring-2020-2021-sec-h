<?php
	require_once('../model/productModel.php');
	$title= "Delete Product";
	include('header.php');
	$product=getProductById($_GET['id']);

?>

	<div id="page_title">
		<h1>Delete Product</h1>
	</div>

	<div id='nav_bar'>
		<a href="product_list.php"> Back</a> 
	</div>

	<div id="main_content">
		<form method="post" action="../controller/deleteProcess.php?id=<?=$_GET['id']?>">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><?=$product['name']?></td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><?=$product['buying_price']?></td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><?=$product['selling_price']?></td>
					</tr>
					<tr>
						<td>Displayable</td>
                        <td>
                        <?php if($product['displayable']=="yes"){
							echo "Yes";
						}else{
                            echo "No";
                        }
                         ?>

                        </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="delete" value="Delete">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>