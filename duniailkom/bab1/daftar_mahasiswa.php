<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<ol>
		<?php 
			for ($i=1; $i <= 10 ; $i++) { 
				echo "<li>Nama Mahasiswa ke-$i</li>";
			}
		 ?>
	</ol>
</body>
</html>