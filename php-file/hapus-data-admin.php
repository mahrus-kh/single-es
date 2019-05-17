<?php
include "koneksi.php";
$del = $koneksi->prepare("DELETE FROM tb_admin WHERE id=:id");
$del->bindParam(':id', $_POST['id']);
$del->execute();
?>
