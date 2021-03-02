<?php
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{
			$myfile = fopen('list.json', 'r');
			$data = fread($myfile, filesize('list.json'));

			$user = json_decode($data, true);
			
			for ($i=0; $i < sizeof($user); $i++) { 

				if($username==$user[$i]['username']){
					if($password==$user[$i]['password']){
						$_SESSION['flag'] = true;
						$_SESSION['username']=$user[$i]['username'];
						header('location: ../view/home.php');					
					}
				}
				
				}
				echo "Invalid username or password ...";
			}

		}
?>