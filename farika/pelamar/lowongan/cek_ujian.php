<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {include "../login.php";}
    else {
      $date= date("d/m/Y");
      $queri ="SELECT * FROM lamaran WHERE id='$_GET[id]'";
        $hasil =mysqli_query($koneksi,$queri);
        $lamaran=mysqli_fetch_assoc($hasil);

        if ($date == $lamaran['tgl_ujian']  ) {
            echo '<script language="javascript">
                          alert ("SELAMAT UJUAN!!! <br> ISI JAWABAN DENGAN BENAR");
                          window.location="ujian.php?id=$lamaran[id]";
                          </script>';
                          exit();
        }else{
          echo '<script language="javascript">
                          alert ("MOHON MAAF ANDA UJIAN PADA TANGGA $lamaran[tgl_ujian]");
                          window.location="list_lamaran.php";
                          </script>';
                          exit();
        }

    }
?>