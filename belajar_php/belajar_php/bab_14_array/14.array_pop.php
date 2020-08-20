<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  
  $satu_siswa = array_pop($siswa);
  echo $satu_siswa; // santi 
  print_r($siswa);  // Array ( [0] => andi [1] => gina [2] => joko )  
?>
</body>
</html>