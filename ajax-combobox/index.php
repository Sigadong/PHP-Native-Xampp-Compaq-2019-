<?php
#koneksi
$conn = mysqli_connect("localhost", "root", "", "demo");
#akhir-koneksi

#ambil data propinsi
$query = "SELECT kode, nama FROM propinsi ORDER BY nama";
$sql = mysqli_query($conn, $query);
$arrpropinsi = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrpropinsi [ $row['kode'] ] = $row['nama'];
}

#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getKab") {
	$kode_prop = $_GET['kode_prop'];
	
	//ambil data kabupaten
	$query = "SELECT kode, nama FROM kabupaten WHERE kode_prop='$kode_prop' ORDER BY nama";
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
$conn = mysqli_connect("localhost", "root", "", "demo");
#akhir-koneksi

#ambil data propinsi
$query = "SELECT kode, nama FROM kabupaten ORDER BY nama";
$sql = mysqli_query($conn, $query);
$arrkab = array();
while ($row = mysqli_fetch_assoc($sql)) {
	$arrkab [ $row['kode'] ] = $row['nama'];
}

#action get Kabupaten
if(isset($_GET['action']) && $_GET['action'] == "getDes") {
	$kode_kab = $_GET['kode_kab'];
	
	//ambil data kabupaten
	$query = "SELECT kode, nama FROM desa WHERE kode_kab='$kode_kab' ORDER BY nama";
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
		span.inputan { display:block; margin-bottom:5px; }
		span.inputan label { float:left; display:block; width:200px;}
		</style>
		<script type="text/javascript" src="libs/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#propinsi').change(function(){
					$.getJSON('index.php',{action:'getKab', kode_prop:$(this).val()}, function(json){
						$('#kabupaten').html('Pilih');
						$.each(json, function(index, row) {
							$('#kabupaten').append('<option value='+row.kode+'>'+row.nama+'</option>');
							// aksi utk kabupaten
									$('#kabupaten').change(function(){
									$.getJSON('index.php',{action:'getDes', kode_kab:$(this).val()}, function(json){
										$('#desa').html('');
										$.each(json, function(index, row) {
											$('#desa').append('<option value='+row.kode+'>'+row.nama+'</option>');
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
		<label for="propinsi">Propinsi</label>
		: <select id="propinsi" name="propinsi">
			<option value="">-Pilih-</option>
			<?php
			foreach ($arrpropinsi as $kode=>$nama) {
				echo "<option value='$kode'>$nama</option>";
			}
			?>
		</select>
		</span>

		<span class="inputan">
		<label for="kabupaten">Kabupaten</label>
		: <select id="kabupaten" name="kabupaten">
			<option value="" selected>-Pilih-</option>
		</select>
		</span>

		<span class="inputan">
		<label for="desa">Desa</label>
		: <select id="desa" name="desa">
		</select>
		</span>
		
		</form>
	</body>
</html>
