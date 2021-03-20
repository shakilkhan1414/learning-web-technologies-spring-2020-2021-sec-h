<?php 
    require_once('../model/userModel.php');

    if(deleteUser($_GET['id'])){
        header('location: ../view/user_list.php');
    }else{
        echo "Failed";
    }
    



?>