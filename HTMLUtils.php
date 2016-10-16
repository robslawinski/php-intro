
<?php

class HTMLUtils
{
	
      function toHTML($ray)
      {
      $tableString = "<table>";
	      for ($row = 0; $row < count($ray); $row++) 
	      {
	      	
	      		$tableString .= "<tr>";
	      	
	      	for ($col = 0; $col < count($ray[$row]); $col++) {
	      		if ($row == 0)
	      		{
	      			$tableString .= "<th>" . $ray[$row][$col] . "</th>";
	      		}
	      		else
	      		{
	      			$tableString .= "<td>" . $ray[$row][$col] . "</td>";
	      		}
	      	}
	      	$tableString .= "</tr>";
	      }
	      $tableString .= "</table>";
      	echo $tableString;
      }
}
	

?>
