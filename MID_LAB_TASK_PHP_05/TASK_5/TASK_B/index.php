<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['degree']))
        {
            foreach($_POST['degree'] as $value){
                echo $value."<br>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>

	<form method="POST">
		<fieldset style="width: 300px;">
			<legend>Degree</legend>
			<input type="checkbox" name="degree[]" value="SSC">SSC
			<input type="checkbox" name="degree[]" value="HSC">HSC
			<input type="checkbox" name="degree[]" value="BSc">BSc
			<input type="checkbox" name="degree[]" value="MSc">MSc
            <br>
            <hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>



