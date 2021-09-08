<?php 
session_start();
include "../../../../assets/koneksi.php";
$id_prestasi = $_GET['id_prestasi'];
$id_kelas = $_POST['id_kelas'];
$id_siswa = $_POST['id_siswa'];
$id_ta = $_POST['id_ta'];
$menu = $_POST['menu'];
$semester = $_POST['semester'];
$tgl = $_POST['tgl'];
$tingkat = $_POST['tingkat'];
$kegiatan = nl2br($_POST['kegiatan']);
$prestasi = nl2br($_POST['prestasi']);

 $i = mysqli_query($conn, "UPDATE prestasi set
       id_kelas='$id_kelas',
       id_ta='$id_ta' ,
       semester = '$semester',
      
       id_siswa='$id_siswa',
       tanggal='$tgl',
       tingkat='$tingkat',
       kegiatan='$kegiatan',
       prestasi='$prestasi'
       where id_prestasi='$id_prestasi'
      
      ")or die(mysqli_error());
 ?>
 <script type="text/javascript">
   alert('prestasi berhasil diperbaharui');
   window.location.href="../../?a=prestasi"

 </script>