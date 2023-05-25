<?php
require 'functions.php';

$title = 'Tambah data';

if (isset($_POST['tambah'])) {
  $error = tambah($_POST);
}

$students = query("SELECT * FROM mahasiswa");

require 'views/tambah.view.php';
