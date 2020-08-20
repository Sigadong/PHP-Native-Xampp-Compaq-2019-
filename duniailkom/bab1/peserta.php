<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2> Daftar Nama Peserta </h2>
	<table border="1" cellspacing="0" cellpadding="4">
		<tr><th>No.</th><th>Nama Peserta</th></tr>
		<?php
		for ($i=1;$i<=10;$i++)
		{
			echo "<tr><td>$i</td><td>Nama Peserta $i</td></tr>";
		}
		?>
	</table>
</body>
</html>