<?php 
    if(isset($_POST['submit']))
	{
        $cpass= $_POST['cpass'];
        $npass= $_POST['npass'];
        $rpass= $_POST['rpass'];

        if($cpass==$npass)
        {
            echo "New Password should not be same as the Current Password ...";
        }
        else
        {
            if($npass==$rpass)
            {
                echo "Successful ...";
            }
            else{
                
                echo "New Password must match with the Retyped Password ...";
            }
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
</head>
<body>
    <form method="POST">
        <fieldset style="width: 400px;">
            <legend>CHANGE PASSWORD</legend>
            <table>
                <tr>
                    <td><label for="">Current Password</label></td>
                    <td><input type="text" name="cpass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label for="">New Password</label></td>
                    <td><input type="text" name="npass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><br></td>
                </tr>
                <tr>
                    <td><label for="">Retype New Password</label></td>
                    <td><input type="text" name="rpass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        
        
        </fieldset>
    
    </form>
</body>
</html>