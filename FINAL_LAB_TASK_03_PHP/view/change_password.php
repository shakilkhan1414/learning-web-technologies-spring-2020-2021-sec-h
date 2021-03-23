<?php 
session_start();
require_once('../model/userModel.php');

	if(isset($_POST['submit'])){
        $cpass=$_REQUEST['cpass'];
        $npass=$_REQUEST['npass'];
		$rpass=$_REQUEST['rpass'];
		$user=getUserById($_SESSION['id']);
		if($user['password']==$cpass){
			if($npass==$rpass){
				if(changePassword($_SESSION['id'],$npass)){
					header("location: ../checking/homeCheck.php");
				}
			}
			else{
				echo "Password should match!";
			}
		}
		else{
			echo "Incorrect current password!";
		}
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
						<a href="../checking/homeCheck.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>