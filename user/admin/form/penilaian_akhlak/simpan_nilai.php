<?php 
session_start();
include "../../../../assets/koneksi.php";
$id_kelas = $_POST['id_kelas'];
$id_siswa = $_POST['id_siswa'];
$id_ta = $_POST['id_ta'];
$id_kp = $_POST['id_kp'];
$nilai = $_POST['nilai'];
$menu = $_POST['menu'];
$semester = $_POST['semester'];

foreach ($id_kp as $key => $v) {
  $nilaiinput = $nilai[$key];
  $idkp  = $v;
  $qceknilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta'  and id_kp='$idkp' and id_siswa='$id_siswa' and semester='$semester'");
  $jceknilai = mysqli_num_rows($qceknilai);
  if ($jceknilai>0) {
    $u = mysqli_query($conn, "UPDATE nilai set 
      nilai = '$nilaiinput'
      where id_kelas='$id_kelas' and id_ta='$id_ta' and id_kp='$idkp' and id_siswa='$id_siswa' and semester='$semester'
      ");
  }else{
    $i = mysqli_query($conn, "INSERT into nilai set
       id_kelas='$id_kelas',
       id_ta='$id_ta' ,
       semester = '$semester',
      
       id_kp='$idkp' ,
       id_siswa='$id_siswa',
       nilai = '$nilaiinput'
      ");
  }

}
 ?>
 <script type="text/javascript">
   alert('Nilai berhasil disimpan');
   window.location.href="../../?a=manage_nilai&id_kelas=<?php echo $id_kelas ?>&id_ta=<?php echo $id_ta ?>&semester=<?php echo $semester ?>&menu=<?php echo $menu ?>"

 </script>