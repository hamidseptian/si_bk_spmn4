<?php 
$id = $_GET['id'];
$sql="SELECT *  from guru where id_ptk='$id'";
$q=mysqli_query($conn, $sql) or die ('GAGAL');
$d=mysqli_fetch_array($q);
?>            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/user/simpan_user.php" method="post" enctype="multipart/form-data">

              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" required readonly name="id" value="<?php echo $d['id_ptk'] ?>">
                    <input type="text" class="form-control" required readonly name="nama" value="<?php echo $d['nama_ptk'] ?>">
                    
                  </div>
                </div>   

                
                <div class="form-group">
                  <label class="col-sm-2 control-label">MIP </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required readonly name="alamat" value="<?php echo $d['nip'] ?>">
                    
                  </div>
                </div>   


                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required readonly name="tp" value="<?php echo $d['jenis_ptk'] ?>">
                    
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required  name="username">
                    
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" required  name="password">
                    
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Level </label>
                  <div class="col-sm-10">
                    <select class="form-control" name="level">
                      <option value="Admin">Admin</option>
                      <?php 
                        $q_cek_kepsek = mysqli_query($conn, "SELECT * from admin where level='KEpala Sekolah'");
                        $j_cek_kepsek = mysqli_num_rows($q_cek_kepsek);
                        if ($j_cek_kepsek==0) { ?>
                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <?php } ?>
                    </select>
                    
                  </div>
                </div>   


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?a=user" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-info" id="tombol_simpan_perangkat_nagari" >Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          