<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tgl1 = date_create("17-8-2016");
  $tgl2 = date_create("19-08-2016");
   
  $selisih = date_diff($tgl2, $tgl1);
  
  echo "<pre>";
  print_r($selisih);
  echo "</pre>";
?>
</body>
</html>