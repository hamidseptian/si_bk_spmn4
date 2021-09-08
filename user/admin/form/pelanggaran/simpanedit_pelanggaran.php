<?php 
session_start();
include "../../../../assets/koneksi.php";
$id_pelanggaran = $_GET['id_pelanggaran'];
$id_kelas = $_POST['id_kelas'];
$id_siswa = $_POST['id_siswa'];
$id_ta = $_POST['id_ta'];
$menu = $_POST['menu'];
$semester = $_POST['semester'];
$tgl = $_POST['tgl'];
$kasus = nl2br($_POST['kasus']);
$tl = nl2br($_POST['tl']);

 $i = mysqli_query($conn, "UPDATE pelanggaran set
       id_kelas='$id_kelas',
       id_ta='$id_ta' ,
       semester = '$semester',
      
       id_siswa='$id_siswa',
       tanggal='$tgl',
       kasus='$kasus',
       tindak_lanjut='$tl'
       where id_pelanggaran='$id_pelanggaran'
      ");
 ?>
 <script type="text/javascript">
   alert('Data pelanggaran berhasil diperbaharui');
   window.location.href="../../?a=pelanggaran"

 </script>