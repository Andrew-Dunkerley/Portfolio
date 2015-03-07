<?php
include "Connection.php";

?>
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
						<?php

						echo "<h2 align = 'center'>Products available</h2>";
				echo "<br>";
				echo "<table border='10' align = 'center' cellpadding='4' width = 650px height = 400px>
				
				<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				</tr>";
				
				
				$query = "SELECT * FROM Products WHERE Type = 'Console' ORDER BY ProductPrice";
				$result = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($result))
				
				{
					echo "<tr>";
					echo "<td>" . $row['ProductID'] . "</td>";
					echo "<td>" . $row['ProductName'] . "</td>";
					echo "<td>" . "&pound".$row['ProductPrice'] . "</td>";
					echo "<td>" . '<img width=250px height=150px src="../images/' . $row['ProductPic'] . '" />' . "</td>";
					
					echo "</tr>";
					
				
			
				}
				echo "</table>";
						
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