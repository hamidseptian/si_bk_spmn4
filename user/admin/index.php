<?php 
session_start();
include "../../assets/koneksi.php";
// include "../../assets/phpqrcode/qrlib.php";
if ($_SESSION['login']!=true) {
  header("location:../../");
}else{
$lv = $_SESSION['level'];
$iduser = $_SESSION['id_user'];
if ($lv=="Wali Kelas") {
  $quser = mysqli_query($conn, "SELECT * from wali_kelas a left join guru b on a.id_guru = b.id_guru 
    left join kelas c on a.id_kelas = c.id_kelas
    where a.id_guru='$iduser'")or die(mysqli_error());
  $duser = mysqli_fetch_array($quser);
  $namauser= $duser['nama_guru'];
  $level = $lv.' '.$duser['nama_kelas'];
}
elseif ($lv=="Siswa") {
  $quser = mysqli_query($conn, "SELECT * from siswa where id_siswa='$iduser'")or die(mysqli_error());
  $duser = mysqli_fetch_array($quser);
  $namauser= $duser['nama_siswa'];
  $level = $lv;
}else{
  $quser = mysqli_query($conn, "SELECT * from admin a left join guru g on a.id_ptk=g.id_ptk where id='$iduser'")or die(mysqli_error());
  $duser = mysqli_fetch_array($quser);
  $namauser= $duser['nama_ptk'];
  $level = $lv=='Admin' ? 'Guru BK' : $duser['level'];

}

// $namauser= $duser['nama'];
  $gambar = "../../assets/user.jpg";



 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">

    <!-- fullCalendar -->
<!--   <link rel="stylesheet" href="../../assets/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../../assets/adminlte/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print"> -->
  
<script src="../../assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="../../assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/adminlte/dist/css/AdminLTE.min.css">

 <script type="text/javascript" src="../../assets/adminlte/js/jquery.js"></script>

 <script type="text/javascript" src="../../assets/ckeditor/ckeditor.js"></script>


 
<!--  <script type="text/javascript" src="../../library/ckeditor/ckeditor.js"></script>
    <script src="../sweetalert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../sweetalert/dist/sweetalert.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../assets/adminlte/dist/css/skins/_all-skins.min.css">






  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../assets/adminlte/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-map"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SDN 15</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo  $gambar ?>" class="user-image" alt="<?php echo  $gambar ?>">
              <span class="hidden-xs"><?php echo $namauser; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- <?php echo   $gambar ?> -->
              <li class="user-header">
                <img src="<?php echo  $gambar ?>" class="img" alt="<?php echo   $gambar ?>">

                <p>
                  <?php echo $namauser; ?>  <br> <?php echo $level; ?>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="?a=edit_akun&id=<?php echo $_SESSION['id_user'] ?>" class="btn btn-default btn-flat">Ganti Password</a> -->
                  
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo  $gambar ?>" class="img" alt="<?php echo   $gambar ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $namauser; ?></p>
          <a href="#"><?php echo $level ?> </a>
        </div>
      </div>
      <!-- search form -->
     

      <ul class="sidebar-menu" data-widget="tree">
        <?php if ($lv=='Admin') { ?>
        <li class="header">Menu Admin / Guru BK</li>
          <li><a href="?a=siswa_aktif" style="color:aqua"><i class="fa fa-book"></i>Data Siswa</a></li>
        
        <li><a href="?a=guru" style="color:aqua"><i class="fa fa-book"></i> <span>Data Guru</span></a></li>      
        <li><a href="?a=kelas"  style="color:aqua"><i class="fa fa-book"></i> <span>Kelas</span></a></li>      
        <li><a href="?a=tahun_ajaran" style="color:aqua"><i class="fa fa-book"></i> <span>Tahun Ajaran</span></a></li>

        <!-- <li><a href="?a=mapel"><i class="fa fa-book"></i> <span>Mata Pelajaran</span></a></li>       -->
        <li><a href="?a=penilaian_akhlak"><i class="fa fa-book"></i> <span  style="color:aqua">Data Penilaian Akhlak Siswa</span></a></li>
        <li><a href="?a=pelanggaran"><i class="fa fa-book"></i> <span  style="color:aqua">Data Pelanggaran Dan Sanksi</span></a></li>
        <li><a href="?a=prestasi"><i class="fa fa-book"></i> <span  style="color:aqua">Data Prestasi Siswa</span></a></li>
        <li><a href="?a=konsultasi"><i class="fa fa-book"></i> <span style="color:aqua">Data Konsultasi Siswa</span></a></li>
        <li><a href="?a=user"><i class="fa fa-book"></i> <span style="color:aqua">Data Admin</span></a></li>
        <?php }
        else if ($lv=='Kepala Sekolah') { ?>
        <li class="header">Menu Admin & Kepala Sekolah</li>
        <li><a href="?a=pelanggaran"><i class="fa fa-book"></i> <span style="color:aqua">Laporan Data Pelanggaran</span></a></li>
        <li><a href="?a=prestasi"><i class="fa fa-book"></i> <span style="color:aqua">Laporan Data Prestasi</span></a></li>
        <li><a href="?a=penilaian_akhlak"><i class="fa fa-book"></i> <span style="color:aqua">Laporan Data Penilaian</span></a></li>
        <li><a href="?a=edit_user&id_user=<?php echo $iduser ?>"><i class="fa fa-book"></i> <span style="color:aqua">Kelola Akun</span></a></li>
      <?php }
        else{ ?>
        <li class="header">Menu Siswa</li>
        <li><a href="?a=laporan_gabungan"><i class="fa fa-book"></i> <span style="">Laporan Gabungan</span></a></li>
        <li><a href="?a=edit_siswa&id=<?php echo $iduser ?>&status=1"><i class="fa fa-book"></i> <span style="color:aqua">Kelola Akun</span></a></li>
    <?php }  ?>
      
              

      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <!-- <div class="box-header">
              <h3 class="box-title" id="judul_konten">Wellcome To Administrator Page</h3>
              <h3 class="box-title" id="btn_tambah" style="float:right;"></h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body" >
             <?php 
             include "konten.php" ;
             ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/adminlte/dist/js/demo.js"></script>
<!-- page script -->






<!-- fullCalendar -->
<!-- <script src="../../assets/adminlte/bower_components/moment/moment.js"></script>
<script src="../../assets/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js"></script> -->






<script>
  $(function () {
    $('#example1').DataTable();
    $('#example3').DataTable()
    $('#tabelscrol').DataTable( {
    "scrollX": true
    } );
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

<?php } ?>