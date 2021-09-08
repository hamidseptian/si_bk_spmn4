<?php

$id=$_GET['id'];
$status_siswa=$_GET['status'];

  $perintah="SELECT * From siswa where id_siswa='$id'";
  $jalan=mysqli_query($conn, $perintah);
  $d1=mysqli_fetch_array($jalan);
  $no=1;

$qta = mysqli_query($conn, "SELECT * from tahun_ajaran where status_ta='Aktif'");
$dta = mysqli_fetch_array($qta);
$jta = mysqli_num_rows($qta);


?>
<div class="box-header with-border">
  <h3 class="box-title">
   Detail Siswa 

  </h3>
<div class="pull-right">
      
    </div>
  
</div>


<div class="clearfix"></div>



<?php

$qkelas = mysqli_query($conn, "SELECT 
  a.status_ks, a.id_ks, a.id_siswa, 
  b.nama_ta, c.nama_kelas, c.tingkat,
  f.nama_kelas as next_kelas

  from kelas_siswa a 
  left join tahun_ajaran b on a.id_ta = b.id_ta
  left join kelas c on a.id_kelas = c.id_kelas
  left join kelas f on a.id_next_kelas = f.id_kelas
  where a.id_siswa = '$id' group by a.id_ta");
$jkelas = mysqli_num_rows($qkelas);
?>
<div class="col-md-3">
  
    <div class="box-body">
      <?php 
      if ($d1['foto']=="") {
        $foto = "default.jpg";
      }else{
        $foto = $d1['foto'];
      }
       ?>
      
      <img src="form/siswa/foto/<?php echo $foto ?>" width=100%>
      
      <table class="table">
         <tr>
          <td colspan="3"><h4><?php echo $d1['nama_siswa'] ?></h4></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td><?php echo $d1['status_siswa'] ?></td>
        </tr>
        
      </table>
     <a href="?a=edit_siswa&id=<?php echo $d1['id_siswa'] ?>&status=<?php echo $status_siswa ?>" class="btn btn-info btn-xs">Edit Siswa</a> 
     <a href="form/siswa/hapus_siswa.php?id=<?php echo $d1['id_siswa'] ?>&status=<?php echo $status_siswa ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda akan menghapus <?php echo $d1['nama_siswa'] ?> dari data siswa?')">Hapus</a> 
     <?php 
     $targetback = "?a=siswa_aktif";
     ?>
     <a href="<?php echo $targetback ?>" class="btn btn-info btn-xs"  >Kembali</a>
    </div>



</div>
<div class="col-md-9">
  <div class="box-header with-border">
    <h3 class="box-title">
      Biodata

    </h3>
    
    
  </div>
  <div class="box-body">
    <div class="col-md-6">
      <table class="table">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $d1['nama_siswa'] ?></td>
        </tr>
        <tr>
          <td>NIS</td>
          <td>:</td>
          <td><?php echo $d1['nis'] ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>:</td>
          <td><?php echo $d1['nisn'] ?></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td>:</td>
          <td><?php echo $d1['tmpl'] ?></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><?php echo $d1['tgll'] ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php echo $d1['jk'] ?></td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?php echo $d1['agama'] ?></td>
        </tr>
      
       
      </table>
    </div>
    <div class="col-md-6">
      <table class="table">
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $d1['alamat'] ?></td>
        </tr>
        <tr>
          <td>No HP</td>
          <td>:</td>
          <td><?php echo $d1['no_telp'] ?></td>
        </tr>
        <tr>
          <td>Nama Ayah</td>
          <td>:</td>
          <td><?php echo $d1['nama_ayah'] ?></td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>:</td>
          <td><?php echo $d1['nama_ibu'] ?></td>
        </tr>
        <tr>
          <td>Pekerjaan Ayah</td>
          <td>:</td>
          <td><?php echo $d1['kerja_ayah'] ?></td>
        </tr>
        <tr>
          <td>Pekerjaan Ibu</td>
          <td>:</td>
          <td><?php echo $d1['kerja_ibu'] ?></td>
        </tr>
      </table>
    </div>
    <div class="clearfix"></div>
    
    
  </div>

</div>
  <div class="clearfix"></div>
<hr>

 <div class="box-header with-border">
    <h3 class="box-title">
      History Kelas Siswa

    </h3>
    
    
  </div>
  <div class="box-body">
     
      <?php 
      if ($status_siswa==0) { ?>
       <div class="alert alert-info">
         Ini merupakan siswa baru <br>  Silahkan tentukan kelas siswa lebih dahulu di menu Kelas <br> 
        <!-- <a href="#" class=" btn btn-success btn-xs"  data-toggle="modal" data-target="#addkelas">Tentukan Kelas Awal</a> -->
       </div>
      
        
      <?php }else{ ?>
         
         <div class="box-body">
            <table class="table"  id="example1">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Kelas</td>
                  <td>Lokal</td>
                  <td>Wali Kelas</td>
                  <td>Tahun Ajaran</td>
                  <td>Status</td>
                </tr>
              </thead>
              <?php 
              $no=1;
              while ($dkelas = mysqli_fetch_array($qkelas)) { ?>
              
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dkelas['tingkat'] ?></td>
                <td><?php echo $dkelas['nama_kelas'] ?></td>
                <td><?php echo $dkelas['nama_guru'] ?></td>
                <td><?php echo $dkelas['nama_ta'] ?></td>
                <td>
                  <?php 
                  $kelas_selanjutnya = $dkelas['next_kelas'] =='' ? $dkelas['tingkat'] +1  : $dkelas['next_kelas'];
                  if ($dkelas['status_ks']=='Lanjut') {
                    $keterangan = "Naik Ke Kelas ".$kelas_selanjutnya;
                  }
                  elseif ($dkelas['status_ks']=='Tinggal') {
                    $keterangan = "Tinggal di Kelas ".$kelas_selanjutnya;
                  }else{
                    $keterangan = "Aktif";
                  }
                  echo $keterangan;
                   ?>
                  
                    
                  </td>
              </tr>
              <?PHP } ?>
            </table>
          </div>

      <?php } ?>
  </div>
