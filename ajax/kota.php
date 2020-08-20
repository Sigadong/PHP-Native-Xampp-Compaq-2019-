<?php 
require_once "config.php";

$prov_id = $_POST['prov_id'];

$sql_kota = mysqli_query($con,"SELECT * FROM kota WHERE prov_id = $prov_id");

    echo '<option>Pilih Kota</option>';
     while($row_kota = mysqli_fetch_array($sql_kota)){
         echo '<option value="'.$row_kota['id'].'">'.$row_kota['nama_kota'].'</option>';
     }
?>