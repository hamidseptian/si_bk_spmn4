
<?php
session_start();
include "../../../koneksi.php";
require_once("../../../../library/dompdf/src/Autoloader.php");
Dompdf\Autoloader::register();
use Dompdf\Dompdf;


  
  $perintah="SELECT * From guru join mapel on mapel.id_mapel=guru.id_mapel";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $total = mysqli_num_rows($jalan);
  $no=1;
$html = '
<table  style="border-collapse: collapse; font-size:10px" border="1">
  <thead>
  <tr>
    <td rowspan="2">No</td>
    <td rowspan="2" width="200px">Nama / NIP/ Tempat Tgl Lahir</td>
    <td colspan="2">Pangkat</td>
    <td colspan="2">Jabatan Terakhir</td>
    <td rowspan="2">Masa Kerja</td>
    <td colspan="4">Diklat</td>
    <td colspan="4">Pendidikan Umum</td>
    
    <td rowspan="2">Mata Pelajaran</td>

  </tr>
  <tr>
    <td>Gol</td>
    <td>TMT</td>
    <td>Nama Jabatan</td>
    <td>TMT</td>
    <td>Nama</td>
    <td>Bln</td>
    <td>Tahun</td>
    <td>Jlm Jam</td>
    <td>Jurusan</td>
    <td>Nama Sekolah</td>
    <td>Tahun Lulus</td>
    <td>Tingkat Ijazah</td>
  </tr>
</thead>
';

while ($data=mysqli_fetch_array($jalan))
{ 
$id=$data['id_guru'];
$html .='

  <tr>
    <td>'.$no++.'</td>
  
    <td>
      '.$data['nama_guru'].'<br> 
      '.$data['nip'].'<br> 
      '.$data['tmpl_guru'].' / '.$data['tgll_guru'].'      
    </td>
     <td>dd'.$data['pangkat_gol'].'</td>
     <td>'.$data['pangkat_tmt'].'</td>
     <td>'.$data['jabatan'].'</td>
     <td>'.$data['tmt_jabatan'].'</td>
     <td>'.$data['masa_kerja'].'</td>

     <td>'.$data['diklat_nama'].'</td>
     <td>'.$data['diklat_bln'].'</td>
     <td>'.$data['diklat_thn'].'</td>
     <td>'.$data['diklat_jml_jam'].'</td>


     
     <td>'.$data['jurusan'].'</td>
     <td>'.$data['asal_pendidikan'].'</td>
     <td>'.$data['tahun_lulus'].'</td>
     <td>'.$data['pendidikan'].'</td>    
     <td>'.$data['nama_mapel'].'</td>    
  
    </tr>
    ';

 }
 $html .='
        
  </table>


';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream('laporan_.pdf', ['Attachment'=>0]);

?>
