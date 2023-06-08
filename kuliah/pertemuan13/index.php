<?php
require('functions.php');

$title = 'Home';

$students = query("SELECT * FROM mahasiswa");

if (isset($_GET['btn-search'])) {
  $keyword = $_GET['keyword'];
  $students = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'");
}

require('views/index.view.php');
