<?php


class dbconnector
{
  var $dblink;
  function connect()
  {
    global $dblink;
    $dblink = new mysqli("localhost","root","","kb_storage");//DATABASE CONNECTION
    if($dblink == false)
    {
      die("ERROR: Could not connect. " . mysqli_connect_error());//shows error on erroneous connection
    }
  }

  public function addentry($fname, $lname, $email, $mob)
  {
    global $dblink;
    $query = $dblink->prepare("INSERT INTO apply (fname, lname, email, mob) values(?, ?, ?, ?)");
    $query->bind_param("sssi", $fname, $lname, $email, $mob);
    $query->execute();
  }
}

header("location:form.php");
