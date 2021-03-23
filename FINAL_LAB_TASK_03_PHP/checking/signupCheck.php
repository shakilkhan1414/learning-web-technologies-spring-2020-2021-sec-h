<?php 

    require_once('../model/userModel.php');

    function nameCheck($inputName){
        if($inputName>='A' && $inputName<='Z' || $inputName>='a' && $inputName<='z')
        { return true; }
        else{ return false; }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $password=$_REQUEST['password'];
        $repassword=$_REQUEST['repassword'];
        $email=$_REQUEST['email'];
        $user_type=$_REQUEST['user_type'];
        
        if(nameCheck($name)){
                if($password==$repassword){
                            $user = [	
                                'id'=>$id,
                                'name'=>$name, 
                                'password'=>$password, 
                                'email'=>$email, 
                                'user_type'=> $user_type
                            ];
                        $status=insertUser($user);
                        if($status){
                            header('location: ../view/login.html');
                        }
                        else{
                            echo "Username already taken!";
                        }
                }
                else{
                    echo "Password should match ...";
                }
        }
        else{
            echo "Invalid Name ...";
        }
    }

?>