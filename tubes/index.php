<?php
require '_backend/config.php';
require '_backend/updateClicks.php';

updateClicks();
// tampung ke variable
$article = query("SELECT * FROM article WHERE visibility_id = 3 ORDER BY id DESC LIMIT 7");
$hotArticle = query("SELECT * FROM article, popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY popularity.daily DESC");
$kategory = query("SELECT * FROM category ORDER BY RAND()");
$articleKategory = query("SELECT * FROM article, article_category, category WHERE article.id = article_category.article_id && article_category.category_id = category.id_category ORDER BY article.id DESC");

if ($hotArticle[0]['daily'] === '0') {
  $hotArticle = query("SELECT * FROM article, popularity WHERE visibility_id = 3 && article.id = popularity.article_id ORDER BY RAND()");
}

// header
$title = 'Home';
require '_asset/views/index.view.php';
