<?php 
session_start();

	if(isset($_POST['submit'])){
        $cpass=$_REQUEST['cpass'];
        $npass=$_REQUEST['npass'];
		$rpass=$_REQUEST['rpass'];

		$data = file_get_contents("../json/user_list.json");
        $user = json_decode($data, true);

                    for ($i=0; $i < sizeof($user); $i++){ 
                        if( $_SESSION['id']==$user[$i]['id']){
							$pass=$user[$i]['password'];
							if($pass==$cpass){
								if($npass==$rpass)
								{	
									$user[$i]['id']['password']=$npass;
									$final_data=json_encode($user);
									if(file_put_contents("../json/user_list.json",$final_data))
										{
											header('location: login.html');
										}
										else{
											echo "Something went wrong,try again ...";
										}
								}
								else{
									echo "password should match";
								}
							}
							else{
								echo "current password not matched";
							}
							
						}
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
						<a href="users_home.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>