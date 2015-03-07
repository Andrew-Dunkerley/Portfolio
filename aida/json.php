    <?php
include "head.php";
include "leftnav.php";

?>

<body>
<div class = "container" class = "sixteencolumns" align = "center">


<?php
include "connection.php";

?>

</br>
<?php

 //build query
$query = 
  "SELECT 
  userid, 
  username, 
  password, 
  email 
  FROM Users ORDER BY userid";

$results = mysqli_query($connection,$query);
?>
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
                        <div align = "center" > </div>
                        <div id="flip"  >Show/Hide JSON Encoded</div>
                        
                        <div id="panel" >
<?php
echo "Data with Json Encoding";
$encodedResults = array();
foreach($results as $row){

    $encode = json_encode($row, true);
    echo '<pre>';print_r($encode); echo '</pre>';

    $encodedResults[] = $encode;
}
 ?>
 </div>
 
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
                        width: 400px;
                        
                        }
                        </style>

                        <body>
                        <div align = "center" > </div>
                        <div id="flip1"  >Show/Hide JSON Decoded</div>
                        
                        <div id="panel1" >
    
    <?php
    echo "Data with no Json encoding";
foreach($encodedResults as $row){
    $decode = json_decode($row, true);
    echo '<pre>'; print_r($decode);'</pre>';
    }


?>
</div>

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
                        width: 400px;
                        
                        }
                        </style>

                        <body>
                        <div align = "center" > </div>
                        <div id="flip2"  >Show/Hide JSON Values</div>
                        
                        <div id="panel2" >

<?php
    
   foreach($encodedResults as $row){
    $decode = json_decode($row, true);
    
    echo "</br>";
    echo $decode['userid'];
    echo "&nbsp";
    echo $decode['username'];
}

  ?>                      
                        
</div>

</div>
</body>



<?php
include "footer.php";
?>