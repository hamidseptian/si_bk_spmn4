<?php 
$id_siswa = $_SESSION['id_user'];
$nama_semester = [1=>'Ganjil','Genap'];
if (isset($_GET['id_ta'])) {
  $id_ta = $_GET['id_ta'];
  $semester = $_GET['semester'];
$where ="where 
  p.id_siswa='$id_siswa' and p.id_ta='$id_ta' and p.semester='$semester'
  ";
  $where_ks = "where ks.id_siswa='$id_siswa' and ks.id_ta='$id_ta' and ta.semester='$semester'";

}else{
  $id_ta = '';
   $semester = '';
$where ="where 
  p.id_siswa='$id_siswa'
  ";
  $where_ks = "where ks.id_siswa='$id_siswa'";
}

?>


<div class="box-header with-border">
  <h3 class="box-title">
    Penilaian Akhlak
  </h3>
   <div class="pull-right">
    <a href="form/laporan/print_laporan_gabungan.php?id_ta=<?php echo $id_ta ?>&semester=<?php echo $semester ?>&id_siswa=<?php echo $_SESSION['id_user'] ?>" class=" btn btn-default btn-sm" target="_blank">Print</a>
    <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#filter_ta">Filter Berdasarkan Tahun Ajaran</a>
   
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
                <input type="hidden" name="a" value="laporan_gabungan">
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
  <table class="table table-striped table-bordered" id="example1">
    <thead>
    <tr>
      <td rowspan="2">No</td>
      <td rowspan="2">Tahun Ajaran</td>
      <td rowspan="2">Kelas </td>
      <td rowspan="2">Semester</td>
      <td colspan="<?php echo $j_kriteria_spiritual ?>">Spiritual</td>
      <td colspan="<?php echo $j_kriteria_sosial ?>">Sosial</td>
      <td rowspan="2">Total</td>
      <td rowspan="2">Rata Rata</td>
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
        <td><?php echo $d_kriteria_sosial['kode'] ?></td>
      <?php } ?>
    </tr>
  </thead>
    

  <?php
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
  ?>
    <tr>
      <td><?php echo $no++; ?></td>
    

      
    
    <td><?php echo $data['nama_ta']; ?></td>
    <td><?php echo $data['tingkat'].' - '.$data['nama_kelas']; ?></td>
    <td><?php echo $nama_semester[$data['semester']]; ?></td>
    <?php 
    $total = 0;
    $pembagi = count($tampung_id_kriteria_penilaian );
    foreach ($tampung_id_kriteria_penilaian as $v) { 
      $id_kp = $v['id_kp'];
          $qnilai = mysqli_query($conn, "SELECT * from nilai where id_kelas='$id_kelas' and id_ta='$id_ta' and id_kp='$id_kp' and id_siswa='$id_siswa' and semester='$semester'");
          $dnilai = mysqli_fetch_array($qnilai);
          $nilai = $dnilai['nilai'];
          $total+=$nilai;
          ?>
      <td><?php echo $nilai ?></td>
    <?php } ?>

      <td><?php echo $total ?></td>
      <td><?php echo round(($total / $pembagi),2) ?></td>
      </tr>

      <?php } ?>
          
    </table>


<hr>
<div class="box-header with-border">
  <h3 class="box-title">
    Pelanggaran yang pernah dilakukan
  </h3>
 
  
</div>






<div class="clearfix"></div>



<?php



  
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
?>
<table class="table table-striped table-bordered" id="example3">
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
</thead>
	

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
  
?>
	<tr>
		<td><?php echo $no++; ?></td>
	

		
  
  <td><?php echo $data['tingkat'].' - '.$data['nama_kelas']; ?></td>
  <td><?php echo $data['nama_ta']; ?></td>
  <td><?php echo $nama_semester[$data['semester']]; ?></td>
  <td><?php echo $data['tanggal']; ?></td>
  <td><?php echo $data['kasus']; ?></td>
  <td><?php echo $data['tindak_lanjut']; ?></td>
	
	


    
		</tr>

		<?php } ?>
				
	</table>

<hr>

<div class="box-header with-border">
  <h3 class="box-title">
    Prestasi yang pernah didapatkan
  </h3>
  <div class="pull-right">
   
   
  </div>
  
</div>




<div class="clearfix"></div>



<?php



  

  
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
?>
<table class="table table-striped table-bordered" id="example3">
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
</thead>
  

<?php

while ($data=mysqli_fetch_array($jalan))
{ 
  
?>
  <tr>
    <td><?php echo $no++; ?></td>
  

    
  
  <td><?php echo $data['tingkat_kelas'].' - '.$data['nama_kelas']; ?></td>
  <td><?php echo $data['nama_ta']; ?></td>
  <td><?php echo $nama_semester[$data['semester']]; ?></td>
  <td><?php echo $data['kegiatan']; ?></td>
  <td><?php echo $data['tanggal']; ?></td>
  <td><?php echo $data['tingkat']; ?></td>
  <td><?php echo $data['prestasi']; ?></td>
  
    </tr>

    <?php } ?>
        
  </table>

  <hr>
