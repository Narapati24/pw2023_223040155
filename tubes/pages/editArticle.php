<?php
require '../_backend/config.php';

if (isset($_POST['update'])) {
  $error = UpdateArticle($_POST);
}

if (isset($_POST['delete'])) {
  $error = deleteArticle($_POST);
  header('Location:' . base_url());
}

// header
$id = $_GET['id'];
$title = 'Edit Article';
$article = query("SELECT * FROM article, article_category, popularity WHERE article.id = article_category.article_id && article.id = popularity.article_id && article.id = '$id'");
if (!$article) {
  $article = query("SELECT * FROM article, popularity WHERE article.id = popularity.article_id && article.id = '$id'")[0];
} else {
  $article = $article[0];
}
$category = query("SELECT * FROM category");
$visibility = query("SELECT * FROM visibility");
require_once '../_asset/views/pages/editArticle.view.php';
