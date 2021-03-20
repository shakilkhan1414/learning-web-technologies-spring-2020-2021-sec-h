<?php
	$title= "User list Page";
	require_once "../db/connection.php";
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
				<td>Name</td>
				<td>Email</td>
				<td>Password</td>
				<td>Action</td>
			</tr>
			<?php 
				$sql="select * from user";
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>
							<td>$row[id]</td>
							<td>$row[username]</td>
							<td>$row[email]</td>
							<td>$row[password]</td>
							<td>
								<a href='edit.php?id=$row[id]'>EDIT</a> |
								<a href='delete.php?id=$row[id]'>DELETE</a> 
							</td>
						</tr>";
				}
			?>
		</table>
	</div>

<?php include('footer.php'); ?>