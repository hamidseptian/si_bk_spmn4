<div class="box-header with-border">
  <h3 class="box-title">
    Data Pendidik Dan Tenaga Kependidikan
  </h3>
  <div class="pull-right">
    <a href="form/guru/print_guru.php" class=" btn btn-info btn-sm" target="_blank">Print Data Guru</a>
    <a href="?a=tambah_guru" class=" btn btn-info btn-sm" >Tambah Data</a>
  </div>
  
</div>



<?php


  
  $perintah="SELECT * From guru";
  $jalan=mysqli_query($conn, $perintah)or die(mysqli_error());

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabelscrol" border="1">
	<thead>
	<tr>
    <td>No</td>
    <td>Nama</td>
    <td>NUguru</td>
    <td>JK</td>
    <td>Tempat Lahir</td>
    <td>Tanggal Lahir</td>
    <td>NIP</td>
    <td>Status Kepegawaian</td>
    <td>Jenis guru</td>
    <td>Gelar Depan</td>
    <td>Gelar Belakang </td>
    <td>Jenjang Pendidikan</td>
    <td>Jurusan</td>
    <td>Sertifikasi</td>
    <td>TMT Kerja</td>
    <td>Tugas Tambahan</td>
    <td>Option</td>
  </tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 




?>
	<tr>
		<td><?php echo $no++; ?></td>
    <td><?php echo $data['nama_ptk'] ?></td>
    <td><?php echo $data['nuptk'] ?></td>
    <td><?php echo $data['jk'] ?></td>
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
	<td>
    <a href="?a=edit_guru&id=<?php echo $data['id_ptk'] ?>" class="btn btn-warning btn-xs">Edit</a> 
    <a href="form/guru/hapus_guru.php?id=<?php echo $data['id_ptk'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Hapus data guru  atas nama <?php echo $data['nama_guru'] ?>.?')">Hapus</a> 
	</td>
		</tr>



		<?php } ?>
				
	</table>
