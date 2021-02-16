<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['myname']))
        {
            echo $_POST['myname'];
            echo "<br>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Gender</legend>
			Gender: <input type="radio" name="myname" value="Male"> Male
			<input type="radio" name="myname" value="Female">Female
			<input type="radio" name="myname" value="others">others
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>