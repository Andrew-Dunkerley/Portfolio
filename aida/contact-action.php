<?php
include 'head.php';


include "leftnav.php";
 

?>

<html>
<body>

<div align= "center"> <?php


$today_date = $_POST['datepicker'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$comments = $_POST['comments'];
$age = $_POST['radio'];


$message = "Thankyou for your feedback, we will be in touch very soon reguarding your quiery";


echo "Thankyou for your providing </br>
Date: $today_date </br>
Name: $firstname $lastname </br>
Email: $email </br>
Telephone: $telephone </br>
Comments: $comments </br>
Age: $age</br>

An Email has been sent to the address you provided."; 

?>

</div>

<?php

$msg = $message;
$msg = wordwrap($msg, 70);
mail($email, "My Subject" , $msg);

?>


</body>
</html>

<?php

include 'footer.php';

?>