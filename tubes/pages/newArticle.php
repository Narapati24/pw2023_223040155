<?php
session_start();

require '../function.php';

if (isset($_POST['submit'])) {
  if (inputArticle($_POST) > 0) {
    echo "succest";
  } else {
    echo "Failed to Register";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Article</title>
  <!-- reset css -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="../css/custom/universal.css">
</head>

<body style="height: 100vh;">
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
            <a class="nav-link" aria-current="page" href="../index.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="popular.php">Popular</a>
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
              <img class="rounded-circle" src="img/sample/sample.png" width="40px" height="40px" alt="">
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
  <div class="container">
    <form action="" method="post">
      <input name="idAuthor" type="hidden" value="<?= $_SESSION['ids']; ?>">
      <div class="form-floating mb-3">
        <input name="title" type="text" class="form-control" id="floatingInput" placeholder="Title" required>
        <label for="floatingInput">Title</label>
      </div>
      <div class="form-floating mb-3">
        <input name="img" type="text" class="form-control" id="floatingInput" placeholder="img" required>
        <label for="floatingInput">img</label>
      </div>
      <div class="form-floating mb-3">
        <textarea name="contentArticle" style="height: 200px;" type="textarea" class="form-control text-editor" id="floatingInput" placeholder="Description"></textarea>
      </div>
      <button name="submit" type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
  </div>

  <!-- footer -->
  <div class="container" style="height: 115px;"></div>
  <footer>
    <div class="footer">
      <p>&copy; 2023 My Company. All Rights Reserved.</p>
    </div>
  </footer>

  <!-- Java Script -->
  <script src="../js/bootstrap/bootstrap.min.js"></script>
  <script src="../js/CKEditor/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create(document.querySelector('.text-editor'))
      .catch(error => {
        console.error(error);
      });
  </script>
</body>

</html>