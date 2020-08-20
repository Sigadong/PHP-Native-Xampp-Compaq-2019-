<?php // pil 1 ?>
<!DOCTYPE html>
<html>
<head>
<title>Menghitung Jumlah Array Di PHP By Dumet School</title>
</head>
<body>
<H1>Form Jabatan</H1>
	<form action="" method="post">
		Nama :
		<input type="text" name="nama_lengkap">
		<br>
		
		Jabatan :
		<select name="jabatan">
			<?php
				$jabatan = array ("Manager","Supervisor","Cashier","Sales Executive","acounting");
				$jabs = count($jabatan)-1; // ini adalah kode menghitung array
			?>
			<option value="">-jabatan-</option>
			<?php
				for ($a = 0; $a <= $jabs; $a ++) {
			?>
			<option><?php echo $jabatan[$a]; ?></option>
			<?php } ?>
		</select>
		<br>
		<input type="submit" value="cetak" name="form_kondisi">
	</form>
	<?php

echo "<table>"; 
if(isset($_POST['form_kondisi'])){
echo "<tr><td>Hasil Cetak Adalah :</td></tr>";
echo "<tr><td>Nama: ".$_POST['nama_lengkap'];" <br/></td></tr>";
echo "<tr><td>Jabatan: $_POST[jabatan] <br/></td></tr>";
}

echo "</table>";
?>
</body>
</html>




<?php
// pil 2
mysql_connect('localhost', 'root', '');
mysql_select_db('klimatologi');
 
$table = "dosir_keluar";
 
// // Cara 1
// $sql = "SELECT count(*) AS jumlah FROM $table";
// $query = mysql_query($sql);
// $result = mysql_fetch_array($query);
// echo "Jumlah data dengan fungsi MySQL count(): {$result['jumlah']} <br/>";
 
// // Cara 2
// $sql = "SELECT * FROM $table";
// $query = mysql_query($sql);
// $count = mysql_num_rows($query);
// echo "Jumlah data dengan mysql_num_rows: $count <br/>";
 
// Cara 3
$sql = "SELECT * FROM $table";
$query = mysql_query($sql);
$data = array();
while(($row = mysql_fetch_array($query)) != null){
    $data[] = $row;
}
$count = count($data);
echo "Jumlah data dari array PHP: $count";

?>






<?php 
// SAMPLE dosir_masuk
		$tampil1 = mysqli_query($con, "SELECT * FROM dosir_masuk");
		// $rows1 = mysqli_num_rows($tampil1);
		$data = array();
		// if ($rows1 > 0){
	      while($data1 = mysqli_fetch_array($tampil1)) {
	         $data[] = $data1;
	      }
	  // }
	  $count = count($data);
		echo "Jumlah data dari array PHP: $count";

 ?>

<!-- INI KODING YG SUDAH BENAR -->
 <?php 
	// Memecah seluruh kode nomor surat yg sama dan menyimpan ke dlm array
 	$tampil3 = mysqli_query($con, "SELECT * FROM dosir_keluar");
	$array = array();
      while($data3 = mysqli_fetch_array($tampil3)) {
      	$nosurat = substr($data3['nomor_surat'], 0, 2);
      	// $data = $data3['nomor_surat'];
		if ($klas == $nosurat) {
			$array[] = ($klas == $nosurat);
        } 
      }
      //Menghitung total jumlah data yg sama dlm array, lalu menambahkan dgn 1 
     $count = count($array);
      if ($count >0) {
      	$no_dosir = $count + 1;
      } else {
      	$no_dosir = 1;
      }

  ?>