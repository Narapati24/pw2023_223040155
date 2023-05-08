<?php
date_default_timezone_set('Asia/Jakarta');
session_start();


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

function base_url($url = null)
{
  $base_url = "http://localhost:81/pw2023_223040155/tubes";
  if ($url != null) {
    return $base_url . "/" . $url;
  } else {
    return $base_url;
  }
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

  // username terlalu panjang
  if (strlen($username) > 20) {
    echo "<script>
    alert('username terlalu panjang');
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

  // email sudah dipakai
  if (query("SELECT * FROM users WHERE email ='$email'")) {
    echo "<script>
          alert('email sudah dipakai');
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

  $query = "INSERT INTO users VALUES (null,DEFAULT,$first_name','$last_name','$birthdate','$gender','$username','$email','$realPassword', default);";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}

function loginAccount($data)
{
  connect();

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

function upload()
{
  $name_file = $_FILES['img']['name'];
  $type_file = $_FILES['img']['type'];
  $size_file = $_FILES['img']['size'];
  $error = $_FILES['img']['error'];
  $tmp_file = $_FILES['img']['tmp_name'];

  // check file existence
  if ($error == 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu');
          </script>";
    return false;
  }

  // chect name file
  $list_type = ['jpg', 'jpeg', 'png'];
  $file_extension = explode('.', $name_file);
  $file_extension = strtolower(end($file_extension));
  if (!in_array($file_extension, $list_type)) {
    echo "<script>
            alert('Harus File Gambar');
          </script>";
    return false;
  }

  // check type file
  if ($type_file != 'image/jpeg' && $type_file != 'image/png') {
    echo "<script>
    alert('Harus File Gambar');
          </script>";
    return false;
  }

  // check size file
  // 5mb
  if ($size_file > 5000000) {
    echo "<script>
    alert('Ukuran terlalu besar');
          </script>";
    return false;
  }

  // ready for upload
  // generate new name file
  $new_name_file = uniqid();
  $new_name_file .= '.';
  $new_name_file .= $file_extension;
  move_uploaded_file($tmp_file, '../img/article/' . $new_name_file);

  return $new_name_file;
}

function inputArticle($data)
{
  $db = connect();

  $title = htmlspecialchars($data['title']);
  // $img = htmlspecialchars($data['img']);
  $shortContent = htmlspecialchars($data['shortContentArticle']);
  $content = $data['contentArticle'];
  $idAuthor = htmlspecialchars($data['idAuthor']);
  $visibility = $data['visibility'];

  if (strlen($title) >= 100) {
    echo "<script>
    alert('judul terlalu panjang');
          </script>";
    return false;
  }

  if (strlen($shortContent) > 90) {
    echo "<script>
    alert('descripsi terlalu panjang');
          </script>";
    return false;
  }

  $img = upload();
  if (!$img) {
    return false;
  }
  // article
  $queryArticle = "INSERT INTO article VALUES (null,'$title','$img','$shortContent','$content', now(),'$idAuthor','$visibility');";

  mysqli_query($db, $queryArticle);
  echo mysqli_error($db);
  $article_id = mysqli_insert_id($db);

  $queryPopularity = "INSERT INTO popularity VALUES ('$article_id', DEFAULT, DEFAULT, now(), DEFAULT);";
  mysqli_query($db, $queryPopularity);
  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}

function dd($data)
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die;
}
