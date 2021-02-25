<?php 
    session_start();
    $user = $_SESSION['current_user'];

    if(isset($_POST['submit']))
	{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];

        if(ctype_alnum($name)||strpos($name, " ")!== false){
            if (strpos($email, "@")!== false && strpos($email, ".")!== false) {
                $_SESSION['current_user']['name']=$name;
                $_SESSION['current_user']['email']=$email;
                $_SESSION['current_user']['gender']=$gender;
                $_SESSION['current_user']['dob']=$dob;
                header("location:viewProfile.php");
 
            }else {
                echo("$email is not a valid email address");
            }
        }
        else{ 
            echo "Invalid name ...";
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
    <style>
        li{
            padding: 3px;
        }
    </style>
</head>
<body>
    <table border="1px" style="border-collapse: collapse; width:70%; margin:auto;">
        <tr>
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        <td><img src="logo.png" alt="Logo"></td>
                        <td style="float: right; margin-top:30px;">
                        <a style="padding: 5px;" href="#">Loged in as <?php echo $user['name']; ?> </a>
 
                        <a style="padding: 5px;" href="logoutProcess.php">Logout</a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="height: 300px;">
            <td style="width: 30%;">
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="changePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="logoutProcess.php">Logout</a></li>
                </ul>
            </td>
            <td>
            <form method="POST">
        <fieldset style="width: 400px; margin:auto;">
            <legend>Edit Profile</legend>
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" value="<?php echo $user['name']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="email" name="email" value="<?php echo $user['email']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input type="radio" name="gender" <?php 
                            $gender=$user['gender'];
                            if($gender=="Male")
                            {
                                echo "checked";
                            }
                        ?>>
                        <label for="">Male</label>
                        <input type="radio" name="gender" <?php 
                            $gender=$user['gender'];
                            if($gender=="Female")
                            {
                                echo "checked";
                            }
                        ?>>
                        <label for="">Female</label>
                        <input type="radio" name="gender" <?php 
                            $gender=$user['gender'];
                            if($gender=="Others")
                            {
                                echo "checked";
                            }
                        ?>>
                        <label for="">Others</label></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Date of Birth</label></td>
                    <td>
                        <input type="date" name="dob" value="<?php echo $user['dob']; ?>">
                        <label for="">(dd/mm/yyyy)</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
 
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>

            
            </table>
        </fieldset>
    
    </form>
            </td>
        </tr>
        <tr>
        <td colspan="2">
            <p style="text-align: center;">Copyright &copy; 2021</p>
        </td>
        </tr>
    </table>
</body>
</html>