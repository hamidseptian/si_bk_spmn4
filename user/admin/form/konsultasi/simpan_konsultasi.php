<?php 
session_start();
include "../../../../assets/koneksi.php";
$id_kelas = $_POST['id_kelas'];
$id_siswa = $_POST['id_siswa'];
$id_ta = $_POST['id_ta'];
$menu = $_POST['menu'];
$semester = $_POST['semester'];
$tgl = $_POST['tgl'];
$konsultasi = nl2br($_POST['konsultasi']);
$tl = nl2br($_POST['tl']);

 $i = mysqli_query($conn, "INSERT into konsultasi set
       id_kelas='$id_kelas',
       id_ta='$id_ta' ,
       semester = '$semester',
      
       id_siswa='$id_siswa',
       tanggal='$tgl',
       konsultasi='$konsultasi',
       tindak_lanjut='$tl'
      ");
 ?>
 <script type="text/javascript">
   alert('konsultasi berhasil disimpan');
   window.location.href="../../?a=konsultasi"

 </script>