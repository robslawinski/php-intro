<html>
<body>
<h1>
PHP assignment 1</h1>

<?php 
      
      $cars = array
      (
      		array("Name","Stock","Sold","Year"),
      		array("Volvo",22,18,2012),
      		array("BMW",15,13,1986),
      		array("Saab",5,2,2000),
      		array("Land Rover",17,15,1978)
      );
        


	include "HTMLUtils.php";
	$obj = new HTMLUtils;
	$obj->toHTML($cars);
 
	
?>
</body>
</html>
