<?php
	if(isset($_POST['submit']))
	{
            if(isset($_POST['blood'])){
                echo $_POST['blood'];
            }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Blood Group</legend>
			<label for="">Blood Group</label>
			<select name="blood">
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="O+">O+</option>
				<option value="AB+">AB+</option>
			</select>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
				
		</fieldset>
	</form>
</body>
</html>



