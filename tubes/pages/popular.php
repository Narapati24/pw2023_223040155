<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pati News Right</title>
  <!-- reset css -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="../css/custom/universal.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../img/sample/sample.png" alt="Logo" width="30" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Popular</a>
          </li>
        </ul>
        <a class="d-flex ms-auto btn btn-light" href="../pages/account/login.php">
          <img src="../img/logo/loginLogo.png" alt="" width="22" height="24">
          Login
        </a>
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="container" style="height: 70px;"></div>
  <!-- today -->
  <div class="container">
    <h4>Trending Today</h4>
    <div class="card" style="width: 18rem;">
      <img src="../img/sample/sample.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card with stretched link</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
      </div>
    </div>
  </div>
  <br>
  <!-- week -->
  <div class="container">
    <h4>Trending This Week</h4>
    <div class="card" style="width: 18rem;">
      <img src="../img/sample/sample.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card with stretched link</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
      </div>
    </div>
  </div>
  <br>
  <!-- month -->
  <div class="container">
    <h4>Trending This Month</h4>
    <div class="card" style="width: 18rem;">
      <img src="../img/sample/sample.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card with stretched link</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <div class="footer">
      <p>&copy; 2023 My Company. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Java Script -->
  <script src="../js/bootstrap/bootstrap.min.js"></script>
</body>

</html>