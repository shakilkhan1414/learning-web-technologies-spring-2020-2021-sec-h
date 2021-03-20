<?php
	session_start();
	require_once "../db/connection.php";

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{
			if($password == $repass){

				$sql="insert into user (username,email,password) values ('$username','$email','$password')";

				if($result=mysqli_query($con,$sql)){
					header('location: ../view/login.html');
				}
				else{
					echo "Something went wrong,try again later";
				}
			}else{
				echo "password & confirm password mismatch..";
			}
		}
	}
?>