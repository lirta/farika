<?php
include "../../coneksi/config.php";




$acak = rand(00000000, 99999999);
$id =$acak;

$querii="INSERT INTO soal (
								kategori_soal_id,
								soal,
								a,
								b,
								c,
								d,
								jawaban) 
								values 
								(
								'$_POST[kat]',
								'$_POST[soal]',
								'$_POST[a]',
								'$_POST[b]',
								'$_POST[c]',
								'$_POST[d]',
								'$_POST[jawaban]')";
mysqli_query($koneksi,$querii);
mysqli_close($koneksi);
header('location:view.php')


?>