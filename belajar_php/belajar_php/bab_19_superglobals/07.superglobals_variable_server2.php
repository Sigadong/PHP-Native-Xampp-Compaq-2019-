<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Superglobals Variable $_SERVER</h1>
<?php
  echo "HTTP_HOST = {$_SERVER["HTTP_HOST"]} <br>"; 
  echo "HTTP_USER_AGENT = {$_SERVER["HTTP_USER_AGENT"]} <br>"; 
  echo "SERVER_SOFTWARE = {$_SERVER["SERVER_SOFTWARE"]} <br>"; 
  echo "SERVER_ADDR = {$_SERVER["SERVER_ADDR"]} <br>"; 
  echo "DOCUMENT_ROOT = {$_SERVER["DOCUMENT_ROOT"]} <br>"; 
  echo "SCRIPT_FILENAME = {$_SERVER["SCRIPT_FILENAME"]} <br>"; 
  echo "REQUEST_URI = {$_SERVER["REQUEST_URI"]} <br>"; 
  echo "PHP_SELF = {$_SERVER["PHP_SELF"]} <br>"; 
  echo "SERVER_SIGNATURE = {$_SERVER["SERVER_SIGNATURE"]}"; 
?>
</body>
</html>