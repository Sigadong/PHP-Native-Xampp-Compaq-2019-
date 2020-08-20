<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
$nama_hari=array("Minggu", "Senin", "Selasa", "Rabu", 
                 "Kamis", "Juma'at","Sabtu" );
$nama_bulan=array("Januari", "Februari", "Maret", "April", "Mei", 
                  "Juni", "Juli", "Agustus", "September", "Oktober", 
                  "November","Desember");
            
$hari = date("w");
$tanggal = date("j");
$bulan = date("n") - 1;
$tahun = date ("Y");     

echo "Tanggal hari ini adalah: $nama_hari[$hari], 
      $tanggal $nama_bulan[$bulan] $tahun";   
      
      // Tanggal hari ini adalah: Minggu, 31 Januari 2016
?>
</body>
</html>