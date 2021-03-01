<?php
	session_start();

	if(isset($_POST['submit'])){

		$fname 		= $_POST['fname'];
		$lname 		= $_POST['lname'];
		$email 		= $_POST['email'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$gender     = $_POST['gender'];

		if($fname == "" || $lname == "" || $username == "" || $email == "" || $password == "" || $repass == "" ||  $gender  =="" ){
			echo "invalid information...please try again!";
		}else
		{

			if($password == $repass){
				$user = [
							'fname'		=>$fname,
							'lname'     =>$lname,  
							'username'	=>$username, 
							'email'		=>$email,
							'password'	=>$password,
							'gender'    =>$gender
						];

				$_SESSION['abc'] = $user;
				header('location: loginCheck.php');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registraion Page</title>
</head>
<body>

	<form method="post" action="#">
		<fieldset>
			<legend>Registraion</legend>
			<table>
				<tr>
					<td> FirstName </td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td> LastName </td>
					<td><input type="text" name="lname"></td>
				</tr>

				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Re-type password</td>
					<td><input type="password" name="repass"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value='Male'>Male
					<input type="radio" name="gender" value='Female'>Female
					<input type="radio" name="gender" value='Others'>Others</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="loginCheck.php">Sign In</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>