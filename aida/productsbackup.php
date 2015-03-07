	<div  class="container"class="sixteen columns" align = "center" >
				
				<?php
					echo "<h2 align = 'center'>Products available</h2>";
				?>
				</br>
				<a href="products.php?cats=All">&nbsp;All Products &nbsp;</a>
				
                <a href="products.php?cats=Console"> &nbsp;Consoles &nbsp;</a>
                
                <a href="products.php?cats=Game"> &nbsp;Games &nbsp;</a>
                
                <a href="products.php?cats=Clothes"> Clothes </a>
                </br>
				<table>

				<?php

			

				echo "<br>";
			
			
				echo "<table border='10' align = 'center' cellpadding='2' width = 600px height = 50px>

				<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				<th>Cart</th>
				</tr>";
				?>

				
                
                
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
                        echo "<td>" . '<a href=cart.php?id=' . $row['ProductID'] . '>Add To Cart</a>';
						echo "</tr>";

					}
				}
				?>

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
                         echo "<td>" . '<a href=cart.php?id=' . $row['ProductID'] . '>Add To Cart</a>';
						echo "</tr>";

					}

				}
				?>
				
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
                         echo "<td>" . '<a href=cart.php?id=' . $row['ProductID'] . '>Add To Cart</a>';
						echo "</tr>";

					}

				}
				?>

				

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
                        echo "<td>" . '<a href=cartaction.php?id=' . $row['ProductID'] . '>Add To Cart</a>';
						echo "
				</tr>";

					}

				}
				?>
</table>

</div>
