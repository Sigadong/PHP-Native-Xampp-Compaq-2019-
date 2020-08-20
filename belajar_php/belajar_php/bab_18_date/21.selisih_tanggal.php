<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tgl1 = strtotime("2-05-2016");
  $tgl2 = strtotime("7-05-2016");
  
  $selisih_tgl = abs($tgl2 - $tgl1);
  echo $selisih_tgl; // 432000 
  echo "<br>";
  
  $satu_hari = 24*60*60;
  $selisih_hari = $selisih_tgl/$satu_hari;
  
  echo $selisih_hari; //5
?>
</body>
</html>