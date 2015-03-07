<?php
include "connection.php";
include "head.php";
include "leftnav.php";
?>

		<body>

			
			<!-- 2 column row - content and navigation columns -->


			<div class="sixteen columns">
				<div class="container" align="center">
					<?php

				

					$ProductID = $_GET['id'] ;  //Get the primary key passed

					$query = "SELECT * FROM Products WHERE ProductID = '$ProductID' ";
		

					$result = mysqli_query($connection, $query)  or exit ("Error in query: $query. ".mysqli_error());

					//see if any rows were returned

					if (mysqli_num_rows($result) > 0) {  // yes - Display Form

					$row = mysqli_fetch_assoc($result); //Fetch the row

					//Display the form with original values
					?>

					<form action = 'amendproductaction.php' method="POST">

						<p>
							ID:
							<input  readonly="yes" name="id" type="text" value=<?php print $ProductID; ?> size="3" >

							This has been made 'readonly' as primaty key cannot be amended.(Don't usually display this field)
						</p>

						<p>
							Product Name:
							<input type="text" name="ProductName" value=<?php print $row["ProductName"] ?> >
						</p>

						<p>
							Product Price:
							<input type="text" name="ProductPrice" value=<?php print $row["ProductPrice"] ?> >
						</p>

						<p>
							Product Pic:

							<input type="text" name="ProductPic" value=<?php print $row["ProductPic"] ?> >

						</p>
						
						<p>
							Product Type:
							<input type="text" name="Type" value=<?php print $row["Type"] ?> >

						</p>

						<p>
							<input type="submit" value="Update Details" name="submit" >
						</p>

					</form>

					<?php

					} //End if rows returned

					//No rows returned

					else  print "No records were found";
					?>
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
	</div>

</html>
