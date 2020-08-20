<?php
include('config.php');

$kurir = $_POST["kurir"];
$kota = $_POST["kota"];
$biaya = mysqli_query($conn,"SELECT * FROM peng_tarif WHERE kurir_id_fk='$kurir' and kota_id_fk='$kota'");
while($data=mysqli_fetch_array($biaya)){
	echo "$data[tarif]";
}
?>
