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

function findAdminArticle($data, $data2, $data3)
{

  $db = connect();

  $query = "SELECT * FROM users, article WHERE users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') && (users.first_name LIKE '%$data3%' || users.last_name LIKE '%$data3%') ORDER BY article.id DESC";

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

  $query = "SELECT * FROM users, roles WHERE users.id_role = roles.id && (users.username LIKE '%$data%' && users.id_role LIKE '%$data2%')";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function findUserArticle($data, $data2)
{
  $db = connect();
  $idusers = $_SESSION['ids'];

  $query = "SELECT * FROM users, article WHERE users.id = '$idusers' && users.id = article.user_id && article.visibility_id LIKE '%$data%' && (article.title LIKE '%$data2%' || article.content LIKE '%$data2%') ORDER BY article.id DESC";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
