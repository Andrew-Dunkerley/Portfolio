<?php
 include 'head.php';
 include "leftnav.php";
 ?>


<body>



<!---End Of Nav-->

		<div class = "container" align = "center">
		 
		 <div class = "one-third column">
		 
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
                        width: 200px;
                        
                        }
                        </style>
 
                        <div id="flip">Hide/Show OO Initial Test</div>
                        <div id="panel" align = "center" >
                        
      <?php
        // The code below creates the class
        class console {
            // Creating some properties (variables tied to an object)
            
            public $pname;
            public $pprice;
            public $pmake;
            
            // Assigning the values
            public function __construct($pname, $pprice, $pmake) {
              $this->pname = $pname;
              $this->pprice = $pprice;
              $this->pmake = $pmake;
            }
            
            // Creating a method (function tied to an object)
            public function greet() {
              return "Presenting the " . $this->pmake . " " . $this->pname ." ". "Worth only" ." ".  $this->pprice ;
            }
          }
          
        // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $result = new console('playstation 4', '£349', 'sony');
        
        // Printing out, what the greet method returns
        echo $result->greet(); 
        ?>
        </p>
		
		
		
		<li> <a href="testClasses.php">OO Collection Page</a></li>
			
</div>
</div>

 <div class = "one-third column" align = "center">

</br>

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
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel1
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 200px;
                        
                        }
                        </style>
 
                        <div id="flip1">Hide/Show XML Document</div>
                        <div id="panel1" align = "center" >

<?php

echo "Click Here to view the XML Styled document;"
?>
<html>
<li><a href="transform.php">XML Documentation</a></li>
</html>

<?php

echo "Click Here to view the XML Standard document;"
?>

<html>
<li><a href="XML.php">XML Standard Documentation</a></li>
</html>

</div>
</div>

<div class = "one-third column" align = "center">

</br>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script> 
                    $(document).ready(function(){
                     $("#flip2").click(function(){
                     $("#panel2").slideToggle("slow");
                         });
                            });
                        </script>
 
                        <style> 
                        #flip2
                            {
                        padding:5px;
                        text-align:center;
                        color: black;
                        background-color:white;
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel2
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 200px;
                        
                        }
                        </style>
 
                        <div id="flip2">Hide/Show JSON Document</div>
                        <div id="panel2" align = "center" >

<?php

echo "Click Here to view the JSON document;"
?>
<html>
<li><a href="json.php">JSON Documentation</a></li>
</html>

</div>

</div>

</div>

 <div class = "one-third column" align = "center">

</br>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script> 
                    $(document).ready(function(){
                     $("#flip4").click(function(){
                     $("#panel4").slideToggle("slow");
                         });
                            });
                        </script>
 
                        <style> 
                        #flip4
                            {
                        padding:5px;
                        text-align:center;
                        color: black;
                        background-color:white;
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel4
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 200px;
                        
                        }
                        </style>
 
                        <div id="flip4">MVC</div>
                        <div id="panel4" align = "center" >

<?php

echo "Click Here to view the MVC Home page;"
?>
<html>
<li><a href="http://andrewdunkerswebpage.co.uk/MVC/index.php/home">MVC Homepage</a></li>
</html>


</div>


</div>


<!-- End Document
================================================== -->
</body>

<footer>
<?php include 'footer.php'; ?>
</footer>