<?php 
    if(isset($_POST['submit']))
	{
        $name= $_POST['name'];
        $email= $_POST['email'];
        $uname= $_POST['uname'];
        $pass= $_POST['pass'];
        $cpass= $_POST['cpass'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (preg_match("/^[A-Za-z][A-Za-z0-9.]*(?:_[A-Za-z0-9]+)*$/", $uname)|| strpos($uname, "-")!== false||strpos($uname, "_")!== false||strpos($uname, " ")!== false && strlen($uname)>=2){
                if(strlen($pass)>=8 && strpos($pass, "@")!== false||strpos($pass, "#")!== false||strpos($pass, "$")!== false||strpos($pass, "%")!== false)
                {
                    if($pass==$cpass){
                        echo "Registration successful !";
                    }
                    else{
                        echo "Password must match ...";
                    }
                }
                else{
                    echo "Invalid password ...";
                }
            }
            else{
                echo "Invalid username ...";
            }
        }else {
            echo("$email is not a valid email address");
        }

        


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
        input[type="text"]{
            float: right;
        }
    </style>
</head>
<body>
        <form method="post">
        <fieldset style="width: 350px; margin:auto;">
            <legend>Registration</legend>

            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="email" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">User Name</label></td>
                <td><input type="text" name="uname" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name="pass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Confirm Password</label></td>
                <td><input type="text" name="cpass" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" id="" checked>
                        <label for="">Male</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Female</label>
                        <input type="radio" name="gender" id="">
                        <label for="">Others</label>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob" id="" required>
                        <label for="">(dd/mm/yyyy)</label>
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2"><hr></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        
        </fieldset>
    
    </form>
    
</body>
</html>