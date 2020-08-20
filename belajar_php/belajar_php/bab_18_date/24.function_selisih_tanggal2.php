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
  $tgl1 = strtotime($tanggal1);
  $tgl2 = strtotime($tanggal2);
  
  $selisih_tgl = abs($tgl2 - $tgl1);
  $satu_hari = 24*60*60;
  $satu_bulan = 30*24*60*60;
  $satu_tahun = 365*24*60*60;
  
  $selisih["tahun"] = floor($selisih_tgl/$satu_tahun);
  $selisih["bulan"] = floor(
                      ($selisih_tgl - ($selisih["tahun"] * $satu_tahun))/
                       $satu_bulan);
  $selisih["hari"] = floor(
                     ($selisih_tgl - ($selisih["tahun"] * $satu_tahun) - 
                     ($selisih["bulan"] * $satu_bulan))/
                      $satu_hari);
  return $selisih;                      
}
?>

<?php

$hasil = cari_selisih_tanggal("12-10-2016","27-10-2016");

echo "Selisih tanggal adalah =
      {$hasil["tahun"]} tahun, 
      {$hasil["bulan"]} bulan, 
      {$hasil["hari"]} hari";
// Selisih tanggal adalah = 0 tahun, 0 bulan, 15 hari
echo "<br>";

$hasil = cari_selisih_tanggal("12-10-1995","12-10-2016");

echo "Selisih tanggal adalah =
      {$hasil["tahun"]} tahun, 
      {$hasil["bulan"]} bulan, 
      {$hasil["hari"]} hari";
// Selisih tanggal adalah = 21 tahun, 0 bulan, 5 hari

echo "<br>";

$hasil = cari_selisih_tanggal("12-10-1995","now");

echo "Selisih tanggal adalah =
      {$hasil["tahun"]} tahun, 
      {$hasil["bulan"]} bulan, 
      {$hasil["hari"]} hari";
// Selisih tanggal adalah = 20 tahun, 3 bulan, 24 hari
?>
</body>
</html>