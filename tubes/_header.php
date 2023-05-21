<?php
if (isset($_SESSION['login'])) {
  $ids = $_SESSION['ids'];
  $profile = query("SELECT * FROM users WHERE id = $ids");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PeNEWS | <?= $title; ?></title>
  <!-- reset css -->
  <link rel="stylesheet" href="<?= base_url('css/reset.css'); ?>">
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="<?= base_url('css/custom/universal.css'); ?>">
  <link rel="icon" href="<?= base_url('img/logo/P-news-logo.png'); ?>">
  <!-- font -->
  <!-- monserrat 700 bold italic -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
  <!-- kanit regular 400 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <!-- poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>

<body">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a href="<?= base_url(); ?>">
        <img src="<?= base_url('img/logo/P-news-logo.png'); ?>" alt="Logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" id="news" aria-current="page" href="<?= base_url('pages/news.php'); ?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="popular" href="<?= base_url('pages/popular.php'); ?>">Popular</a>
          </li>
        </ul>
        <div class="d-flex ms-auto">

          <!-- if login or not -->
          <?php if (isset($_SESSION['login'])) { ?>
            <a class="mt-1 me-2" href="<?= base_url('pages/newArticle.php'); ?>">
              <img src="<?= base_url('img/logo/uploadLogo.png'); ?>" alt="New Article" width="22" height="24" style="
                filter: brightness(0) invert(1);">
            </a>
            <a data-bs-toggle="collapse" href="#profileSetting" role="button" aria-expanded="false" aria-controls="collapseExample">
              <img class="rounded-circle border border-success" src="<?= base_url('img/profile/') . $profile[0]['img']; ?>" style="object-fit: cover;" width="40px" height="40px" alt="Profile">
            </a>
            <div class="position-absolute collapse mt-5" style="width: 100px; right: 100px;" id="profileSetting">
              <div class="card card-body">
                <a href="<?= base_url('pages/account/dashboard.php'); ?>">Profile</a>
              </div>
              <div class="card card-body">
                <a href="<?= base_url('pages/account/logout.php'); ?>">Logout</a>
              </div>
            </div>
          <?php } else { ?>
            <a class="d-flex btn btn-light" href="<?= base_url('pages/account/login.php'); ?>" style="font-family: Arial, Helvetica, sans-serif;">
              <img src="<?= base_url('img/logo/loginLogo.png'); ?>" alt="login logo" width="22" height="24">
              Login
            </a>
          <?php }; ?>
        </div>
      </div>
    </div>
  </nav>

  <div class="container" style="height: 70px;"></div>