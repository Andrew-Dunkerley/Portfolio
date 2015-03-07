<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home Page</title>
		<meta charset="utf-8" />
		<link href="../css/my_design.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="../css/homepage.css" media="screen" rel="stylesheet" type="text/css"/>
		<link href="../css/bootstrap.css" media="screen" rel="stylesheet" type="text/css"/>
	</head>
<a href="loginform.php">Login /</a>	
<a href="register.php">Register </a>
	<div id="wrapper">

		<body>

			<!-- header row -->
			<div class="grid10 first">
				<?php
				include 'Header.php';
				?>
			</div>
			<!-- 2 column row - content and navigation columns -->
			
			
			<div class="grid10 first">
				<div class="container">
			
			<?php
			
			
			include 'navigation.php';
			
			?>
			
			
			</div>
			</div>
			
			<div class="grid10 first">
				<div class="container">
					<?php
					include 'Content.php';
					
					
					?>
			
			</div>
				</div>
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