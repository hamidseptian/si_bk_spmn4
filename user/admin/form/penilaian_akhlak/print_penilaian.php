<?php

include "../../../../assets/koneksi.php";
require_once("../../../../assets/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;


$id=$_GET['id_kelas'];
$id_kelas = $id;
$id_ta=$_GET['id_ta'];
$semester=$_GET['semester'];

  $perintah="SELECT * From kelas where id_kelas='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $d1=mysqli_fetch_array($jalan);
  $no=1;
 $tingkat = $d1['tingkat'] -1;
 $tingkat_kelas = $d1['tingkat'];
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where id_ta='$id_ta' and semester='$semester'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];


 $q_kriteria_spiritual = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Spiritual'");
 $j_kriteria_spiritual = mysqli_num_rows($q_kriteria_spiritual); 
 $q_kriteria_sosial = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Sosial'");
 $j_kriteria_sosial = mysqli_num_rows($q_kriteria_sosial); 
 $tampung_id_kriteria_penilaian = [];
 $tampung_id_kriteria_penilaian_sosial = [];
 $tampung_id_kriteria_penilaian_spiritual = [];
  $no=1;


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
Laporan Data Penilaian Kelas '.$d1['tingkat'].' - '.$d1['nama_kelas'].' <br>
Tahun Ajaran '.$dta['nama_ta'].'
</center>
<br>



<table style=" font-size:11px;border-collapse: collapse; width: 100%;" border=1>
                 
              
';


$html .='<thead>
    <tr>
      <td rowspan="3" align="center">No</td>
      <td rowspan="3" align="center">NIS</td>
      <td rowspan="3" align="center">Nama</td>
      <td colspan="'.($j_kriteria_spiritual + $j_kriteria_sosial).'" align="center">Penilaian</td>
    </tr>
    <tr>
     
      <td colspan="'.$j_kriteria_spiritual.'" align="center">Spiritual</td>
      <td colspan="'.$j_kriteria_sosial.'" align="center">Sosial</td>
    </tr>
    <tr>';

while ($d_kriteria_spiritual = mysqli_fetch_array($q_kriteria_spiritual)) { 
        $data_penilaian_spiritual = [
          'no_kd' => $d_kriteria_spiritual['no_kd'],
          'id_kp' => $d_kriteria_spiritual['id_kp'],
        ];
        array_push($tampung_id_kriteria_penilaian_spiritual, $data_penilaian_spiritual);
        array_push($tampung_id_kriteria_penilaian, $data_penilaian_spiritual);
       
        $html .='<td>'.$d_kriteria_spiritual['kode'].'</td>';
       }
while ($d_kriteria_sosial = mysqli_fetch_array($q_kriteria_sosial)) { 


        $data_penilaian_sosial = [
          'no_kd' => $d_kriteria_sosial['no_kd'],
          'id_kp' => $d_kriteria_sosial['id_kp'],
        ];
        array_push($tampung_id_kriteria_penilaian, $data_penilaian_sosial);
        array_push($tampung_id_kriteria_penilaian_sosial, $data_penilaian_sosial);
      
       $html .='<td>'.$d_kriteria_sosial['no_kd'].'</td>';
    } 
    $html .='</tr>
    </thead>';




$q_siswa = mysqli_query($conn, "SELECT ks.*, s.nama_siswa, s.nis, s.nisn from kelas_siswa ks
left join siswa s on ks.id_siswa = s.id_siswa where ks.id_kelas='$id'  and ks.id_ta='$id_ta' order by s.nama_siswa asc");
  while ($data=mysqli_fetch_array($q_siswa))
  { 
    $id_siswa = $data['id_siswa'];
  
    $html .= '<tr>
      <td>'.$no++.'</td>
    <td>'.$data['nis'].'</td>
    <td>'.$data['nama_siswa'].'</td>';
    foreach ($tampung_id_kriteria_penilaian as $v) { 
      $id_kp = $v['id_kp'];
          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta'and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
          $dnilai = mysqli_fetch_array($qnilai);
          $nilai = $dnilai['nilai'];
         
      $html .='<td>'.$nilai.'</td>';
    } 
  }



































$html .= '
</table>';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('Laporan Data Penilaian Kelas '.$d1['tingkat'].' - '.$d1['nama_kelas'].' Tahun Ajaran '.$dta['nama_ta'].'.pdf', ['Attachment'=>0]);

?>
<p style="font-size: "></p>

