<?php 
    require_once('../model/productModel.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(isset($_REQUEST['display'])){
            $product=[
                'id'=> $_REQUEST['id'],
                'name'=> $_REQUEST['name'],
                'buying_price'=> $_REQUEST['buying_price'],
                'selling_price'=> $_REQUEST['selling_price'],
                'displayable'=> 'yes'
            ];
        }
        else{
            $product=[
                'id'=> $_REQUEST['id'],
                'name'=> $_REQUEST['name'],
                'buying_price'=> $_REQUEST['buying_price'],
                'selling_price'=> $_REQUEST['selling_price'],
                'displayable'=> 'no'
            ];
        }

        

        if(updateProduct($product)){
            header('location: ../view/product_list.php');
        }
        else{
            echo "Failed";
        }
    }
    
?>