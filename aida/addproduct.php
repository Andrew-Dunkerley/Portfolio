<?php
include "connection.php";
include "head.php";
include "leftnav.php";
include "upload.php";
$passwordencryption = md5($password);
?>


		<body>

			<!-- header row -->
			

			<div class="sixteen columns">
				<div class="container">
					<div align="center">
					

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
 
                        <div id="flip">Hide/Show </br> Add Product Form</div>
                        <div id="panel" align="center">
                       	
					<form method="POST" action="addproduct.php" >
				
					
					Please Enter the New Product Details
					</br>
					</br>

					<label for="ProductName">Product Name: </label>
					<input type="text" name="ProductName" />

					<label for="ProductPrice">Product Price: </label>
					<input type="text" name="ProductPrice" />

					<label for = "fileupload">Select Product image to upload:</label>
                    <input type="file" name="fileupload" id="fileupload">
                    
					
					<label for="Type">Type: </label>
					<input type="text" name="Type" />

					<br/>
					<input type="submit" value="Submit" />
					<input type="reset" value="Clear" />
					
					</form>

					<?php
					
					$ProductName = trim($_POST['ProductName']);

					$ProductPrice = trim($_POST['ProductPrice']);

					$ProductPic = trim($_POST['fileupload']);
					
					$Type = trim($_POST['Type']);

					if (empty($ProductName) && empty($ProductPrice) && empty($ProductPic) && empty($Type)) {
						echo "Please Fill in the Form";
					} else if (empty($ProductName) || !isset($ProductName)) {
						echo "Please enter a Product Name";
						$ProductName = htmlentities(strip_tags($ProductName));
					} else if (empty($ProductPrice) || !isset($ProductPrice)) {
						echo "Please enter a Product Price";
						$ProductPrice = htmlentities(strip_tags($ProductPrice));
					} else if (empty($Type) || !isset($Type)) {
						echo "Please enter a Product Type";
						$Type = htmlentities(strip_tags($Type));
					} else {

						$query = "INSERT INTO Products (ProductName, ProductPrice, ProductPic, Type) VALUES ( '$ProductName' , '$ProductPrice', '$ProductPic', '$Type' )";

						$result = mysqli_query($connection, $query);
					}
					?>

				</div>
			</div>
  
				</div>
			</div>
				</body>

			<!-- footer row -->

			<div class="sixteen columns">
				<footer id="footer">

					<?php

					include 'footer.php';
					?>
				</footer>
			</div>

	
	

</html>
