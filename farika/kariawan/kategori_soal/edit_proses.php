<?php
include "../../coneksi/config.php";

    

$queri="UPDATE  kategori_soal SET    nama		='$_POST[kat]'
                             WHERE kategori_soal_id       ='$_POST[id]' ";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>