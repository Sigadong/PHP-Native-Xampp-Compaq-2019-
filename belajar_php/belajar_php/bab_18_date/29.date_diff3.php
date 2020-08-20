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
  
  echo "Selisih tanggal adalah = $selisih->y tahun, 
        $selisih->m bulan, $selisih->d hari";
  // Selisih tanggal adalah = 3 tahun, 1 bulan, 2 hari
?>
</body>
</html>