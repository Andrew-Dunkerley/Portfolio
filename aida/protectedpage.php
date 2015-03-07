<?php
include "head.php";
include "connection.php";
include "leftnav.php";
$sessionid = $_SESSION['user'];
?>

		<body>

			<!-- header row -->
			<div class="sixteen column">
				
			</div>
			<!-- 2 column row - content and navigation columns -->

			<div class="sixteen column">
				<div class="container">

					

				</div>
			</div>

			<div class="sixteen column">
				<div class="container" align="center">

					<?php

					if (isset($_SESSION["user"])) {
						echo "<table border='10' align = 'center' cellpadding='2' width = 600px height = 50px>

<tr>
<th>User ID</th>
<th>Username</th>
<th>Password</th>
<th>email</th>
<th> Detail Control </th>
</tr>";

						    echo "You are logged in as " . $_SESSION['user'];

						    $query = "SELECT * FROM Users WHERE username = '" . $sessionid . "'";

						    $result = mysqli_query($connection, $query) or die("error in the query : $query " . mysqli_error());

						    while ($row = mysqli_fetch_assoc($result)) {

							echo "<tr>";

							echo "<td>" . $row['userid'] . "</td>";

							echo "<td>" . $row['username'] . "</td>";

							echo "<td>" . $row['password'] . "</td>";

							echo "<td>" . $row['email'] . "</td>";

							echo '<td><a href=amenduserform.php?id=' . $row['userid'] . '>Edit</a>';
							
							

							echo "</table>";
							

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=544061992405090&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			</br>
	<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div>
</br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=544061992405090&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</br>
<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5" data-colorscheme="dark"></div>

</br>
<a href="logout.php">Logout</a>
<?php


						}

					} else {
						echo "Access Denied";
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

