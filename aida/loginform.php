<?php
include "head.php";
include "leftnav.php";
?>

<body>



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
                        width: 300px;
                        
                        }
                        </style>
                        <div align = "center" </div>
                        <div id="flip">Show/Hide Login Page </div>
                        <div id="panel" >
                        <div align = "center" </div>
                        <section id="sidebar">
						<h4>Login</h4>
						<form method="POST" action="login.php">
							<input type="text" name="username" value='Username'/>
							<input type="password" name="password" value='Password' />
							<input type="submit" name="submit" value="submit" />
						</form>
					    </section>
	
				</div>
			</div>
			</div>
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
	