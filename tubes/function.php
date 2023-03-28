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
  };

  return $rows;
}
