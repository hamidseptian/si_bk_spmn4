<br><br><div class="col-lg-12" style="margin-left:-25px">
              <form class="form-area " action="form/penduduk/simpan_penduduk.php" method="post" enctype="multipart/form-data">
                <div class="row"> 
                  <div class="col-lg-6">
                   




                   <div class="form-group">
                  <label class="col-sm-12 control-label">NIK </label>
                  <div class="col-sm-12">
                    <input type="number" class="form-control" required name="nik" id="nik">
                    <span id="ket_nik"></span>
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-12 control-label">Nama </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="nama">
                    
                  </div>
                </div>   


                

                <div class="form-group">
                  <label class="col-sm-12 control-label">Tempat Lahir </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="tmpl">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-12 control-label">Tanggal Lahir </label>
                  <div class="col-sm-12">
                    <input type="date" class="form-control" required name="tgll">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-12 control-label">Jenis Kelamin </label>
                  <div class="col-sm-12">
                    <select class="form-control" required name="jk">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>   

                 <div class="form-group">
                  <label class="col-sm-12 control-label">Alamat </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="alamat">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-12 control-label">RT </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="rt">
                  </div>
                </div>   

                    <div class="form-group">
                  <label class="col-sm-12 control-label">RW </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="rw">
                  </div>
                </div>



                  </div>
                  <div class="col-lg-6">
                    













   
                 <div class="form-group">
                  <label class="col-sm-12 control-label">Kelurahan </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="kel">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-12 control-label">Kecamatan </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="kec">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-12 control-label">Agama </label>
                  <div class="col-sm-12">
                    <select class="form-control" required name="agama">
                      <?php $agama = array('Islam','Kristen','Hindu','Budha');
                      foreach ($agama as $a) { ?>
                         
                      <option value="<?php echo $a ?>"><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-12 control-label">Status Perkawinan </label>
                  <div class="col-sm-12">
                    <select class="form-control" required name="status_kawin">
                      <?php $sp = array('Kawin','Belum Kawin');
                      foreach ($sp as $a) { ?>
                         
                      <option value="<?php echo $a ?>"><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-12 control-label">Pekerjaan </label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" required name="pekerjaan">
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-12 control-label">Kewarga Negaraan</label>
                  <div class="col-sm-12">
                    <select class="form-control" required name="kewarganegaraan">
                      <?php $wn = array('WNI','WNA');
                      foreach ($wn as $a) { ?>
                         
                      <option value="<?php echo $a ?>"><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

           
                <div class="form-group">
                  <label class="col-sm-12 control-label">Password Login </label>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" required name="password">
                  </div>
                </div>














                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-info" id="tombol_simpan_penduduk">Daftar</button>
                    <!-- <button class="genric-btn primary circle" style="float: right;">Send Message</button>                      -->
                  </div>
                </div>
              </form> 
            </div>





          
        <script type="text/javascript">
          // $('#tombol_simpan_penduduk').hide();
          $('#nik').keyup(function(){
            var nik = $('#nik').val();
             $.ajax({
              url : 'form/penduduk/cek_nik.php',
              type : 'POST',
              data : { "nik" : nik},
              success : function (data){
                console.log(data);
                if (data==1) {
                  $('#ket_nik').html('NIK '+nik+' sudah digunakan');
                  document.getElementById("tombol_simpan_penduduk").disabled = true;
                  // $('#tombol_simpan_penduduk').hide();
                }else{
                  $('#ket_nik').html('');
                  document.getElementById("tombol_simpan_penduduk").disabled = false;
                  // $('#tombol_simpan_penduduk').show();

                }
              },
              error : function (){
                alert('error');
              }
             });
          });
        </script>







