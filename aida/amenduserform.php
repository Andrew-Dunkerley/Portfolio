<?php
include "connection.php";
include "head.php";
include "leftnav.php";
?>


		<body>

			<!-- header row -->
			

			<div class="sixteen columns">
				<div class="container" align="center">
					<?php

				

					$id = $_GET['id'] ;  //Get the primary key passed

					$query = "SELECT * FROM Users WHERE userid = '$id' ";

					$result = mysqli_query($connection, $query)  or exit ("Error in query: $query. ".mysqli_error());

					//see if any rows were returned

					if (mysqli_num_rows($result) > 0) {  // yes - Display Form

					$row = mysqli_fetch_assoc($result); //Fetch the row

					//Display the form with original values
					?>

					<form action = 'amenduseraction.php' method="POST">

						<p>
							ID:
							<input  readonly="yes" name="id" type="text" value=<?php print $id; ?> size="3" >

							This has been made 'readonly' as primaty key cannot be amended.(Don't usually display this field)
						</p>

						<p>
							username:
							<input type="text" name="username" value=<?php print $row["username"] ?> >
						</p>

						<p>
							password:
							<input type="text" name="password" value=<?php print $row["password"] ?> >
						</p>

						<p>
							email:

							<input type="text" name="email" value=<?php print $row["email"] ?> >

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

