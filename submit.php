<?php

  if (isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $story = $_POST['story-text'];

    require_once './dbconnect.php';

    $stmt = "INSERT INTO stories (storiesName, storiesEmail, storiesPhone, storiesStory) VALUES ('$name', '$email', '$phone', '$story')";

    mysqli_query($con, $stmt);

    header('location: danke.php');
  }
  else {
    echo "Failed to do thing";
    header("location: index.php");
  }

 ?>
