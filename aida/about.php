<?php

include "connection.php";
include 'head.php';
include "leftnav.php";
 ?>

<html>


  <body>
  
<div class = "container"  class = "sixteen columns" align = "center">

                        
    <div id="map-canvas" align ="center">
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

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);

 marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content: "Leeds Beckett University"
  });
 


marker.setMap(map);
 
 
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
  
    </div>
    
    </br>
    </br>
    
    
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
                        width: 800px;
                        
                        }
                      
                        
                        </style>

                        <body>
                        <div align = "center"> </div>
                        <div id="flip"  >Show/Hide Current location Information</div>
                        
                        <div id="panel" >
                        
    <p id="demo">Click the button to get your current position.</p>

<button onclick="getLocation()">Show</button>

<div id="mapholder"></div>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=600x400&sensor=false";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

    </div>
    
    </br>
    </br>
    
<div class = "three.columns">
<div class = "one-third column">


 <h3> Weather Data </h3>
 
<form method="POST" action="about.php">
<input type="text" name="city" value= 'city'/>
<input type="submit" name="submit" value="submit" />
</form>
<?php $city=$_POST['city'];

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script>

jQuery(document).ready(function($) {

  $.ajax({
  
  url : "http://api.wunderground.com/api/5e8af95dbdebbd73/geolookup/conditions/forecast/q/UK/<?php echo $city; ?>.json", 
  
  dataType : "jsonp",
  
  success : function(parsed_json){
  
  var location = parsed_json["location"]["city"];
  
  var temp_f = parsed_json["current_observation"]["temp_f"];
  
  alert("Current temperature in " + location + " is: " + temp_f);
  
      
  }
  });
});

</script>



    </div>
  
  <div class = "one-third column">

<video id="video" width="320" controls autobuffer>
       <source src="assets/videos/dumbwaystodie.mp4" type="video/mp4" /> 
  Your browser does not support the video tag
    </video>

  </br>
</br>
<div align ="center">
    <!-- some actions from Javascript -->
    <button id="playv">Play</button>
    <button id="pausev">Pause</button>
    <button id="durationv">Show duration</button>
    
    <div id="duration-logv"></div>
    </div>
    <script>
      var movie = document.getElementById('video');
      document.getElementById('playv').addEventListener('click', function() { movie.play(); }, false);
      document.getElementById('pausev').addEventListener('click', function() { movie.pause(); }, false);
      document.getElementById('durationv').addEventListener('click', function() { document.querySelector('#duration-logv').textContent = movie.duration; }, false);
    </script>

 </div>

<div class = "one-third column">

    <audio id="audio" controls autobuffer>
      <source src="http://www.seamstressfortheband.org/wp-content/uploads/2010/12/19-Tomorrow-Is-A-Long-Time.mp3" type="audio/mpeg" />
   Your browser doesnt support this audia file
    </audio>
  </br>
    <!-- some actions from Javascript -->
    <div align ="center">
    <button id="playa">Play</button>
    <button id="pausea">Pause</button>
    <button id="durationa">Show duration</button>
  
    <div id="duration-loga"></div>
      </div>
    <script>
      var song = document.getElementById('audio');
      document.getElementById('playa').addEventListener('click', function() { song.play(); }, false);
      document.getElementById('pausea').addEventListener('click', function() { song.pause(); }, false);
      document.getElementById('durationa').addEventListener('click', function() { document.querySelector('#duration-loga').textContent = song.duration; }, false);
    </script>
  </div>
  

</div>
</br>
</br>
<div class = "one-third column">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script> 
                    $(document).ready(function(){
                     $("#flip1").click(function(){
                     $("#panel1").slideToggle("slow");
                         });
                            });
                        </script>
 
                        <style> 
                         #flip1
                            {
                        padding:5px;
                        text-align:center;
                        color: black;
                        background-color:white;
                        width: 300px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel1
                        {
                        
                        padding:50px;
                        display:none;
                        
                        }
                        </style>
 
                        <div id="flip1" > Leeds Beckett Information</div>
                        <div id="panel1" align = "center" >

<?php
echo "Leeds becket university, Onced named Leeds metroploitan university until 2014. Regarded very highley for its involvment in sports and sports related activites."

?>


</div>
</div>

</div>
</body>
</body>


</html>




<!-- End Document
================================================== -->
<footer>

<?php include 'footer.php'; ?>

</footer>