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
            <a class="navbar-brand" href="#">
                <img src="../../img/sample/sample.png" alt="Logo" width="30" height="24">
            </a>
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
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username/name@example.com">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Login</button>
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