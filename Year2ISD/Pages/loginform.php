

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Products</title>
		<meta charset="utf-8" />
		<link href="../css/my_design.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="../css/homepage.css" media="screen" rel="stylesheet" type="text/css"/>
		<link href="../css/bootstrap.css" media="screen" rel="stylesheet" type="text/css"/>
	</head>
	<a href="loginform.php">Login /</a>
	<a href="register.php">Register </a>
	<div id="wrapper">
<?php
include "Connection.php";

?>
		<body>

			<!-- header row -->
			<div class="grid10 first">
				<?php
				include 'Header.php';
				?>
			</div>
			<!-- 2 column row - content and navigation columns -->

			<div class="grid10 first">
				<div align="center" </div>
				
				<div class="container/div>

					<?php

					include 'navigation.php';
					?>

				</div>
			</div>

			<div class="grid10 first">
				<div class="container">
<table>
						

					<section id="sidebar">
	<h3>Login</h3>
	<form method="post" action="./login.php">
		<input type="text" name="username" value=''/>
		<input type="password" name="password" />
		<input type="submit" name="submit" value="submit" />
	</form>
</section>
					<?php
		$email = $_GET['email'];
		$passwd = $_GET['passwd'];
		if (isset($_GET['submit1'])) 
		{
			if (!empty($email) AND !empty($passwd)) {
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				$email = filter_var($email, FILTER_SANITIZE_STRING);
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Email entered: $email<br />";
					echo "Password Entered: $passwd";
				} else {
					echo "The email address is not valid.";
				}
			} elseif (!empty($email) XOR !empty($passwd)) {
				echo "Please fill all fields in the form.";
			} elseif (empty($email) AND empty($passwd)) {
				echo "Please fill in the form.";
			}
		}
		?>	
						
					
						
				
				</div>
				</div>
				</div>
			</table>
			
			<!-- footer row -->

			<div class="grid9 first">
				<footer id="footer">

					<?php

					include 'Footer.php';
					?>

				</footer>
			</div>

		</body>
	</div>

</html>