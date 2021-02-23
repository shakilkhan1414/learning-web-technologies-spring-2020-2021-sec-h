<?php 
    if(isset($_POST["submit"]))
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG & PNG files are allowed.";

        }
        if ($_FILES["picture"]["size"] > 4000000) {
            echo "Sorry, your file is too large.";
          }
          else{
              echo "Successful ...";
          }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Picture</title>
</head>
<body>
    <form method="post">
        <fieldset style="width: 300px;">
            <legend>Profile Picture</legend>

            <input type="file" name="picture" id="picture">
            <hr>
            <input type="submit" name="submit" value="Submit">
        
        </fieldset>
    
    </form>
</body>
</html>