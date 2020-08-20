<?php 
include_once('../_header.php');
?>
<div class="box">
	<h1>AGENDA LUAR BMKG</h1>
	<h4><small>Tambah Data Agenda luar</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=date('Y-m-d')?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="no_tuldinas">Nomor Tulisan Dinas</label>
					<input type="text" name="no_tuldinas" id="no_tuldinas" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal</label>
					<textarea name="perihal" id="perihal" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="pejabat_pel">Pejabat Pengelola</label>
					<input type="text" name="pejabat_pel" id="pejabat_pel" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="kepada">Kepada</label>
					<input type="text" name="kepada" id="kepada" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>