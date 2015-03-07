<?php 
include ("connection.php");

// if id provided, then delete that record

$id = $_GET['id'];

// create query to delete record

$query = "DELETE FROM Users WHERE userid = '$id'";

$result = mysqli_query($connection, $query) or exit("Error in query: $query. " . mysqli_error($connection));

// see if any rows were affected

if (mysqli_affected_rows($connection) > 0) {

//If so , return to calling page(stored in the server variables as HTTP_REFERER

header("Location:admin.php");

} else {

// print error message

echo "Error in query: $query. " . mysqli_error($connection);

exit ;

}
?>