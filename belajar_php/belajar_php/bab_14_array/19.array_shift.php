<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  
  $satu_siswa = array_shift($siswa);
  echo $satu_siswa; // andi 
  print_r($siswa);  // Array ( [0] => gina [1] => joko [2] => santi ) 
?>
</body>
</html>