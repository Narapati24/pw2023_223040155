<?php
session_start();
if (isset($_SESSION['login'])) {
    echo '<script>history.back();</script>';
}

require '../../_backend/function.php';
// login system
if (isset($_POST['login'])) {
    $login = loginAccount($_POST);
}
// register system
if (isset($_POST['register'])) {
    if (registerAccount($_POST) > 0) {
        echo "<script>
                document.location.href = 'login.php';
            </script>";
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
    <title>Login</title>
    <!-- reset css -->
    <link rel="stylesheet" href="../../css/reset.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../../css/custom/universal.css">
    <style>
        .login-form {
            position: absolute;
            width: 50%;
            overflow: hidden;
            transition: 600ms ease-in;
        }

        .hidden-form {
            position: absolute;
            width: 0%;
            overflow: hidden;
            transition: 600ms ease-in;
        }

        .register-form {
            position: absolute;
            width: 50%;
            transition: 600ms ease-in;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a href="../../index.php">
                <img src="../../img/logo/P-news-logo.png" alt="Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../news.php">News</a>
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
    <div class="container w-50" style="height: 550px; overflow: hidden;">
        <!-- info error -->
        <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
        <?php endif; ?>
        <!-- form kogin -->
        <form action="" method="post" id="loginForm" class="login-form">
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username/name@example.com" autofocus autocomplete="off" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button name="login" type="submit" class="btn btn-primary mb-3">Login</button>
            <p>dont have account? <b><span id="registerButton" style="cursor: pointer;">Register</span></b> here</p>
        </form>
        <!-- form register -->
        <form action="" method="post" id="registerForm" class="hidden-form">
            <div class="row mb-3">
                <div class="col form-floating">
                    <input name="first_name" type="text" class="form-control" id="firstName" placeholder="First name" autocomplete="off" required autofocus>
                    <label style="margin-left: 12px;" for="firstName">First Name</label>
                </div>
                <div class="col form-floating">
                    <input name="last_name" type="text" class="form-control" id="lastName" placeholder="Last name" autocomplete="off" required>
                    <label style="margin-left: 12px;" for="lastName">Last Name</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input name="birthdate" type="date" class="form-control" id="floatingInput" placeholder="Username" required>
                <label for="floatingInput">Date of birth</label>
            </div>
            <select name="gender" class="form-select mb-3" aria-label="Default select example" required>
                <option selected>Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username" autocomplete="off" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off" required>
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password2" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Confirmation Password</label>
            </div>
            <button name="register" type="submit" class="btn btn-primary mb-3">Register</button>
        </form>
    </div>

    <!-- footer -->
    <footer style="position: absolute; bottom: 0;">
        <div class="footer">
            <p>&copy; 2023 My Company. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Java Script -->
    <script src="../../js/bootstrap/bootstrap.min.js"></script>
    <script>
        document.getElementById("registerButton").onclick = function() {
            document.getElementById("loginForm").classList.add("hidden-form")
            document.getElementById("registerForm").classList.add("register-form");
        }
    </script>
</body>

</html>