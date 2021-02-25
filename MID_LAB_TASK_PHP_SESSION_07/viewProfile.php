<?php 
    session_start();
    $user = $_SESSION['current_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
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
        <tr style="height: 350px;">
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
            <form method="POST">
        <fieldset style="width: 600px; margin:auto;">
            <legend><h3>Profile</h3></legend>
            <table style="width: 500px; margin:auto;">
                <tr>
                <td style="width: 80%;">
                    <table style="width: 70%;">
                    <tr>
                        <td><label>Name: </label></td>
                        <td><label><?php 
                            echo $user['name'];
                        ?></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td><label>Email: </label></td>
                        <td><label><?php 
                            echo $user['email'];
                        ?></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td><label>Gender: </label></td>
                        <td><label><?php 
                            echo $user['gender'];
                        ?></label></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td><label>DOB: </label></td>
                        <td><label><?php 
                            echo $user['dob'];
                        ?></label></td>
                    </tr>
                    </table>
                </td>
                <td>
                    <img style="height: 150px;" src="user.png" alt="">
                    <a style="margin-left: 50px;" href="changePicture.php">Change</a>
                </td>
                </tr>
                <tr>
                <td colspan="2"><hr></td>
                </tr>
                <tr>
                <td colspan="2">
                    <a href="editProfile.php">Edit Profile</a>
                </td>
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