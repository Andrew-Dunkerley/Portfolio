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
                        #panel,#flip
                            {
                        padding:5px;
                        text-align:center;
                        background-color:white;
                        border:solid 1px black;
                        }
                        #panel
                        {
                        padding:50px;
                        display:none;
                        }
                        </style>
 
                        <div id="flip">Click to slide the panel down or up </div>
                        <div id="panel" align = "center" >
                        
	
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
	