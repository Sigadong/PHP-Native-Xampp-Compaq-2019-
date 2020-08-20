<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  $key_siswa = array_rand($siswa);
  
  echo $key_siswa;            // 5
  echo $siswa[$key_siswa];    // rika
?>
</body>
</html>