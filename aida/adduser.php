<?php
include 'head.php';
			
include "connection.php";
$passwordencryption = md5($password);
?>
	

	

					<?php

					include 'leftnav.php';
					?>
		



	            <div class="sixteen columns">
				<div class="container">

                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script> 
                    $(document).ready(function(){
                     $("#flip").click(function(){
                     $("#panel").slideToggle("slow");
                         });
                            });
                        </script>
 
                        <style> 
                        #flip
                            {
                        padding:5px;
                        text-align:center;
                        color: black;
                        background-color:white;
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 400px;
                        
                        }
                        </style>

                        <body>
                        <div align = "center" </div>
                        <div id="flip"  >Show/Hide User Update Form</div>
                        
                        <div id="panel" >

                    <div align = "center">
                    <form method="POST" action="register.php">
					
					<legend>
					<h4> Please Register a new user </h4>
				    </br>
					</legend>

					<label for="username">Username:</label>
					<input type="text" name="username" />

					<label for="password">Password:</label>
					<input type="text" name="password" />

					<label for="email">Email:</label>
					<input type="text" name="email" />
					
					<label for="confirm-email">Confirm Email:</label>
					<input type="text" name="confirm-email" />
				    
                    
					<br/>
					<input type="submit" value="Submit"/>
					<input type="reset" value="Clear" />
				
					</form>
					</div>
					
					
					
						<?php
					$username = trim($_POST['username']);

					$password = trim($_POST['password']);

					$email = trim($_POST['email']);
					
					$confirm = trim($_POST['confirm-email']);

					if (empty($username) && empty($password) && empty($email) && empty($confirm)) {
						echo "Please Fill in the Form";
					} else if (empty($username) || !isset($username)) {
						echo "Please enter a username";
						$username = htmlentities(strip_tags($username));
					
					} else if (strlen($username) < 3 OR strlen($username) > 20){
						echo "please enter username between 3-20 characters long";
					

					}else if (empty($password) || !isset($password)) {
						echo "Please enter a password";
						$password = htmlentities(strip_tags($password));
					
					}else if (strlen($password) < 3 OR strlen($password) > 20) {
						echo "please enter a password between 3-20 character";

					}else if (empty($email) || !isset($email)) {
						echo "Please enter a email";
						$email = htmlentities(strip_tags($email));
						
					} else if (empty($confirm) || !isset($confirm)){
				
				        echo "please Enter the confirm email";

					} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						echo "please enter a valid email";
					

					} else if ($email != $confirm) 
					{
					    
					    echo "Confirm Email was not the same as Email";
					}	
					
					else {

						$query = "INSERT INTO Users (username, password, email) VALUES ( '$username' , '$passwordencryption', '$email' )";

						$result = mysqli_query($connection, $query);
					
						echo "Congratulations you have just Registered, to proceed Login"

						?>

						<h6 align ="center" ><a href="loginform.php">Login</a></h6>

					<?php
					}
					?>

			
				</div>
				</div>
					</div>
                </div>
                    <div class="sixteen columns">
				    <footer id="footer">

					<?php

					include 'footer.php';
					?>
				</footer>
			</div>

</body>



