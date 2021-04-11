<?php 
    require_once "../../database/connection.php";

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $name=$_REQUEST['name'];
         $quantity=$_REQUEST['quantity'];
         $price=$_REQUEST['price'];
         $description=$_REQUEST['description'];

         if(empty($name) || empty($quantity) || empty($price) || empty($description)){
            $error="*All fields are requiced!";
         }
         else{
             if(ctype_alnum($name)){
                if(is_numeric($quantity)){
                    if(is_numeric($price)){
                        $img_name = $_FILES['image']['name'];
                        $img_size = $_FILES['image']['size'];
                        $tmp_name = $_FILES['image']['tmp_name'];
                                    
                        $img_explode = explode('.',$img_name);
                        $img_ext = end($img_explode);
                    
                        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];
                        if(in_array($img_ext, $extensions) === true){
                            if($img_size > 5242880){
                                $error="*Max upload size is 5 MB!";
                            }
                            else{
                                $time = time();
                                $new_img_name = $time.$img_name;
                                if(move_uploaded_file($tmp_name,"../../img/product/".$new_img_name)){
                                    $conn = getConnection();
                                    $sql="insert into product values('','{$name}','{$quantity}','{$price}','{$description}','{$new_img_name}')";
                                    if($conn->query($sql)){
                                        $success="Sucessfull";
                                    }
                                    else{
                                        $error=$conn->error;
                                    }
                                }  
                            }
                        }
                        else{
                            $error="*Incorrect file format!";
                        }  

                    }
                    else{
                        $error="*Price should be a number!";
                    }
                }
                else{
                    $error="*Quantity should be a number!";
                }
             }
             else{
                $error="*Invalid product name!";
             }
         }
     }
?>

<a href="dashboard.php">Home</a>
    <br><br>
    
<h2>Add Product</h2>
<form method="post" enctype="multipart/form-data">
<?php 
    if(isset($success)){
        echo "<span>$success</span><br>";
    }
    else if(isset($error)){
        echo "<p>$error</p><br>";
    }
?>
        Product Name: <input type="text" name="name">
        <br><br>
        Product Quantity: <input type="text" name="quantity">
        <br><br>
        Product Price: <input type="text" name="price">
        <br><br>
        Product Image: <input type="file" name="image">
        <br><br>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Submit">
</form>
<style>
    span{
        color: green;
    }
    p{
        color: red;
    }
</style>

