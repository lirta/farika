<?php 
include "../../coneksi/config.php";

$id=$_POST["id"];
$kel=$_POST["ket"];
$jml=$_POST["jml"];
        $jmls=0;
        $jmlb=0;
         $a=$_POST["pilihan"];
         for ($i=0;$i<$jml;$i++)
         {
            $s=$id["$i"];
            $ket=$kel["$i"];
            $jawab=$a["$s"];

            $queri ="SELECT * FROM soal where id='$s' and jawaban='$jawab' and kategori_soal_id='$ket'";
            $hasil =mysqli_query($koneksi,$queri);
            $soal=mysqli_fetch_assoc($hasil);
            
            if (!empty($soal)) 
            {
              $benar=$soal["jawaban"];
              $jmlb=$jmlb+1;
              echo "jawaban anda benar $benar dengan kategori $ket <br>";
            }else{
              $benar=$soal["jawaban"];
              $jmls=$jmls+1;
              echo "jawaban anda $jawab salah, dengan kategori $ket <br>";
            }
          }
            

                   echo " benar = $jmlb <br> salah = $jmls";  




?>
