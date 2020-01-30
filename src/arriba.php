<?php
function inicioPag($title){
    echo "<!doctype html>
    <html lang='en'>
    <head>
    
      <!-- Required meta tags -->
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
      <!-- Bootstrap CSS -->
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <title>$title</title>
    </head>
    <body class='text-dark lead text-left' > ";
  
  
  }
  require "bbdd.php";
  session_start();
?>