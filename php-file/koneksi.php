<?php
try {
    $koneksi = New PDO ("mysql:host=localhost;dbname=single_es","root","root");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
