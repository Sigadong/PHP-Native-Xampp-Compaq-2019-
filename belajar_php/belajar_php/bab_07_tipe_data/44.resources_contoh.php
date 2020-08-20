<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $koneksi = mysql_connect("localhost", "root", "");
  var_dump($koneksi); 
  // resource(3) of type (mysql link) 
?>
</body>
</html>