<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        // Arial bold 15
        $this->SetFont('Arial', 'B', 18);
        // Move to the right
        $this->Cell(100);
        // Title
        $this->Cell(100, 10, 'PT. FARIKA RIAU PERKASA', 0, 0, 'C');
        // Line break
        $this->Ln(10);
        $this->Cell(80);


        $this->SetFont('Arial', 'B', 15);
        $this->Cell(140, 10, 'LAPORAN DATA PELAMAR ', 0, 0, 'C');
        $this->Cell(100, 10, '', 0, 0, 'C');
        $this->Ln(10);
        $this->Cell(80);

        //$this->Cell(110,10,'Laporan Data Pendidikan',0,0,'C');


        $this->Ln(25);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
// Instanciation of inherited class
$pdf = new PDF('L', 'mm', 'A3');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 8);

include "../../coneksi/config.php";
$no = 1;
$queri = "SELECT * FROM lowongan WHERE lowongan_id = '$_POST[id]' ";
$kolom = mysqli_query($koneksi, $queri);
$hdr = mysqli_fetch_assoc($kolom);

$pdf->Cell(330, 7, 'POSISI ' . $hdr['lowongan_posisi'] . ' YANG DITERIMA', 1, 0, 'C');
$pdf->Ln();
$pdf->Cell(10, 7, 'No.', 1, 0, 'C');
$pdf->Cell(40, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'TEMPAT/TANGGAL LAHIR', 1, 0, 'C');
$pdf->Cell(40, 7, 'JENIS KELAMIN', 1, 0, 'C');
$pdf->Cell(40, 7, 'AGAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'NO TELPON', 1, 0, 'C');
$pdf->Cell(40, 7, 'EMAIL', 1, 0, 'C');
$pdf->Cell(40, 7, 'PENDIDIKAN', 1, 0, 'C');
$pdf->Cell(40, 7, 'JURUSAN', 1, 0, 'C');

$pdf->Ln();

$queril = "SELECT * FROM lamaran WHERE lowongan = '$_POST[id]' ";
$lamaran = mysqli_query($koneksi, $queril);
while ($hasill = mysqli_fetch_assoc($lamaran)) {
    if ($hasill['status'] == "DITERIMA") {
        $pelamar = mysqli_query($koneksi, "SELECT * FROM pelamar  WHERE username = '$hasill[pelamar]'");
        $hasilp = mysqli_fetch_assoc($pelamar);

        $pendd = mysqli_query($koneksi, "SELECT * FROM pendidikan  WHERE pelamar = '$hasill[pelamar]'");
        $hasilpn = mysqli_fetch_assoc($pendd);
        $pdf->SetFont('Times', 'B', 8);
        $pdf->Cell(10, 7, $no++, 1, 0, 'l');
        $pdf->Cell(40, 7, $hasilp['nama'], 1, 0, 'L');
        // $pdf->Cell(40, 7, $hasilp['nama_pengajuan'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilp['tmp_lhr']  . $hasilp['tgl_lhr'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilp['jns_kel'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilp['agama'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilp['no_hp'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilp['email'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpn['pendidikan'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpn['jurusan'], 1, 0, 'L');
        $pdf->Ln();
    }
}

$pdf->Ln();
$pdf->Ln();

$noo = 1;
$queri = "SELECT * FROM lowongan WHERE lowongan_id = '$_POST[id]' ";
$kolom = mysqli_query($koneksi, $queri);
$hdr = mysqli_fetch_assoc($kolom);

$pdf->Cell(330, 7, 'POSISI ' . $hdr['lowongan_posisi'] . ' YANG DITOLAK', 1, 0, 'C');
$pdf->Ln();
$pdf->Cell(10, 7, 'No.', 1, 0, 'C');
$pdf->Cell(40, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'TEMPAT/TANGGAL LAHIR', 1, 0, 'C');
$pdf->Cell(40, 7, 'JENIS KELAMIN', 1, 0, 'C');
$pdf->Cell(40, 7, 'AGAMA', 1, 0, 'C');
$pdf->Cell(40, 7, 'NO TELPON', 1, 0, 'C');
$pdf->Cell(40, 7, 'EMAIL', 1, 0, 'C');
$pdf->Cell(40, 7, 'PENDIDIKAN', 1, 0, 'C');
$pdf->Cell(40, 7, 'JURUSAN', 1, 0, 'C');

$pdf->Ln();


$qlam = mysqli_query($koneksi, "SELECT * FROM lamaran WHERE lowongan = '$_POST[id]' ");
while ($hasilt = mysqli_fetch_assoc($qlam)) {
    if ($hasilt['status'] == "DITERIMA") {
    } else {

        $pelamart = mysqli_query($koneksi, "SELECT * FROM pelamar  WHERE username = '$hasilt[pelamar]'");
        $hasilpt = mysqli_fetch_assoc($pelamart);

        $penddt = mysqli_query($koneksi, "SELECT * FROM pendidikan  WHERE pelamar = '$hasilt[pelamar]'");
        $hasilpnt = mysqli_fetch_assoc($penddt);
        $pdf->SetFont('Times', 'B', 8);
        $pdf->Cell(10, 7, $noo++, 1, 0, 'l');
        $pdf->Cell(40, 7, $hasilpt['nama'], 1, 0, 'L');
        // $pdf->Cell(40, 7, $hasilp['nama_pengajuan'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpt['tmp_lhr']  . $hasilpt['tgl_lhr'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpt['jns_kel'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpt['agama'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpt['no_hp'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpt['email'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpnt['pendidikan'], 1, 0, 'L');
        $pdf->Cell(40, 7, $hasilpnt['jurusan'], 1, 0, 'L');
        $pdf->Ln();
    }
}
$pdf->Ln();
$pdf->SetFont('Times', '', 11);


$pdf->Output();
