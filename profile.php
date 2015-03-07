<html>
	<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Andrew Dunkerley's Portfolio</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="aidb/assets/css/base.css">
	<link rel="stylesheet" href="aidb/assets/css/skeleton.css">
	<link rel="stylesheet" href="aidb/assets/css/layout.css">
	<link rel="stylesheet" href="aidb/assets/css/mycss.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="aidb/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="aidb/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="aidb/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="aidb/assets/images/apple-touch-icon-114x114.png">
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header">
<div class = "container" class = "sixteen columns">


		<div id="headimage" class="one column offset-by-one" >
			<a href="portfolio.php "> <img src = "aidb/assets/images/logo3.fw.png " alt width="100px" height= "85px" > </a>
			
		</div>
		
		
		
		<div id="title"  class="four columns offset-by-one " >
			
		<h4> Andrew Dunkerley </h4>
		<p> Emerging Web Devloper</p>
			
		</div>
		

		<script type="text/javascript"
                         src="aidb/assets/js/fade.js">
                            </script>
	
	   
		    	<?php 
		          include "aidb/includes/nav.php";
		        ?>
	      
    
</div>

</div>




<div id = "body" class = "sixteen columns"  >

<div id= "background" >

        <div id="hero" >
        
        <div id = "heroheader" class = "container">
        <h2> Profile Of Andrew Dunkerley</h2>
        <p> Personal details can be found below </p>
        </div>
        
        <div id="contactbutton" class ="container" class = "row">
        <a class=".button-primary" title = "Get In Touch With Me" href="contact.php">Get in touch</a>
        </div>
        </div>
        
<div id = "profilecontainer" class = "container">



<div id="photoreel" class = "nine columns" >

<script src="aidb/assets/js/jquery.min.js"></script>
<script src="aidb/assets/js/jssor.slider.mini.js"></script>





<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 500px; height: 400px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 500px; height: 400px;">
        <div><img u="image" src="aidb/assets/images/andrew.jpg" /></div>
        <div><img u="image" src="aidb/assets/images/DSCF2160.JPG" /></div>
       
        <div><img u="image" src="aidb/assets/images/andrew4.JPG" /></div>
        <div><img u="image" src="aidb/assets/images/IMG_0482.JPG" /></div>
        <div><img u="image" src="aidb/assets/images/DSCF1633.JPG" /></div>
        
    </div>
    <script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>
</div>

</div>


<div id = "profiledata" class = "seven columns">
<h3> Profile </h3>

</br>
<h4> Full Name :</h4>
<p>
 Andrew-David Dunkerley
</p>

<h4>D.O.B :</h4>
<p> 29/04/93 </p>


<h4>Address: </h4>
<p> 10 Beckett's Park Crescent, Ls6 3PQ , Leeds. </p>

<h4> Nationality :</h4>
 <p>UK </p>

<h4> Telephone/mobile :</h4>
 <p>+447734802607</p>


</div>



        
        </div>
         
         
</div>
    
    </div>

<footer>


<?php include "aidb/includes/footer.php"?>
        
    

</footer>
</body>



</html>