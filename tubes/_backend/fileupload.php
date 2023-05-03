<?php
require 'function.php';
$data = array();
if (isset($_FILES['upload']['name'])) {
  $file_name = $_FILES['upload']['name'];
  $file_extension = explode('.', $file_name);
  $file_extension = strtolower(end($file_extension));
  $new_name_file = uniqid();
  $new_name_file .= '.';
  $new_name_file .= $file_extension;
  $file_path = base_url('img/article/') . $new_name_file;
  if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png') {
    if (move_uploaded_file($_FILES['upload']['tmp_name'], '../img/article/' . $new_name_file)) {
      $data['file'] = $new_name_file;
      $data['url'] = $file_path;
      $data['uploaded'] = 1;
    } else {
      $data['uploaded'] = 0;
      $data['error']['message'] = 'Error! File not uploaded';
    }
  } else {
    $data['uploaded'] = 0;
    $data['error']['message'] = 'Invalid extension';
  }
}
echo json_encode($data);
