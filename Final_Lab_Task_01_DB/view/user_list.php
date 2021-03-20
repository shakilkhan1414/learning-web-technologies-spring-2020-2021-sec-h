<?php
	require_once('../model/userModel.php');
	$title= "User list Page";
	include('header.php');
?>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Email</td>
				<td>Password</td>
				<td>Type</td>
				<td>Action</td>
			</tr>
			<?php 
				$users=getAllUser();
				for($i=0;$i<sizeof($users);$i++){
					$id=$users[$i]['id'];
					$username=$users[$i]['username'];
					$email=$users[$i]['email'];
					$password=$users[$i]['password'];
					$type=$users[$i]['user_type'];
					echo "<tr>
							<td>$id</td>
							<td>$username</td>
							<td>$email</td>
							<td>$password</td>
							<td>$type</td>
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