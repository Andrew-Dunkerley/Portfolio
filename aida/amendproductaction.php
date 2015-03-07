<?php
include "connection.php";
include "head.php";
include "leftnav.php";;
$passwordencryption = md5($password);
?>


	

		<body>

			
			<!-- 2 column row - content and navigation columns -->

			
			<div class="sixteen columns">
				<div class="container" align="center">

					<?php
	$ProductID = $_POST['id'];

	//Get the primary key passed

	$errorString = "";

	$ProductName = trim($_POST["ProductName"]);

	if (empty($ProductName)) {

		$errorString = $errorString . "<br>Please supply a Product name.";

		$ProductName = htmlentities(strip_tags($username));

	}

	$ProductPrice = trim($_POST["ProductPrice"]);

	if (empty($ProductPrice)) {

		$errorString = $errorString . "<br>Please supply a Product Price.";

		$ProductPrice = htmlentities(strip_tags($ProductPrice));

	}

	$ProductPic = trim($_POST["ProductPic"]);

	if (empty($ProductPic)) {

		$errorString = $errorString . "<br>Please supply a Product Pic.";

		$eProductPic = htmlentities(strip_tags($ProductPic));

	}

	$Type = trim($_POST["Type"]);

	if (empty($Type)) {

		$errorString = $errorString . "<br>Please supply a Product Type.";

		$Type = htmlentities(strip_tags($Type));

	}

	// check if there were any errors

	if (empty($errorString)) {//No errors, update the data

		$query = "UPDATE Products SET ProductName = '$ProductName', ProductPrice =
'$ProductPrice', ProductPic = '$ProductPic' , Type = '$Type' WHERE ProductID = '$ProductID'";

		$result = mysqli_query($connection, $query);

		//if there was a problem - get the error message and go back

		if (mysqli_affected_rows($connection) < 0) {

			echo "There were errors :<br> $query" . mysql_error();

			exit ;

		} else {

			print "<h3>Success</h3>";

			print 'Record with ID=' . $ProductID . ' was updated successfully. Return to <a href="admin.php" target="parent">Update Details</a>';

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
