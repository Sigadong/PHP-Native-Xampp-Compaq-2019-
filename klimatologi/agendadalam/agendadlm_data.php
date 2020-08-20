<?php
$table = 'agenda_dalam';
 $primaryKey = 'id_agendadlm';
 
//LUMAYAN BINGUNG, PADAHAL ARRAY FIELD YG DIBAWAH INIPUN SUDAH BAGUS
$columns = array(
    array( 'db' => 'tanggal', 'dt' => 0 ),
    array( 'db' => 'no_tulisandinas',  'dt' => 1 ),
    array( 'db' => 'perihal',     'dt' => 2 ),
    array( 'db' => 'pejabat_pengelola',   'dt' => 3 ),
    array( 'db' => 'kepada',   'dt' => 4 ),
    array( 'db' => 'id_agendadlm',     'dt' => 5 ),
);

    include_once "../_config/conn.php"; 
 
require( '../_assets/libs/DataTables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
