<?php
	$title= "User list Page";
	include('header.php');
?>

<style>
	td{
		padding: 5px 20px;
	}

</style>

	<div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>
	<br>
	<div id="main_content">
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>

			<?php 
			
			$myfile = fopen('../controller/list.json', 'r');
			$data = fread($myfile, filesize('../controller/list.json'));

			$user = json_decode($data, true);
			

			for ($i=0; $i < sizeof($user); $i++) {

				$id=$user[$i]['id'];
				$username=$user[$i]['username'];
				$email=$user[$i]['email'];
				

				echo "
				<tr>
					<td> $id </td>
					<td> $username </td>
					<td> $email </td> 
					<td>
						<a href='edit.php?id=$id'>EDIT</a> |
						<a href='delete.php?id=$id'>DELETE</a> 
					</td>
				</tr>		
				";
			}

			?>
			

		</table>
	</div>

<?php include('footer.php'); ?>