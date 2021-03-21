<?php
	$title= "Add Product";
	include('header.php');
?>

	<div id="page_title">
		<h1>Add Product</h1>
	</div>

	<div id='nav_bar'>
		<a href="index.html"> Back</a> 
	</div>

	<div id="main_content">
		<form method="post" action="../controller/addProcess.php">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""> </td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="text" name="buying_price" value=""> </td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><input type="text" name="selling_price" value=""> </td>
					</tr>
					<tr>
						<td colspan="2"><input type="checkbox" name="display" value="yes" id="">Displayable</td>
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