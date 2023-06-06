<?php
require '../_backend/config.php';
require '../_backend/updateClicks.php';
require '../_backend/reporting.php';

// return pages if no id
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

// comment
if (isset($_POST['submit'])) {
  $commentInput = comment($_POST);
}

// report
if (isset($_POST['report'])) {
  $error = reportArticle($_POST);
}

$id = $_GET['id'];
clicks("UPDATE popularity SET daily = daily + 1, weekly = weekly + 1, monthly = monthly + 1, lifetime = lifetime + 1, update_data = now() WHERE article_id = $id");
$article = query("SELECT * FROM article, article_category WHERE article.id = $id && article.id = article_category.article_id")[0];
$editor = query("SELECT * FROM users INNER JOIN article WHERE article.user_id = users.id && article.id = $id")[0];
$articleCategory = $article['category_id'];
$categoryArticle = query("SELECT * FROM article, article_category, category WHERE article.id = article_category.article_id && category.id_category = article_category.category_id && category.id_category = '$articleCategory' LIMIT 8");

// commentar
$comment = query("SELECT * FROM commentar, users WHERE users.id = commentar.user_id && commentar.article_id = $id ORDER BY id_comment DESC");

// header
$title = $article['title'];
require_once '../_asset/views/pages/detail.view.php';
