            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pendidik Dan Data Kependidikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/guru/simpan_ptk.php" method="post">

              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NUPTK </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nuptk">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jk">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tmpl">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgll">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIP </label>
                  <div class="col-sm-10">
                    <input type="num" class="form-control" name="nip">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Pegawai </label>
                  <div class="col-sm-10">
                    <select class="form-control" name="sp">
                      <?php 
                      $status = ['Tenaga Honor Sekolah','PNS','Guru Honor Sekolah'];
                      foreach ($status as $st) { ?>
                      <option value="<?php echo $st ?>"><?php echo $st ?></option>
                        <?php  } ?>

                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis PTK </label>
                  <div class="col-sm-10">
                   <select class="form-control" name="jptk">
                      <?php 
                      $status = ['Tenaga Administrasi Sekolah','Guru Mapel','Guru BK','Tenaga Perpustakaan'];
                      foreach ($status as $st) { ?>
                      <option value="<?php echo $st ?>"><?php echo $st ?></option>
                        <?php  } ?>

                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Gelar Depan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="gelardepan">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Gelar Belakang </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="gelarblkg">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenjang Pendidikan </label>
                  <div class="col-sm-10">
                     <select class="form-control" name="pendidikan">
                      <?php 
                      $status = ['SMA','D3','S1','S2','S3'];
                      foreach ($status as $st) { ?>
                      <option value="<?php echo $st ?>"><?php echo $st ?></option>
                        <?php  } ?>

                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jurusan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jurusan">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Sertifikasi </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sertifikasi">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">TMT Kerja </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tmt">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tugas Tambahan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tugastambahan">
                  </div>
                </div>   


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?a=ptk" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          