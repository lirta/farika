<?php
include "../../coneksi/config.php";

$queri="DELETE FROM kariawan WHERE username='$_GET[id]';";
mysqli_multi_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view_kariawan.php');

?>