<?php 
require_once "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar</title>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				$('#provinsi').change(function() { // Jika Select Box id provinsi dipilih
					var provinsi_id = $(this).val(); // Ciptakan variabel provinsi

					$.ajax({
						type: 'POST', // Metode pengiriman data menggunakan POST
						url: 'kota.php', // File yang akan memproses data
						data: 'prov_id='+provinsi_id, // Data yang akan dikirim ke file pemroses
						success: function(response) { // Jika berhasil
							$('#kota').html(response); // Berikan hasil ke id kota
						}
					});
				})
			    });
	</script>
</head>
<body>
	<form action="" method="post">
		<label for="provinsi">provinsi :</label><br>
		<?php 
			$sql_provinsi = mysqli_query($con, "SELECT * FROM provinsi");
		 ?>
		<select name="provinsi" id="provinsi">
			<option value="">Pilih provinsi</option>
			<?php 
				while ($row_provinsi = mysqli_fetch_array($sql_provinsi)) {
			 ?>
			<option value="<?php echo $row_provinsi['id']; ?>"><?php echo $row_provinsi['nama_prov']; ?></option>
		<?php } ?>
		</select><br><br>
		<label for="kota">kota :</label><br>
		<select name="kota" id="kota">
			<option value="">Pilih Kota</option>
			<option value=""></option>
		</select>
	</form>	
</body>
</html>