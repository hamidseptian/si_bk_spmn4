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
    Penilaian Akhlak Siswa <br>
    Tahun Ajaran <?php echo $dta['nama_ta'] ?>
  </h3>
  <div class="pull-right">
     <a href="" class=" btn btn-info btn-sm"  data-toggle="modal" data-target="#addkelas">Filter</a>
  </div>
 
<form action="" method="get"  enctype="multipart/form-data">
<div class="modal fade" id="addkelas">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Filter</h4>
              </div>
              <div class="modal-body">
                <input type="hidden" name="a" value="penilaian_akhlak">
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


$qmapel = mysqli_query($conn, "SELECT * from kelas_siswa where id_kelas='$idkelas' and id_ta='$id_ta'");
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