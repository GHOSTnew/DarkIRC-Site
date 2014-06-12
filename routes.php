<?php

if(preg_match('#index#isU', $_SERVER['REDIRECT_URL'], $match)){
  header("Status: 200 OK", false, 200);
  require 'pages/index.php';
}else if(preg_match('#screen#isU', $_SERVER['REDIRECT_URL'], $match)){
  header("Status: 200 OK", false, 200);
  require 'pages/index.php';
}else if(preg_match('#download#isU', $_SERVER['REDIRECT_URL'], $match)){
  header("Status: 200 OK", false, 200);
  require 'pages/index.php';
}else{
  echo '<h1>Error 404</h1>';
}

