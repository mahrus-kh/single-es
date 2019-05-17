<?php
include "koneksi.php";
$del = $koneksi->prepare("DELETE FROM tb_produksi WHERE id=:id");
$del->bindParam(':id', $_POST['id']);
$del->execute();
?>
