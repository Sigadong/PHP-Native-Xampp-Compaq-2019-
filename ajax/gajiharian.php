<?php 
// harga jual y g di inputkan
$jmljual = 500000;


// harga barang
$barang = 500000;

if ($jmljual >= $barang) {
	$PrtmKomisi= ($jmljual - $barang)* 0.15;
	$komisi = $PrtmKomisi + (0.1 * $barang); 
} else {
	$komisi = 0;
}

echo $komisi;











// Jumlah Jam Kerja yg di input
$jjk = 8;

// diketahui gaji perjam Rp.500
// $Gjam = 500;

// if ($jjk >= 7) {
// 	 $lembur = ($jjk-7)*(1.5 * $Gjam);
// 	 $Gharian = $lembur +( $Gjam * 7);
// } else {
// 	$Gharian = $Gjam * $jjk;
// }

// echo $Gharian;

 ?>