<?php 
include_once('../_header.php');
?>
<div class="box">
	<h1>SURAT MASUK</h1>
	<h4><small>Edit Data Surat Masuk</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php 
			$id = @$_GET['id'];
			$sql_dosirmsk = mysqli_query($con, "SELECT * FROM dosir_masuk WHERE id_dosirmsk = '$id'");
			$data = mysqli_fetch_array($sql_dosirmsk);
			?>
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="no_dosir">Nomor Dosir </label>
					<input type="hidden" name="fotoLama" id="fotoLama" value="<?=$data['foto_surat']?>" class="form-control">
					<input type="number" name="no_dosir" id="no_dosir" value="<?=str_pad($data['no_dosir'], 3,'0',STR_PAD_LEFT)?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<input type="hidden" name="id" value="<?=$data['id_dosirmsk']?>">
					<label for="no_surat">Nomor Surat</label>
					<input type="text" name="no_surat" id="no_surat" value="<?=$data['nomor_surat']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="Dari">Dari</label>
					<input type="text" name="dari" id="dari" value="<?=$data['dari']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal</label>
					<textarea name="perihal" id="perihal" class="form-control" required><?=$data['perihal']?></textarea>
				</div>
				<div class="form-group">
					<label for="foto">Foto Surat</label>
					<input type="file" name="foto" id="foto" class="form-control">
				</div>

			<div class="form-group pull-right">
				<!-- <input type="submit" name="edit" value="Simpan" class="btn btn-success"> -->
				<button type="submit" name="edit" class="btn btn-success"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
			</div>
		</form>
	</div>
</div>
</div>

<?php include_once('../_footer.php'); ?>