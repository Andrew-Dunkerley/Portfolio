<?php
include "connection.php";
include "head.php";
include "leftnav.php";
$passwordencryption = md5($password);
?>

		<body>

			<!-- header row -->
			

			<div class="sixteen columns">
				<div class="container" align="center">
					
					<?php 
$id = $_POST['id'];

//Get the primary key passed

$errorString = "";

$username = trim($_POST["username"]);

if (empty($username)) {

$errorString = $errorString . "<br>Please supply a username.";

$username = htmlentities(strip_tags($username));

}

$password = trim($_POST["password"]);

if (empty($password)) {

$errorString = $errorString . "<br>Please supply an password.";

$password= htmlentities(strip_tags($password));

}

$email = trim($_POST["email"]);

if (empty($email)) {

$errorString = $errorString . "<br>Please supply a email.";

$email = htmlentities(strip_tags($email));

}

// check if there were any errors

if (empty($errorString)) {//No errors, update the data



$query = "UPDATE Users SET username = '$username', password =
'$passwordencryption', email = '$email' WHERE userid = '$id'";

$result = mysqli_query($connection, $query);

//if there was a problem - get the error message and go back

if (mysqli_affected_rows($connection) < 0) {

echo "There were errors :<br> $query" .mysql_error();



exit ;

} else {

print "<h3>Success</h3>";

print 'Record with ID=' . $id . ' was updated successfully. Return to <a href="loginform.php" target="parent">Update Details</a>';

}

} else {//There were errors

print '<b>There were errors<br>' . $errorString;

print "There were errors in query: $query. " . mysqli_error($connection);

}
?>
     		
				</div>
			</div>
			<!-- footer row -->

			<div class="sixteen columns">
				<footer id="footer">

					<?php

					include 'footer.php';
					?>

				</footer>
			</div>

		</body>
	</div>

</html>
