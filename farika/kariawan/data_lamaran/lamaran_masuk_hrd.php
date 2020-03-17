<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    { header('location:../../pages/login/login.php');}
    else {
      if ($_SESSION['akses'] == "HRD") {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Farika Riau Perkasa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'navbar.php'; include 'sidebar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
              <?php 
                $queril ="SELECT * FROM lowongan where lowongan_id='$_GET[id]'";
                $hasill =mysqli_query($koneksi,$queril);
                $koloml=mysqli_fetch_assoc($hasill);
              ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pelamar Posisi <?php echo "$koloml[lowongan_posisi]"; ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#masuk" data-toggle="tab">Lamaran Masuk</a></li>
                  <li class="nav-item"><a class="nav-link" href="#adm" data-toggle="tab">ADM</a></li>
                  <li class="nav-item"><a class="nav-link" href="#interview" data-toggle="tab">Interview </a></li>
                  <li class="nav-item"><a class="nav-link" href="#terima" data-toggle="tab">DITERIMA </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="masuk">
                    <div class="post">
                      <!-- /.user-block -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $queri ="SELECT * FROM lamaran inner join pelamar  on pelamar.username=lamaran.pelamar where lowongan='$_GET[id]' AND status='PERMOHONAN'";
                          $hasil =mysqli_query($koneksi,$queri);
                          $no = 1;
                          while ($kolom=mysqli_fetch_assoc($hasil)) {?>
                            <tr>
                                <?php 
                                $querip ="SELECT * FROM  pendidikan where pelamar='$kolom[pelamar]' ";
                                $hasilp=mysqli_query($koneksi,$querip);
                                $kolomp=mysqli_fetch_assoc($hasilp); ?>
                                <td><?php echo "<a href='../data_pelamar/detail_pelamar.php?id=$kolom[username]' target='_blank'>$kolom[nama]</a>";  ?></td>
                                <td><?php echo "$kolomp[pendidikan]"; ?></td>
                                <td><?php echo "$kolomp[jurusan]"; ?></td>
                                <td><?php echo "$kolom[status]"; ?></td>
                                <td><?php echo "<a href='terima.php?id=$kolom[id]'  class='btn btn-danger'>Terima</a>"; ?>
                                  <?php echo "<a href='tolak.php?id=$kolom[id]'  class='btn btn-danger'>Tolak</a>"; ?>
                                </td>
                                  </tr>
                                  <?php 
                                  $no=$no+1;
                           }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="adm">
                   <div class="post">
                      <!-- /.user-block -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $queri ="SELECT * FROM lamaran inner join pelamar  on pelamar.username=lamaran.pelamar where lowongan='$_GET[id]' AND status='ADM'";
                          $hasil =mysqli_query($koneksi,$queri);
                          $no = 1;
                          while ($kolom=mysqli_fetch_assoc($hasil)) {?>
                            <tr>
                                <?php 
                                $querip ="SELECT * FROM  pendidikan where pelamar='$kolom[pelamar]' ";
                                $hasilp=mysqli_query($koneksi,$querip);
                                $kolomp=mysqli_fetch_assoc($hasilp); ?>
                                <td><?php echo "<a href='../data_pelamar/detail_pelamar.php?id=$kolom[username]' target='_blank'>$kolom[nama]</a>";  ?></td>
                                <td><?php echo "$kolomp[pendidikan]"; ?></td>
                                <td><?php echo "$kolomp[jurusan]"; ?></td>
                                <td><?php echo "$kolom[status]"; ?></td>
                                <td><?php echo "<a href='tolak.php?id=$kolom[id]'  class='btn btn-danger'>Tolak</a>"; ?></td>
                                  </tr>
                                  <?php 
                                  $no=$no+1;
                           }?>
                          </tbody>
                        </table>
                      </div>
                    </div> 
                  </div>
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="interview">
                    <div class="post">
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $queri ="SELECT * FROM lamaran inner join pelamar  on pelamar.username=lamaran.pelamar where lowongan='$_GET[id]' AND status='LULUS'";
                          $hasil =mysqli_query($koneksi,$queri);
                          $no = 1;
                          while ($kolom=mysqli_fetch_assoc($hasil)) {?>
                            <tr>
                                <?php 
                                $querip ="SELECT * FROM  pendidikan where pelamar='$kolom[pelamar]' ";
                                $hasilp=mysqli_query($koneksi,$querip);
                                $kolomp=mysqli_fetch_assoc($hasilp); ?>
                                <td><?php echo "<a href='../data_pelamar/detail_pelamar.php?id=$kolom[username]' target='_blank'>$kolom[nama]</a>";  ?></td>
                                <td><?php echo "$kolomp[pendidikan]"; ?></td>
                                <td><?php echo "$kolomp[jurusan]"; ?></td>
                                <td><?php echo "$kolom[status]"; ?></td>
                                <td><?php echo "<a href='terimain.php?id=$kolom[id]'  class='btn btn-danger'>Terima</a>"; ?>
                                  <?php echo "<a href='tolak.php?id=$kolom[id]'  class='btn btn-danger'>Tolak</a>"; ?>
                                </td>
                                  </tr>
                                  <?php 
                                  $no=$no+1;
                           }?>
                          </tbody>
                        </table>
                      </div>
                    </div> 
                  </div>


                  <div class="tab-pane" id="terima">
                    <div class="post">
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $queri ="SELECT * FROM lamaran inner join pelamar  on pelamar.username=lamaran.pelamar where lowongan='$_GET[id]' AND status='DITERIMA'";
                          $hasil =mysqli_query($koneksi,$queri);
                          $no = 1;
                          while ($kolom=mysqli_fetch_assoc($hasil)) {?>
                            <tr>
                                <?php 
                                $querip ="SELECT * FROM  pendidikan where pelamar='$kolom[pelamar]' ";
                                $hasilp=mysqli_query($koneksi,$querip);
                                $kolomp=mysqli_fetch_assoc($hasilp); ?>
                                <td><?php echo "<a href='../data_pelamar/detail_pelamar.php?id=$kolom[username]' target='_blank'>$kolom[nama]</a>";  ?></td>
                                <td><?php echo "$kolomp[pendidikan]"; ?></td>
                                <td><?php echo "$kolomp[jurusan]"; ?></td>
                                <td><?php echo "$kolom[status]"; ?></td>
                                <td></td>
                                  </tr>
                                  <?php 
                                  $no=$no+1;
                           }?>
                          </tbody>
                        </table>
                      </div>
                    </div> 
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include '../footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
<?php }else{
  echo '<script language="javascript">
              alert ("Anda Tidak Punya Akses");
              window.location="../admin/index.php";
              </script>';
              exit();
} } ;?>