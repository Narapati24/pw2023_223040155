<?php
require '../_backend/config.php';
require_once __DIR__ . '/plugin/vendor/autoload.php';

$id = $_GET['id'];
$article = query("SELECT * FROM article WHERE id = $id")[0];
$editor = query("SELECT * FROM users INNER JOIN article WHERE article.user_id = users.id && article.id = $id")[0];

$html = '<!DOCTYPE html>
<html lang="en">

<head>
  <!-- reset css -->
  <link rel="stylesheet" href="' . base_url('_asset/css/reset.css') . '">
  <!-- bootstrap -->
  <link rel="stylesheet" href="' . base_url('_asset/css/bootstrap/bootstrap.min.css') . '">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="' . base_url('_asset/css/custom/universal.css') . '">
  <link rel="icon" href="' . base_url('_asset/img/logo/P-news-logo.png') . '">
  <!-- font -->
  <!-- monserrat 700 bold italic -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
  <!-- kanit regular 400 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <!-- poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
  <style>
  *{
    font-family: "Poppins", sans-serif !important;
  }
  
    .editor {
      line-height: 6px;
    }

    .image {
      margin: auto;
      text-align: center;
    }

    .image img {
      width: 100%;
    }

    #comment {
      background-color: #e6e1e1;
      min-height: 540px;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .user-comment {
      margin-top: 10px;
      word-wrap: break-word;
      background-color: white;
    }
  </style>
  </head>
  <body>
  <!-- content -->
  <div class="container w-100 rounded article" style="background-color: white; border: 5px solid whitesmoke;">
  <h4 class="fw-bolder mt-2" style="font-weight: bold; font-size: 20px;">' . strtoupper($article['title']) .
  '</h4>
  <hr>
  <div class="editor">
    <p><span style="font-weight: bold;">Editor:</span> @' . $editor['username'] . '</p>
    <p>' . $article['insert_date'] . '</p>
    </div>
    
    <div class="image">
      <img class="rounded" src="' . base_url('_asset/img/article/') . $article['img'] . '" width="730">
      </div>
      
      <p>' . html_entity_decode($article['content'], ENT_QUOTES) . '</p>
      <!-- Java Script -->
      <script src="' . base_url('_asset/js/bootstrap/bootstrap.min.js') . '"></script>
      </body>
      
      </html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;

$mpdf->WriteHTML($html);
$mpdf->Output('PeNEWS.pdf', 'D');
