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
	<title>Email</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Email</legend>
			Email: <input type="email" name="myname" value="">  <br>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>