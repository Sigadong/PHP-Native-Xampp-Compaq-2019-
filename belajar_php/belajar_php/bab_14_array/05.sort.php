<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array(98, 59, 42, 65, 87, 66, 82, 49, 99);
  sort($nilai);
  print_r($nilai); 
  // Array ( [0] => 42 [1] => 49 [2] => 59 [3] => 65 [4] => 66 
  //         [5] => 82 [6] => 87 [7] => 98 [8] => 99 ) 
  echo "<br>";
  
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  sort($siswa);
  print_r($siswa); 
  // Array ( [0] => andi [1] => gina [2] => joko [3] => joy 
  //         [4] => rika [5] => rini [6] => santi ) 
?>
</body>
</html>