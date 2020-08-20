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
// Selisih tanggal adalah = 21 tahun, 0 bulan, 0 hari

echo "<br>";

$hasil = cari_selisih_tanggal("12-10-1995","now");

echo "Selisih tanggal adalah =
      {$hasil["tahun"]} tahun, 
      {$hasil["bulan"]} bulan, 
      {$hasil["hari"]} hari";
// Selisih tanggal adalah = 20 tahun, 3 bulan, 17 hari
?>
</body>
</html>