<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			$user = $_SESSION['abc'];

			if($username == $user['username'] && $password == $user['password']){
				
				$_SESSION['status'] = true;
				header('location: home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="post" action="#"> 
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="regCheck.php"> Sign Up</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>