<?php include_once('../_header.php');?>

<div class="box">
	<h1>AGENDA LUAR</h1>
	<h4>
		<small>Data Agenda Luar</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Agenda Luar</a>
			<!-- <a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Agenda Luar</a> -->
		</div>
	</h4>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="agendakel"> 
			<thead>
				<tr>
					<th>Tanggal</th>
					<th>Nomor Tulisan Dinas</th>
					<th>Perihal</th>
					<th>Pejabat Pengelola</th>
					<th>Kepada</th>
					<th>
						<center>
							<i class="glyphicon glyphicon-cog"></i>
						</center>
					</th>
				</tr>
			</thead>
		</table>
	</div>
	<script>
		$(document).ready(function() {
			$('#agendakel').DataTable( {
				"processing": true,
				"serverSide": true,
				"ajax": "agendakel_data.php",
				// scrollY : '250px',
				dom : 'Bfrtip',
				buttons : [
				{
					extend : 'pdf',
					orientation : 'potrait',
					pageSize : 'Legal',
					title : 'Data Agenda Luar',
					download : 'open'
				},
				'csv', 'excel', 'print', 'copy'
				],
				columnDefs : [
				{
					"searchable": false,
					"orderable": false,
					"targets": 5,
					"render": function(data, type, row) {
						var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin ingin menghapus Data?')\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
						return btn;
					}
				}
				]

			} );
		} );
	</script>
</div>
<?php include_once('../_footer.php');?>