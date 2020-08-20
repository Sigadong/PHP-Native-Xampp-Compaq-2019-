<?php 
require_once "../_config/config.php";

$tampil = mysqli_query($con,"SELECT * FROM induk_primbon WHERE id_klas='$_POST[nama_klas]'");
$jml = mysqli_num_rows($tampil);
if ($jml > 0){
    echo"
     <option selected>--Pilih--</option>";
     while($data = mysqli_fetch_array($tampil)){
         echo "<option value=$data[id_idk]>$data[nama_induk]</option>";
     }
	} else{
    echo "
     <option selected>-Data primbon tidak tersedia, pilih yang lain!</option>";
}
?>