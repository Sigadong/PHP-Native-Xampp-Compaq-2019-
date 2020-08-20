<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $username="admin";
  $password="qwerty";
  
  if ($username=="admin" AND $password=="qwerty"){
    echo "Username dan password sesuai, hak akses diberikan";
  }
  else {
    echo "Username atau password tidak sesuai!";
  }
?>
</body>
</html>