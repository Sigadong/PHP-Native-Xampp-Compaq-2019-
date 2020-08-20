<?php 
require_once "../_config/config.php";

$tampil = mysqli_query($con,"SELECT * FROM anak_primbon WHERE id_idk='$_POST[nama_induk]'");
$jml = mysqli_num_rows($tampil);
if ($jml > 0){
    echo"
     <option selected>--Pilih--</option>";
     while($data = mysqli_fetch_array($tampil)){
         echo "<option value=$data[id_ank]>$data[nama_anak]</option>";
     }
	} else{
    echo "
     <option selected>-Data primbon tidak tersedia, pilih yang lain!</option>";
}
?>