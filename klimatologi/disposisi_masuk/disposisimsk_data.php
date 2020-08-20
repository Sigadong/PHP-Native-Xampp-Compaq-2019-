<?php
 $table = 'disposisi_masuk';
 $primaryKey = 'id_dispo';

// LUMAYAN BINGUNG, PADAHAL ARRAY FIELD YG DIBAWAH INIPUN SUDAH BAGUS
$columns = array(
    array( 'db' => 'diterima_tgl', 'dt' => 0 ),
    array( 'db' => 'dari', 'dt' => 1 ),
    array( 'db' => 'lampiran', 'dt' => 2 ),
    array( 'db' => 'kode_simpan', 'dt' => 3 ),
    array( 'db' => 'diteruskan_kpd', 'dt' => 4 ),
    array( 'db' => 'nomor_dosirmsk', 'dt' => 5 ),
    array( 'db' => 'isi_disposisi', 'dt' => 6 ),
    array( 'db' => 'catatan', 'dt' => 7 ),
    array( 'db' => 'id_dispo', 'dt' => 8 )
);

    include_once "../_config/conn.php"; 
    include_once "../_config/config.php"; 
  
    require( '../_assets/libs/DataTables/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
