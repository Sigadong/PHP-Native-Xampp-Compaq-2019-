<?php
  session_start();
  if (!isset($_SESSION["nama"])) {
     header("Location: login.php");
  }
     include("koneksi.php");

  if (isset($_GET["pesan"])) {
      $pesan = $_GET["pesan"];
  }
     
  if (isset($_GET["submit"])) {
    $nama = htmlentities(strip_tags(trim($_GET["nama"])));
    $nama = mysqli_real_escape_string($link,$nama);
    
    $query  = "SELECT * FROM mahasiswa WHERE nama LIKE '%$nama%' ";
    $query .= "ORDER BY nama ASC";
    
    $pesan = "Hasil pencarian untuk nama <b>\"$nama\" </b>:";
  } 
  else {
    $query = "SELECT * FROM mahasiswa ORDER BY nama ASC";
  }

	include "header.php";
?>
 		<h2>Data Mahasiswa</h2>
 		<?php 
 		if (isset($pesan)) {
 			echo "<div class=\"pesan\">$pesan</div>";
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
 		 	</tr>
 		 <?php 
 		 $result = mysqli_query($link, $query);

 		 if (!$result) {
 		 	die("kuery error: ".mysqli_errno($link)."-".mysqli_error($link));
 		 }
 		 while ($data = mysqli_fetch_assoc($result)) {
 		 	$tanggal_php = strtotime($data["tanggal_lahir"]) ;
 		 	$tanggal = date("d - m - Y", $tanggal_php);

 		 	echo "<tr>";
 		 	echo "<td>$data[npm]</td>";
 		 	echo "<td>$data[nama]</td>";
 		 	echo "<td>$data[tempat_lahir]</td>";
 		 	echo "<td>$tanggal</td>";
 		 	echo "<td>$data[jurusan]</td>";
 		 	echo "<td>$data[konsentrasi]</td>";
 		 	echo "<td>$data[ipk]</td>";
 		 	echo "</tr>";
 		 }
 		 mysqli_free_result($result);
 		 mysqli_close($link);
 		  ?>
 		 </table>
<?php include "footer.php"; ?>
