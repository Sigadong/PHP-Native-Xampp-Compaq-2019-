<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array("andi", "gina", "joko", "santi");
  $var = array_push($siswa,"rani");

  echo $var; // 5 
  print_r($siswa); 
  // Array ( [0] => andi [1] => gina [2] => joko [3] => santi [4] => rani ) 
?>
</body>
</html>