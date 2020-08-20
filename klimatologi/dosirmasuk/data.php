<?php include_once('../_header.php');?>

<div class="box">
	<h1>SURAT MASUK</h1>
	<h4>
		<small>Data Surat Masuk</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<!-- <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Surat masuk</a> -->
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
						<a href="tampilfoto.php?id=<?=$data['id_dosirmsk']?>" class="btn btn-info btn-xs" style="margin: 10px 0px 0px 12px;">Foto</a>
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