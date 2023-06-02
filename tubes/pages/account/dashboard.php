<?php
require '../../_backend/config.php';
require '../../_backend/searchBar.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['roles'])) {
    header("Location: login.php");
}

if ($_SESSION['roles'] !== '1') {
    header("Location: profile.php");
}

if (isset($_POST['updateAccount'])) {
    $edit = updateAccount($_POST);
}

if (isset($_POST['changePassword'])) {
    $edit = changePassword($_POST);
    if (isset($edit['error']) && !$edit['error']) {
        echo "<script>
                setTimeout(function() {
                    document.location.href='dashboard.php'
                }, 1500);
            </script>";
    } elseif (isset($edit['error']) && $edit['error']) {
        echo "<script>
                setTimeout(function() {
                    document.location.href='dashboard.php'
                }, 1500);
            </script>";
    }
}

$id = $_SESSION['ids'];

$profile = query("SELECT * FROM users WHERE id = $id");
$query = query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id' ORDER BY article.id DESC LIMIT 0, 6");
$users = query("SELECT * FROM users, roles WHERE users.id_role = roles.id");

// pagination
// konfigurasi
$jumlahDataPerhalamanArticle = 7;
$jumlahDataArticle = count(query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id'"));
$jumlahHalamanArticle = ceil($jumlahDataArticle / $jumlahDataPerhalamanArticle);
$halamanAktifArticle = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalDataArticle = ($jumlahDataPerhalamanArticle * $halamanAktifArticle) - $jumlahDataPerhalamanArticle;

$title = 'Profile';
require_once '../../_asset/views/pages/account/dashboard.view.php';
