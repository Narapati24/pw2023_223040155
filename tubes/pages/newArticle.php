<?php
require '../_backend/config.php';

if (isset($_POST['submit'])) {
  $article = inputArticle($_POST);
};

// header
$title = 'New Article';
$category = query("SELECT * FROM category");
$visibility = query("SELECT * FROM visibility");
require_once '../_asset/views/pages/newArticle.view.php';
