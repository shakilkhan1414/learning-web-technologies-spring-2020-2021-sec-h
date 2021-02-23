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
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">User Name</label></td>
                <td><input type="text" name="uname" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" name="pass" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td><label for="">Confirm Password</label></td>
                <td><input type="text" name="cpass" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" id="">
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
                        <input type="date" name="" id="">
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