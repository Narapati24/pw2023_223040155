<?php

function connect()
{
  return mysqli_connect('localhost', 'root', '', 'tubes');
}


function query($query)
{
  $db = connect();

  $result = mysqli_query($db, $query);

  // if only one data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function find($data)
{

  $db = connect();

  $query = "SELECT * FROM article WHERE title LIKE '%$data%'";

  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function registerAccount($data)
{
  $db = connect();

  $first_name = htmlspecialchars($data['first_name']);
  $last_name = htmlspecialchars($data['last_name']);
  $birthdate = htmlspecialchars($data['birthdate']);
  $gender = htmlspecialchars($data['gender']);
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $query = "INSERT INTO users VALUE (null,'$first_name','$last_name','$birthdate','$gender','$username','$email','$password');";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}

function loginAccount($data)
{
  $db = connect();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username == 'admin' && $password == '12345') {
    // set session
    $_SESSION['login'] = true;

    header("Location: ../../index.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password salah!'
    ];
  }
}

function inputArticle($data)
{
  $db = connect();

  $title = htmlspecialchars($data['title']);
  $img = htmlspecialchars($data['img']);
  $content = htmlspecialchars($data['content']);

  $query = "INSERT INTO article VALUE (null,'$title','$img','$content',null,null);";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
