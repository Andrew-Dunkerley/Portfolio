<?php
include "head.php";
include "leftnav.php";
?>





  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <style>
 
  #droppable1, #droppable2, #droppable3, #droppable4{ width: 204px; height: 155px; padding: 0.5em; float: left; margin: 10px; }
 
  #draggable1, #draggable2, #draggable3, #draggable4{ width: 204px; height: 120px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  
  </style>
  
  <script>
  
  $(function() 
  
  {
    $( "#draggable1" ).draggable({ revert: "invalid" });
   
    
    $( "#droppable1" ).droppable({
      accept: "#draggable1",
      
      //activeClass: "ui-state-hover",
      
      //hoverClass: "ui-state-active",
      
      drop: function( event, ui ) 
      {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "CORRECT!" );
      }
      
      
    });
  });
  
   $(function() 
  
  {
   
     $( "#draggable2" ).draggable({ revert: "invalid" });
     
     
    $( "#droppable2" ).droppable({
      accept: "#draggable2",
      
     // activeClass: "ui-state-hover",
      
      //hoverClass: "ui-state-active",
      
      drop: function( event, ui ) 
      {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "CORRECT!" );
      }
      
      
    });
  });
  
  
   $(function() 
  
  {
    $( "#draggable3" ).draggable({ revert: "invalid" });
   
    
    $( "#droppable3" ).droppable({
      accept: "#draggable3",
      
      //activeClass: "ui-state-hover",
      
      //hoverClass: "ui-state-active",
      
      drop: function( event, ui ) 
      {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "CORRECT!" );
      }
      
      
    });
  });
  
   $(function() 
  
  {
    $( "#draggable4" ).draggable({ revert: "invalid" });
   
    
    $( "#droppable4" ).droppable({
      accept: "#draggable4",
      
      //activeClass: "ui-state-hover",
      
      //hoverClass: "ui-state-active",
      
      drop: function( event, ui ) 
      {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "CORRECT!" );
      }
      
      
    });
  });
  
  </script>
  
<div align = "center">
<?php echo "Match the picture with the corresponding title of the console"; ?> 
</div>

<div class = "container" class = "sixteen columns" align = "center">
 

 
<div id="droppable1" class="ui-widget-header">
  <p>Playstation 4</p>
</div>

<div id="droppable2" class="ui-widget-header">
  <p>Xbox One</p>
</div>

<div id="droppable3" class="ui-widget-header">
  <p>Wii U</p>
</div>

<div id="droppable4" class="ui-widget-header">
  <p>PSvista</p>
</div>



</div>
 
 
 
 <div class = "container" class = "sixteen collumns" align = "center" >
 
 
<div id="draggable2" class="ui-widget-content">
  <div><img u="image" src="assets/images/xboxsmall.png" /></div>
</div>
 
<div id="draggable1" class="ui-widget-content">
  <div><img u="image" src="assets/images/ps4small.png" /></div>
</div>

<div id="draggable4" class="ui-widget-content">
  <div><img u="image" src="assets/images/psvistasmall.png" /></div>
</div>

<div id="draggable3" class="ui-widget-content">
  <div><img u="image" src="assets/images/wiiu.png" /></div>
</div>
</div>

<div class = "container" class = "sixteen collumns" align = "center" >
<p> Go Back when you complete the game<p>
<li><a href="recroom.php">Back to Recreation room</a></li>
</div>





<?php
include "footer.php";
?>