<?php 
    session_start();
    $user = $_SESSION['current_user'];
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
 
                        <a style="padding: 5px;" href="#">Logout</a>
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
                    <li><a href="">Logout</a></li>
                </ul>
            </td>
            <td>
            <form method="POST">
        <fieldset style="width: 400px; margin:auto;">
            <legend>Edit Profile</legend>
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="email" name="email" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input type="radio" name="gender" id="" checked>
                        <label for="">Male</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Female</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Others</label></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><label>Date of Birth</label></td>
                    <td>
                        <input type="date" name="" id="">
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