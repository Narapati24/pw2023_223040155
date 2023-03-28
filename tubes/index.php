<?php
require 'function.php';
// tampung ke variable
$article = query("SELECT * FROM article ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pati News Right</title>
  <!-- reset css -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="css/custom/universal.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/sample/sample.png" alt="Logo" width="30" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/popular.php">Popular</a>
          </li>
        </ul>
        <a class="d-flex ms-auto btn btn-light" href="pages/account/login.php">
          <img src="img/logo/loginLogo.png" alt="" width="22" height="24">
          Login
        </a>
      </div>
    </div>
  </nav>

  <!-- content -->
  <div class="container" style="height: 70px;"></div>
  <div class="container">
    <h4>Hot This Week</h4>
    <div class="row g-0 bg-body-secondary position-relative mb-4">
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="img/sample/sample.png" class="w-100" alt="...">
      </div>
      <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, accusamus!
        </h5>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum eum perspiciatis alias fugiat ad doloremque sequi vero assumenda excepturi, tenetur atque est fugit libero nesciunt itaque debitis maiores nemo, similique rerum, vitae harum. Obcaecati exercitationem architecto soluta. Vel ut harum corrupti dolorem beatae, animi cumque error. Earum ut alias libero accusantium vitae voluptatem voluptates distinctio, mollitia dolorem voluptas harum perspiciatis sit et tempore quae animi quisquam, inventore blanditiis adipisci eaque ab sint commodi! Cumque ad necessitatibus perspiciatis, in minus laboriosam ipsa dolore id perferendis explicabo ipsum asperiores, officiis blanditiis molestiae, omnis culpa iste. Odio odit iste eveniet? Exercitationem, alias consectetur.
        </p>
        <a href="#" class="stretched-link">Go somewhere</a>
      </div>
    </div>

    <h5>Other News</h5>
    <?php foreach ($article as $a) : ?>
      <div class="card d-inline-block ms-2 me-2" style="width: 18rem; height: 500px; overflow: hidden;">
        <img src="img/article/<?= $a['img']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $a['title']; ?></h5>
          <p class="card-text"><?= $a['content']; ?></p>
          <a href="pages/detail.php?id=<?= $a['id']; ?>" style="position: absolute; bottom: 10px;" class="btn btn-primary stretched-link">More Details</a>
        </div>
      </div>
    <?php endforeach; ?>
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