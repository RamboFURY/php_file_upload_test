<?php
require_once("dbconnect.php");
$dbconnection = new dbconnector;
$dbconnection->connect();
$gets = $dbconnection->getresults();
 ?>


<!doctype html>
<head>
</head>
<body>
<main>
<table>
 <thead>
 <tr>
<th>Name</th>
<th>Email_Id</th>
<th>Mobile</th>
</tr>
<?php

$found = 0;
      foreach($gets as $get)
      {
        $found++;
        echo '<tr><td>';
        echo htmlentities($get['fname'].' '.$get['lname']);
        echo '</td><td>';
        echo htmlentities($get['email']);
        echo '</td><td>';
        echo htmlentities($get['mob']);
        echo '</td><td>';
      }
    if($found == 0)
    {
      echo '<tr><td colspan="5">No Entries Found</td></tr>';
    }

     ?>
</thead>
</table>
</main>
</body>

</html>
