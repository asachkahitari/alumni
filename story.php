<!DOCTYPE html>
<html lang="en">
<head>
  <?php $pagetitle = 'Alumni'; ?>
  <?php
    include("./includes/head.php");
  ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/story_style.css" />
</head>

<body>

  <nav class="navbar navbar-expand-lg">
      <!-- Ecell Logo -->
      <a class="navbar-brand"><img class="ecell-logo" src="img/logo/ecell.png"></a>

      <button onclick="toggle()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg id="navbar-hamburger" xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="#FFF" stroke="#2C2830" stroke-width="1.5" d="M.75.75h30.5v30.5H.75z"/><g fill="#2C2830"><path d="M8 10h16v1.5H8zM8 15h16v1.5H8zM8 20h16v1.5H8z"/></g></g></svg>
        <svg id="navbar-close" xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="#FFF" stroke="#2C2830" stroke-width="1.5" d="M.75.75h30.5v30.5H.75z"/><g fill="#2C2830"><path d="M10.873 9.563l11.314 11.314-1.06 1.06L9.813 10.623z"/><path d="M9.813 20.877L21.127 9.563l1.06 1.06-11.314 11.314z"/></g></g></svg>
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
        <a class="nav-link px-3 " href="">Current Team</a>
      </li>

      </ul>
    </nav>

  <h1 class="text-center">Batch of 2019-2020</h1>

  <hr class="centered-rule" />

  <img class="mx-auto d-block team-photo" alt="Group photo of 2019-20 batch of managers" src="https://images2.minutemediacdn.com/image/fetch/c_fill,g_auto,f_auto,h_395,w_600/https%3A%2F%2Fbvbbuzz.com%2Fwp-content%2Fuploads%2Fgetty-images%2F2017%2F07%2F1128772726-850x560.jpeg" />

  <h2 class="story-heading">Heading</h2>
  <div class="story-content">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis cras sed felis eget velit aliquet. Diam vulputate ut pharetra sit amet aliquam id. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi tempus imperdiet. Pretium lectus quam id leo in vitae turpis. Egestas diam in arcu cursus euismod quis viverra nibh. Id volutpat lacus laoreet non curabitur gravida arcu. Cursus sit amet dictum sit amet justo donec enim diam. Etiam tempor orci eu lobortis elementum nibh.
    </p>
    <p>
      Aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat. Eu turpis egestas pretium aenean pharetra magna ac. Dignissim cras tincidunt lobortis feugiat vivamus at. Gravida dictum fusce ut placerat orci nulla pellentesque. Parturient montes nascetur ridiculus mus mauris vitae ultricies. Est sit amet facilisis magna etiam tempor orci. Tristique risus nec feugiat in fermentum posuere urna nec. Senectus et netus et malesuada fames ac. Ante in nibh mauris cursus mattis molestie a iaculis. Augue eget arcu dictum varius duis at consectetur lorem donec. Eget mauris pharetra et ultrices neque.
    </p>
  </div>
  <!--Bootstrap JS links-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
