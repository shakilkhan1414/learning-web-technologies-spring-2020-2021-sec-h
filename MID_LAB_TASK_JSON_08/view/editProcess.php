<?php 
        session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $email=$_REQUEST['email'];
        
        if(file_exists("../controller/list.json"))
				{
					$data=file_get_contents("../controller/list.json");
					$array_data=json_decode($data,true);

                    for ($i=0; $i < sizeof($array_data); $i++)
                    {
                        if($array_data[$i]['id']==$_SESSION['id']){
                            $array_data[$i]['username']=$username;
                            $array_data[$i]['password']=$password;
                            $array_data[$i]['email']=$email;
                            $final_data=json_encode($array_data);

                            if(file_put_contents("../controller/list.json",$final_data))
                            {
                                header('location: user_list.php');
                            }
                            else{
                                echo "Something went wrong,try again ...";
                            }

                        }
                    }

				}
				else{
					echo "Storage file doesn't exist ...";
				}




    }

?>