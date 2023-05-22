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
  <link rel="stylesheet" href="<?= base_url('_asset/css/reset.css'); ?>">
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= base_url('_asset/css/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="<?= base_url('_asset/css/custom/universal.css'); ?>">
  <link rel="icon" href="<?= base_url('_asset/img/logo/P-news-logo.png'); ?>">
  <!-- font -->
  <!-- monserrat 700 bold italic -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
  <!-- kanit regular 400 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
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
            <a class="nav-link" aria-current="page" href="<?= base_url('pages/news.php'); ?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pages/popular.php'); ?>">Popular</a>
          </li>
        </ul>
        <div class="d-flex ms-auto">
          <a class="d-flex ms-auto btn btn-danger" href="logout.php">
            <img src="../../img/logo/loginLogo.png" style="-webkit-transform: scaleX(-1);
                transform: scaleX(-1); 
                filter: brightness(0) invert(1);" alt="" width="22" height="24">
            Logout
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container" style="height: 70px;"></div>