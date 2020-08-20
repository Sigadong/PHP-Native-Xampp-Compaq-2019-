<?php include_once('../_header.php');?>

<div class="box">
	<h1>SURAT KELUAR</h1>
	<h4>
		<small>Data Surat Keluar</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Surat Keluar</a>
			<!-- <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Surat Keluar</a> -->
		</div>
	</h4>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dosir"> 
			<thead>
				<tr>
					<th>No dosir</th>
					<th>Tanggal</th>
					<th>Nomor Surat</th>
					<th>Perihal</th>
					<th>Kepada</th>
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
				// $query = "SELECT a.nama_klas FROM a.klasifikasi_primbon LEFT JOIN b.induk on a.id_klas=b.id_klas"; 
				$sql_dosir = mysqli_query($con, "SELECT * FROM dosir_keluar") or die(mysqli_error($con));
				while($data = mysqli_fetch_array($sql_dosir)) { ?>
					<tr>
						<td><?=str_pad($data['no_dosir'], 3,'0',STR_PAD_LEFT)?>.</td>
						<td><?=date('d F Y',strtotime($data['tanggal']));?></td>
						<td><?=strtoupper($data['nomor_surat'])?></td>
						<td><?=strtoupper($data['perihal'])?></td>
						<td><?=strtoupper($data['kepada'])?></td>
						<td>
						<a href="tampilfoto.php?id=<?=$data['id_dosirkel']?>" class="btn btn-info btn-xs" style="margin: 10px 0px 0px 12px;">Foto</a>
						</td>
						<td>
							<a href="edit.php?id=<?=$data['id_dosirkel']?>" class="btn btn-warning btn-xs" style="margin-left: 5px ;"><i class="glyphicon glyphicon-edit"></i></a><a href="del.php?id=<?=$data['id_dosirkel']?>" onclick="return confirm('Yakin ingin menghapus Data?')"class="btn btn-danger btn-xs" style="margin: 5px 0px 0px 5px ;"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>

<?php 
	 // SAMPLE
		$klas = "UM";
		$tampil1 = mysqli_query($con, "SELECT * FROM dosir_keluar");
		$array = array();
	      while($data3 = mysqli_fetch_array($tampil1)) {
	      	$nosurat = substr($data3['nomor_surat'], 0, 2);
	      	$data = $data3['nomor_surat'];
			if ($klas == $nosurat) {
				$array[] = ($klas == $nosurat);
	        } 
	      }
	    $count = count($array);
		echo "Jumlah array nomor_surat yg sama: $count";

 ?>

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