<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {header('location:../login.php');}
    else {
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
  <?php include '../navbarr.php'; include '../sidebarr.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Lowongan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data</h3> <br>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Posisi</th>
                  <th>Tanggal Terbit</th>
                  <th>Tanggal Akhir</th>
                  <th>Kualifikasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                $queri ="SELECT * FROM lowongan";
                $hasil =mysqli_query($koneksi,$queri);
                $no = 1;
                while ($kolom=mysqli_fetch_assoc($hasil)) {
                  $queriii ="SELECT * FROM lamaran where lowongan='$kolom[lowongan_id]' AND pelamar='$_SESSION[username]'";
                $hasilll =mysqli_query($koneksi,$queriii);
                $lam=mysqli_fetch_assoc($hasilll);
                  if (!empty($lam)) { ?>
                    <tr>
                      <td><?php echo "$kolom[lowongan_posisi]";  ?></td>
                      <td><?php echo "$kolom[lowongan_tgl_terbit]"; ?></td>
                      <td><?php echo "$kolom[lowongan_tgl_batas]"; ?></td>
                      <td>
                        <?php $quer = "SELECT * FROM detail_lowongan where lowongan_id='$kolom[lowongan_id]'";
                          $hass =mysqli_query($koneksi,$quer);
                          while ($kol=mysqli_fetch_assoc($hass)) {
                            echo "<li>$kol[kualifikasi]</li>";
                           } ?>
                      </td>
                      <td> </td>
                        </tr>
                        <?php 
                        $no=$no+1;
                 }else{ 
                 
                    ?><tr>
                            <td><?php echo "$kolom[lowongan_posisi]";  ?></td>
                            <td><?php echo "$kolom[lowongan_tgl_terbit]"; ?></td>
                            <td><?php echo "$kolom[lowongan_tgl_batas]"; ?></td>
                            <td>
                              <?php $quer = "SELECT * FROM detail_lowongan where lowongan_id='$kolom[lowongan_id]'";
                                $hass =mysqli_query($koneksi,$quer);
                                while ($kol=mysqli_fetch_assoc($hass)) {
                                  echo "
                                   
                                    <li>$kol[kualifikasi]</li>
                                    
                                    ";
                                 } ?>
                            </td>
                            <td><?php echo "<a href='add_lamar.php?id=$kolom[lowongan_id]' onclick=\"return confirm('Sebelum Melakukan LAMARAN PEKERJAAN Pastikan BERKAS anda Sudah LENGKAP')\" class='btn btn-danger'>LAMAR</a>"; ?></td>
                        </tr>
                        <?php 
                        $no=$no+1;
                 } }
                 ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
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
<?php } ?>