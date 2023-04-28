<?php
session_start();

require '../_backend/function.php';
require '../_backend/searchBar.php';

// Search bar
if (isset($_POST['search'])) {
  $articleTrendingToday = findPopular($_POST['keyword']);
  $articleTrendingMonth = findPopular($_POST['keyword']);
}

$articleTrendingToday = query("SELECT * FROM article,popularity WHERE article.id = popularity.article_id ORDER BY popularity.daily DESC LIMIT 4");
$articleTrendingMonth = query("SELECT * FROM article,popularity WHERE article.id = popularity.article_id ORDER BY popularity.monthly DESC LIMIT 4");

?>
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
      <a href="../index.php">
        <img src="../img/logo/P-news-logo.png" alt="Logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Popular</a>
          </li>
        </ul>
        <div class="d-flex ms-auto">
          <!-- if login or not -->
          <?php if (isset($_SESSION['login'])) { ?>
            <a class="mt-1 me-2" href="newArticle.php">
              <img src="../img/logo/uploadLogo.png" alt="New Article" width="22" height="24" style="
                filter: brightness(0) invert(1);">
            </a>
            <a data-bs-toggle="collapse" href="#profileSetting" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img class="rounded-circle" src="../img/sample/sample.png" width="40px" height="40px" alt="">
            </a>
            <div class="position-absolute collapse mt-5" style="width: 100px; right: 100px;" id="profileSetting">
              <div class="card card-body">
                <a href="">Profile</a>
              </div>
              <div class="card card-body">
                <a href="account/logout.php">Logout</a>
              </div>
            </div>
          <?php } else { ?>
            <a class="d-flex btn btn-light" href="account/login.php">
              <img src="../img/logo/loginLogo.png" alt="" width="22" height="24">
              Login
            </a>
          <?php }; ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="container" style="height: 70px;"></div>
  <!-- today -->
  <div class="container">
    <form class="d-flex mb-3" role="search" method="post">
      <input name="keyword" class="form-control me-2" type="text" placeholder="Search" aria-label="Search" autocomplete="off">
      <button name="search" class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="">
      <h4>Trending Today</h4>
      <?php foreach ($articleTrendingToday as $a) { ?>
        <div class="d-inline-block card ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
          <img src="../img/article/<?= $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
          <div class="card-body">
            <h5 class="card-title"><?= substr($a['title'], 0, 38); ?></h5>
            <p class="card-text"><?= substr($a['content'], 0, 90); ?> ...</p>
            <a href="../pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
          </div>
        </div>
      <?php }; ?>
    </div>
    <br>
    <!-- week -->
    <div class="">
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
    <div class="">
      <h4>Trending This Month</h4>
      <?php foreach ($articleTrendingMonth as $a) { ?>
        <div class="d-inline-block card ms-3 me-3 mb-4" style="width: 18rem; height: 400px; overflow: hidden;">
          <img src="../img/article/<?= $a['img']; ?>" class="card-img-top" alt="<?= $a['title']; ?>" height="160px">
          <div class="card-body">
            <h5 class="card-title"><?= substr($a['title'], 0, 38); ?></h5>
            <p class="card-text"><?= substr($a['content'], 0, 90); ?> ...</p>
            <a href="../pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
          </div>
        </div>
      <?php }; ?>
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