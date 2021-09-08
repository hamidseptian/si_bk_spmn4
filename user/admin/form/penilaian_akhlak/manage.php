<?php

$id=$_GET['id_kelas'];
$id_kelas = $id;
$id_ta_terpilih=$_GET['id_ta'];
$semester=$_GET['semester'];
$menu=$_GET['menu'];

  $perintah="SELECT * From kelas where id_kelas='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $d1=mysqli_fetch_array($jalan);
  $no=1;
 $tingkat = $d1['tingkat'] -1;
 $tingkat_kelas = $d1['tingkat'];
 $qta = mysqli_query($conn, "SELECT * from tahun_ajaran where id_ta='$id_ta_terpilih' and semester='$semester'");
          $jta = mysqli_num_rows ($qta);
          $dta = mysqli_fetch_array($qta);
          $id_ta = $dta['id_ta'];

?>
<div class="box-header with-border">
  <h3 class="box-title">
    Manajemen Penilaian Akhlak Kelas <?php echo $d1['nama_kelas'] ?> <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>

  </h3>
<div class="pull-right">
  <a href="form/penilaian_akhlak/print_penilaian.php?id_kelas=<?php echo $id_kelas ?>&id_ta=<?php echo $id_ta_terpilih; ?>&semester=<?php echo $semester ?>" class="btn btn-info btn-sm" target="_blank">Print</a>
  <a href="?a=<?php echo $menu ?>&id_ta=<?php echo $id_ta_terpilih ?>" class="btn btn-info btn-sm">Kembali</a>
    </div>
  
</div>

<div class="clearfix"></div>



<?php



 $q_kriteria_spiritual = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Spiritual'");
 $j_kriteria_spiritual = mysqli_num_rows($q_kriteria_spiritual); 
 $q_kriteria_sosial = mysqli_query($conn, "SELECT * from kriteria_penilaian where kategori='Sosial'");
 $j_kriteria_sosial = mysqli_num_rows($q_kriteria_sosial); 
 $tampung_id_kriteria_penilaian = [];
 $tampung_id_kriteria_penilaian_sosial = [];
 $tampung_id_kriteria_penilaian_spiritual = [];
  $no=1;
?>
<div class="col-md-12">
  <table class="table table-striped table-bordered" id="example1">
  	<thead>
  	<tr>
  		<td rowspan="2">No</td>
      <td rowspan="2">NIS</td>
      <td rowspan="2">NISN</td>
      <td rowspan="2">Nama</td>
      <td colspan="<?php echo $j_kriteria_spiritual ?>">Spiritual</td>
      <td colspan="<?php echo $j_kriteria_sosial ?>">Sosial</td>
  		<td rowspan="2">Option</td>
  	</tr>
    <tr>
      <?php while ($d_kriteria_spiritual = mysqli_fetch_array($q_kriteria_spiritual)) { 
        $data_penilaian_spiritual = [
          'no_kd' => $d_kriteria_spiritual['no_kd'],
          'id_kp' => $d_kriteria_spiritual['id_kp'],
        ];
        array_push($tampung_id_kriteria_penilaian_spiritual, $data_penilaian_spiritual);
        array_push($tampung_id_kriteria_penilaian, $data_penilaian_spiritual);
        ?>
        <td><?php echo $d_kriteria_spiritual['kode'] ?></td>
      <?php } ?>
      <?php while ($d_kriteria_sosial = mysqli_fetch_array($q_kriteria_sosial)) { 


        $data_penilaian_sosial = [
          'no_kd' => $d_kriteria_sosial['no_kd'],
          'id_kp' => $d_kriteria_sosial['id_kp'],
        ];
        array_push($tampung_id_kriteria_penilaian, $data_penilaian_sosial);
        array_push($tampung_id_kriteria_penilaian_sosial, $data_penilaian_sosial);
        ?>
        <td><?php echo $d_kriteria_sosial['no_kd'] ?></td>
      <?php } ?>
    </tr>
  </thead>
  	

  <?php
$q_siswa = mysqli_query($conn, "SELECT ks.*, s.nama_siswa, s.nis, s.nisn from kelas_siswa ks
left join siswa s on ks.id_siswa = s.id_siswa where ks.id_kelas='$id'  and ks.id_ta='$id_ta' order by s.nama_siswa asc");
  while ($data=mysqli_fetch_array($q_siswa))
  { 
    $id_siswa = $data['id_siswa'];
  ?>
  	<tr>
  		<td><?php echo $no++; ?></td>
  	

  		
    
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nisn']; ?></td>
    <td><?php echo $data['nama_siswa']; ?></td>
    <?php foreach ($tampung_id_kriteria_penilaian as $v) { 
      $id_kp = $v['id_kp'];
          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta'and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
          $dnilai = mysqli_fetch_array($qnilai);
          $nilai = $dnilai['nilai'];
          ?>
      <td><?php echo $nilai ?></td>
    <?php } ?>

   
  	
  	<td>
      <?php if ($_SESSION['level']=='Admin') { ?>
        <a href="" class=" btn btn-info btn-xs"  data-toggle="modal" data-target="#input_nilai_<?php echo $data['id_siswa'] ?>">Input Nilai</a>
      <?php } ?>
  	</td>


      
      <div class="modal fade" id="input_nilai_<?php echo $data['id_siswa'] ?>">
      <form action="form/penilaian_akhlak/simpan_nilai.php" method="post"  enctype="multipart/form-data">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Penilaian aklak siswa <br><?php echo  $data['nama_siswa']; ?></h4>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                      <input type="hidden" name="id_ta" value="<?php echo $id_ta ?>">
                      <input type="hidden" name="semester" value="<?php echo $semester ?>">
                      <input type="hidden" name="menu" value="<?php echo $menu ?>">
                      <input type="hidden" name="id_kelas" value="<?php echo $id ?>">
                    <div class="col-md-6">
                        <h4>Spiritual</h4>
                         <?php foreach ($tampung_id_kriteria_penilaian_spiritual as $v) {
                          $id_kp = $v['id_kp'];
                          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta'and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
                          $dnilai = mysqli_fetch_array($qnilai);
                          $nilai = $dnilai['nilai'];
                           ?>
                           <div class="form-group">
                              <label><?php echo $v['no_kd'] ?></label>
                              <input type="hidden" name="id_kp[]" class="form-control" value="<?php echo $v['id_kp'] ?>">
                              <input type="number"  name="nilai[]" class="form-control" value="<?php echo $nilai ?>">
                           </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <h4>Sosial</h4>
                         <?php foreach ($tampung_id_kriteria_penilaian_sosial as $v) { 
                            $id_kp = $v['id_kp'];
                          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta'and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
                          $dnilai = mysqli_fetch_array($qnilai);
                          $nilai = $dnilai['nilai'];
                           ?>
                           <div class="form-group">
                              <label><?php echo $v['no_kd'] ?></label>
                              <input type="hidden" name="id_kp[]" class="form-control" value="<?php echo $v['id_kp'] ?>">
                              <input type="number"  name="nilai[]" class="form-control" value="<?php echo $nilai ?>">
                           </div>
                        <?php } ?>
                    </div>
                    <div class="clearfix"></div>

                  
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan Nilai</button>
                     
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