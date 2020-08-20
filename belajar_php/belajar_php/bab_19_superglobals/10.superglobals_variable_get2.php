<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Superglobals Variable $_GET</h1>
<?php
  $nama=$_GET["nama"];
  $alamat=$_GET["alamat"];
  
  echo "Nama siswa = $nama <br>";
  echo "Alamat siswa = $alamat";
?>
</body>
</html>