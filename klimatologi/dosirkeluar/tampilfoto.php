<?php include_once('../_header.php');?>
	
<div class="container">
<div class="box">
		<div class="pull-right" style="margin: 8px;">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">	
			<div class="col-md-10" style="margin-bottom: 12px;" style="max-width: ; max-height: ;">
				<?php 
				$id = @$_GET['id'];
				$sql_dosir = mysqli_query($con, "SELECT * FROM dosir_keluar WHERE id_dosirkel = '$id'");
				$data = mysqli_fetch_array($sql_dosir);
				$photos = $data['foto_surat'];
				if (empty($photos)) {
				 echo "<div class='box'>
						 <h1>Tidak ada foto surat!</h1>
							<h4>
								<small>Silahkan Edit untuk Upload foto</small>
							</h4>
							<a href='edit.php?id=$data[id_dosirkel]' class='btn btn-info btn-xs'><i class='glyphicon glyphicon-upload'></i> EDIT</a>
						</div>";	
				}
				?>
				<img src="../_file/foto_suratkel/<?=$photos;?>" alt="" class="img-responsive">
			</div>
		</div>
</div>
</div>
<?php include_once('../_footer.php');?>
