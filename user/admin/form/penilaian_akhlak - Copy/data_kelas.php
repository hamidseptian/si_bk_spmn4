<?php 
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where status_ta='Aktif'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];

if ($jta==0) { ?>


<div class="alert alert-info">
  <p >
    Data Kelas Terkunci karena tidak ada tahun ajaran aktif. <br>Data kelas akan terbuka jika ada tahun ajaran aktif <br>
    Silahkan tambahkan dulu tahun ajaran di menu Tahun Ajaran
  </p>
  
  
</div>
<?php }else{
           ?>
<div class="box-header with-border">
  <h3 class="box-title">
    Data Kelas <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>
  </h3>
  <div class="pull-right">
  </div>
  
</div>

<div class="clearfix"></div>



<?php



  
  $perintah="SELECT * From kelas ";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="example1">
	<thead>
	<tr>
		<td>No</td>
    <td>Kelas</td>
    <td>Lokal</td>
    
    <td>Jumlah Siswa</td>
		
		<td>Option</td>
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
  $idkelas = $data['id_kelas'];


$qmapel = mysqli_query($conn, "SELECT * from kelas_siswa where id_kelas='$idkelas' and id_ta='$id_ta' and status_ks='Aktif'");
$jmapel = mysqli_num_rows($qmapel);

$id=$data['id_kelas'];
$kelas=$data['nama_kelas'];
;

?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
  
  <td><?php echo $data['tingkat']; ?></td>
  <td><?php echo $kelas; ?></td>
  <td>  <?php echo  $jmapel; ?></td>
	
	<td>
    <a href="?a=manage_nilai&id_kelas=<?php echo $id ?>&id_ta=<?php echo $id_ta ?>&semester=<?php echo $dta['semester'] ?>&menu=penilaian_akhlak" class="btn btn-info btn-xs">Lihat Penilaian</a> 
   
	</td>
		</tr>

		<?php } ?>
				
	</table>
<?php } ?>