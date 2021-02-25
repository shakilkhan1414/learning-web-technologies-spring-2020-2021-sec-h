<?php 
    session_start();
    $user = $_SESSION['current_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Picture</title>
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
 
                        <a style="padding: 5px;" href="#">Logout</a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="height: 400px;">
            <td style="width: 30%;">
                <h3>Account</h3>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="changePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </td>
            <td>
            <form method="post">
        <fieldset style="width: 350px; margin:auto;">
            <legend>Profile Picture</legend>

            <img style="height: 200px;" src="user.png" alt="Profile Picture">
            <input type="file" name="picture" id="picture">
            <hr>
            <input type="submit" name="submit" value="Submit">
        
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