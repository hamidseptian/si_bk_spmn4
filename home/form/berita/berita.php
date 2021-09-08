 <?php 
 $sql="SELECT * from berita";
$no=1;
$query=mysqli_query($conn, $sql);
$j = mysqli_num_rows($query);
;
 ?>

															











<div class="container">
					<div class="section-top-border">
							<?php while ($d = mysqli_fetch_array($query)) { ?>
						<div class="row">
							<div class="col-md-3">
								<img src="../user/admin/form/berita/gambar/<?php echo $d['gambar'] ?>" alt="" class="img-fluid">
							</div>
							<div class="col-md-9 mt-sm-20 left-align-p">
									
								<h3 class="mb-30">Left Aligned</h3>
								<p><?php echo substr($d['isi_berita'], 0, 100) ?>.......</p>
								Posting in <?php echo $d['tanggal'] ?> <br>
								<a href="?h=baca_berita&id=<?php echo $d['id_berita'] ?>">Baca</a>
							</div>
						</div>
						hr
						<?php } ?>	
					</div>
					
				</div>


