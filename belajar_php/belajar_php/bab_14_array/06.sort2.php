<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
echo "<br>";
  $siswa = array("siswa1", "siswa20", "siswa2", "siswa11", "siswa5");
  sort($siswa);
  
  print_r($siswa); 
  // Array ( [0] => siswa1 [1] => siswa11 [2] => siswa2 
  //         [3] => siswa20 [4] => siswa5 ) 
?>
</body>
</html>