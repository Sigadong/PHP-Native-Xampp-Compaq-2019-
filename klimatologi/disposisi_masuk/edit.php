<?php 
include_once('../_header.php');
?>
<div class="box">
	<h1>DISPOSISI SURAT MASUK</h1>
	<h4><small>Tambah Data Disposisi Surat</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php 
			$id = @$_GET['id'];
			$sql_disposisi = mysqli_query($con, "SELECT * FROM disposisi_masuk WHERE id_dispo = '$id'");
			$data = mysqli_fetch_array($sql_disposisi);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="Dari">Dari</label>
					<input type="text" name="dari" id="dari" value="<?=$data['dari']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="lampiran">Lampiran</label>
					<input type="text" name="lampiran" id="lampiran" value="<?=$data['lampiran']?>" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=$data['diterima_tgl']?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="kodesimpan">Kode Penyimpanan</label>
					<input type="text" name="kodesimpan" id="kodesimpan" value="<?=$data['kode_simpan']?>" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="diteruskan">Diteruskan Kepada Yth.Bapak/Ibu</label>
					<?php $diteruskan = $data['diteruskan_kpd']; ?>
					<select name="diteruskan" id="diteruskan" class="form-control"  value="<?=$data['diteruskan_kpd']?>" required>
						<option <?php echo ($diteruskan == 'KASKLIM')? "selected": "" ?> value="KASKLIM">Kasklim</option>
						<option <?php echo ($diteruskan == 'KASUBBAG TU')? "selected": "" ?> value="KASUBBAG TU">Kasubbag TU</option>
						<option <?php echo ($diteruskan == 'KASI DATIN')? "selected": "" ?> value="KASI DATIN">Kasi Datin</option>
						<option <?php echo ($diteruskan == 'KASI OBS')? "selected": "" ?> value="KASI OBS">Kasi Obs</option>
						<option <?php echo ($diteruskan == 'KA.OBS,PER,DATA')? "selected": "" ?> value="KA.OBS,PER,DATA">Ka.Obs,Per,Data</option>
					</select>
				</div>
				<div class="form-group">
					<input type="hidden" name="id" value="<?=$data['id_dispo']?>">
					<label for="no_dosir">Nomor Dosir</label>
					<input type="text" name="no_dosir" id="no_dosir" value="<?=$data['nomor_dosirmsk']?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="isi_dispo">Isi Disposisi (Segera/Biasa/Rahasia)</label>
					<?php $isi_dispos = $data['isi_disposisi']; ?>
					<select name="isi_dispo" id="isi_dispo" class="form-control"  value="<?=$data['isi_disposisi']?>" required>
						<option value="">--Pilih--</option>
						<option <?php echo ($isi_dispos == 'SELESAIKAN')? "selected": "" ?> value="SELESAIKAN">1. Selesaikan</option>
						<option <?php echo ($isi_dispos == 'CEK TANGGAPAN')? "selected": "" ?> value="CEK TANGGAPAN">2. Cek Tanggapan</option>
						<option <?php echo ($isi_dispos == 'CEK DAN KOORDINASIKAN')? "selected": "" ?> value="CEK DAN KOORDINASIKAN">3. Cek & Koordinasikan</option>
						<option <?php echo ($isi_dispos == 'PANTAU DAN LAPORAN')? "selected": "" ?> value="PANTAU DAN LAPORAN">4. Pantau & Laporan</option>
						<option <?php echo ($isi_dispos == 'TELITI TELAAH DAN SARAN')? "selected": "" ?> value="TELITI TELAAH DAN SARAN">5. Teliti,Telaah & Saran</option>
						<option <?php echo ($isi_dispos == 'SISIPKAN KONSEP')? "selected": "" ?> value="SISIPKAN KONSEP">6. Sisipkan Konsep</option>
						<option <?php echo ($isi_dispos == 'DIEPALUASI')? "selected": "" ?> value="DIEPALUASI">7. Diepaluasi</option>
						<option <?php echo ($isi_dispos == 'DIPERGUNAKAN')? "selected": "" ?> value="DIPERGUNAKAN">8. dipergunakan</option>
						<option <?php echo ($isi_dispos == 'DIKETAHUI')? "selected": "" ?> value="DIKETAHUI">9. Diketahui</option>
						<option <?php echo ($isi_dispos == 'SELESAI DAN FILE')? "selected": "" ?> value="SELESAI DAN FILE">10. Selesai & File</option>
						<option <?php echo ($isi_dispos == 'PROSES LANJUT')? "selected": "" ?> value="PROSES LANJUT">11. Proses Lanjut</option>
					</select>
				</div>
				<div class="form-group">
					<label for="catatan">Catatan Disposisi</label>
					<textarea name="catatan" id="catatan" class="form-control" rows="4" required><?=$data['catatan']?></textarea>
				</div>
				<div class="form-group pull-right">
					<!-- <input type="submit" name="edit" value="Simpan" class="btn btn-success"> -->
					<button type="submit" name="edit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
				</div>
			</form>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'catatan',{
                	uiColor : '#8efdee7'
                });
            </script>
        </div>
    </div>
</div>

<?php include_once('../_footer.php'); ?>