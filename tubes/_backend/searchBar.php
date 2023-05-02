<?php

function find($data)
{

  $db = connect();

  $query = "SELECT * FROM article WHERE title LIKE '%$data%' || content LIKE '%$data%' ORDER BY id DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findPopular($data)
{

  $db = connect();

  $query = "SELECT * FROM article WHERE title LIKE '%$data%' || content LIKE '%$data%' ORDER BY clicks DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findAdminArticle($data, $data2)
{

  $db = connect();

  $query = "SELECT * FROM users, article WHERE users.id = article.user_id && (article.title LIKE '%$data%' || article.content LIKE '%$data%') && (users.first_name LIKE '%$data2%' || users.last_name LIKE '%$data2%') ORDER BY article.id DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findUserArticle($data)
{
  session_start();
  $db = connect();
  $idusers = $_SESSION['ids'];

  $query = "SELECT * FROM users, article WHERE users.id = '$idusers' && users.id = article.user_id && (users.first_name LIKE '%$data%' || users.last_name LIKE '%$data%' || article.title LIKE '%$data%' || article.content LIKE '%$data%') ORDER BY article.id DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
