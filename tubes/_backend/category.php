<?php

function inputCategory($data)
{
  $db = connect();

  $category = str_replace(' ', '', $data['nameCategory']);

  if (query("SELECT * FROM category WHERE category_name = '$category'")) {
    return [
      'error' => true,
      'massage' => 'CATEGORY ALREADY EXIST'
    ];
    exit;
  }

  $query = "INSERT INTO category VALUES(null, '$category')";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'CATEGORY BEEN ADDED'
  ];
}

function inputKeyword($data)
{
  $db = connect();

  $keyword = $data['nameKeyword'];
  $category = $data['category'];

  if (query("SELECT * FROM category_keyword WHERE category_id = '$category' AND keyword = '$keyword'")) {
    return [
      'error' => true,
      'massage' => 'KEYWORD ALREADY EXIST'
    ];
    exit;
  }

  $query = "INSERT INTO category_keyword VALUES(null, '$category', '$keyword')";

  mysqli_query($db, $query);
  echo mysqli_error($db);
  return [
    'error' => false,
    'massage' => 'KEYWORD BEEN ADDED'
  ];
}
