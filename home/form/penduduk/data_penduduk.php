<div class="box-header with-border">
  <h3 class="box-title">
    Data Penduduk
  </h3>
  <div class="pull-right">
  	<a href="?a=tambah_penduduk" class="btn btn-info btn-sm">Tambah Data Penduduk</a>
  </div>
  
</div>



<?php



  
  $perintah="SELECT * From penduduk";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="tabelscrol">
	<thead>
	<tr>
		<td>No</td>
	    <td>NIK</td>
	    <td>Nama</td>
	    <td>Alamat</td>
	    <td>Agama</td>
	    <td>Status Perkawinan</td>
	    <td>Pekerjaan</td>
	    <td>Kewarganegaraan</td>
	    <td>Berlaku Hingga</td>
		
		<td>Option</td>
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 


?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nik'] ?></td>
		<td><?php echo $data['nama'] ?></td>
		<td>
			<?php echo $data['alamat'] ?><br>
			RT : <?php echo $data['rt'] ?><br>
			RW : <?php echo $data['rw'] ?><br>
			Kelurahan : <?php echo $data['kelurahan'] ?><br>
			Kecamatan : <?php echo $data['kecamatan'] ?><br>
			
		</td>
		<td><?php echo $data['agama'] ?></td>
		<td><?php echo $data['status_perkawinan'] ?></td>
		<td><?php echo $data['pekerjaan'] ?></td>
		<td><?php echo $data['kewarganegaraan'] ?></td>
		<td><?php echo $data['berlaku_hingga'] ?></td>
	
	<td>
    <a href="?a=edit_penduduk&id=<?php echo $data['id_penduduk'] ?>" class="btn btn-info btn-xs">Edit</a> 
    <a href="form/penduduk/hapus_penduduk.php?id=<?php echo $data['id_penduduk'] ?>" class="btn btn-danger btn-xs">Hapus</a> 
    
	</td>
		</tr>

		<?php } ?>
				
	</table>
