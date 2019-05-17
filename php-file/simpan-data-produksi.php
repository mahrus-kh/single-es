<?php
include "koneksi.php";
$save = $koneksi->prepare("INSERT INTO tb_produksi (dari_tanggal, sampai_tanggal, jml_produksi)
                           VALUES (:dari_tanggal, :sampai_tanggal, :jml_produksi)");
$save->bindParam(':dari_tanggal', $_POST['dari_tanggal']);
$save->bindParam(':sampai_tanggal', $_POST['sampai_tanggal']);
$save->bindParam(':jml_produksi', $_POST['jml_produksi']);
$save = $save->execute();
echo $save;
?>
