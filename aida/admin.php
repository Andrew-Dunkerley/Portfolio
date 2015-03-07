<?php
include "connection.php";
include "head.php";
include "leftnav.php";
$sessionid = $_SESSION['admin'];
?>


		<body>

					
			
			<div id "admin table" class="sixteen column">
				<div class="container" align="center">
					<?php
					if (isset($_SESSION['admin'])) {
echo "<h2> Users </h2>";
						echo "<table border='10' align = 'center' cellpadding='2' width = 1000px height = 50px>

<tr>
<th>User ID</th>
<th>Username</th>
<th>Password</th>
<th>email</th>
<th> Detail Control </th>
</tr>";

						echo "You are logged in as " . $_SESSION['admin'];

						$query = "(SELECT * FROM Users ORDER BY userid)";

						$result = mysqli_query($connection, $query) or die("error in the query : $query " . mysqli_error());

						while ($row = mysqli_fetch_assoc($result)) {

							echo "<tr>";

							echo "<td>" . $row['userid'] . "</td>";

							echo "<td>" . $row['username'] . "</td>";

							echo "<td>" . $row['password'] . "</td>";

							echo "<td>" . $row['email'] . "</td>";

							echo '<td><a href=amenduserform.php?id=' . $row['userid'] . '>Edit User</a> / <a href=deleteuser.php?id=' . $row['userid'] . '>Delete User</a> / <a href=adduser.php?id=' . $row['userid'] . '>Add User</a>  </td>';

							echo "</tr>";

						}

						echo "</table>";
						echo "<h2> Products </h2>";
						echo "<table border='10' align = 'center' cellpadding='1' width = 1000px height = 50px>

<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Price</th>
<th> Detail Control </th>
</tr>";

						$query = "SELECT * FROM Products ORDER BY ProductPrice";
						$result = mysqli_query($connection, $query);
						while ($row = mysqli_fetch_assoc($result)) {

							echo "<tr>";
							echo "<td>" . $row['ProductID'] . "</td>";
							echo "<td>" . $row['ProductName'] . "</td>";
							echo "<td>" . "&pound" . $row['ProductPrice'] . "</td>";
							echo "<td>" . '<img width=250px height=150px src="assets/images/' . $row['ProductPic'] . '" />' . "</td>";
							echo '<td><a href=amendproductform.php?id=' . $row['ProductID'] . '>Edit Product</a> / <a href=deleteproduct.php?id=' . $row['ProductID'] . '>Delete Product</a> / <a href=addproduct.php?id=' . $row['ProductID'] . '>Add Product</a>';
							
							echo "</tr>";

						}
						echo "</table>";
					} 

					else {
						echo "Acessed Denied";
					}
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