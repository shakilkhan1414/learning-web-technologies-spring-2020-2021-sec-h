<?php
	$title= "Edit Page";
	include('header.php');
	$_SESSION['id']=$_GET['id'];


	$myfile = fopen('../controller/list.json', 'r');
	$data = fread($myfile, filesize('../controller/list.json'));

	$user = json_decode($data, true);

?>


	<div id="page_title">
		<h1>Edit Page</h1>
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="editProcess.php">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php
							for ($i=0; $i < sizeof($user); $i++) { 
								if($user[$i]['id']==$_GET['id']){
									echo $user[$i]['username'];													
									}
								}							
						?>"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="<?php 
							for ($i=0; $i < sizeof($user); $i++) { 
								if($user[$i]['id']==$_GET['id']){
									echo $user[$i]['password'];													
									}
								}
						?>"> </td>
					</tr>
				
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php
							for ($i=0; $i < sizeof($user); $i++) { 
								if($user[$i]['id']==$_GET['id']){
									echo $user[$i]['email'];												
									}
								}							
						?>"> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="signup" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>