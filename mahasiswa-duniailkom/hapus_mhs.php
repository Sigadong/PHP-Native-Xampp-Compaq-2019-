<?php 
 	include "proses_hapus.php";
 	include "header.php";
 ?>
 		<h2>Hapus Data Mahasiswa</h2>
 		<?php 
 		if ((isset($isset["pesan"]))) {
 			echo "<div class=\"pesan\">{$_GET["pesan"]}</div>";
 		}
 		 ?>
 		 <table border="1">
 		 	<tr>
 		 		<th>NPM</th>
 		 		<th>Nama</th>
 		 		<th>Tempat Lahir</th>
 		 		<th>Tanggal Lahir</th>
 		 		<th>Jurusan</th>
 		 		<th>Konsentrasi</th>
 		 		<th>IPK</th>
 		 		<th>Hapus</th>
 		 	</tr>
 		 <?php 
 		 $query = "SELECT * FROM mahasiswa ORDER BY nama ASC";
 		 $result = mysqli_query($link, $query);

 		 if (!$result) {
 		 	die("kuery error: ".mysqli_errno($link)."-".mysqli_error($link));
 		 }
 		 while ($data = mysqli_fetch_assoc($result)) {
 		 	echo "<tr>";
 		 	echo "<td>$data[npm]</td>";
 		 	echo "<td>$data[nama]</td>";
 		 	echo "<td>$data[tempat_lahir]</td>";
 		 	echo "<td>$data[tanggal_lahir]</td>";
 		 	echo "<td>$data[jurusan]</td>";
 		 	echo "<td>$data[konsentrasi]</td>";
 		 	echo "<td>$data[ipk]</td>";
 		 	echo "<td>";
			?>	
				<form action="proses_hapus.php" method="post">
					<input type="hidden" name="npm" value="<?php echo "$data[npm]";?>">
					<input type="submit" name="hapus" value="Hapus">
				</form>
			<?php
 		 	echo "</td>";
 		 	echo "</tr>";
 		 }
 		 
 		 mysqli_free_result($result);
 		 mysqli_close($link);
 		  ?>
 		 </table>

<?php include "footer.php"; ?>
