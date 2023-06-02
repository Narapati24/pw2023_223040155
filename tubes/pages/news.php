<?php
require '../_backend/config.php';
require '../_backend/searchBar.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 16;
$jumlahData = count(query("SELECT * FROM article WHERE visibility_id = 3"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$article = query("SELECT * FROM article WHERE visibility_id = 3 ORDER BY id DESC LIMIT $awalData, $jumlahDataPerhalaman");
$category = query("SELECT * FROM category");

// Search bar
if (isset($_POST['search'])) {
  $article = find($_POST['keyword'], $_POST['category']);
}

// header
$title = 'Newest';
require_once '../_asset/views/pages/news.view.php';
