<?php
$table = 'tb_produksi';

$primaryKey = 'id';

$columns = array(
    array( 'db' => 'id','dt' => 'id' ),
    array( 'db' => 'dari_tanggal','dt' => 'dari_tanggal' ),
    array( 'db' => 'sampai_tanggal','dt' => 'sampai_tanggal' ),
    array( 'db' => 'jml_produksi','dt' => 'jml_produksi' ),
);

include 'koneksi-list.php';

include "spp.class.php";

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
?>
