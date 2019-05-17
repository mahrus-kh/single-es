<?php
include "koneksi.php";
$edit = $koneksi->prepare("UPDATE tb_produksi SET dari_tanggal=:dari_tanggal, sampai_tanggal=:sampai_tanggal,
                           jml_produksi=:jml_produksi WHERE id=:id");
$edit->bindParam(':id', $_POST['id']);
$edit->bindParam(':dari_tanggal', $_POST['dari_tanggal']);
$edit->bindParam(':sampai_tanggal', $_POST['sampai_tanggal']);
$edit->bindParam(':jml_produksi', $_POST['jml_produksi']);
$edit->execute();
?>
