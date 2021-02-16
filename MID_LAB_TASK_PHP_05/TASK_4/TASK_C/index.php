<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Name</legend>
			Gender: <input type="radio" name="myname" value="Male" <?php 
			if(isset($_POST['submit']))
			{
			$gender=$_POST['myname'];
				if($gender=="Male")
				{
					echo "checked";
				}
			}
			
			?>> Male
			<input type="radio" name="myname" value="Female" <?php 
			if(isset($_POST['submit']))
			{
				$gender=$_POST['myname'];
				if($gender=="Female")
				{
					echo "checked";
				}
			}
			
			?>>Female
			<input type="radio" name="myname" value="Others" <?php 
			if(isset($_POST['submit']))
			{
				$gender=$_POST['myname'];
				if($gender=="Others")
				{
					echo "checked";
				}
			}
			
			?>>others 
    
            <br>
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>