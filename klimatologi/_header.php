<?php 
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="aplikasi-klimatologi">
	<meta name="author" content="irwanto_siregar">
	<title>BMKG - Stasiun Klimatologi</title>
	<!-- Bootstrap Core CSS -->
	<link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
	<link href="<?=base_url('_assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('_assets/css/styles.css');?>" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?=base_url('_assets/ico/favicon-32x32.png')?>" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?=base_url('_assets/ico/favicon-16x16.png')?>" sizes="16x16" />

</head>
<body>
	<script src="<?=base_url('_assets/js/bootstrap.js')?>"></script>
	<script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
	<script src="<?=base_url('_assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
	<script src="<?=base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>
	<div id="wrapper">
		<div class="pull-right right2">
			<?php
			$tanggal= mktime(date("m"),date("d"),date("Y"));
			echo "<b>".date("d-M-Y", $tanggal)."</b>";
			date_default_timezone_set('Asia/Jakarta');
			$jam=date("H:i:s");
			echo " | <span style='margin-right: 22px ;'><b>". $jam." "."</b></span>";
			$a = date ("H");
			// if(($a>=6) && ($a<=11)){
			// 	echo " Selamat Pagi ";
			// } else if(($a>11) && ($a<=15)){
			// 	echo " Selamat Siang ";
			// } else if(($a>15) && ($a<=18)){
			// 		echo " Selamat Sore ";
			// } else{
			// 	echo " Selamat Malam ";
			// }
			?> 		
				</div>
					<div id="sidebar-wrapper">
						<ul class="sidebar-nav">
							<li class="sidebar-brand">
								<a href="http://localhost/klimatologi/dashboard/"><span class="text-primary">
									<img src="<?=base_url('_assets/icons.png')?>" alt="BMKG-Klimatologi" width="45px" height="45px">KLIMATOLOGI</span>
								</a>
							</li>
							<li>
								<a href="<?=base_url('dashboard')?>">Dashboard</a>
							</li>
							<li>
								<a href="<?=base_url('disposisi_masuk/data.php')?>">Disposisi Surat</a>
							</li>
							<li>
								<a href="<?=base_url('dosirmasuk/data.php')?>">Surat Masuk</a>
							</li>
							<li>
								<a href="<?=base_url('dosirkeluar/data.php')?>">Surat Keluar</a>
							</li>
							<li>
								<a href="<?=base_url('agendadalam/data.php')?>">Agenda Dalam</a>
							</li>
							<li>
								<a href="<?=base_url('agendaluar/data.php')?>">Agenda Luar</a>
							</li>
							<li>
								<a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
							</li>
						</ul>
					</div>

					<div id="page-content-wrapper">
						<div class="container-fluid">
							<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle"><i class="glyphicon glyphicon-home"></i></a>
