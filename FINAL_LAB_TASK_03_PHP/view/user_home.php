<?php 
	session_start();
	require_once('../model/userModel.php');
	$user=getUserById($_SESSION['id']);
?>

<center>
	<h1>Welcome <?=$user['name'];?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="../checking/logout.php">Logout</a>
</center>