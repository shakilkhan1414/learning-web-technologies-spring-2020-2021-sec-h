<?php 
	session_start();
	require_once('../model/userModel.php');
	$user=getUserById($_SESSION['id']);
?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?=$user['id']?></tr>
		<tr><td>Name</td><td><?=$user['name']?></td></tr>	
		<tr><td>Email</td><td><?=$user['email']?></td></tr>	
		<tr><td>User Type</td><td><?=$user['user_type']?></td></tr>
		<tr><td colspan="2" align="right"><a href="../checking/homeCheck.php">Go Home</a></td></tr>
	</table>			
</center>