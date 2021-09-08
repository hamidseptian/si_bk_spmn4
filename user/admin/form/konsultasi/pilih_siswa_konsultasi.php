<?php

$id=$_GET['id'];

  $perintah="SELECT * From kelas where id_kelas='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $d1=mysqli_fetch_array($jalan);
  $no=1;
 $tingkat = $d1['tingkat'] -1;
 $tingkat_kelas = $d1['tingkat'];
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where status_ta='Aktif'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];

?>
<div class="box-header with-border">
  <h3 class="box-title">
    Pilih siswa yang melakukan konsultasi <br> Kelas <?php echo $d1['nama_kelas'] ?> <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>

  </h3>
<div class="pull-right">
      <!-- <a href="form/kelas/print_siswa_perkelas.php?id_kelas=<?php echo  $id ?>&id_ta=<?php echo $id_ta ?>" class=" btn btn-default btn-sm" target="_blank">Print Siswa Kelas <?php echo $d1['nama_kelas'] ?></a> -->
  
      <a href="?a=konsultasi" class="btn btn-info btn-sm"  >Kembali</a>
    </div>
  
</div>

<div class="clearfix"></div>



<?php



  
 
  $no=1;
?>
<div class="col-md-12">
  <div class="box-header with-border">
    <h3 class="box-title">
      Data Siswa 

    </h3>
   
    
  </div>

  <table class="table table-striped table-bordered" id="example1">
  	<thead>
  	<tr>
  		<td>No</td>
      <td>NIS</td>
      <td>NISN</td>
      <td>Nama</td>
  		<td>Option</td>
  	</tr>
  </thead>
  	

  <?php
$q_siswa = mysqli_query($conn, "SELECT ks.*, s.nama_siswa, s.nis, s.nisn from kelas_siswa ks
left join siswa s on ks.id_siswa = s.id_siswa where ks.id_kelas='$id'  and ks.id_ta='$id_ta' order by s.nama_siswa asc");
  while ($data=mysqli_fetch_array($q_siswa))
  { 

  ?>
  	<tr>
  		<td><?php echo $no++; ?></td>
  	

  		
    
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nisn']; ?></td>
    <td><?php echo $data['nama_siswa']; ?></td>
   
  	
  	<td>
      
      <a href="" class=" btn btn-info btn-xs"  data-toggle="modal" data-target="#input_konsultasi_<?php echo $data['id_siswa'] ?>">Input konsultasi</a>
  	</td>

    <div class="modal fade" id="input_konsultasi_<?php echo $data['id_siswa'] ?>">
      <form action="form/konsultasi/simpan_konsultasi.php" method="post"  enctype="multipart/form-data">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">konsultasi siswa <br><?php echo  $data['nama_siswa']; ?></h4>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                      <input type="hidden" name="id_ta" value="<?php echo $id_ta ?>">
                      <input type="hidden" name="semester" value="<?php echo $semester ?>">
                      <input type="hidden" name="menu" value="<?php echo $menu ?>">
                      <input type="hidden" name="id_kelas" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label>Tanggal melakukan konsultasi</label>
                        <input type="date" class="form-control" name="tgl" value="<?php echo date('Y-m-d') ?>">
                    </div>
                    <div class="form-group">
                        <label>Konsultasi siswa</label>
                        <textarea class="form-control" name="konsultasi" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tindak Lanjut</label>
                        <textarea class="form-control" name="tl" rows="5"></textarea>
                    </div>
                    
                    <div class="clearfix"></div>

                  
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan konsultasi</button>
                     
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
      </form>
              </div>
  		</tr>

  		<?php } ?>
  				
  	</table>
</div>