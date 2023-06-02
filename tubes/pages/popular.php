<?php
require '../_backend/config.php';
require '../_backend/searchBar.php';

$category = query("SELECT * FROM category");
$articleTrendingToday = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.daily DESC LIMIT 4");
$articleTrendingMonth = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.monthly DESC LIMIT 4");
$articleTrendingWeek = query("SELECT * FROM article,popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.weekly DESC LIMIT 4");

// Search bar
if (isset($_POST['search'])) {
  $articleTrendingToday = findPopularToday($_POST['keyword'], $_POST['category']);
  $articleTrendingWeek = findPopularWeek($_POST['keyword'], $_POST['category']);
  $articleTrendingMonth = findPopularMonth($_POST['keyword'], $_POST['category']);
}

// header
$title = 'Popular';
require_once '../_asset/views/pages/popular.view.php';
