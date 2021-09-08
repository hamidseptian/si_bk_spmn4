 <?php 
 $sql="SELECT * from profile where id_profile='2'";
$no=1;
$query=mysqli_query($conn, $sql);
$j = mysqli_num_rows($query);
$d = mysqli_fetch_array($query);
 ?>
<div class="col-md-12 pb-40 header-text text-center">
                            <h1 class="pb-10"><?php echo $d['judul'] ?></h1>
                            <div style="text-align:justify;"><?php echo $d['isi'] ?></div>
                        </div>