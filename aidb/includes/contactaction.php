<html>


	<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Andrew Dunkerley's Portfolio</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../assets/css/base.css">
	<link rel="stylesheet" href="../assets/css/skeleton.css">
	<link rel="stylesheet" href="../assets/css/layout.css">
	<link rel="stylesheet" href="../assets/css/mycss.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="aidb/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="aidb/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="aidb/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="aidb/assets/images/apple-touch-icon-114x114.png">

</head>

<body>

<div id= "aftercontact" class = "container" class = "sixteen columns">


        <div id= "aftercontact" >
        
        <div id = "portfolioreturn">
<a href = "../../portfolio.php"> Back to portfolio</a>
</div>
        <div id="contactresponce" class ="container" class = "row">
        <?php
            $today_date = $_POST['datepicker'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $subject = $_POST ['subject'];
            $comments = $_POST['comments'];
            $age = $_POST['radio'];


$message = "Thankyou for your feedback, we will be in touch very soon reguarding your quiery";


echo "Thankyou for your providing </br>
Date: $today_date </br>
Name: $firstname $lastname </br>
Email: $email </br>
Telephone: $telephone </br>
Subject: $subject </br>
Comments: $comments </br>
Age: $age</br>

An Email has been sent to the address you provided."; 

?>
        </div>
        
        </div>
        








</div>

<?php

$email2="a.dunkerley7462@student.leedsbeckett.ac.uk";
$message2 = ("Date   : ".$today_date. "   Firstname   : ". $firstname. "   Lastname   : ". $lastname.  "   Email  : " . $email .  "   Telephone   : " . $telephone.  "   Subject   : " . $subject . "   Comments   : " . $comments .  "   Age   : " . $age );
$msg = $message;
$msg2 = $message2;
$msg2 = wordwrap($msg2, 70);
$msg = wordwrap($msg, 70);
mail($email, "My Subject" , $msg);
mail($email2,"Customer Feedback", $msg2);
?>


</body>
</html>