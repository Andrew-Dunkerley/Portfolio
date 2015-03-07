<?php
 include 'head.php';
 
 ?>


<body>


  <!-- Primary Page Layout
  ================================================== -->

  <!-- Delete everything in this .container and get started on your own site! -->

<?php
include "leftnav.php";
?>

<!---End Of Nav-->
<div class="container" class = "sixteen columns" align = "center">


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
 
                        <div id="flip">Hide/Show </br> Contact Form</div>
                        <div id="panel" align="center">
                        
    <div id = "contactinfo" >

<form name="htmlform" method="post" action="contact-action.php">
<table align="center" width="450px">

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
  <label for="age">Age *</label>
 
  <input  type="radio" name="radio" value = "16-25"> 16-25
  <input  type="radio" name="radio" value = "26-35"> 26-35
  <input  type="radio" name="radio" value = "36-45"> 36-45
  <input  type="radio" name="radio" value = "46-55"> 46-55
  <input  type="radio" name="radio" value = "56-59"> 56-59
  <input  type="radio" name="radio" value = "60+"> 60+
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
  <input type="submit" value="Submit">
 </td>

</tr>

</table>

</form>


</div>
</div>


</div>

</body>



<footer>

<?php include 'footer.php'; ?>

</footer>





