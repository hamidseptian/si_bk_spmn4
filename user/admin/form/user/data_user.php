<div class="box-header with-border">
  <h3 class="box-title">Data user</h3>

  <div class="box-tools pull-right">
    <!-- <a href="" class="btn btn-default btn-sm"  target="_blank">Print Data Paket</a> -->
    <a href="#" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#add">Tambah user</a>
  </div>
</div>

<form action="form/user/simpan_user.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih PTK Untuk Dijadikan user</h4>
              </div>
              <div class="modal-body">
                  
              <div class="form-group">
              <?php
                $perintah="SELECT * From guru where id_ptk not in (SELECT id_ptk from admin)";
                $jalan=mysqli_query($conn, $perintah);

                $total = mysqli_num_rows($jalan);
                $no=1;
              ?>
              <table class="table table-striped table-bordered" id="example1" width="100%">
                <thead>
                <tr>
                  <td>No</td>
                    <td>Nama</td>
                    <td>Jabatan</td>
                  
                  <td>Option</td>
                </tr>
              </thead>
              <?php
              while ($data=mysqli_fetch_array($jalan))
              { 
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama_ptk'] ?></td>
                  <td>
                    <?php echo $data['jenis_ptk'] ?>
                  </td>
                  
                <td>
                  <a href="?a=tambah_user&id=<?php echo $data['id_ptk'] ?>" class="btn btn-info btn-xs">Tambahkan User</a> 
                </td>
                  </tr>
                <?php } ?>

                </table>
              </div> 
           
              
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data user</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>


<hr>
<?php 
  $q1=mysqli_query($conn, "SELECT * from admin a  left join guru g on a.id_ptk=g.id_ptk 
    ");
  $no=1;
 ?>

 <table class="table table-striped table-bordered" id="example3">
    <thead>
      <tr>
        <td>No</td>
        
      
        <td>Nama</td>
        <td>Jabatan</td>
        <td>username</td>
        <td>Password</td>
        <td>Level</td>
       
        <td>Option</td>
      </tr>
    </thead>
  <?php 
  while ($d1=mysqli_fetch_array($q1)) { 
    ?>
  <tr>
    <td><?php echo $no++ ?></td>
   
  
    
    <td><?php echo $d1['nama_ptk'] ?></td>
    <td><?php echo $d1['jenis_ptk'] ?></td>
    <td><?php echo $d1['username'] ?></td>
    <td><?php echo $d1['password'] ?></td>
    <td><?php echo $d1['level'] ?></td>
    <td>
      <?php if ($iduser==$d1['id']){
        echo "Sedang Aktif";
      }else{ ?>
        
      <a href="form/user/hapus_user.php?id=<?php echo $d1['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
      <a href="?a=edit_user&id_user=<?php echo $d1['id'] ?>&id_ptk=<?php echo $d1['id_ptk'] ?>" class="btn btn-warning btn-xs">Edit</a>    
      <?php } ?>
    </td>
  </tr>
  <?php } ?>
</table>