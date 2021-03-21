<?php
	$title= "Edit Page";
	include('header.php');
	require_once('../model/userModel.php');
	$user=getUserById($_GET['id']);
?>

	<div id="page_title">
		<h1>Edit Page</h1>
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editProcess.php?id=<?=$_GET['id'];?>">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?=$user['username']?>"> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?=$user['email']?>"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?=$user['password']?>"> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="update" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>