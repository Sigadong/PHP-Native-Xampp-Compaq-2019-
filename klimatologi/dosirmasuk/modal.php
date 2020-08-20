<?php include_once('../_header.php');?>
<div class="box">
	<h1>SURAT MASUK</h1>
	<h4>
		<small>Data Surat Masuk</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#surat" data-whatever="@getbootstrap"<i class="glyphicon glyphicon-plus"></i> Tambah Surat masuk</button>
			<!-- <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Surat Masuk</a> -->
		</div>
	</h4>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dosir"> 
			<thead>
				<tr>
					<th>No.Dosir</th>
					<th>Tanggal</th>
					<th>No.Surat</th>
					<th>Dari / Instansi</th>
					<th>Perihal</th>
					<th>Foto Surat</th>
					<th>
						<center>
							<i class="glyphicon glyphicon-cog"></i>
						</center>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php 
						// untuk menampilkan data dr database
				$sql_dosir = mysqli_query($con, "SELECT * FROM dosir_masuk") or die(mysqli_error($con));
				while($data = mysqli_fetch_array($sql_dosir)) { ?>
					<tr>
						<td><?=str_pad($data['no_dosir'], 3,'0',STR_PAD_LEFT)?>.</td>
						<td><?=date('d F Y',strtotime($data['tanggal']));?></td>
						<td><?=strtoupper($data['nomor_surat'])?></td>
						<td><?=strtoupper($data['dari'])?></td>
						<td><?=strtoupper($data['perihal'])?></td>
						<td>
						<a href="<?=$data['id_dosirmsk']?>" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin: 10px 0px 0px 12px;">Foto</a>
						</td>
						<td>
							<a href="edit.php?id=<?=$data['id_dosirmsk']?>" class="btn btn-warning btn-xs" style="margin-left: 5px ;"><i class="glyphicon glyphicon-edit"></i></a><a href="del.php?id=<?=$data['id_dosirmsk']?>" onclick="return confirm('Yakin ingin menghapus Data?')"class="btn btn-danger btn-xs"  style="margin: 5px 0px 0px 5px ;"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>


<!-- MODAL -->
	<div class="modal fade" id="surat" tabindex="-1" role="dialog" aria-labelledby="surat">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="surat">Tambah Surat Keluar</h4>
	      </div>
	      <div class="modal-body">

	        <form>
	          <div class="form-group">
	            <label for="nomor_surat" class="control-label">Nomor Surat:</label>
	            <input type="text" class="form-control" id="nomor_surat">
	          </div>
	          <div class="form-group">
	            <label for="perihal" class="control-label">Perihal:</label>
	            <input type="text" class="form-control" id="perihal">
	          </div>
	          <div class="form-group">
	            <label for="kepada" class="control-label">Kepada:</label>
	            <input type="text" class="form-control" id="kepada">
	          </div>
	          <div class="form-group">
	            <label for="foto_surat" class="control-label">Foto Surat:</label>
	            <input type="file" name="foto" class="form-control" id="foto_surat">
	          </div>
	        </form>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
	        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
	      </div>
	    </div>
	  </div>
	</div>
<!-- AKHIR MODAL -->




<!-- MODAL FOTO -->
<!-- Large modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
							<div class="modal-header">
			        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			       				<h4 class="modal-title" id="surat">Foto Surat</h4>
			      		 	</div>
			     		 	<div class="modal-body">
								
				<?php 
				$id = @$_GET['id'];
				$sql_dosir = mysqli_query($con, "SELECT * FROM dosir_masuk WHERE id_dosirmsk = '$id'");
				$data = mysqli_fetch_array($sql_dosir);
				$photos = $data['foto_surat'];
				if ($photos ) {
				 echo "
				<div class='alert alert-warning alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Warning!</strong>
					<h3>Tidak ada foto surat!</h3>
					<h4>
						<small>Silahkan Edit untuk Upload foto</small>
					</h4>
						<a href='' class='btn btn-danger btn-xs'><i class='glyphicon glyphicon-upload'></i> EDIT</a>				
					</div>";	
				}
				?>
				<img src="../_file/foto_suratmsk/<?=$photos;?>" alt="" class="img-responsive">
								
			     			</div>
					    </div>
					  </div>
					</div>

<!-- 			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			    <div class="modal-dialog modal-lg" role="document">
			   		<div class="modal-content">
				      	<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			       			<h4 class="modal-title" id="surat">Foto Surat</h4>
			      		 </div>
			     		 <div class="modal-body">
							<img src="../_file/foto_suratmsk/<?=$photos;?>" alt="">
			     		 </div>
					</div>
				</div>
			</div> -->
<!--ALHIR MODAL FOTO -->






	<script>
		$(document).ready(function() {
			$('#dosir').DataTable( {
				// "processing": true,
				// "serverSide": true,
				// "ajax": "dosirmsk_data.php",
				// scrollX : '100px',
				dom : 'Bfrtip',
				buttons : [
				{
					extend : 'pdf',
					orientation : 'potrait',
					pageSize : 'Legal',
					title : 'Data Surat Masuk',
					download : 'open'
				},
				'csv', 'excel', 'print', 'copy'
				],
				columnDefs : [
				{
					"searchable": false,
					"orderable": false,
					"targets": 6,
				}
				]

			} );
		} );
	</script>
</div>
<?php include_once('../_footer.php');?>