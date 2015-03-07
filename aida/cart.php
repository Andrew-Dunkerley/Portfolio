<?php
include "connection.php";
include "head.php";
include "leftnav.php";

?>


		<body>

					
			
			<div id "cart table" class="sixteen column">
				<div class="container" align="center">
					<?php
					


						echo "</table>";
						echo "<h2> Cart </h2>";
						echo "<table border='10' align = 'center' cellpadding='1' width = 1000px height = 50px>

<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Price</th>
<th> Detail Control </th>
</tr>";

						$query = "SELECT * FROM cart ORDER BY ProductPrice";
						$result = mysqli_query($connection, $query);
						while ($row = mysqli_fetch_assoc($result)) {

							echo "<tr>";
							echo "<td>" . $row['ProductID'] . "</td>";
							echo "<td>" . $row['ProductName'] . "</td>";
							echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
							echo "<td>" . '<img width=250px height=150px src="assets/images/' . $row['ProductPic'] . '" />' . "</td>";
							echo '<td><a href=amendproductform.php?id=' . $row['ProductID'] . '>Edit</a> / <a href=deleteproduct.php?id=' . $row['ProductID'] . '>Delete</a> 
							/ <a href=addproduct.php?id=' . $row['ProductID'] . '>Add</a> / <a href=cart.php?id=' . $row['ProductID'] . '>Add To Cart</a>';
							
							echo "</tr>";
}
						
						echo "</table>";
					

				
					?>
				</div>
			</div>
			<!-- footer row -->

			<div class="sixteen column">
				<footer id="footer">

					<?php

					include 'footer.php';
					?>

				</footer>
			</div>

		</body>
	</div>

</html>