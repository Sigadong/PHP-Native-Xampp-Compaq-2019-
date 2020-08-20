<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tgl1 = date_create("17-8-2016");
  $tgl2 = date_create("19-9-2019");
   
  $selisih = date_diff($tgl2, $tgl1);
  
  echo $selisih->d;   // 2
  echo "<br>";
  echo $selisih->m;   // 1
  echo "<br>";
  echo $selisih->y;   // 3
?>
</body>
</html>