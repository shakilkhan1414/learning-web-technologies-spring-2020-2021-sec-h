<?php 
    require_once('../model/productModel.php');

    if(deleteProduct($_GET['id'])){
        header('location: ../view/product_list.php');
    }else{
        echo "Failed";
    }
?>