<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  $var = array_unshift($siswa,"rani");

  echo $var; // 5 
  print_r($siswa); 
  // Array ( [0] => rani [1] => andi [2] => gina [3] => joko [4] => santi ) 
?>
</body>
</html>