<?php 
require_once "../_config/config.php";
	mysqli_query($con, "DELETE FROM agenda_keluar WHERE id_agendakel = '$_GET[id]'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>