<?php 
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where status_ta='Aktif'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];
          $semester = $dta['semester'];

?>
<div class="box-header with-border">
  <h3 class="box-title">
    Data Konsultasi <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>
  </h3>
  <div class="pull-right">
    <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#addkelas">Konsultasi Baru</a>
  </div>
  
</div>

<form action="form/kelas/simpan_kelas.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="addkelas">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah konsultasi</h4>
              </div>
              <div class="modal-body">

              <div class="form-group">
                  <label>Pilih Kelas</label>
                 
              </div>
              <div class="form-group">
                <?php
                  $perintah="SELECT * From kelas ";
                  $jalan=mysqli_query($conn, $perintah);
                  $total = mysqli_num_rows($jalan);
                  $no=1;
                ?>
                <table class="table table-striped table-bordered" id="example1" width="100%">
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
                    <a href="?a=pilih_siswa_konsultasi&id=<?php echo $id ?>&id_ta=<?php echo $id_ta ?>&semester=<?php echo $semester ?>" class="btn btn-info btn-xs">Pilih</a>
                  </td>
                    </tr>

                    <?php } ?>
                        
                  </table>





              </div>
            
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Kelas</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<div class="clearfix"></div>



<?php



  
  $perintah="SELECT * From konsultasi p
  left join kelas k on p.id_kelas=k.id_kelas
  left join siswa s on p.id_siswa = s.id_siswa
  ";
  $jalan=mysqli_query($conn, $perintah);

  $total = mysqli_num_rows($jalan);
  $no=1;
?>
<table class="table table-striped table-bordered" id="example3">
	<thead>
	<tr>
		<td>No</td>
    <td>Kelas</td>
    <td>Siswa</td>
    
		<td>Tanggal konsultasi</td>
    <td>Kasus</td>
    <td>Tindak Lanjut</td>
		
		<td>Option</td>
	</tr>
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
  
?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
  
  <td><?php echo $data['tingkat'].' - '.$data['nama_kelas']; ?></td>
  <td><?php echo $data['nama_siswa']; ?></td>
  <td><?php echo $data['tanggal']; ?></td>
  <td><?php echo $data['konsultasi']; ?></td>
  <td><?php echo $data['tindak_lanjut']; ?></td>
	
	<td>
    <a href="" class=" btn btn-warning btn-xs"  data-toggle="modal" data-target="#input_konsultasi_<?php echo $data['id_konsultasi'] ?>">Edit</a>
    <a href="form/konsultasi/hapus_konsultasi.php?id=<?php echo $data['id_konsultasi'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda akan menghapus konsultasi.?')">Hapus</a> 
	</td>


    <div class="modal fade" id="input_konsultasi_<?php echo $data['id_konsultasi'] ?>">
      <form action="form/konsultasi/simpanedit_konsultasi.php?id_konsultasi=<?php echo $data['id_konsultasi'] ?>" method="post"  enctype="multipart/form-data">
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
                        <input type="date" class="form-control" name="tgl"  value="<?php echo $data['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Kasus</label>
                        <textarea class="form-control" name="konsultasi" rows="5"><?php echo str_replace('<br />', '', $data['konsultasi']) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tindak Lanjut</label>
                        <textarea class="form-control" name="tl" rows="5"><?php echo str_replace('<br />', '', $data['tindak_lanjut']) ?></textarea>
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