<?php
	require_once('../model/productModel.php');
	$title= "Edit Product";
	include('header.php');
	$product=getProductById($_GET['id']);

?>

	<div id="page_title">
		<h1>Edit Product</h1>
	</div>

	<div id='nav_bar'>
		<a href="index.html"> Back</a> 
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editProcess.php?id=<?=$_GET['id']?>">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?=$product['name']?>"> </td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="text" name="buying_price" value="<?=$product['buying_price']?>"> </td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><input type="text" name="selling_price" value="<?=$product['selling_price']?>"> </td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" name="display" value="yes" id="" <?php if($product['displayable']=="yes"){
							echo "checked";
						} ?> >Displayable</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="add" value="Save">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>