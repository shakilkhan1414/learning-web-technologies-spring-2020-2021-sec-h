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
        
       

        if (preg_match("/^[A-Za-z][A-Za-z0-9.]*(?:_[A-Za-z0-9]+)*$/", $uname)|| strpos($uname, "-")!== false||strpos($uname, "_")!== false||strpos($uname, " ")!== false && strlen($uname)>=2){
            
        }
        else{
            
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
</head>
<body>
    <form method="POST">
        <fieldset style="width: 300px;">
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
</body>
</html>