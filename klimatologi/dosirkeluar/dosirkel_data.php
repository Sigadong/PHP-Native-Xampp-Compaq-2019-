<?php
$table = 'dosir_keluar';
 $primaryKey = 'id_dosirkel';
 
// LUMAYAN BINGUNG, PADAHAL ARRAY FIELD YG DIBAWAH INIPUN SUDAH BAGUS
$columns = array(
    array( 'db' => 'no_dosir',  'dt' => 0 ),
    array( 'db' => 'tanggal', 'dt' => 1 ),
    array( 'db' => 'nomor_surat',  'dt' => 2 ),
    array( 'db' => 'perihal',   'dt' => 3 ),
    array( 'db' => 'kepada',     'dt' => 4 ),
    array( 'db' => 'foto_surat',     'dt' => 5 ),
    array( 'db' => 'id_dosirkel',     'dt' => 6 )
);

    include_once "../_config/conn.php"; 
    require( '../_assets/libs/DataTables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>