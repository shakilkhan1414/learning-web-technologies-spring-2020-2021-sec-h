<?php 
    if(isset($_POST['submit']))
	{
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        $array_uname=str_split($uname);

        if (ctype_alnum($uname)||strpos($uname, "-")!== false||strpos($uname, "_")!== false||strpos($uname, " ")!== false && strlen($uname)>=2) {
            if(strlen($password)>=8 && strpos($password, "@")!== false||strpos($password, "#")!== false||strpos($password, "$")!== false||strpos($password, "%")!== false)
            {
                echo "Login Successful ...";
            }
            else{
                echo "Invalid password ...";
            }
        } else {
            echo "Invalid username ...";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <table border="1px" style="border-collapse: collapse; width:70%; margin:auto;">
        <tr>
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        <td><img src="logo.png" alt="Logo"></td>
                        <td style="float: right; margin-top:30px;">
                        <a style="padding: 5px;" href="#">Home</a>
                        <a style="padding: 5px;" href="#">Login</a>
                        <a style="padding: 5px;" href="#">Registration</a>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr style="height: 250px;">
            <td colspan="2">
                
            <form method="POST">
        <fieldset style="width: 350px; margin:auto;">
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td><label>User Name</label></td>
                    <td><input type="text" name="uname" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="password" id="" required></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="" id="">
                        <label>Remember Me</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><a href="#">Forgot Password</a></td>
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