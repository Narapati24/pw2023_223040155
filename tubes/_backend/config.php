<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

if (isset($_COOKIE['key']) && isset($_COOKIE['id'])) {
  $id = $_COOKIE['id'];
  $role = $_COOKIE['role'];
  $key = $_COOKIE['key'];
  $user = query("SELECT username FROM users WHERE id = '$id'")[0];

  if ($key === hash('sha256', $user['username'])) {
    // set session
    $_SESSION['login'] = true;
    $_SESSION['roles'] = $role;
    $_SESSION['ids'] = $id;
  }
}
