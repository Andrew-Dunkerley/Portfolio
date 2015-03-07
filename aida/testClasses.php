<?php
include "head.php";
include "leftnav.php";
include "ObjectCollection.php";
include "classproduct.php";
include "LineItem.php";
?>

<div class= "container" class = "sixteen columns" align = "center">

<?php
$ca = new ObjectCollection();
//code to create LineItems and add them to $ca


$console1 = new Console("Playstation", 400);


$console2 = new Console("Xbox", 500);

$console3 = new Console("Wii", 300);

$console4 = new Console("PSP VISTA", 200);

$console5 = new Console("PS3", 250);



$consoleitem1 = new lineitem($console1, 1);
$consoleitem2 = new lineitem($console2, 2);
$consoleitem3 = new lineitem($console3, 3);
$consoleitem4 = new lineitem($console4, 4);
$consoleitem5 = new lineitem($console5, 4);




$ca->addLineItem($consoleitem1);
$ca->addLineItem($consoleitem2);
$ca->addLineItem($consoleitem3);
$ca->addLineItem($consoleitem4);
$ca->addLineItem($consoleitem5);





for ($i = 0; $i < $ca -> getLineCount(); $i++) {
		$li = $ca -> getLineItem($i);
		$item = $li -> getItem();
		
		echo $i.")Console:" . $item -> getName() . ", Price:  " . $item -> getprice() . ", Quantity:  " . $li -> getQuantity() . "<br />";
    
    
}

?>

</div>
</body>


<?php

include "footer.php";

?>