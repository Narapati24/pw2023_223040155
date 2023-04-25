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
  $username = htmlspecialchars(strtolower($data['username']));
  $email = htmlspecialchars($data['email']);
  $password1 = mysqli_real_escape_string($db, $data['password1']);
  $password2 = mysqli_real_escape_string($db, $data['password2']);

  // username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('username / password need to fill');
          </script>";
    return false;
  }

  // username sudah ada
  if (query("SELECT * FROM users WHERE username ='$username'")) {
    echo "<script>
          alert('username sudah dipakai');
          </script>";
    return false;
  }

  // konfirmasi password
  if ($password1 !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai');
          </script>";
    return false;
  }

  // panjang password
  if (strlen($password1) < 5) {
    echo "<script>
          alert('password terlalu pendek');
          </script>";
    return false;
  }

  $realPassword = password_hash($password1, PASSWORD_DEFAULT);

  $query = "INSERT INTO users VALUES (null,'$first_name','$last_name','$birthdate','$gender','$username','$email','$realPassword', default);";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}

function loginAccount($data)
{
  $db = connect();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($query = query("SELECT users.id, users.first_name, roles.role_name FROM users, roles WHERE users.id_role = roles.id && users.username = '$username'")[0]) {
    if ($user = query("SELECT * FROM users
                                WHERE username = '$username'
                                || email = '$username'")[0]) {
      if (query("SELECT * FROM users WHERE password = '$password'")) {

        // set session
        $_SESSION['roles'] = $query['role_name'];
        $_SESSION['ids'] = $query['id'];
        $_SESSION['login'] = true;

        echo '<script>history.back();</script>';
        exit;
      } elseif (password_verify($password, $user['password'])) {

        // set session
        $_SESSION['roles'] = $query['role_name'];
        $_SESSION['ids'] = $query['id'];
        $_SESSION['login'] = true;

        echo '<script>history.back();</script>';
        exit;
      }
    } else {
      return [
        'error' => true,
        'pesan' => 'Username / Password salah!'
      ];
    }
  }
}

function inputArticle($data)
{
  $db = connect();

  $title = htmlspecialchars($data['title']);
  $img = htmlspecialchars($data['img']);
  $content = $data['contentArticle'];
  $idAuthor = htmlspecialchars($data['idAuthor']);

  $query = "INSERT INTO article VALUES (null,'$title','$img','$content', now(),DEFAULT,'$idAuthor');";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
