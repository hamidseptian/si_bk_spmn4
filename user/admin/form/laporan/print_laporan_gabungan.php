<?php

include "../../../../assets/koneksi.php";
require_once("../../../../assets/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
session_start();
$id_siswa = $_SESSION['id_user'];
  $q = mysqli_query($conn, "SELECT * from siswa   where id_siswa='$id_siswa'");
$d = mysqli_fetch_array($q);
$d1 = $d;
$nama_semester = [1=>'Ganjil','Genap'];
if ($_GET['id_ta']!='') {
  $id_ta = $_GET['id_ta'];
  $semester = $_GET['semester'];
$where ="where 
  p.id_siswa='$id_siswa' and p.id_ta='$id_ta' and p.semester='$semester'
  ";
  $where_ks = "where ks.id_siswa='$id_siswa' and ks.id_ta='$id_ta' and ta.semester='$semester'";

}else{
$where ="where 
  p.id_siswa='$id_siswa'
  ";
  $where_ks = "where ks.id_siswa='$id_siswa'";
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
Laporan Gabungan
</center>
<br>
 
      
      <br>          
              
';


$html.='



    <div style="width:50%; float:left">
      <table  style=" font-size:11px;border-collapse: collapse; width: 100%;">
        <tr>
          <td width="85px">Nama</td>
          <td width="10px">:</td>
          <td>'.$d1['nama_siswa'].'</td>
        </tr>
        <tr>
          <td>NIS</td>
          <td>:</td>
          <td>'.$d1['nis'].'</td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>:</td>
          <td>'.$d1['nisn'].'</td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>'.$d1['tmpl'].'</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td>'.$d1['tgll'].'</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>'.$d1['jk'].'</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>'.$d1['agama'].'</td>
        </tr>
      
       
      </table>
    </div>
    <div style="width:50%; float:left">
      <table  style=" font-size:11px;border-collapse: collapse; width: 100%;">
        <tr>
          <td width="85px">Alamat</td>
          <td width="10px">:</td>
          <td>'.$d1['alamat'].'</td>
        </tr>
        <tr>
          <td>No HP</td>
          <td>:</td>
          <td>'.$d1['no_telp'].'</td>
        </tr>
        <tr>
          <td>Nama Ayah</td>
          <td>:</td>
          <td>'.$d1['nama_ayah'].'</td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>:</td>
          <td>'.$d1['nama_ibu'].'</td>
        </tr>
        <tr>
          <td>Pekerjaan Ayah</td>
          <td>:</td>
          <td>'.$d1['kerja_ayah'].'</td>
        </tr>
        <tr>
          <td>Pekerjaan Ibu</td>
          <td>:</td>
          <td>'.$d1['kerja_ibu'].'</td>
        </tr>
      </table>
    </div>
    <div style="clear:both"></div>
    
    
<br>';

  
               
// ';
// $html .= '
// </table>';



$html .='<p style="font-size:12px">Penilaian Akhlak</p>';





 $q_kriteria_spiritual = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Spiritual'");
 $j_kriteria_spiritual = mysqli_num_rows($q_kriteria_spiritual); 
 $q_kriteria_sosial = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Sosial'");
 $j_kriteria_sosial = mysqli_num_rows($q_kriteria_sosial); 
 $tampung_id_kriteria_penilaian = [];
 $tampung_id_kriteria_penilaian_sosial = [];
 $tampung_id_kriteria_penilaian_spiritual = [];
  $no=1;

  $html .=' <table  style=" font-size:11px;border-collapse: collapse; width: 100%;" border=1>
    <thead>
    <tr>
      <td rowspan="2">No</td>
      <td rowspan="2">Tahun Ajaran</td>
      <td rowspan="2">Kelas </td>
      <td rowspan="2">Semester</td>
      <td colspan="'.$j_kriteria_spiritual.'">Spiritual</td>
      <td colspan="'.$j_kriteria_sosial.'">Sosial</td>
      <td rowspan="2">Total</td>
      <td rowspan="2">Rata Rata</td>
    </tr>
    <tr>
    ';

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
       
        $html .='<td>'.$d_kriteria_sosial['kode'].'</td>';
      }
    $html .='</tr>
  </thead>';




$q_siswa = mysqli_query($conn, "SELECT ks.*, s.nama_siswa, s.nis, s.nisn,
  ta.nama_ta, ta.semester,
  k.nama_kelas, k.tingkat
 from kelas_siswa ks
  left join tahun_ajaran ta on ks.id_ta=ta.id_ta
  left join kelas k on ks.id_kelas = k.id_kelas
left join siswa s on ks.id_siswa = s.id_siswa 
$where_ks

order by ta.id_ta asc");
  while ($data=mysqli_fetch_array($q_siswa))
  { 
    $id_siswa = $data['id_siswa'];
    $id_kelas = $data['id_kelas'];
    $id_ta = $data['id_ta'];
    $semester = $data['semester'];
 
    $html .='<tr>
      <td>'.$no++.'</td>
    

      
    
    <td>'.$data['nama_ta'].'</td>
    <td>'.$data['tingkat'].' - '.$data['nama_kelas'].'</td>
    <td>'.$nama_semester[$data['semester']].'</td>';
    $total = 0;
    $pembagi = count($tampung_id_kriteria_penilaian );
    foreach ($tampung_id_kriteria_penilaian as $v) { 
      $id_kp = $v['id_kp'];
          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta' and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
          $dnilai = mysqli_fetch_array($qnilai);
          $nilai = $dnilai['nilai'];
          $total+=$nilai;
          
      $html .='<td>'.$nilai.'</td>';
    }
      $html .='<td>'.$total.'</td>
      <td>'.round(($total / $pembagi),2).'</td>
      </tr>';

      }
  $html .=' </table>
   ';




 $html .='<br><p style="font-size:12px">Pelanggaran yang pernah dilakukan</p>';


  $perintah="SELECT * From pelanggaran p
  left join kelas k on p.id_kelas=k.id_kelas
  left join siswa s on p.id_siswa = s.id_siswa
  left join tahun_ajaran ta on p.id_ta=ta.id_ta
    $where
    group by p.id_pelanggaran
  ";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;


$html .='<table  style=" font-size:11px;border-collapse: collapse; width: 100%;" border=1>
	<thead>
	<tr>
		<td>No</td>
		<td>Kelas</td>
		<td>Tahun Ajaran</td>
		<td>Semester</td>

		<td>Tanggal Pelanggaran</td>
		<td>Kasus</td>
		<td>Tindak Lanjut</td>
		
	</tr>
</thead>';
while ($data=mysqli_fetch_array($jalan))
{ 
  
	$html .='<tr>
	<td>'.$no++.'</td>
	<td>'.$data['tingkat'].' - '.$data['nama_kelas'].'</td>
	<td>'.$data['nama_ta'].'</td>
	<td>'.$nama_semester[$data['semester']].'</td>
	<td>'.$data['tanggal'].'</td>
	<td>'.$data['kasus'].'</td>
	<td>'.$data['tindak_lanjut'].'</td>
	
	


    
		</tr>';

		}
				
	$html.='</table>

';

 $html .='<br><p style="font-size:12px">Prestasi yang pernah di dapat</p>';


  
  $perintah="SELECT p.*, k.nama_kelas, k.tingkat as tingkat_kelas, s.nama_siswa, ta.nama_ta From prestasi p
  left join kelas k on p.id_kelas=k.id_kelas
  left join siswa s on p.id_siswa = s.id_siswa
  left join tahun_ajaran ta on p.id_ta=ta.id_ta
  $where
  group by p.id_prestasi
  ";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
$html .='<table  style=" font-size:11px;border-collapse: collapse; width: 100%;" border=1>
  <thead>
  <tr>
    <td>No</td>
    <td>Kelas</td>
    <td>Tahun Ajaran</td>
    <td>Semester</td>
    
    <td>Kegiatan</td>
    <td>Tanggal Pelaksanaan</td>
    <td>Tingkat</td>
    <td>Prestasi</td>
    
  </tr>
</thead>';
while ($data=mysqli_fetch_array($jalan))
{ 
  $html .='<tr>
    <td>'.$no++.'</td>
  

    
  
  <td>'.$data['tingkat_kelas'].' - '.$data['nama_kelas'].'</td>
  <td>'.$data['nama_ta'].'</td>
  <td>'.$nama_semester[$data['semester']].'</td>
  <td>'.$data['kegiatan'].'</td>
  <td>'.$data['tanggal'].'</td>
  <td>'.$data['tingkat'].'</td>
  <td>'.$data['prestasi'].'</td>
  
    </tr>';
}
  $html .='</table>';




















$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('Laporan Data Gabungan Siswa.pdf', ['Attachment'=>0]);

?>
<p style="font-size: "></p>

