<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

require 'function.php';

if (isset($_COOKIE['key']) && isset($_COOKIE['id'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  $user = query("SELECT * FROM users WHERE id = '$id'")[0];

  if ($key === hash('sha256', $user['username'])) {
    // set session
    $_SESSION['login'] = true;
    $_SESSION['roles'] = $user['id_role'];
    $_SESSION['ids'] = $id;
  }
}
