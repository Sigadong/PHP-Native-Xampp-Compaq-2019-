<?php 
include_once('../_header.php');
?>
<div class="box">
	<h1>SURAT KELUAR</h1>
	<h4><small>Edit Data Surat Keluar</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php 
			$id = @$_GET['id'];
			$sql_dosirkel = mysqli_query($con, "SELECT * FROM dosir_keluar WHERE id_dosirkel = '$id'");
			$data = mysqli_fetch_array($sql_dosirkel);
			?>
			<form action="proses.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="no_dosir">Nomor Dosir </label>
					<input type="hidden" name="fotoLama" id="fotoLama" value="<?=$data['foto_surat']?>" class="form-control">
					<input type="text" name="no_dosir" id="no_dosir" value="<?=str_pad($data['no_dosir'], 3,'0',STR_PAD_LEFT)?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>" class="form-control" readonly>
				</div>
				<div class="form-group">	
					<input type="hidden" name="id" value="<?=$data['id_dosirkel']?>">
					<label for="no_surat">Nomor Surat</label>
					<input type="text" name="no_surat" id="no_surat" value="<?=$data['nomor_surat']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal</label>
					<textarea name="perihal" id="perihal" class="form-control" required><?=$data['perihal']?></textarea>
				</div>
				<div class="form-group">
					<label for="kepada">Kepada</label>
					<input type="text" name="kepada" id="kepada" value="<?=$data['kepada']?>" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="foto">Foto Surat</label>
					<img src="" alt="" width="40" height="40">
					<input type="file" name="foto" id="foto" class="form-control">
				</div>

				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>