<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "universitas";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Koneksi PHP dengan MySQL</h1>
</body>
</html>