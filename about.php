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


<div id = "body"  class = "sixteen columns">

<div id= "background">



        <div id="hero" class = "sixteen columns">
        
        <div id = "heroheader" >
        <h2> About Andrew Dunkerley </h2>
        <p> Below is information on Andrew</p>
        </div>
        <div id="contactbutton" >
        <a class=".button-primary" title = "Get In Touch With Me" href="contact.php">Get in touch</a>
        </div>
        
        </div>
         
         
		
<div id = "mapandref" class = "container">
	
	 <div id="map-canvas" class="two-thirds column" alt width = "300px" hight = "400px">
                         <style type="text/css"></style>
                        <script type="text/javascript"
                         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnfUyFMvJyr8NRRgwel8vQjDVtuQnjXz4">
                            </script>
                             <script type="text/javascript">
                          <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(53.827874,-1.593211);
var myCenter2 = new google.maps.LatLng(53.830601, -1.487392)

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:11,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var mapProp2 = {
  center:myCenter2,
  zoom:11,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp, mapProp2);

 marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });
  
  marker2=new google.maps.Marker({
  position:myCenter2,
  animation:google.maps.Animation.BOUNCE
  });


marker.setMap(map);
marker2.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content: "Andrew is currentley at Leeds Beckett University studying Computer Forensics"
  });
  
  var infowindow2 = new google.maps.InfoWindow({
  content: "Andrew volunteers his time to codeclub.org.uk to teach the students of Roundhay Primary School about code."
  });
  
  
 
 
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  
  });
  
  google.maps.event.addListener(marker2, 'click', function() {
  infowindow2.open(map,marker2);
  
  });
  
  
  
}



google.maps.event.addDomListener(window, 'load', initialize);

</script>

  
    </div>
    
    <div id="references" class = "one-third column" >
         
        <div id="referenceheader"  class = "one-third column">  <h2> References </h2> </div>
        

        <div class="one-third column" >
			<h4>Emlyn Butterfield - Course Leader</h4>
			<p>"Andrew has proven himself to be a conscientious and dedicated student, who has a very good rapport with both his peers and staff.
		He has shown that he has an ability to communicate at several levels, from very technical within written work and course presentations, to a simplified view of computing in his teaching of primary school children. This is a difficult skill to achieve and shows Andrew's grasp of the course and computing in general." </p>
			
		</div>
	
        </div>
        </div>
        
        <div id = "aboutandrew" class = "container">
    
		 <div class="one-third column" >
			<h3>Education</h3>
			<p> Andrew is currentley a student at Leeds Beckett University Studying Computer Forensics. He is Currentley finishing his third and final year, and in that time Andrew and aquired a vast understanding of web development as well as Forensic and security techniques. In that time he has developed his skils in this field to allow for independant and professional projects to be accomplished.  </p>
			
		</div>
		
		<div id = "skills" class="one-third column" >
			<h3>Skills in Web Development</h3>
			
			<h4>Front-End Development</h4>
			
			<p> Andrew has developed his understanding of front-end languages such as HTML5 and CSS3 as well as frameworks such as Bootstrap and Skeleton which allows for a professional and responsive design. He has gained experience using other forms of front-end languages just as jquery and Ajax allow for further professional and sophisicated web applications.</p>
			
			<h4>Back-End Development</h4>
			
			<p>Andrew has used programming languages such as php to devlop the back end functionality of his projects.</p>
			
		</div>
		
		
			<div id= "experience" class="one-third column" >
			<h3>Experience</h3>
			
			<h4>2010 - 2012</h4>
			
			<p> Andrew Volunteered as a teaching assistant while studying at Roundhay Sixth Form helping the day to day work of the student from years 7, 8 and 9.</p>
			
			<h4>2014 - Present</h4>
			
			<p>Andrew Currentley volenteers his time while at university to the organsation <a href = "http://codeclub.org.uk">Code Club </a> To teach the student of Roundhay Primary school about code through the software "Scratch".</p>
			
		</div>
		
		
		
 </div>
   
			
     
        
        
    </div>
    
</div>
    

    

<footer>


<?php include "aidb/includes/footer.php"?>
        
    

</footer>
</body>



</html>