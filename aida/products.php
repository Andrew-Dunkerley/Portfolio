<?php
include "connection.php";
include "head.php";
include "leftnav.php";
$cat = $_GET['cats'];
?>


		<body>

			<!-- header row -->
			
			<!-- 2 column row - content and navigation columns -->

			

				<div class="sixteen columns"> <div class="container" align = "center">
				<table>

				<?php

				echo "<h2 align = 'center'>Products available</h2>";

				echo "<br>";
				echo "<table border='10' align = 'center' cellpadding='2' width = 600px height = 50px>

				<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				</tr>";
				?>

				<a href="products.php?cats=All">All   </a>

				<?php

				if ($cat == "All") {
					$query = "SELECT * FROM Products ORDER BY ProductPrice";
					$result = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($result)) {
							
						echo "<tr>";
						echo "<td>" . $row['ProductID'] . "</td>";
						echo "<td>" . $row['ProductName'] . "</td>";
						echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
						echo "<td>" . '<img width=250px height=150px src=" assets/images/' . $row['ProductPic'] . '" />' . "</td>";

						echo "</tr>";

					}
				}
				?>

				<?php 
				
				?>

				<a href="products.php?cats=Console"> Consoles </a>

				<?php
				if ($cat == "Console") {

					$query = "SELECT * FROM Products WHERE Type = 'Console' ORDER BY ProductPrice";

					$result = mysqli_query($connection, $query);

					while ($row = mysqli_fetch_assoc($result)) {

						echo "<tr>";
						echo "<td>" . $row['ProductID'] . "</td>";
						echo "<td>" . $row['ProductName'] . "</td>";
						echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
						echo "<td>" . '<img width=250px height=150px src="assets/images/' . $row['ProductPic'] . '" />' . "</td>";

						echo "</tr>";

					}

				}
				?>

				<a href="products.php?cats=Game"> Games </a>

				<?php
				if ($cat == "Game") {

					$query = "SELECT * FROM Products WHERE Type = 'Game'ORDER BY ProductPrice";

					$result = mysqli_query($connection, $query);

					while ($row = mysqli_fetch_assoc($result)) {

						echo "<tr>";
						echo "<td>" . $row['ProductID'] . "</td>";
						echo "<td>" . $row['ProductName'] . "</td>";
						echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
						echo "<td>" . '<img width=250px height=150px src="assets/images/' . $row['ProductPic'] . '" />' . "</td>";

						echo "</tr>";

					}

				}
				?>

				<a href="products.php?cats=Clothes"> Clothes </a>

				<?php
				if ($cat == "Clothes") {

					$query = "SELECT * FROM Products WHERE Type = 'Clothes'ORDER BY ProductPrice";

					$result = mysqli_query($connection, $query);

					while ($row = mysqli_fetch_assoc($result)) {

						echo "
				<tr>
				";
						echo "<td>" . $row['ProductID'] . "</td>";
						echo "<td>" . $row['ProductName'] . "</td>";
						echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
						echo "<td>" . '<img width=250px height=150px src="assets/images/' . $row['ProductPic'] . '" />' . "</td>";

						echo "
				</tr>";

					}

				}
				?>
</table>
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

</html>