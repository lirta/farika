<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {header('location:../login.php');}
    else {
    	$date= date("Y-m-d");
    	$queri ="SELECT * FROM lowongan WHERE lowongan_id='$_GET[id]'";
        $hasil =mysqli_query($koneksi,$queri);
        $lowongan=mysqli_fetch_assoc($hasil);

        if ($date < $lowongan['lowongan_tgl_batas']  ) {
        	$querii="INSERT INTO lamaran (lowongan,
                                pelamar,
                                tgl_lamaran,
                                status) 
                                values 
                                ('$_GET[id]',
                                '$_SESSION[username]',
                                '$date',
                                'PERMOHONAN')";
            mysqli_query($koneksi,$querii);

            mysqli_close($koneksi);
            echo '<script language="javascript">
                          alert ("ANDA BERHASIL MENGAJUKAN LAMARAN PEKERJAAN  ");
                          window.location="list.php";
                          </script>';
                          exit();
        }else{
        	echo '<script language="javascript">
                          alert ("MOHON MAAF WAKTU PENDAFTARAN SUDAH HABIS");
                          window.location="list.php";
                          </script>';
                          exit();
        }

    }
