<?php
include "../../coneksi/config.php";

$user="DELETE FROM pelamar WHERE username='$_GET[id]'";
mysqli_multi_query($koneksi,$user);

$pen="DELETE FROM pendidikan WHERE pelamar='$_GET[id]'";
mysqli_multi_query($koneksi,$pen);

$ber="DELETE FROM berkas_pendukung WHERE pelamar='$_GET[id]'";
mysqli_multi_query($koneksi,$ber);

$lam="DELETE FROM lamaran WHERE pelamar='$_GET[id]'";
mysqli_multi_query($koneksi,$lam);

$hasil =mysqli_query($koneksi,"SELECT * FROM ujian WHERE pelamar_id='$_GET[id] ");
$id=mysqli_fetch_assoc($hasil);

$di="DELETE FROM detail_ujian WHERE ujian_id='$id[ujian_id]'";
mysqli_multi_query($koneksi,$di);

$ujian="DELETE FROM ujian WHERE pelamar_id='$_GET[id]'";
mysqli_multi_query($koneksi,$ujian);
mysqli_close($koneksi);
header('location:view.php');

?>