<?php
function roleRequest($data)
{
  $db = connect();
  $iduser = $data['userId'];
  $role = $data['role'];

  $request = query("SELECT * FROM role_request WHERE user_id = '$iduser' && status = 'waiting'");

  if (isset($request) > 5) {
    return [
      'error' => true,
      'massage' => 'TOO MANY REQUEST'
    ];
    exit;
  }

  $query = "INSERT INTO role_request VALUES(null, 'waiting', '$iduser', '$role')";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'REQUEST BEEN ADDED'
  ];
}
