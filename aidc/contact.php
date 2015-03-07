<html>

<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Sealyfe</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="assets/css/skeleton.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/mycss.css">
	<script  src="assets/js/scrollupfade.js"> </script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="aidb/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="aidb/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="aidb/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="aidb/assets/images/apple-touch-icon-114x114.png">
	
</head>

<body>

<div id="header" >

<div class = "container" >

		
			
		
		
		<div id="title" class= "three columns ">
			
		<h4>  Sea-Lyfe </h4>
		<p> Preserving the world, Under the Sea</p>
		
		</div>
	
	
	  
		  <?php
		  
		  include "includes/nav.php"
		  
		  ?>
	      
	      
	      
	      
	      
	      
	      
	  </div> 		
	</div>    
	      
	      <div id = "background" >
	      
	      
	    
	      <div id= "hero" class = "fade" class = "container">
	      
	      <h2> Get in Touch. Help Us Protect Sea-Lyfe </h2>
	  	      
	      </div>
	      

	      
	      
	      
	      
	       <div id="contact" >
	       
	       <div class = "container" >
	   
	        
	             <div id= "contactheader" class = "sixteen columns">
	             
	   <h3> Contact Us </h3>
	   </div>
	            
	            <div id="mcontent" class = "ten columns offset-by-six">
	            
	                     
	       
	            
	            
	            <form action="aidb/includes/contactaction.php" method="POST">
			
<form name="htmlform" method="post" action="contact-action.php">

<table>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

<script>
  
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<tr>
 <td valign="top">
 <label for="datepicker">Todays Date *</label>
<input type="text" name="datepicker" id="datepicker" maxlength="50" size="30">
</td>
</tr>

<tr>

 <td valign="top">
  <label for="first_name">First Name *</label>

  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>

</tr>


 
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>

  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>

<tr>
 
 <td valign="top">
  <label for="email">Email Address *</label>

  <input  type="text" name="email" maxlength="80" size="30">
 </td>
 
</tr>

<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>


<tr>
 <td valign="top">
  <label for="subject">Subject *</label>
 
  <input  type="text" name="subject" maxlength="30" size="30">
 </td>
</tr>


<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 
  <textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 

</tr>

<tr>
 <td colspan="2" align:"center">
  <input type="submit" value="Submit"> <input type="reset" value="Clear" />
 
  </td>

</tr>

</table>

</form>
</div>
	           

	  </div>
	    </div>        
	      
	      
	       
	           
	            
	      
	      


<footer>

       <?php
       
       include "includes/footer.php"
       ?>
</footer>
</div> 

</body>

</html>