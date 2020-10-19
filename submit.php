<?php

  // Check whether user came into page via desired route
  if (isset($_POST['submit']))
  {
    // Database connection
    require_once './dbconnect.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $story = mysqli_real_escape_string($con, $_POST['story-text']);

    $sql = "INSERT INTO stories (storiesName, storiesEmail, storiesPhone, storiesStory) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql))
    {
      echo "SQL error";
    }
    else
    {
      mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $phone, $story);
      mysqli_stmt_execute($stmt);
    }

    header('location: danke.php');
  }


  else {
    echo "Failed to do thing";
    header("location: index.php");
  }

 ?>
