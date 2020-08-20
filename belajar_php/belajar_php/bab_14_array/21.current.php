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
?>
</body>
</html>