<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				if(file_exists("list.json"))
				{
					$data=file_get_contents("list.json");
					$array_data=json_decode($data,true);

					$user = [	
						'id'=>rand(0,1000),
						'username'=>$username, 
						'password'=>$password, 
						'email'=> $email
					];

					$array_data[]=$user;
					$final_data=json_encode($array_data);
					if(file_put_contents("list.json",$final_data))
					{
						header('location: ../view/login.html');
					}
					else{
						echo "Something went wrong,try again ...";
					}

				}
				else{
					echo "Storage file doesn't exist ...";
				}

				

				

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>