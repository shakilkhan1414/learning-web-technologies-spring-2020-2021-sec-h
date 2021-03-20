<?php 
    require_once('../model/userModel.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user=[
            'id'=> $_REQUEST['id'],
            'username'=> $_REQUEST['username'],
            'email'=> $_REQUEST['email'],
            'password'=> $_REQUEST['password']
        ];

        if(updateUser($user)){
            header('location: ../view/user_list.php');
        }
        else{
            echo "Failed";
        }
    }
    
?>