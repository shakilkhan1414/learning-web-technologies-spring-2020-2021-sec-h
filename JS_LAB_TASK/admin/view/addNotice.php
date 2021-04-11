<?php 
    require_once "../../database/connection.php";

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $notice=$_REQUEST['notice'];
         $date=Date("Y-m-d");

         if(empty($notice)){
            $error="*All fields are required!";
         }
         else{
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
                        if(move_uploaded_file($tmp_name,"../../img/notice/".$new_img_name)){
                            $conn = getConnection();
                            $sql="insert into notice values('','{$notice}','{$date}','{$new_img_name}')";
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
     }
?>
<a href="dashboard.php">Home</a>
    <br><br>
    
<h2>Add Notice</h2>
<form method="post" enctype="multipart/form-data">
<?php 
    if(isset($success)){
        echo "<span>$success</span><br>";
    }
    else if(isset($error)){
        echo "<p>$error</p><br>";
    }
?>
        Notice Content: <textarea name="notice" cols="40" rows="10"></textarea>

        <br><br>
        Notice Image: <input type="file" name="image">
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

