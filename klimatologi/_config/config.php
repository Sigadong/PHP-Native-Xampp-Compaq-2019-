<?php 
// setting defauult timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

include_once "conn.php";

// koneksi ke database
$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
	echo mysqli_connect_error(); 
}

// membuat fungsi base_url
function base_url($url = null){
	$base_url = "http://localhost/klimatologi";
	if($url != null){
		return $base_url."/".$url;
	}else{
		return $base_url;
	}
}

// untuk mencetak tanggal dengan format indonesia(memecah array tgl dahulu, kemudian function dipanggil pd data.php)
function tgl_indo($tgl) {
	$tanggal = substr($tgl, 8, 2); 
	$bulan = substr($tgl, 5, 2);
	$tahun = substr($tgl, 0, 4);
	return $tanggal."/".$bulan."/".$tahun;
}
 ?> 