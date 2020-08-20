<?php 
include_once('../_header.php');
?>
<div class="box">
	<h1>SURAT MASUK</h1>
	<h4><small>Tambah Data Surat Masuk</small>
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
					<label for="no_dosir">Nomor Dosir </label>
					<input type="number" name="no_dosir" id="no_dosir" class="form-control" min="0" readonly>
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="no_surat">Nomor Surat</label>
					<input type="text" name="no_surat" id="no_surat" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Dari">Dari</label>
					<input type="text" name="dari" id="dari" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal</label>
					<textarea name="perihal" id="perihal" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="foto">Foto Surat</label>
					<input type="file" name="foto" id="foto" class="form-control" required>
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

