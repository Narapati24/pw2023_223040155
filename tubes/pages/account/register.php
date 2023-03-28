<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
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
        <div class="row mb-3">
            <div class="col form-floating">
                <input type="text" class="form-control" id="firstName" placeholder="First name">
                <label style="margin-left: 12px;" for="firstName">First Name</label>
            </div>
            <div class="col form-floating">
                <input type="text" class="form-control" id="lastName" placeholder="Last name">
                <label style="margin-left: 12px;" for="lastName">Last Name</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Date of birth</label>
        </div>
        <select class="form-select mb-3" aria-label="Default select example">
            <option selected>Gender</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Register</button>
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