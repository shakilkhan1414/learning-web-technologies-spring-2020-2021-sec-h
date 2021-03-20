<?php
	session_start();
	require_once "../db/connection.php";

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$sql="select * from user where username='$username' and password='$password'";
			$result=mysqli_query($con,$sql);

			if(mysqli_num_rows($result)>0){
				$_SESSION['flag'] = true;
				header('location: ../view/home.php');
			}
			else{
				echo "Incorrect username or password";
			}
		}
	}
?>