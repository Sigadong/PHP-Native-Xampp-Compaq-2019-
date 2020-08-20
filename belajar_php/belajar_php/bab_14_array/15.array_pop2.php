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
  echo $satu_siswa;    // santi 
  print_r($siswa);     // Array ( [0] => andi [1] => gina [2] => joko )  
  echo "<br>";
  
  $satu_siswa = array_pop($siswa);
  echo $satu_siswa;     // joko
  print_r($siswa);      // Array ( [0] => andi [1] => gina ) 
  echo "<br>";
  
  $satu_siswa = array_pop($siswa);
  echo $satu_siswa;     // gina
  print_r($siswa);      // Array ( [0] => andi ) 
  echo "<br>";
  
  $satu_siswa = array_pop($siswa);
  echo $satu_siswa;     // andi
  print_r($siswa);      // Array ( ) 
  echo "<br>";
  
  $satu_siswa = array_pop($siswa);
  var_dump($satu_siswa); // NULL 
  print_r($siswa);       // Array ( ) 
?>
</body>
</html>