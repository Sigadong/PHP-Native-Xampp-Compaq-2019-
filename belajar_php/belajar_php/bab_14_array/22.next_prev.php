<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  
  $satu_siswa = current($siswa); 
  echo $satu_siswa;   // andi
  echo "<br>";
  
  $satu_siswa = next($siswa); 
  echo $satu_siswa;   // gina
  echo "<br>";
  
  $satu_siswa = next($siswa); 
  echo $satu_siswa;   // joko
  echo "<br>";
  
  $satu_siswa = prev($siswa); 
  echo $satu_siswa;   // gina
?>
</body>
</html>