<?php 
$dbhost =  "localhost";
$dbuser =  "root";
$dbpass =  "";
$dbname =  "budidarma";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$link) {
		die("koneksi dengan database gagal: ".mysqli_connect_erno()."-".mysqli_connect_error());
	}
?>