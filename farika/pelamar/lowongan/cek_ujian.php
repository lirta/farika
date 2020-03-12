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
          ?>
             <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Rafika Riau Perkasa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="wrapper col-md-12">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="text-center">Data</h3> <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>

<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
      <?php  }else{
          echo '<script language="javascript">
                          alert ("MOHON MAAF ANDA UJIAN PADA TANGGA $lamaran[tgl_ujian]");
                          window.location="list_lamaran.php";
                          </script>';
                          exit();
        }

    }
?>