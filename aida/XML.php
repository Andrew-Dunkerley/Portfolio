<?php 
include "connection.php";
header ("Content-Type:text/xml");//Tell browser to expect xml
$query = "SELECT * FROM Users"; 
$result = mysqli_query($connection, $query) or die ("Error in query: $query. ".mysql_error()); 
//Top of xml file
$_xml = '<?xml version="1.0"?>'; 
$_xml .="<Users>"; 
while($row = mysqli_fetch_array($result)) { 
$_xml .="<User>"; 
$_xml .="<userid>".$row['userid']."</userid>"; 
$_xml .="<username>".$row['username']."</username>"; 
$_xml .="<password>".$row['password']."</password>";
$_xml .="<email>".$row['email']."</email>"; 
$_xml .="</User>"; 
} 
$_xml .="</Users>"; 
//Parse and create an xml object using the string
$xmlobj=new SimpleXMLElement($_xml);
//And output
print $xmlobj->asXML();
//or we could write to a file
$xmlobj->asXML(users);





?>