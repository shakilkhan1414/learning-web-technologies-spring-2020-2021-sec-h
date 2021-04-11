<?php 
    session_start();
    require_once "../../database/adminModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $error="";
        
        if(empty($username) || empty($password)){
            $error="*Username and password required!";
            header("location: ../view/index.php?error=$error");
        }
        else{
            if(adminLoginCheck($username,$password)){
                header("location: ../view/dashboard.php");
            }
            else{
                $error="*Invalid username or password!";
                header("location: ../view/index.php?error=$error");
            }
        }
    }
        
        
?>