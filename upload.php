<?php


  class dbconnector
  {
    var $dblink;
    function connect()
    {
      global $dblink;
      $dblink = new mysqli("localhost","root","","ais_test_storage");//DATABASE CONNECTION
      if($dblink == false)
      {
        die("ERROR: Could not connect. " . mysqli_connect_error());//shows error on erroneous connection
      }
    }
  }

  public function register($name, $email, $phone)
  {
    global $dblink;
    $query = $dblink->prepare("INSERT INTO apply (name, email, phone) values(?, ?, ?, ?, ?, ?)");
    $query->bind_param("sss",$name, $email, $phone);
    if($query->execute())
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }

header("location:form.php");
