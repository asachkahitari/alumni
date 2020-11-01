<!DOCTYPE HTML>
<html>

<head>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/story_style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <!-- Ecell Logo -->
    <a class="navbar-brand"><img class="ecell-logo" src="img/logo/ecell.png"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link px-3 " href="">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Stories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">2011-12</a>
            <a class="dropdown-item" href="#">2011-12</a>
            <a class="dropdown-item" href="#">2011-12</a>
            <a class="dropdown-item" href="#">2011-12</a>
            <a class="dropdown-item" href="#">2011-12</a>
          </div>
        </li>
        <li>
          <a class="nav-link px-3 " href="">Contribute</a>
        </li>
        <li>
          <a class="nav-link px-3 " href="">Write To Us</a>
        </li>
        <li>
          <a class="nav-link px-3 " href="">Current Team</a>
        </li>

      </ul>
  </nav>

  <div class="page-content">

    <div class="container d-flex justify-content-center p-5 mb-5">

      <div class="row">

        <form class="p-4" action="./submit.php" method="post">

          <h1 class="card-heading text-center text-light mb-5">Tell Us Your Story!</h1>

          <div class="form-group row mb-4">
            <label for="name" class="col-md-4 text-light">Name</label>
            <input type="text" class="col-md-8 form-control rounded-pill" name="name" required>
          </div>

          <div class="form-group row mb-4">
            <label for="email" class="text-light col-md-4">Email</label>
            <input type="email" class="form-control rounded-pill col-md-8" name="email" required>
          </div>

          <div class="form-group row mb-4">
            <label for="phone" class="text-light col-md-4">Mobile Number</label>
            <input type="tel" class="form-control rounded-pill col-md-8" name="phone" placeholder="1234567890" pattern="[0-9]{10}">
          </div>

          <div class="form-group row mb-4">
            <label for="story-text" class="text-light col-md-4">Story</label>
            <input type="text" class="form-control rounded-pill col-md-8 input-lg" name="story-text" placeholder="Tell us your story" required>
          </div>

          <div class="row justify-content-center">
            <button type="submit" name="submit" class="text-center btn btn-primary">Sign in</button>
          </div>


      </div>

      </form>

    </div>
  </div>

</body>

</html>
