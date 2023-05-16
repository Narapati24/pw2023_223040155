<?php
require '../../_backend/function.php';

if (isset($_SESSION['login'])) {
    echo '<script>history.back();</script>';
}
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

$title = 'login';

require_once '../../_header.php';
?>

<!-- content -->
<div class="container" style="height: 70px;"></div>
<div class="container w-50" style="height: 550px; overflow: hidden; background-color: whitesmoke;">
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
            <option value="Male">Male</option>
            <option value="Female">Female</option>
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
        <p class="d-inline-block ms-auto">Already have account? <b><span id="loginButton" style="cursor: pointer;">Login</span></b> here</p>
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
    document.getElementById("loginButton").onclick = function() {
        document.getElementById("loginForm").classList.remove("hidden-form")
        document.getElementById("registerForm").classList.remove("register-form");
    }
</script>
</body>

</html>