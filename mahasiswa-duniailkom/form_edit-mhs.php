<?php 
	include "proses_edit.php";
	include "header.php";
?>
		<h2>Edit Data Mahasiswa</h2>
		<?php 
		if($pesan_error !== "") {
			echo "<div class=\"error\">$pesan_error</div>";
		}
		?>
		<form action="proses_edit.php" method="post" id="form_mahasiswa">
			<fieldset>
				<legend>Mahasiswa Baru</legend>
				<p>
					<label for="npm">NPM</label>
					<input type="text" name="npm" id="npm" value="<?php echo $npm ?>" readonly>(Tidak bisa diubah dimenu edit)
				</p>
				<p>
					<label for="nama">Nama :</label>
					<input type="text" name="nama" id="nama" value="<?php echo $nama?>">
				</p>
				<p>
					<label for="tempat_lahir">Tempat_lahir :</label>
					<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir?>">
				</p>
				<p>
					<label for="tgl" >Tanggal Lahir : </label> 
					<select name="tgl" id="tgl">
						<?php
						for ($i = 1; $i <= 31; $i++) {
							if ($i==$tgl){
								echo "<option value = $i selected>";
							}
							else {
								echo "<option value = $i >";
							}
							echo str_pad($i,2,"0",STR_PAD_LEFT);
							echo "</option>";
						}
						?>
					</select>
					<select name="bln">
						<?php 
						foreach ($arr_bln as $key => $value) {
							if ($key==$bln){
								echo "<option value=\"{$key}\" selected>{$value}</option>";
							}
							else {
								echo "<option value=\"{$key}\">{$value}</option>";
							} 
						} 
						?>
					</select>
					<select name="thn">
						<?php
						for ($i = 1990; $i <= 2005; $i++) {
							if ($i==$thn){
								echo "<option value = $i selected>";
							}
							else {
								echo "<option value = $i >";
							}
							echo "$i </option>";
						}
						?>
					</select>
				</p>
				<p>
					<label for="jurusan" >jurusan : </label> 
					<select name="jurusan" id="jurusan">
						<option value="Teknik Informatika" <?php echo $select_teknik ?>>Teknik Informatika </option>
						<option value="Sistem Informatika" <?php echo $select_sistem ?>>Sistem Informatika</option>
						<option value="Manajemen Informatika" <?php echo $select_manajemen ?>>Manajemen Informatika</option>
					</select>
				</p>
				<p>
					<label for="konsentrasi">Konsentrasi : </label> 
					<input type="text" name="konsentrasi" id="konsentrasi" value="<?php echo $konsentrasi ?>">
				</p>
				<p >
					<label for="ipk">IPK : </label> 
					<input type="text" name="ipk" id="ipk" value="<?php echo $ipk ?>"
					placeholder="Contoh: 2.75">
					(angka desimal dipisah dengan karakter titik ".")
				</p>
			</fieldset>
			<br>
			<p>
				<input type="submit" name="ubah" value="Update Data">
			</p>
		</form>
<?php 
	include "footer.php";
	mysqli_close($link);
?>