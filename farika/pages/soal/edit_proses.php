<?php
include "../../coneksi/config.php";

    

$queri="UPDATE  soal SET    kategori_soal_id		='$_POST[kat]',
							soal           ='$_POST[soal]',
							a  			='$_POST[a]',
							b 				='$_POST[b]',
							c 				='$_POST[c]',
							d				='$_POST[d]',
							jawaban 		='$_POST[jawaban]'
                             WHERE id       ='$_POST[id]' ";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:view.php');

?>