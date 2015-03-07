<?php
include 'init.php';
?>

		<?php
//run query and store result

//check result and generate message with code below
$query = "SELECT * FROM Users WHERE username AND password ";
$result = mysqli_query($connection, $query);
						



if ($row = mysqli_fetch_assoc($result)) {
	echo 'you are recognised';
} else {
echo 'not recognised';
} 

?>

