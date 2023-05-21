<?php
require '../../_backend/function.php';

if (isset($_SESSION['login'])) {
    header('Location:' .  base_url('index.php'));
}
// login system
if (isset($_POST['login'])) {
    $login = loginAccount($_POST);
}

// register system
if (isset($_POST['register'])) {
    $login = registerAccount($_POST);
}

$title = 'login';

require_once '../../_header.php';
?>

<!-- content -->
<div class="container border w-50" style="overflow: hidden; background-color: whitesmoke;">
    <!-- info error -->
    <?php if (isset($login['error']) && !$login['error']) : ?>
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <strong><?= $login['massage']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif (isset($login['error']) && $login['error']) : ?>
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            <strong><?= $login['massage']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <!-- form kogin -->
    <form action="" method="post" id="loginForm" class="login-form pt-2">
        <div class="w-100">
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username/name@example.com" autofocus autocomplete="off" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="list-group-item mb-3">
                <input name="remember" class="form-check-input me-1" type="checkbox" value=" " id="firstCheckbox">
                <label class="form-check-label" for="firstCheckbox">Remember me</label>
            </div>
            <button name="login" type="submit" class="btn btn-primary mb-3">Login</button>
            <p>dont have account? <b><span id="registerButton" style="cursor: pointer;">Register</span></b> here</p>
        </div>
    </form>
    <!-- form register -->
    <form action="" method="post" id="registerForm" class="register-form hidden-form pt-2">
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

<!-- Java Script -->
<script>
    document.getElementById("registerButton").onclick = function() {
        document.getElementById("loginForm").classList.add("hidden-form")
        document.getElementById("registerForm").classList.remove("hidden-form");
    }
    document.getElementById("loginButton").onclick = function() {
        document.getElementById("loginForm").classList.remove("hidden-form")
        document.getElementById("registerForm").classList.add("hidden-form");
    }
</script>

<?php require '../../_footer.php' ?>