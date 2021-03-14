<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userid=$_REQUEST['userid'];
        $password=$_REQUEST['password'];

        if(file_exists("../json/user_list.json"))
			{
				if(!empty($userid) && !empty($password)){
                    $data = file_get_contents("../json/user_list.json");
                    $user = json_decode($data, true);

                    for ($i=0; $i < sizeof($user); $i++){ 
                        if($userid==$user[$i]['id']){
                            if($password==$user[$i]['password']){
                                $_SESSION['flag'] = true;
                                $_SESSION['id']=$user[$i]['id'];
                                $_SESSION['name']=$user[$i]['name'];
                                
                               if($user[$i]['user_type']=='admin'){
                                header('location: ../view/admin_home.php');
                               }					
                               else{
                                header('location: ../view/user_home.php');
                               }
                            }
                        }
                    }
                        echo "Invalid username or password ...";
                }
                else{
                    echo "Username and password is required ...";
                }
			}
            else{
                echo "Storage file doesn't exist ...";
            }
        }
        
?>