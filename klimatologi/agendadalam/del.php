<?php 
require_once "../_config/config.php";
	mysqli_query($con, "DELETE FROM agenda_dalam WHERE id_agendadlm = '$_GET[id]'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
?>