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
  // if (mysqli_num_rows($result) == 1) {
  //   return mysqli_fetch_assoc($result);
  // }

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

  $query = "INSERT INTO users VALUES (null,'$first_name','$last_name','$birthdate','$gender','$username','$email','$password');";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}

function loginAccount($data)
{
  $db = connect();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($query = query("SELECT * FROM users WHERE username = '$username' && password = '$password'")[0]) {
    // set session
    $_SESSION['ids'] = $query['id'];
    $_SESSION['login'] = true;

    echo '<script>history.back();</script>';
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
  $content = $data['contentArticle'];
  $idAuthor = htmlspecialchars($data['idAuthor']);

  $query = "INSERT INTO article VALUES (null,'$title','$img','$content', 'now()','$idAuthor');";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
