
<?php 
$id = $_SESSION['id_user'];
$nama_semester = [1=>'Ganjil','Genap'];



  $q =  mysqli_query($conn, "SELECT * from admin a left join guru g on a.id_ptk=g.id_ptk where id='$id'")or die(mysqli_error());
$d = mysqli_fetch_array($q);
$d1 = $d;
$namauser =  $d['nama_ptk']; 
   


?>
	



	<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img" src="<?php echo $gambar ?>" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h5 class="widget-user-desc">Selamat Datang di Halaman User</h5>
              <h3 class="widget-user-desc"><?php echo $namauser ?></h3>
              <h4 class="widget-user-desc">Hak Akses : <?php echo $_SESSION['level'] ?></h4>
              
            </div>
            
          </div>











<div class="clearfix"></div>
