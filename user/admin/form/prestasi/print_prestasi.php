<?php

include "../../../../assets/koneksi.php";
require_once("../../../../assets/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;


$id_ta=$_GET['id_ta'];
$semester=$_GET['semester'];
$nama_semester=[1=>'Ganjil','Genap'];
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where id_ta='$id_ta' and semester='$semester'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];
 $no=1;

if (isset($_GET['id_kelas'])) {
  $id_kelas = $_GET['id_kelas'];
    $perintah="SELECT * From kelas where id_kelas='$id_kelas'";
  $jalan=mysqli_query($conn, $perintah);
  $d_kelas=mysqli_fetch_array($jalan);
  $caption_kelas = 'Kelas '.$d_kelas['tingkat'].' - '.$d_kelas['nama_kelas'].'<br>';
   $where ="where 
  p.id_kelas='$id_kelas'
  and p.id_ta='$id_ta'
  and p.semester='$semester'
  ";
}else{
  $caption_kelas = '';
   $where ="where 
  p.id_ta='$id_ta'
  and p.semester='$semester'
  ";
}
$html = '

<div style="width: 100px;float: left">
  <img src="../../../../assets/logo_disdik.png" style="width: 130px;">
</div>

<div style="width: 725px; float: center;margin-top:-20px; ">
  <center>
    <h3>
      SMP NEGERI 4 BATANG ANAI
    </h3>
      <p >
Kasang, Batang Anai, Padang Pariaman Regency, West Sumatra 25586</p>


  </center>
</div>
<div style="width: 100px;float: right">
  <img src="../../../../assets/logo_sekolah.png" style="width: 95px;">
</div>
<div style="clear:both;"></div>
<hr>
<br>
<center>
Laporan Data Prestasi Siswa <br>
'.$caption_kelas.'
Tahun Ajaran '.$dta['nama_ta'].' Semester '.$nama_semester[$dta['semester']].'
</center>
<br>



<table style=" font-size:11px;border-collapse: collapse; width: 100%;" border=1>
  <thead>
    <tr>
      <td>No</td>
      <td>Kelas</td>
      <td>Siswa</td>
      
      <td>Kegiatan</td>
      <td>Tanggal Pelaksanaan</td>
      <td>Tingkat</td>
      <td>Prestasi</td>
      
    </tr>
  </thead>
              
';


  $perintah="SELECT p.*, k.nama_kelas, k.tingkat as tingkat_kelas, s.nama_siswa From prestasi p
  left join kelas k on p.id_kelas=k.id_kelas
  left join siswa s on p.id_siswa = s.id_siswa
  $where
  ";
  $jalan=mysqli_query($conn, $perintah);

while ($data=mysqli_fetch_array($jalan))
{ 

  $html .='<tr>
    <td>'.$no++.'</td>
  <td>'.$data['tingkat_kelas'].' - '.$data['nama_kelas'].'</td>
  <td>'.$data['nama_siswa'].'</td>
  <td>'.$data['kegiatan'].'</td>
  <td>'.$data['tanggal'].'</td>
  <td>'.$data['tingkat'].'</td>
  <td>'.$data['prestasi'].'</td>
   
    </tr>';

  }























$html .= '
</table>';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('Laporan Data Prestasi Siswa '.$caption_kelas.' Tahun Ajaran '.$dta['nama_ta'].' Semester '.$nama_semester[$dta['semester']].' .pdf', ['Attachment'=>0]);

?>
<p style="font-size: "></p>

