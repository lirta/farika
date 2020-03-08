<?php
include "../../coneksi/config.php";

$queri="DELETE FROM lowongan WHERE lowongan_id='$_GET[id]';";
$queri .="DELETE FROM detail_lowongan WHERE lowongan_id='$_GET[id]'";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>