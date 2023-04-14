<?php
session_start();
if (isset($_SESSION['login'])) {
    echo '<script>history.back();</script>';
}

require '../../_backend/function.php';

if (isset($_POST['login'])) {
    $login = loginAccount($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- reset css -->
    <link rel="stylesheet" href="../../css/reset.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../../css/custom/universal.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <img src="../../img/logo/P-news-logo.png" alt="Logo" height="40">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../popular.php">Popular</a>
                    </li>
                </ul>
                <a class="d-flex ms-auto btn btn-light" href="login.php">
                    <img src="../../img/logo/loginLogo.png" alt="" width="22" height="24">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container" style="height: 70px;"></div>
    <div class="container w-50 ">
        <!-- info error -->
        <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
        <?php endif; ?>
        <!-- form kogin -->
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username/name@example.com" autofocus autocomplete="off" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button name="login" type="submit" class="btn btn-primary mb-3">Login</button>
        </form>
        <p>dont have account? <a href="register.php">Register</a> here</p>
    </div>

    <!-- footer -->
    <footer style="position: absolute; bottom: 0;">
        <div class="footer">
            <p>&copy; 2023 My Company. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Java Script -->
    <script src="../../js/bootstrap/bootstrap.min.js"></script>
</body>

</html>