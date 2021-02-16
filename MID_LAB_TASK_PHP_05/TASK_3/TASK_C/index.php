<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Date</legend>
			Date: <input type="date" name="myname" value="<?php
				if(isset($_POST['submit']))
				{
						echo $_POST['myname'];
				}   ?>">  
    
            <br>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>