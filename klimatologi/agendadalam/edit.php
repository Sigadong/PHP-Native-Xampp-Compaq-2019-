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
			$sql_agendadalam = mysqli_query($con, "SELECT * FROM agenda_dalam WHERE id_agendadlm = '$id'");
			$data = mysqli_fetch_array($sql_agendadalam);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="no_tuldinas">Nomor Tulisan Dinas</label>
					<input type="hidden" name="id" value="<?=$data['id_agendadlm']?>">
					<input type="text" name="no_tuldinas" id="no_tuldinas" value="<?=$data['no_tulisandinas']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="perihal">Perihal</label>
					<textarea name="perihal" id="perihal" class="form-control" required><?=$data['perihal']?></textarea>
				</div>
				<div class="form-group">
					<label for="pejabat_pel">Pejabat Pengelola</label>
					<input type="text" name="pejabat_pel" id="pejabat_pel" value="<?=$data['pejabat_pengelola']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="kepada">Kepada</label>
					<input type="text" name="kepada" id="kepada" value="<?=$data['kepada']?>" class="form-control" required>
				</div>
			<div class="form-group pull-right">
				<input type="submit" name="edit" value="Simpan" class="btn btn-success">
			</div>
		</form>
	</div>
</div>
</div>

<?php include_once('../_footer.php'); ?>