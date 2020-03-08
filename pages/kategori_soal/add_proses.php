<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);
$id =$acak;

$querii="INSERT INTO kategori_soal (
								nama) 
								values 
								(
								'$_POST[kat]')";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php')


?>