<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
function cari_selisih_tanggal($tanggal1,$tanggal2)
{
  $tgl1 = date_create($tanggal1);
  $tgl2 = date_create($tanggal2);
   
  $selisih_tgl = date_diff($tgl2, $tgl1);
 
  $selisih["tahun"] = $selisih_tgl->y;
  $selisih["bulan"] = $selisih_tgl->m;
  $selisih["hari"]  = $selisih_tgl->d;
  
  return $selisih;                      
}
?>
</body>
</html>