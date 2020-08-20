<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  
  $satu_siswa = next($siswa); 
  echo $satu_siswa;   // gina
  echo "<br>";
  
  $satu_siswa = next($siswa); 
  echo $satu_siswa;   // joko
  echo "<br>";
  
  $satu_siswa = end($siswa); 
  echo $satu_siswa;   // santi 
  echo "<br>";
  
  $satu_siswa = reset($siswa); 
  echo $satu_siswa;   // andi
?>
</body>
</html>