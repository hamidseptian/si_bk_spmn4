
<?php 
include "../../../../koneksi.php";
$q = mysqli_query($conn, "SELECT * from ptk");
$no=1;
 ?>
<br>
<h4>Data Pendidik Dan Tenaga Kependidikan <br>
SMAN 5 Pariaman <br>
Kecamatan Kec. Pariaman Timur, Kabupaten Kota Pariaman, Provinsi Prov. Sumatera Barat</h4>


<table class="table table-striped table-bordered" id="tabelscrol" border="1" style="border-collapse: collapse; font-size:11px">
  <thead>
  <tr>
    <td align="center" rowspan="2">No</td>
    <td align="center" rowspan="2">Nama</td>
    <td align="center" rowspan="2">NUPTK</td>
    <td align="center" rowspan="2">JK</td>
    <td align="center" rowspan="2">Tempat Lahir</td>
    <td align="center" rowspan="2">Tanggal Lahir</td>
    <td align="center" rowspan="2">NIP</td>
    <td align="center" rowspan="2">Status Kepegawaian</td>
    <td align="center" rowspan="2">Jenis PTK</td>
    <td align="center" colspan="7">Keterangan</td>
    
  </tr>
  <tr>
    
    <td align="center">Gelar Depan</td>
    <td align="center">Gelar Belakang </td>
    <td align="center">Jenjang Pendidikan</td>
    <td align="center">Jurusan</td>
    <td align="center">Sertifikasi</td>
    <td align="center">TMT Kerja</td>
    <td align="center">Tugas Tambahan</td>
  </tr>
</thead>
  

<?php

while ($data=mysqli_fetch_array($q))
{ 

?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama_ptk'] ?></td>
    <td><?php echo $data['nuptk'] ?></td>
    <td align="center"><?php echo $data['jk'] ?></td>
    <td><?php echo $data['tmpl'] ?></td>
    <td><?php echo $data['tgll'] ?></td>
    <td><?php echo $data['nip'] ?></td>
    <td><?php echo $data['status_pegawai'] ?></td>
    <td><?php echo $data['jenis_ptk'] ?></td>
    <td><?php echo $data['gelar_depan'] ?></td>
    <td><?php echo $data['gelar_belakang'] ?></td>
    <td><?php echo $data['jenjang_pendidikan'] ?></td>
    <td><?php echo $data['jurusan'] ?></td>
    <td><?php echo $data['sertifikasi'] ?></td>
    <td><?php echo $data['tmt_kerja'] ?></td>


    <td><?php echo $data['tugas_tambahan'] ?></td>


    </tr>



    <?php } ?>
        
  </table>

    <script type="text/javascript">
      window.print();
    </script>