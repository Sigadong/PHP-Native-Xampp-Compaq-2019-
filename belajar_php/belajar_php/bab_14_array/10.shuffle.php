<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  shuffle($siswa);

  print_r($siswa); 
  // Array ( [0] => santi [1] => joy [2] => gina [3] => joko 
  //         [4] => rika [5] => rini [6] => andi ) 
?>
</body>
</html>