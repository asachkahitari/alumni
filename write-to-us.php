<!DOCTYPE HTML>
<html>

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

<body>
    <form action="./submit.php" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group col-md-6">
        <label for="phone">Mobile Number</label>
        <input type="tel" class="form-control" name="phone" placeholder="1234567890" pattern="[0-9]{10}">
      </div>
    </div>
    <div class="form-group">
      <label for="story-text">Story</label>
      <input type="text" class="form-control" name="story-text" placeholder="Tell us your story" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </form>

</body>
</html>
