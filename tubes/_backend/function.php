<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

if (isset($_COOKIE['key']) && isset($_COOKIE['id'])) {
  $id = $_COOKIE['id'];
  $role = $_COOKIE['role'];
  $key = $_COOKIE['key'];
  $user = query("SELECT username FROM users WHERE id = '$id'")[0];

  if ($key === hash('sha256', $user['username'])) {
    // set session
    $_SESSION['login'] = true;
    $_SESSION['roles'] = $role;
    $_SESSION['ids'] = $id;
  }
}


function connect()
{
  return mysqli_connect('localhost', 'root', '', 'tubespw2023');
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
  $base_url = "http://localhost/pw2023_223040155/tubes";
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

  // gender undifine
  if (empty($gender)) {
    return [
      'error' => true,
      'massage' => 'SELECT GENDER'
    ];
    exit;
  }

  // gender other than man and women
  if (query("SELECT gender from users WHERE gender != '$gender'")) {
    return [
      'error' => true,
      'massage' => 'PLEASE, ONLY MAN AND WOMEN HERE'
    ];
    exit;
  }

  // username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    return [
      'error' => true,
      'massage' => 'USERNAME / PASSWORD NEED TO FILL'
    ];
    exit;
  }

  // username terlalu panjang
  if (strlen($username) > 20) {
    return [
      'error' => true,
      'massage' => 'USERNAME TOO LONG'
    ];
    exit;
  }

  // username sudah ada
  if (query("SELECT * FROM users WHERE username ='$username'")) {
    return [
      'error' => true,
      'massage' => 'USERNAME ALREADY EXIST'
    ];
    exit;
  }

  // email sudah dipakai
  if (query("SELECT * FROM users WHERE email ='$email'")) {
    return [
      'error' => true,
      'massage' => 'EMAIL ALREADY EXIST'
    ];
    exit;
  }

  // konfirmasi password
  if ($password1 !== $password2) {
    return [
      'error' => true,
      'massage' => 'CONFIRMATION PASSWORD DIDN\'T SAME'
    ];
    exit;
  }

  // panjang password
  if (strlen($password1) < 5) {
    return [
      'error' => true,
      'massage' => 'NEED LONGER PASSWORD'
    ];
    exit;
  }

  $realPassword = password_hash($password1, PASSWORD_DEFAULT);

  $query = "INSERT INTO users VALUES (null,DEFAULT,$first_name','$last_name','$birthdate','$gender','$username','$email','$realPassword', default);";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'REGISTER SUCCESS'
  ];
  exit;
}

function updateAccount($data)
{
  $db = connect();

  $id = $data['id'];
  $first_name = htmlspecialchars($data['first_name']);
  $last_name = htmlspecialchars($data['last_name']);
  $birthdate = htmlspecialchars($data['birthdate']);
  $gender = htmlspecialchars($data['gender']);
  $username = htmlspecialchars(strtolower($data['username']));
  $email = htmlspecialchars($data['email']);
  $password =  htmlspecialchars($data['password']);


  $img = uploadProfile();


  // username / password kosong
  if (empty($username)) {
    if ($img) {
      unlink("../../img/profile/" . $img);
    };
    return [
      'error' => true,
      'massage' => 'USERNAME NEEDED'
    ];
    exit;
  }

  // username terlalu panjang
  if (strlen($username) > 20) {
    if ($img) {
      unlink("../../img/profile/" . $img);
    };
    return [
      'error' => true,
      'massage' => 'USERNAME TOO LONG'
    ];
    exit;
  }

  // username sudah ada
  if (query("SELECT * FROM users WHERE username = '$username' && id != '$id'")) {
    if ($img) {
      unlink("../../img/profile/" . $img);
    };
    return [
      'error' => true,
      'massage' => 'USERNAME ALREADY EXIST'
    ];
    exit;
  }

  // email sudah dipakai
  if (query("SELECT * FROM users WHERE email = '$email' && id != '$id'")) {
    if ($img) {
      unlink("../../img/profile/" . $img);
    };
    return [
      'error' => true,
      'massage' => 'EMAIL ALREADY EXIST'
    ];
    exit;
  }


  if ($user = query("SELECT * FROM users
                                WHERE id = '$id'
                                ")[0]) {
    if ($password === $user['password']) {
      if (!$img) {
        $img = $data['former-img'];
      } else {
        unlink("../../img/profile/" . $data['former-img']);
      }

      $query = "UPDATE users SET
                img = '$img',
                first_name = '$first_name',
                last_name = '$last_name',
                birthdate = '$birthdate',
                gender = '$gender',
                username = '$username',
                email = '$email'
                WHERE id = '$id'";

      mysqli_query($db, $query);

      return [
        'error' => false,
        'massage' => 'DATA UPDATED'
      ];
      exit;
    } elseif (password_verify($password, $user['password'])) {
      if (!$img) {
        $img = $data['former-img'];
      } else {
        unlink("../../img/profile/" . $data['former-img']);
      }

      $query = "UPDATE users SET
                img = '$img',
                first_name = '$first_name',
                last_name = '$last_name',
                birthdate = '$birthdate',
                gender = '$gender',
                username = '$username',
                email = '$email'
                WHERE id = '$id'";

      mysqli_query($db, $query);

      return [
        'error' => false,
        'massage' => 'DATA UPDATED'
      ];
      exit;
    } else {
      unlink("../../img/profile/" . $img);
      return [
        'error' => true,
        'massage' => 'PASSWORD WRONG'
      ];
      exit;
    }
  } else {
    if ($img) {
      unlink("../../img/profile/" . $img);
    };
    return [
      'error' => true,
      'massage' => 'ID ERROR'
    ];
    exit;
  }
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
      if ($password == $user['password']) {

        $id = $query['id'];
        $role = $query['role_name'];

        // set session
        $_SESSION['roles'] = $role;
        $_SESSION['ids'] = $id;
        $_SESSION['login'] = true;

        // set cookies
        if (isset($data['remember'])) {
          setcookie('key', hash('sha256', $user['username']), time() + 604800, '/');
          setcookie('id', "$id", time() + 604800, '/');
          setcookie('role', "$role", time() + 604800, '/');
        }

        header('Location:' .  base_url('pages/account/dashboard.php'));
        exit;
      } elseif (password_verify($password, $user['password'])) {
        $role = $query['role_name'];

        // set session
        $_SESSION['roles'] = $role;
        $_SESSION['ids'] = $query['id'];
        $_SESSION['login'] = true;

        // set cookies
        if (isset($data['remember'])) {
          setcookie('key', hash('sha256', $user['username']), time() + 604800, '/');
          setcookie('id', $query['id'], time() + 604800, '/');
          setcookie('role', "$role", time() + 604800, '/');
        }

        header('Location:' .  base_url('pages/account/dashboard.php'));
        exit;
      }
    } else {
      return [
        'error' => true,
        'massage' => 'Username / Password salah!'
      ];
      exit;
    }
  } else {
    return [
      'error' => true,
      'massage' => 'NO MATCH USERNAME'
    ];
    exit;
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
    return false;
  }

  // chect name file
  $list_type = ['jpg', 'jpeg', 'png'];
  $file_extension = explode('.', $name_file);
  $file_extension = strtolower(end($file_extension));
  if (!in_array($file_extension, $list_type)) {
    return false;
  }

  // check type file
  if ($type_file != 'image/jpeg' && $type_file != 'image/png') {
    return false;
  }

  // check size file
  // 5mb
  if ($size_file > 5000000) {
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

function uploadProfile()
{
  $name_file = $_FILES['new-img']['name'];
  $type_file = $_FILES['new-img']['type'];
  $size_file = $_FILES['new-img']['size'];
  $error = $_FILES['new-img']['error'];
  $tmp_file = $_FILES['new-img']['tmp_name'];

  // check file existence
  if ($error == 4) {
    return false;
  }

  // chect name file
  $list_type = ['jpg', 'jpeg', 'png'];
  $file_extension = explode('.', $name_file);
  $file_extension = strtolower(end($file_extension));
  if (!in_array($file_extension, $list_type)) {
    return false;
  }

  // check type file
  if ($type_file != 'image/jpeg' && $type_file != 'image/png') {
    return false;
  }

  // check size file
  // 5mb
  if ($size_file > 5000000) {
    return false;
  }

  // ready for upload
  // generate new name file
  $new_name_file = uniqid();
  $new_name_file .= '.';
  $new_name_file .= $file_extension;
  move_uploaded_file($tmp_file, '../../img/profile/' . $new_name_file);

  return $new_name_file;
}

function inputArticle($data)
{
  $db = connect();

  $title = htmlspecialchars($data['title']);
  // $img = htmlspecialchars($data['img']);
  $shortContent = htmlspecialchars($data['shortContentArticle']);
  $content = htmlspecialchars($data['contentArticle'], ENT_QUOTES);
  $idAuthor = htmlspecialchars($data['idAuthor']);
  $visibility = $data['visibility'];

  if (strlen($title) > 500) {
    return [
      'error' => true,
      'massage' => 'TITLE TOO LONG'
    ];
    exit;
  }

  if (strlen($shortContent) > 500) {
    return [
      'error' => true,
      'massage' => 'DESCRIPTION TOO LONG'
    ];
    exit;
  }

  $img = upload();
  if (!$img) {
    return [
      'error' => true,
      'massage' => 'NEED IMG'
    ];
    exit;
  }
  // article
  $queryArticle = "INSERT INTO article VALUES (null,'$title','$img','$shortContent','$content', now(),'$idAuthor','$visibility');";

  mysqli_query($db, $queryArticle);
  echo mysqli_error($db);
  $article_id = mysqli_insert_id($db);

  $queryPopularity = "INSERT INTO popularity VALUES ('$article_id', DEFAULT, DEFAULT, now(), DEFAULT);";
  mysqli_query($db, $queryPopularity);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'ARTICLE BEEN INPUTED'
  ];
  exit;
}

function comment($data)
{
  $db = connect();

  $description = htmlspecialchars($data['description']);
  $user = $data['idUser'];
  $article = $data['idArticle'];

  if (!$description) {
    return [
      'error' => true,
      'massage' => 'CANT ADD COMMENT'
    ];
    exit;
  }

  $query = "INSERT INTO commentar VALUES (null, '$description', now(), '$user', '$article')";
  mysqli_query($db, $query);
  return [
    'error' => false,
    'massage' => 'COMMENT INSERTED'
  ];
  exit;
}

function dd($data)
{
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die;
}
