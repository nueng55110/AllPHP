<?php
include("inner_header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","","noraphat");
  $r = $conn->query("select orders.*, employees.* from (orders inner join employees on orders.employeeid = employees.employeeid)");	
  $s = 0;
  while ($o = $r->fetch_object()) {
$s++;
    echo 
"<tr><td>".$s."</td><td>".$o->OrderID
."</td><td>".$o->EmployeeID
."</td><td>".$o->FirstName
."</td><td>". $o->LastName
."</td><td>". $o->Title
."</td></tr>";
}
echo"</table>";
include("inner_footer.php");
?>