<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo "<br>";
  sort($siswa, SORT_NATURAL);
  print_r($siswa); 
  // Array ( [0] => siswa1 [1] => siswa2 [2] => siswa5 
  //         [3] => siswa11 [4] => siswa20 ) 
?>
</body>
</html>