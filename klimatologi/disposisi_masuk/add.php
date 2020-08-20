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
	<h1>DISPOSISI SURAT MASUK</h1>
	<h4><small>Tambah Data Disposisi Surat</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="Dari">Dari / Instansi</label>
					<input type="text" name="dari" id="dari" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="lampiran">Lampiran</label>
					<input type="text" name="lampiran" id="lampiran" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="kodesimpan">Kode Penyimpanan:</label>
					<a href="../_file/sample/daftarprimbon.pdf" class="btn btn-info btn-xs" target="_blank"><i class="glyphicon glyphicon-download-alt"></i> LIHAT PRIMBON</a>
					<!-- <input type="text" name="kodesimpan" id="kodesimpan" class="form-control" required> -->
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
					<label for="diteruskan">Diteruskan Kepada Yth.Bapak/Ibu</label>
					<select name="diteruskan" id="diteruskan" class="form-control" required>
						<option value="">--Pilih--</option>
						<option value="KASKLIM">KASKLIM</option>
						<option value="KASUBBAG TU" selected>KASUBBAG TU</option>
						<option value="KASI DATIN">KASI DATIN</option>
						<option value="KASI OBS">KASI OBS</option>
						<option value="KA.OBS,PER,DATA">KA.OBS,PER,DATA</option>
					</select>
				</div>
				<!-- <div class="form-group">
					<label for="no_dosir">Nomor Dosir</label>
					<input type="text" name="no_dosir" id="no_dosir" class="form-control" required>
				</div> -->
				<div class="form-group">
					<label for="isi_dispo">Isi Disposisi (Segera/Biasa/Rahasia)</label>
					<select name="isi_dispo" id="isi_dispo" class="form-control" required>
						<option value="">--Pilih--</option>
						<option value="SELESAIKAN">1.Selesaikan</option>
						<option value="CEK TANGGAPAN">2.Cek Tanggapan</option>
						<option value="CEK DAN KOORDINASIKAN">3.Cek & Koordinasikan</option>
						<option value="PANTAU DAN LAPORAN">4.Pantau & Laporan</option>
						<option value="TELITI TELAAH DAN SARAN">5.Teliti,Telaah & Saran</option>
						<option value="SISIPKAN KONSEP">6.Sisipkan Konsep</option>
						<option value="DIEVALUASI">7.Dievaluasi</option>
						<option value="DIPERGUNAKAN">8.dipergunakan</option>
						<option value="DIKETAHUI">9.Diketahui</option>
						<option value="SELESAI DAN FILE">10.Selesai & File</option>
						<option value="PROSES LANJUT">11.Proses Lanjut</option>
					</select>
				</div>
				<div class="form-group">
					<label for="catatan">Catatan Disposisi</label>
					<textarea name="catatan" id="catatan" class="form-control" rows="4" required></textarea>
				</div>
				<div class="form-group pull-right">
					<!-- <input type="submit" name="add" value="Simpan" class="btn btn-success"> -->
					<button type="submit" name="add" class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
				</div>
			</form>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'catatan',{
                	uiColor : '#8ee9ee7'
                });
            </script>
        </div>
    </div>
</div>

<?php include_once('../_footer.php'); ?>