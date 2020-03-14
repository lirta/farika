<?php include "../../coneksi/config.php";
if (!isset($_SESSION)) {session_start();
}
if (empty($_SESSION['username']) AND
    empty($_SESSION['password']))
    {header('location:../login.php');}
    else {
      $date= date("d/m/Y");
      $queri ="SELECT * FROM lamaran WHERE id='$_GET[id]'";
        $hasil =mysqli_query($koneksi,$queri);
        $lamaran=mysqli_fetch_assoc($hasil);

        if ($date == $lamaran['tgl_ujian']  ) {
          ?>
             <!DOCTYPE html>
<html>
<?php
 //untuk memulai session
    
     
    //set session dulu dengan nama $_SESSION["mulai"]
   


    $sql = 0;
     
    /* Apabila data di database kosong, maka waktu awal di set 0 jam, 10 menit dan 0 detik */
    if($sql == 0){
        $jam    = 0;
        $menit  = 45;
    }else{
        $data   = mysql_fetch_array($sql);
         
         if($data['waktu'] < 60){ 
             /* Apabila waktu yang diiputkan kurang dari 60 menit, maka waktu dijadikan menit dan 0 jam */
             $menit = $data['waktu']; 
             $jam = 0; 
        }else{ 
             /* Apabila waktu yang diiputkan lebih dari 60 menit, maka waktu/60 dan sisa bagi dijadikan menit serta hasil bagi dijadikan jam */
             $menit = $data['waktu']%60;
 
             //awalnya seperti ini 
            //$jam = substr(($data['waktu']/60),0,1); //substr berfungsi untuk mengambil string, 0 dimulai dari string ke-0 dan 1 jumlah string yang akan diambil
            //saya ganti menjadi
            $jam = (int)($data['waktu']/60); //dijadikan integer
        } 
    }
?>
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



  <!-- Kita membutuhkan jquery, disini saya menggunakan langsung dari jquery.com, jquery ini bisa didownload dan ditaruh dilocal -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  
    <!-- Script Timer -->
    <script type="text/javascript">
        $(document).ready(function() {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
            */
            var detik = 0;
            var menit = <?php echo $menit; ?>;
            var jam     = <?php echo $jam; ?>;
            var hari    = 2;
                  
            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 10 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h1 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h1><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                             
                        if(jam < 0) { 
                            clearInterval(); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            var frmSoal = document.getElementById("frmSoal"); 
                            alert('Waktu Anda telah habis, Terima kasih sudah berkunjung.');
                            frmSoal.submit(); 
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
    </script>
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
            <div class="card-body">
              <div id="timer"></div>
              <form method="POST" id="frmSoal" action="cek.php">
                <?php 
                    $querii ="SELECT * FROM soal";
                    $hasill =mysqli_query($koneksi,$querii);
                    $jml=mysqli_num_rows($hasill);
                    $no = 1;
                    while ($soal=mysqli_fetch_assoc($hasill)) {
                  ?>
                  <input type="hidden" name="id[]" value="<?php echo "$soal[id]"; ?>">
                  <input type="hidden" name="ket[]" value="<?php echo "$soal[kategori_soal_id]"; ?>">
                  <input type="hidden" name="lamaran" value="<?php echo "$lamaran[id]"; ?>">
                  <input type="hidden" name="low" value="<?php echo "$lamaran[lowongan]"; ?>">
                  <input type="hidden" name="user" value="<?php echo "$_SESSION[username]"; ?>">
                  <input type="hidden" name="jml" value="<?php echo "$jml"; ?>">
                <p><?php echo "$no . $soal[soal]"; ?></p>
                  <input type="radio"  name="pilihan[<?php echo "$soal[id]"; ?>]" value="a">
                  <label for="male">A . <?php echo "$soal[a]"; ?></label><br>
                  <input type="radio"  name="pilihan[<?php echo "$soal[id]"; ?>]" value="b">
                  <label for="female">B . <?php echo "$soal[b]"; ?></label><br>
                  <input type="radio"  name="pilihan[<?php echo "$soal[id]"; ?>]" value="c">
                  <label for="other">C . <?php echo "$soal[c]"; ?></label><br>
                  <input type="radio"  name="pilihan[<?php echo "$soal[id]"; ?>]" value="d">
                  <label for="other">D . <?php echo "$soal[d]"; ?></label>

                  <br>  

                        <?php 
                        $no=$no+1;
                 } 
                 ?>
                 <button type="submit" class="btn btn-primary">Submit</button>
              </form>
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