<?php 
$id = $_GET['id_user'];
$sql="SELECT *  from admin a left join guru g on a.id_ptk=g.id_ptk where a.id='$id'";
$q=mysqli_query($conn, $sql) or die ('GAGAL');
$d=mysqli_fetch_array($q);
?>            <div class="box-header with-border">
              <h3 class="box-title">Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/user/simpanedit_user.php" method="post" enctype="multipart/form-data">

              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" required readonly name="id" value="<?php echo $d['id_ptk'] ?>">
                    <input type="hidden" class="form-control" required readonly name="id_user" value="<?php echo $d['id'] ?>">
                    <input type="text" class="form-control" required readonly name="nama" value="<?php echo $d['nama_ptk'] ?>">
                    
                  </div>
                </div>   

                
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIP </label>
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
                    <input type="text" class="form-control" required  name="username" value="<?php echo $d['username'] ?>">
                    
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" required  name="password" value="<?php echo $d['password'] ?>">
                    
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="level">
                      <option value="Admin" <?php if($d['level']=='Admin'){echo "selected";} ?>>Admin</option>
                      <?php 
                        $q_cek_kepsek = mysqli_query($conn, "SELECT * from admin where level='Kepala Sekolah' and id !='$id'");
                        $j_cek_kepsek = mysqli_num_rows($q_cek_kepsek);
                        if ($j_cek_kepsek==0) { ?>
                          <option value="Kepala Sekolah" <?php if($d['level']=='Kepala Sekolah'){echo "selected";} ?>>Kepala Sekolah </option>
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
          