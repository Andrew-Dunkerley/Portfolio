<?php
include "head.php";
include "connection.php";
//ob_start();

$passwordencryption=md5($password);	

$username = trim($_POST['username']);

$password = trim($_POST['password']);


$query= "(SELECT * FROM Users WHERE username = '$username' AND password = '$passwordencryption' )";

$result = mysqli_query($connection, $query) or die("error in the query : $query " . mysqli_error());

$row = mysqli_fetch_assoc($connection, $result);

if ($row = mysqli_fetch_assoc($result)) {
			
			
		
	 	
	 	if ($row['userid'] == 1)
	 	{
			
		$_SESSION['admin'] = "admin";
		header('location:admin.php');
		
	}
	
		$_SESSION['user'] = $username;
		header('location:logoutpage.php');

	} else {
		
		header('location:loginform.php');

	}


?>

