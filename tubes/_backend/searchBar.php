<?php

function find($data, $data2)
{

  $db = connect();

  $query = "SELECT * FROM article, article_category WHERE article.id = article_category.article_id && article_category.category_id LIKE '%$data2%' && (article.title LIKE '%$data%' || article.content LIKE '%$data%') ORDER BY id DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findPopularToday($data, $data2)
{

  $db = connect();

  $query = "SELECT * FROM article, popularity, article_category WHERE visibility_id = 3 && article.id = article_category.article_id &&
                                                    article.id = popularity.article_id && 
                                                    article_category.category_id LIKE '%$data2%' &&
                                                    (title LIKE '%$data%' || content LIKE '%$data%') ORDER BY popularity.daily DESC LIMIT 4";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findPopularWeek($data, $data2)
{

  $db = connect();

  $query = "SELECT * FROM article, popularity, article_category WHERE visibility_id = 3 && article.id = article_category.article_id &&
                                                    article.id = popularity.article_id && 
                                                    article_category.category_id LIKE '%$data2%' &&
                                                    (title LIKE '%$data%' || content LIKE '%$data%') ORDER BY popularity.weekly DESC LIMIT 4";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findPopularMonth($data, $data2)
{

  $db = connect();

  $query = "SELECT * FROM article, popularity, article_category WHERE visibility_id = 3 && article.id = article_category.article_id &&
                                                    article.id = popularity.article_id && 
                                                    article_category.category_id LIKE '%$data2%' &&
                                                    (title LIKE '%$data%' || content LIKE '%$data%') ORDER BY popularity.Monthly DESC LIMIT 4";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function findAdminArticle($data, $data2, $data3, $data4, $data5)
{

  $db = connect();

  $query = "SELECT * FROM users, article WHERE users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') && (users.first_name LIKE '%$data3%' || users.last_name LIKE '%$data3%') ORDER BY article.id DESC LIMIT $data4, $data5";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findAdminUsers($data, $data2)
{

  $db = connect();

  $query = "SELECT users.id AS uid, users.*, roles.* WHERE users.id_role = roles.id && (users.username LIKE '%$data%' && users.id_role LIKE '%$data2%')";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findUserArticle($data, $data2, $data3, $data4)
{
  $db = connect();
  $id = $_SESSION['ids'];

  $query = "SELECT * FROM users, article WHERE users.id = '$id' && users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') ORDER BY article.id DESC LIMIT $data3, $data4";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
