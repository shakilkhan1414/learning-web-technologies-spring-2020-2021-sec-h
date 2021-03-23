<?php 
    session_start();
    require_once('../model/userModel.php');

        $user=getUserById($_SESSION['id']);
            if($user['user_type']=="admin"){
                header('location: ../view/admin_home.php');
            }
            else if($user['user_type']=="user"){
                header('location: ../view/user_home.php');
            }
?>