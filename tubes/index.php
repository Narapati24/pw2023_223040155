<?php
session_start();

require '_backend/function.php';
// tampung ke variable
$article = query("SELECT * FROM article ORDER BY id DESC LIMIT 11");
$hotArticle = query("SELECT * FROM article ORDER BY clicks DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PeNEWS</title>
  <!-- reset css -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="css/custom/universal.css">
</head>

<body">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a href="#">
        <img src="img/logo/P-news-logo.png" alt="Logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="pages/news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/popular.php">Popular</a>
          </li>
        </ul>
        <div class="d-flex ms-auto">

          <!-- if login or not -->
          <?php if (isset($_SESSION['login'])) { ?>
            <a class="mt-1 me-2" href="pages/newArticle.php">
              <img src="img/logo/uploadLogo.png" alt="New Article" width="22" height="24" style="
                filter: brightness(0) invert(1);">
            </a>
            <a data-bs-toggle="collapse" href="#profileSetting" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img class="rounded-circle" src="img/sample/sample.png" width="40px" height="40px" alt="">
            </a>
            <div class="position-absolute collapse mt-5" style="width: 100px; right: 100px;" id="profileSetting">
              <div class="card card-body">
                <a href="pages/account/dashboard.php">Profile</a>
              </div>
              <div class="card card-body">
                <a href="pages/account/logout.php">Logout</a>
              </div>
            </div>
          <?php } else { ?>
            <a class="d-flex btn btn-light" href="pages/account/login.php">
              <img src="img/logo/loginLogo.png" alt="" width="22" height="24">
              Login
            </a>
          <?php }; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="container" style="height: 70px;"></div>
  <div class="container">
    <h4>Hot This Week</h4>
    <div class="row g-0 bg-body-secondary position-relative mb-4" style="height: 450px;overflow: hidden;">
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="img/article/<?= $hotArticle[0]['img']; ?>" class="w-100" alt="..." style="object-fit: cover;" height="400">
      </div>
      <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">
          <?= $hotArticle[0]['title']; ?>
        </h5>
        <p>
          <?= substr($hotArticle[0]['content'], 0, 500); ?> ...
        </p>
        <a href="pages/detail.php?id=<?= $hotArticle[0]['id']; ?>" class="stretched-link">see more</a>
      </div>
    </div>

    <h5>Other News</h5>
    <?php foreach ($article as $a) : ?>
      <div class="card d-inline-block ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
        <img src="img/article/<?= $a['img']; ?>" class="card-img-top" alt="..." height="160px">
        <div class="card-body">
          <h5 class="card-title"><?= $a['title']; ?></h5>
          <p class="card-text"><?= substr($a['content'], 0, 90); ?> ...</p>
          <a href="pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- see more news -->
    <div class="card d-inline-block ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
      <div class="d-flex" style="height: 100%; align-items: center; justify-content: center;">
        <a href="pages/news.php" style="text-align: center;">
          <img src="img/logo/rightArrow.png" alt="" height="60" width="60">
          <p>see more news</p>
        </a>
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
  <script src="js/bootstrap/bootstrap.min.js"></script>
  </body>

</html>