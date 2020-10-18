<?php
  $serverName = "localhost";
  $userName = "prabuddha";
  $password = "1234";
  $dbName = "alumni_db";

  $con = mysqli_connect($serverName, $userName, $password, $dbName);


  if (!$con)
  {
    die("Connection to database failed" . mysqli_error($con));
  }
?>
