<?php 
    session_start();
    require_once('../model/userModel.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userid=$_REQUEST['userid'];
        $password=$_REQUEST['password'];

        if(validateUser($userid,$password)){
            $user=getUserById($userid);
            if($user['user_type']=="admin"){
                $_SESSION['flag']= true;
                $_SESSION['id']=$userid;
                header('location: ../view/admin_home.php');
            }
            else if($user['user_type']=="user"){
                $_SESSION['flag']= true;
                $_SESSION['id']=$userid;
                header('location: ../view/user_home.php');
            }
        }
        else{
            echo "Incorrect id or password!";
        }
    }
?>