<?php
function roleRequest($data)
{
  $db = connect();
  $iduser = $data['userId'];
  $role = $data['role'];

  $request = query("SELECT * FROM role_request WHERE user_id = '$iduser' && status = 'waiting'");

  if (count($request) > 2) {
    return [
      'error' => true,
      'massage' => 'TOO MANY REQUEST'
    ];
    exit;
  }

  $query = "INSERT INTO role_request VALUES(null, 'waiting', '$iduser', '$role', null)";

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
                a.status = 'Accepted',
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
                status = 'Denied',
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
