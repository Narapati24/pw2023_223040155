<?php
session_start();

setcookie('key', '', time() - 360, '/');
setcookie('id', '', time() - 360, '/');
setcookie('role', '', time() - 360, '/');

session_destroy();
header("Location: login.php");
