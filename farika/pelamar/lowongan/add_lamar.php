<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {include "../login.php";}
    else {
    	$date= date("d/m/Y");
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
                                'PEMOHON')";
            mysqli_query($koneksi,$querii);

            mysqli_close($koneksi);
            header('location:list.php');
        }else{
        	echo "no  $date > $lowongan[lowongan_tgl_batas]";
        }

    }
?>