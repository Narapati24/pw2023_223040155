<?php
require '../../_backend/config.php';

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

require_once '../../_asset/views/pages/account/login.view.php';
