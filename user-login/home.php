<?php
	session_start();
	if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome User</h1>
	<a href="logout.php">Logout</a>
</body>
</html>

<?php		
	}else{
		header('location: loginCheck.php');
	}
?>


