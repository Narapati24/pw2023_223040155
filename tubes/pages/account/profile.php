<?php
require '../../_backend/config.php';

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
$query = query("SELECT * FROM users,article WHERE users.id = '$id' && users.id = article.user_id ORDER BY article.id LIMIT 0, 6");

// pagination
// konfigurasi
$jumlahDataPerhalaman = 7;
$jumlahData = count(query("SELECT * FROM users, article WHERE users.id = '$id' && users.id = article.user_id"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$title = 'Profile';
require_once '../../_asset/views/pages/account/profile.view.php';
