<?php 
include_once('../_header.php');
?>
	<script>
			$(document).ready(function() {
				$('#klasifikasi').change(function() {
					var klasi= $(this).val(); 
					$.ajax({
						type: 'POST', 
						url: 'induk.php', 
						data: 'nama_klas=' + klasi, 
						success: function(response) { 
							$('#induk').html(response); 
						}
					});
			    });

				$(document).ready(function() {
					$('#induk').change(function() {
						var induk= $(this).val(); 
						$.ajax({
							type: 'POST', 
							url: 'anak.php', 
							data: 'nama_induk=' + induk, 
							success: function(response) { 
								$('#anak').html(response); 
							}
						});
				    });
			    });
		    });
	</script>
<div class="box">
	<h1>SURAT KELUAR</h1>
	<h4><small>Tambah Data Surat Keluar</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<center>
						<a href="../_file/sample/daftarprimbon.pdf" class="btn btn-info btn-xs" target="_blank"><i class="glyphicon glyphicon-download-alt"></i> LIHAT PRIMBON</a>
					</center>
					<!-- <label for="no_dosir">Nomor Dosir </label>
					<input type="number" name="no_dosir" id="no_dosir" min="0" class="form-control"> -->
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal :</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
				</div>
					<div class="form-group">	
					<label for="klasifikasi">NO.SURAT [KODE PRIMBON]</label>
					<select name="klasifikasi" id="klasifikasi" class="form-control" required autofocus>
						<option value="">--Pilih--</option>
						<?php 
				        $tampil= mysqli_query ($con,"SELECT * FROM klasifikasi_primbon");
				          while($data = mysqli_fetch_array($tampil)) {
				             echo "<option value='$data[id_klas]'>$data[nama_klas]</option>";
				          }
				      	
						?>				
					</select>
					<select name="induk" id="induk" class="form-control" required></select>
					<select name="anak" id="anak" class="form-control" required></select>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal :</label>
					<textarea name="perihal" id="perihal" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="kepada">Kepada :</label>
					<input type="text" name="kepada" id="kepada" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="foto">Foto Surat :</label>
					<input type="file" name="foto" id="foto" class="form-control">
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="" value="Batal" class="btn btn-warning" style="margin-right: 10px;">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>