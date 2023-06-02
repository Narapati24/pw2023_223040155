<?php
function connect()
{
  $hostDB = '';
  $userDB = '';
  $passDB = '';
  $nameDB = '';
  return mysqli_connect($hostDB, $userDB, $passDB, $nameDB);
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
  $base_url = "";
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
  $password =  mysqli_escape_string($db, $data['password']);


  $img = uploadProfile();


  // username / password kosong
  if (empty($username)) {
    if ($img) {
      unlink('../../_asset/img/profile/' . $img);
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
      unlink('../../_asset/img/profile/' . $img);
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
      unlink('../../_asset/img/profile/' . $img);
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
      unlink('../../_asset/img/profile/' . $img);
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
    if (password_verify($password, $user['password'])) {
      if (!$img) {
        $img = $data['former-img'];
      } else {
        unlink('../../_asset/img/profile/' . $data['former-img']);
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
      unlink('../../_asset/img/profile/' . $img);
      return [
        'error' => true,
        'massage' => 'PASSWORD WRONG'
      ];
      exit;
    }
  } else {
    if ($img) {
      unlink('../../_asset/img/profile/' . $img);
    };
    return [
      'error' => true,
      'massage' => 'ID ERROR'
    ];
    exit;
  }
}

function changePassword($data)
{
  $db = connect();

  $id = $data['id'];

  $password1 = $data['password1'];
  $password2 = mysqli_escape_string($db, $data['password2']);
  $password3 = mysqli_escape_string($db, $data['password3']);

  $profile = query("SELECT * FROM users WHERE id = '$id'")[0];

  if (!isset($id)) {
    return [
      'error' => true,
      'massage' => 'DO NOT CHANGE THE ID'
    ];
    exit;
  }

  if (!isset($password1)) {
    return [
      'error' => true,
      'massage' => 'PLEASE FILL CURRENT PASSWORD'
    ];
    exit;
  }

  if (!isset($password2)) {
    return [
      'error' => true,
      'massage' => 'PLEASE FILL NEW PASSWORD'
    ];
    exit;
  }

  if (!isset($password3)) {
    return [
      'error' => true,
      'massage' => 'PLEASE RE-TYPE NEW PASSWORD'
    ];
    exit;
  }

  if ($password2 !== $password3) {
    return [
      'error' => true,
      'massage' => 'NEW PASSWORD NOT SAME'
    ];
    exit;
  }

  if (password_verify($password3, $profile['password'])) {
    return [
      'error' => true,
      'massage' => 'NEW PASSWORD SAME WITH THE CURRENT ONE'
    ];
    exit;
  }

  $realPassword = password_hash($password3, PASSWORD_DEFAULT);

  $query = "UPDATE users SET
                password = '$realPassword'
                WHERE id = '$id'";

  mysqli_query($db, $query);

  return [
    'error' => false,
    'massage' => 'PASSWORD CHANGED'
  ];
  exit;
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
      if (password_verify($password, $user['password'])) {
        $role = $user['id_role'];
        if ($role === '4') {
          return [
            'error' => true,
            'massage' => 'THIS ACCOUNT HAS BEEN BANNED'
          ];
          exit;
        }

        // set session
        $_SESSION['roles'] = $role;
        $_SESSION['ids'] = $query['id'];
        $_SESSION['login'] = true;

        // set cookies
        if (isset($data['remember'])) {
          setcookie('key', hash('sha256', $user['username']), time() + 604800, '/');
          setcookie('id', $query['id'], time() + 604800, '/');
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
  move_uploaded_file($tmp_file, '../_asset/img/article/' . $new_name_file);

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
  move_uploaded_file($tmp_file, '../../_asset/img/profile/' . $new_name_file);

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
  $category = $data['category'];

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

  $queryPopularity = "INSERT INTO popularity VALUES ('$article_id', DEFAULT, DEFAULT, DEFAULT, now(), DEFAULT);";
  mysqli_query($db, $queryPopularity);
  echo mysqli_error($db);

  if ($category != "null") {
    $queryCategory = "INSERT INTO article_category VALUES ('$article_id', '$category');";
    mysqli_query($db, $queryCategory);
    echo mysqli_error($db);
  }
  return [
    'error' => false,
    'massage' => 'ARTICLE BEEN INPUTED'
  ];
  exit;
}

function UpdateArticle($data)
{
  $db = connect();

  $id = $data['id'];
  $title = htmlspecialchars($data['title']);
  // $img = htmlspecialchars($data['img']);
  $shortContent = htmlspecialchars($data['shortContentArticle']);
  $content = htmlspecialchars($data['contentArticle'], ENT_QUOTES);
  $idAuthor = htmlspecialchars($data['idAuthor']);
  $visibility = $data['visibility'];
  $category = $data['category'];

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
    $img = $data['former-img'];
  } else {
    unlink('../_asset/img/article/' . $data['former-img']);
  }
  // article
  $queryArticle = "UPDATE article SET
                    title = '$title',
                    img = '$img',
                    shortContent = '$shortContent',
                    content = '$content',
                    visibility_id = '$visibility'
                    WHERE id = '$id'";

  mysqli_query($db, $queryArticle);
  echo mysqli_error($db);

  $listCategory = query("SELECT * FROM article_category WHERE article_id = '$id'");

  if (!$listCategory) {
    $queryCategory = "INSERT INTO article_category VALUES ('$id', '$category')";
  } else {
    $queryCategory = "UPDATE article_category SET
                      category_id = '$category'
                      WHERE article_id = '$id'";
  }

  mysqli_query($db, $queryCategory);
  echo mysqli_error($db);

  return [
    'error' => false,
    'massage' => 'ARTICLE BEEN UPDATED'
  ];
  exit;
}

function deleteArticle($data)
{
  $db = connect();

  $id = $data['id'];
  $img = $data['former-img'];
  $listCategory = query("SELECT * FROM article_category WHERE article_id = '$id'");

  if ($listCategory) {
    $queryCategory = "DELETE FROM article_category WHERE article_id ='$id'";
    mysqli_query($db, $queryCategory);
  }
  $queryPopularity = "DELETE FROM popularity WHERE article_id = '$id'";
  mysqli_query($db, $queryPopularity);

  unlink('../_asset/img/article/' . $img);

  $queryArticle = "DELETE FROM article WHERE id = '$id'";
  mysqli_query($db, $queryArticle);

  return [
    'error' => false,
    'massage' => 'ARTICLE DELETED'
  ];
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
