<?php 
if (isset($_GET['id_ta'])) {
  $id_ta = $_GET['id_ta'];
  $semester = $_GET['semester'];
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where id_ta='$id_ta' and semester='$semester'");
  # code...
}else{
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where status_ta='Aktif'");
}


          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];
          $semester = $dta['semester'];

if (isset($_GET['id_kelas'])) {
  $id_kelas = $_GET['id_kelas'];
  $where ="where 
  p.id_kelas='$id_kelas'
  and p.id_ta='$id_ta'
  and p.semester='$semester'
  ";
  $id_kelas_print = '&id_kelas='.$id_kelas;
}else{
   $where ="where 
  p.id_ta='$id_ta'
  and p.semester='$semester'
  ";
  $id_kelas_print = '';
}
?>
<div class="box-header with-border">
  <h3 class="box-title">
    Data Kelas <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>
  </h3>
  <div class="pull-right">
    <a href="form/pelanggaran/print_pelanggaran.php?id_ta=<?php echo $id_ta ?>&semester=<?php echo $semester ?><?php echo $id_kelas_print ?>" class=" btn btn-info btn-sm" target="_blank">Print</a>
    <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#filter_ta">Filter Berdasarkan Tahun Ajaran</a>
    <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#filter_kelas">Filter Berdasarkan kelas</a>
    <?php if ($_SESSION['level']=='Admin') { ?>
    <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#pelanggaranbaru">Pelanggaran Baru</a>
  <?php } ?>
  </div>
  
</div>




<form action="" method="get"  enctype="multipart/form-data">
<div class="modal fade" id="filter_ta">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Filter</h4>
              </div>
              <div class="modal-body">
                <input type="hidden" name="a" value="pelanggaran">
              <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <select name="id_ta" class="form-control">
                    <?php
                      $q_cari_ta = mysqli_query($conn, "SELECT * from tahun_ajaran group by id_ta order by id_ta asc");
                      while ($d_cari_ta = mysqli_fetch_array($q_cari_ta)) { ?>
                        <option value="<?php echo $d_cari_ta['id_ta'] ?>"><?php echo $d_cari_ta['nama_ta'] ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
              <div class="form-group">
                  <label>Semester</label>
                  <select name="semester" class="form-control">
                    <?php
                      $semester_ke = [1=>'Ganjil',2=>'Genap'];
                      foreach ($semester_ke as $k => $v) { ?>
                        <option value="<?php echo $k ?>"><?php echo $v ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
            
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Filter</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form> 


<form action="" method="get"  enctype="multipart/form-data">
<div class="modal fade" id="filter_kelas">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Filter Berdasarkan Kelas <br>Tahun Ajaran <?php echo $dta['nama_ta'] ?></h4>
              </div>
              <div class="modal-body">
                <input type="hidden" name="a" value="pelanggaran">
                <input type="hidden" name="id_ta" value="<?php echo $id_ta ?>">
                <input type="hidden" name="semester" value="<?php echo $semester ?>">
              <div class="form-group">
                  <label>Kelas</label>
                  <select name="id_kelas" class="form-control">
                    <?php
                      $q_cari_kelas = mysqli_query($conn, "SELECT * from kelas order by tingkat asc");
                      while ($d_cari_kelas = mysqli_fetch_array($q_cari_kelas)) { ?>
                        <option value="<?php echo $d_cari_kelas['id_kelas'] ?>"><?php echo $d_cari_kelas['nama_kelas'] ?></option>
                      <?php } ?>
                    
                  </select>
              </div>
                         
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Filter</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form> 




<form action="form/kelas/simpan_kelas.php" method="post"  enctype="multipart/form-data">
<div class="modal fade" id="pelanggaranbaru">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Pelanggaran</h4>
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
                    <a href="?a=pilih_siswa_melanggar&id=<?php echo $id ?>&id_ta=<?php echo $id_ta ?>&semester=<?php echo $semester ?>" class="btn btn-info btn-xs">Pilih</a>
                  </td>
                    </tr>

                    <?php } ?>
                        
                  </table>





              </div>
            
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>

<div class="clearfix"></div>



<?php



  
  $perintah="SELECT * From pelanggaran p
  left join kelas k on p.id_kelas=k.id_kelas
  left join siswa s on p.id_siswa = s.id_siswa
    $where
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
    
		<td>Tanggal Pelanggaran</td>
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
  <td><?php echo $data['kasus']; ?></td>
  <td><?php echo $data['tindak_lanjut']; ?></td>
	
	<td>
    <?php if ($_SESSION['level']=='Admin') { ?>
    <a href="" class=" btn btn-warning btn-xs"  data-toggle="modal" data-target="#input_pelanggaran_<?php echo $data['id_pelanggaran'] ?>">Edit</a>
    <a href="form/pelanggaran/hapus_pelanggaran.php?id=<?php echo $data['id_pelanggaran'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda akan menghapus pelanggaran.?')">Hapus</a> 
  <?php } ?>
	</td>


    <div class="modal fade" id="input_pelanggaran_<?php echo $data['id_pelanggaran'] ?>">
      <form action="form/pelanggaran/simpanedit_pelanggaran.php?id_pelanggaran=<?php echo $data['id_pelanggaran'] ?>" method="post"  enctype="multipart/form-data">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Pelanggaran siswa <br><?php echo  $data['nama_siswa']; ?></h4>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                      <input type="hidden" name="id_ta" value="<?php echo $id_ta ?>">
                      <input type="hidden" name="semester" value="<?php echo $semester ?>">
                      <input type="hidden" name="menu" value="<?php echo $menu ?>">
                      <input type="hidden" name="id_kelas" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label>Tanggal melakukan pelanggaran</label>
                        <input type="date" class="form-control" name="tgl"  value="<?php echo $data['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Kasus</label>
                        <textarea class="form-control" name="kasus" rows="5"><?php echo str_replace('<br />', '', $data['kasus']) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tindak Lanjut</label>
                        <textarea class="form-control" name="tl" rows="5"><?php echo str_replace('<br />', '', $data['tindak_lanjut']) ?></textarea>
                    </div>
                    
                    <div class="clearfix"></div>

                  
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan Pelanggaran</button>
                     
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