<?php
include "head.php";
include "leftnav.php";
?>
<div class = "container" class1 = "three.columns" >

<div class = "one-third column">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script> 
                    $(document).ready(function(){
                     $("#flip0").click(function(){
                     $("#panel0").slideToggle("slow");
                         });
                            });
                        </script>
 
                        <style> 
                         #flip0
                            {
                        
                        padding:5px;
                        text-align:center;
                        color: black;
                        background-color:white;
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel0
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 300px;
                        
                        }
                        </style>
                         
                        <div id="flip0">Show/Hide Playstation Feed </div>
                        <div id="panel0">
                        
1
</div>
</div>



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
                        width: 150px;
                        border-radius: 16px; /* half of button size + padding */
  -moz-border-radius: 16px;
                        }
                        #panel1
                        {
                        background-color: transparent;
                        padding:50px;
                        display:none;
                        width: 300px;
                        
                        }
                        </style>
                         
                        <div id="flip1" >Show/Hide Xbox Feed </div>
                        <div id="panel1" >

2
</div>
</div>

<div class = "one-third column">

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
                        width: 300px;
                        
                        }
                        </style>
                         
                        <div id="flip2" >Show/Hide Xbox Feed </div>
                        <div id="panel2" >
3
</div>
</div>

<?php
include "footer.php";


?>