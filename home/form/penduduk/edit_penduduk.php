<?php 
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * from penduduk where id_penduduk = '$id'");
$d = mysqli_fetch_array($q);
?>            <div class="box-header with-border">
              <h3 class="box-title">Edit Data penduduk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form/penduduk/simpanedit_penduduk.php" method="post" enctype="multipart/form-data">

              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">NIK </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" required name="id" id="nik" value="<?php echo $d['id_penduduk'] ?>">
                    <input type="number" class="form-control" required name="nik" id="nik" value="<?php echo $d['nik'] ?>">
                    <span id="ket_nik"></span>
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="nama" value="<?php echo $d['nama'] ?>">
                    
                  </div>
                </div>   


                

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="tmpl" value="<?php echo $d['tmpl'] ?>">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" required name="tgll" value="<?php echo $d['tgll'] ?>">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin </label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="jk">
                      <option value="L" <?php if($d['jk']=="L"){echo "selected";} ?>>Laki-laki</option>
                      <option value="P" <?php if($d['jk']=="P"){echo "selected";} ?>>Perempuan</option>
                    </select>
                  </div>
                </div>   

                 <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="alamat" value="<?php echo $d['alamat'] ?>">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-2 control-label">RT </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="rt" value="<?php echo $d['rt'] ?>">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-2 control-label">RW </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="rw" value="<?php echo $d['rw'] ?>">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Kelurahan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="kel" value="<?php echo $d['kelurahan'] ?>">
                  </div>
                </div>   
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Kecamatan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="kec" value="<?php echo $d['kecamatan'] ?>">
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama </label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="agama">
                      <?php $agama = array('Islam','Kristen','Hindu','Budha');
                      foreach ($agama as $a) { ?>
                         
                      <option value="<?php echo $a ?>"  <?php if($d['agama']==$a){echo "selected";} ?>><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Perkawinan </label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="status_kawin">
                      <?php $sp = array('Kawin','Belum Kawin');
                      foreach ($sp as $a) { ?>
                         
                      <option value="<?php echo $a ?>" <?php if($d['status_perkawinan']==$a){echo "selected";} ?>><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="pekerjaan" value="<?php echo $d['pekerjaan'] ?>">
                  </div>
                </div>   
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kewarga Negaraan</label>
                  <div class="col-sm-10">
                    <select class="form-control" required name="kewarganegaraan">
                      <?php $wn = array('WNI','WNA');
                      foreach ($wn as $a) { ?>
                         
                      <option value="<?php echo $a ?>" <?php if($d['kewarganegaraan']==$a){echo "selected";} ?>><?php echo $a ?></option>
                       <?php } ?>
                    </select>
                  </div>
                </div>   

           
                <div class="form-group">
                  <label class="col-sm-2 control-label">Berlaku Hingga </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" required name="berlaku" value="<?php echo $d['berlaku_hingga'] ?>">
                  </div>
                </div>
              
				<script type="text/javascript">
          $('#tombol_simpan_penduduk').hide();
					$('#nik').keyup(function(){
						var nik = $('#nik').val();
  					 $.ajax({
              url : 'form/penduduk/cek_nik.php',
              type : 'POST',
              data : { "nik" : nik},
              success : function (data){
                if (data==1) {
                  $('#ket_nik').html('NIK '+nik+' sudah digunakan');
                  $('#tombol_simpan_penduduk').hide();
                }else{
                  $('#ket_nik').html('');
                  $('#tombol_simpan_penduduk').show();

                }
              },
              error : function (){
                alert('error');
              }
             });
					});
				</script>

               
             



              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="?a=penduduk" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-info" id="tombol_simpan_penduduk" >Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          