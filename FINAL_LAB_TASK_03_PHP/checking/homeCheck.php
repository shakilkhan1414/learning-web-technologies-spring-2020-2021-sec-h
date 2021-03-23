<?php 
    session_start();
    require_once('../model/userModel.php');

        $user_type=getUserType($_SESSION['id']);

            if($user_type=="admin"){
                header('location: ../view/admin_home.php');
            }
            else if($user_type=="user"){
                header('location: ../view/user_home.php');
            }
?>