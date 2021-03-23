<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userid=$_REQUEST['userid'];
        $password=$_REQUEST['password'];

        if(validateUser($userid,$password)){
            $user_type=getUserType($userid);
            if($user_type=="admin"){
                header('location: ../view/admin_home.php');
            }
            else if($user_type=="user"){
                header('location: ../view/user_home.php');
            }
        }
    }
        
?>