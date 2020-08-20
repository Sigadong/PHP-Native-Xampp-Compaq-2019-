<?php
#koneksi
$conn = mysqli_connect("localhost", "root", "", "klimatologi");
#akhir-koneksi

#ambil data propinsi
$query = "SELECT id_klas, nama_klas FROM klasifikasi_primbon ORDER BY nama_klas";
$sql = mysqli_query($conn, $query);
$arrpropinsi = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrpropinsi [ $row['id_klas'] ] = $row['nama_klas'];
}

#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getKab") {
	$id_klas = $_GET['id_klas'];
	
	//ambil data kabupaten
	$query = "SELECT id_idk, nama_induk FROM induk_primbon WHERE id_klas='$id_klas' ORDER BY nama_induk";
	$sql = mysqli_query($conn, $query);
	$arrkab = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($arrkab, $row);
	}
	echo json_encode($arrkab);
	exit;
}

?>

<?php
#koneksi
$conn = mysqli_connect("localhost", "root", "", "klimatologi");
#akhir-koneksi

#ambil data propinsi
$query = "SELECT id_idk, nama_induk FROM induk_primbon ORDER BY nama_induk";
$sql = mysqli_query($conn, $query);
$arrkab = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrkab [ $row['id_idk'] ] = $row['nama_induk'];
}

#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getDes") {
	$id_idk = $_GET['id_idk'];
	
	//ambil data kabupaten
	$query = "SELECT id_ank, nama_anak FROM anak_primbon WHERE id_idk='$id_idk' ORDER BY nama_anak";
	$sql = mysqli_query($conn, $query);
	$arrdes = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($arrdes, $row);
	}
	echo json_encode($arrdes);
	exit;
}
?>
<html>
	<head>
		<title>Manipulasi Combobox dengan Ajax-JQuery</title>
		<style type="text/css">

		</style>
		<script type="text/javascript" src="libs/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#klasifikasi').change(function(){
					$.getJSON('index.php',{action:'getKab', id_klas:$(this).val()}, function(json){
						$('#induk').html('');
						$.each(json, function(index, row) {
							$('#induk').append('<option value='+row.id_idk+'>'+row.nama_induk+'</option>');
									// aksi utk kabupaten
									$('#induk').change(function(){
									$.getJSON('index.php',{action:'getDes', id_idk:$(this).val()}, function(json){
										$('#anak').html('');
										$.each(json, function(index, row) {
											$('#anak').append('<option value='+row.id_ank+'>'+row.nama_anak+'</option>');
										});
									});
								});
						});
					});
				});
			});
		</script>
	</head>
	<body>
		<h1>Contoh Manipulasi Combobox dengan Ajax-JQuery</h1>

		<form action="" method="post">

		<span class="inputan">
		<label for="klasifikasi">Klasifikasi</label>
		: <select id="klasifikasi" name="klasifikasi">
			<option value="">-Pilih-</option>
			<?php
			foreach ($arrpropinsi as $id_klas=>$nama) {
				echo "<option value='$id_klas'>$nama</option>";
			}
			?>
		</select>
		</span>

		<span class="inputan">
		<label for="induk">Induk</label>
		: <select id="induk" name="induk">
		</select>
		</span>
		
		<span class="inputan">
		<label for="anak">Anak</label>
		: <select id="anak" name="anak">
		</select>
		</span>
		</form>
	</body>
</html>
