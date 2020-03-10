<?php
include "../../coneksi/config.php";

$queri="DELETE FROM kategori_soal WHERE kategori_soal_id='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>