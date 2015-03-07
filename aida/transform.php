<?php
include "head.php";
include "leftnav.php";
?>

<div class = "container" class = "sixteen columns" align = "center">
<?php

//Create a DomDocument object

  $xml = new DOMDocument;

  // Load the XML source

  $xml -> load('users');


//Similar with XSL

  $xsl = new DOMDocument;

  $xsl -> load('XSLT.xsl');

  // Create and Configure the transformer

  $proc = new XSLTProcessor;

  // attach the xsl rules

  $proc -> importStyleSheet($xsl);

  //Output

  echo $proc -> transformToXML($xml);
  
  include "footer.php";

?>

</div>