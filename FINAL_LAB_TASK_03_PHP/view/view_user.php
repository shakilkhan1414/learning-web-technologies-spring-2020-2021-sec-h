<?php 
    require_once('../model/userModel.php');
    $user=getAllUser();
?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>User_type</td>
        </tr>
		
        <?php 
            for ($i=0; $i < sizeof($user); $i++) {

				$id=$user[$i]['id'];
				$name=$user[$i]['name'];
                $email=$user[$i]['email'];
				$user_type=$user[$i]['user_type'];
                echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$user_type</td>
                </tr>";
            }
        
        
        ?>
			<td colspan="3" align="right">
				<a href="../checking/homeCheck.php">Go Home</a>
			</td>
		</tr>
	</table>			
</center>