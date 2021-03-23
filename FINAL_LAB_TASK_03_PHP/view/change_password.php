<?php 
session_start();

	if(isset($_POST['submit'])){
        $cpass=$_REQUEST['cpass'];
        $npass=$_REQUEST['npass'];
		$rpass=$_REQUEST['rpass'];

		
				}

?>

<center>
	<form method="POST">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="cpass" /><br />
						New Password<br />
						<input type="password" name="npass" /><br />
						Retype New Password<br />
						<input type="password" name="rpass"/>								
						<hr />
						<input type="submit" value="Change" name="submit" />     
						<a href="users_home.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>