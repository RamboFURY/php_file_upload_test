<?php
require_once("dbconnect.php");
$dbconnection = new dbconnector;
$dbconnection->connect();
if (isset($_POST['submitbtn']) && $_POST['submitbtn'] == 'submit') {

    $dbconnection->addentry($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['mob']);
      echo "Application submitted successfully";
  }
  else
  {
    echo "An error occured. Please try again";
  }
 ?>
