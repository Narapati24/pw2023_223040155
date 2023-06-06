<?php
function roleRequest($data)
{
  $db = connect();
  $iduser = $data['userId'];
  $role = $data['role'];

  $request = query("SELECT * FROM role_request WHERE user_id = '$iduser' && status = '3'");

  if (count($request) > 2) {
    return [
      'error' => true,
      'massage' => 'TOO MANY REQUEST'
    ];
    exit;
  }

  $query = "INSERT INTO role_request VALUES(null, '3', '$iduser', '$role', null)";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'REQUEST BEEN ADDED'
  ];
}

function UpdateRoleRequest($data)
{
  $db = connect();

  $idRequest = $data['id'];
  $idProfile = $data['idProfile'];
  $roleRequest = $data['roleRequest'];

  if (isset($data['acceptRequest'])) {
    $query = "UPDATE role_request a JOIN users b ON a.user_id = b.id SET 
                a.status = '1',
                a.admin_id = '$idProfile',
                b.id_role = '$roleRequest'
                WHERE a.id_request_role = '$idRequest'";

    mysqli_query($db, $query);
    echo mysqli_error($db);
    return [
      'error' => false,
      'massage' => 'REQUEST BEEN APROVED'
    ];
  } else {
    $query = "UPDATE role_request SET 
                status = '2',
                admin_id = '$idProfile'
                WHERE id_request_role = '$idRequest'";

    mysqli_query($db, $query);
    echo mysqli_error($db);
    return [
      'error' => false,
      'massage' => 'REQUEST BEEN DENIED'
    ];
  }
}

function reportArticle($data)
{
  $db = connect();

  $idArticle = $data['idArticle'];
  $img = $data['img'];
  $desc = htmlspecialchars($data['desc']);
  $idUser = $data['idUser'];

  if (!$desc) {
    return [
      'error' => true,
      'massage' => 'NEED DESCRIPTION FOR REPORTING'
    ];
    exit;
  }

  if (!$idUser) {
    return [
      'error' => true,
      'massage' => 'YOU ARE NOT LOGON YET'
    ];
    exit;
  }

  if (!$idArticle) {
    return [
      'error' => true,
      'massage' => 'YOU WANNA REPORT WHAT?'
    ];
    exit;
  }

  $query = "INSERT INTO reporting VALUES(null, '$img', '$desc', '3', '$idArticle', '$idUser', null)";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'ARTICLE BEEN REPORTED'
  ];
}
