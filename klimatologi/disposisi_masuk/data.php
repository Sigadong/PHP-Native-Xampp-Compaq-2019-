<?php include_once('../_header.php');?>

<div class="box">
		<h1>DISPOSISI SURAT</h1>
	<!-- <div class="pull-left">
		<a href="../dosirmasuk/data.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-record"></i> Tampil Daftar Dosir Masuk</a> -->
		<h4>
			<small>Data Disposisi Surat Masuk</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Disposisi Masuk</a>
				<!-- <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Disposisi</a> -->
			</div>
		</h4>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="disposisi"> 
				<thead>
					<tr>
						<th>Tanggal Terima</th>
						<th>Dari / Instansi</th>
						<th>Lampiran</th>
						<th>Kode Penyimpanan</th>
						<th>Diteruskan Kepada</th>
						<th>Nomor Dosir</th>
						<th>Isi Disposisi</th>
						<th>Catatan Disposisi</th>
						<th>
							<center>
								<i class="glyphicon glyphicon-cog"></i>
							</center>
						</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$sql_dosir = mysqli_query($con, "SELECT * FROM disposisi_masuk") or die(mysqli_error($con));
				while($data = mysqli_fetch_array($sql_dosir)) { ?>
					<tr>
						<td><?=date('d F Y',strtotime($data['diterima_tgl']));?></td>
						<td><?=strtoupper($data['dari'])?></td>
						<td><?=strtoupper($data['lampiran'])?></td>
						<td><?=strtoupper($data['kode_simpan'])?></td>
						<td><?=strtoupper($data['diteruskan_kpd'])?></td>
						<td><?=str_pad($data['nomor_dosirmsk'], 3,'0',STR_PAD_LEFT)?>.</td>
						<td><?=strtoupper($data['isi_disposisi'])?></td>
						<td><?=strtoupper($data['catatan'])?></td>
						<td>
							<a href="edit.php?id=<?=$data['id_dispo']?>" class="btn btn-warning btn-xs" style="margin-left: 5px ;"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="del.php?id=<?=$data['id_dispo']?>" onclick="return confirm('Yakin ingin menghapus Data?')"class="btn btn-danger btn-xs" style="margin: 5px 0px 0px 5px ;"><i class="glyphicon glyphicon-trash"></i></a>
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
				$('#disposisi').DataTable( {
					// "processing": true,
					// "serverSide": true,
					// "ajax": "disposisimsk_data.php",
					// scrollY : '250px',
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
					"targets": 8,
				}
				]

			} );
			} );
		</script>
	</div>
<!-- </div> -->
	<?php include_once('../_footer.php');?>