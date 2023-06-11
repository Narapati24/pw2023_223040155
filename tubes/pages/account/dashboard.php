<?php
require '../../_backend/config.php';
require '../../_backend/searchBar.php';
require '../../_backend/reporting.php';
require '../../_backend/category.php';

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

if (isset($_POST['acceptRequest']) || isset($_POST['dennyRequest'])) {
    $edit = UpdateRoleRequest($_POST);
}

if (isset($_POST['acceptReport']) || isset($_POST['dennyReport'])) {
    $edit = UpdateReport($_POST);
}

if (isset($_POST['inputCategory'])) {
    $edit = inputCategory($_POST);
}

if (isset($_POST['inputKeyword'])) {
    $edit = inputKeyword($_POST);
}

$id = $_SESSION['ids'];

$profile = query("SELECT * FROM users WHERE id = $id");
$query = query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id' ORDER BY article.id DESC LIMIT 0, 6");
$users = query("SELECT users.id AS uid, users.*, roles.* FROM users, roles WHERE users.id_role = roles.id DESC LIMIT 0, 11");
$roleRequest = query("SELECT * FROM roles, role_request WHERE role_request.status_id = '3' && role_request.role_id = roles.id");
$report = query("SELECT reporting.*, article.title, article.user_id FROM reporting, article WHERE status_id = '3' AND reporting.article_id = article.id");
$category = query("SELECT * FROM category");

// pagination
// konfigurasi
$jumlahDataPerhalamanArticle = 7;
$jumlahDataArticle = count(query("SELECT * FROM users, article WHERE users.id = '$id' && article.user_id = '$id'"));
$jumlahHalamanArticle = ceil($jumlahDataArticle / $jumlahDataPerhalamanArticle);
$halamanAktifArticle = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalDataArticle = ($jumlahDataPerhalamanArticle * $halamanAktifArticle) - $jumlahDataPerhalamanArticle;

// user
$jumlahDataPerhalamanUser = 12;
$jumlahDataUser = count(query("SELECT * FROM users"));
$jumlahHalamanUser = ceil($jumlahDataUser / $jumlahDataPerhalamanUser);
$halamanAktifUser = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalDataUser = ($jumlahDataPerhalamanUser * $halamanAktifUser) - $jumlahDataPerhalamanUser;

$title = 'Profile';
require_once '../../_asset/views/pages/account/dashboard.view.php';
