<?php 
    session_start();
    $user = $_SESSION['current_user'];

    if(isset($_POST['submit']))
	{
        $cpass= $_POST['cpass'];
        $npass= $_POST['npass'];
        $rpass= $_POST['rpass'];

        if($cpass==$user['password']){
            if(strlen($npass)>=8 && strpos($npass, "@")!== false||strpos($npass, "#")!== false||strpos($npass, "$")!== false||strpos($npass, "%")!== false){
                if($npass==$rpass)
                {
                    $_SESSION['current_user']['password']=$npass;
                    header("location: dashboard.php");
                }
                else{
                    echo "Password must match";
                }
            }
            else{
                echo "Invalid Password Format ...";
            }
        }
        else{
            echo "Invalid Current Password";
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
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
        <tr style="height: 270px;">
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
        <fieldset style="width: 350px; margin:auto;">
            <legend><h3>Change Password</h3></legend>
            <table>
                <tr>
                    <td><label>Current Password</label></td>
                    <td><input type="password" name="cpass" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="npass" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label>Retype New Password</label></td>
                    <td><input type="password" name="rpass" id="" required></td>
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