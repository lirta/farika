<?php
include "../../coneksi/config.php";

$queri="DELETE FROM berkas_pendukung WHERE id='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>