<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal");
  }
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