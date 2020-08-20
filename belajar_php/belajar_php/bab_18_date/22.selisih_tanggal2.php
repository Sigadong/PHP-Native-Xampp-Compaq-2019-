<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $tgl1 = strtotime("12-10-2016");
  $tgl2 = strtotime("9-6-2014");
  
  $selisih_tgl = abs($tgl2 - $tgl1);
  echo $selisih_tgl; // 73958400
  echo "<br>";
  
  $satu_tahun = 365*24*60*60;
  $satu_bulan = 30*24*60*60;
  $satu_hari = 24*60*60;
  
  $selisih_tahun = floor($selisih_tgl/$satu_tahun);
  $selisih_bulan = floor(($selisih_tgl - ($selisih_tahun * $satu_tahun))/
                          $satu_bulan);
  $selisih_hari = floor(($selisih_tgl - ($selisih_tahun * $satu_tahun) - 
                        ($selisih_bulan * $satu_bulan))/
                         $satu_hari);
                         
  echo "Selisih tanggal adalah $selisih_tahun tahun, 
        $selisih_bulan bulan, $selisih_hari hari";
  // Selisih tanggal adalah 2 tahun, 4 bulan, 6 hari
?>
</body>
</html>