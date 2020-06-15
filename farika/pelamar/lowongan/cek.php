<?php
include "../../coneksi/config.php";


$acak = rand(00000000, 99999999);
$date = date("d/m/Y");
$id = $_POST["id"];
$kel = $_POST["ket"];
$jml = $_POST["jml"];
$lowongan = $_POST["low"];
$user = $_POST["user"];
$ujian = $user . $acak;
$lamaran = $_POST["lamaran"];
$jmls = 0;
$jmlb = 0;
$a = $_POST["pilihan"];
for ($i = 0; $i < $jml; $i++) {
  $s = $id["$i"];
  $ket = $kel["$i"];
  $jawab = $a["$s"];

  $queri = "SELECT * FROM soal where id='$s' and jawaban='$jawab' and kategori_soal_id='$ket'";
  $hasil = mysqli_query($koneksi, $queri);
  $soal = mysqli_fetch_assoc($hasil);

  if (!empty($soal)) {
    $jmlb = $jmlb + 1;
    $querii = "INSERT INTO detail_ujian (
      ujian_id,
      kategori,
      id_soal,
      jawaban) 
      values 
      ('$ujian',
      '$ket',
      '$s',
      '$jawab')";
    mysqli_query($koneksi, $querii);
  } else {
    $jmls = $jmls + 1;
    $querii = "INSERT INTO detail_ujian (
        ujian_id,
        kategori,
        id_soal,
        jawaban) 
        values 
        ('$ujian',
        '$ket',
        '$s',
        '$jawab')";
    mysqli_query($koneksi, $querii);
  }
}

$nilai =  100 / ($jml * $jmlb);

if ($nilai > 70) {
  $keputusan = "LULUS";
} else {
  $keputusan = "GAGAL";
}
// echo "$jmlb == $jmls  ===$jml ==$nilai == $keputusan ==$s ==$jawab";
if ($keputusan == 'LULUS') {
  $tgl = date("y-m-d");
  $tgl2 = date("y-m-d", strtotime("+20 days", strtotime($tgl)));
  $tglb = date("d/m/Y", strtotime($tgl2));

  $querlamaran = "UPDATE lamaran SET status = '$keputusan', tgl_interview = '$tglb' WHERE id = '$lamaran'";
  mysqli_query($koneksi, $querlamaran);
} else {
  $querlamaran = "UPDATE lamaran SET status = '$keputusan' WHERE id = '$lamaran'";
  mysqli_query($koneksi, $querlamaran);
}
$querujian = "INSERT INTO ujian (
                ujian_id,
                id_lowongan,
                pelamar_id,
                tgl_ujian,
                benar,
                salah) 
                values 
                ('$ujian',
                '$lowongan',
                '$user',
                '$date',
                '$jmlb',
                '$jmls')";
mysqli_query($koneksi, $querujian);

mysqli_close($koneksi);
header('location:list_lamaran.php');
