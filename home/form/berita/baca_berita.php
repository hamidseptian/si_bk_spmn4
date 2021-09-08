 <?php 
 $id = $_GET['id'];
 $sql="SELECT * from berita where id_berita = '$id'";
 $sql2="SELECT * from berita where id_berita != '$id' order by id_berita desc limit 5";
$no=1;
$query=mysqli_query($conn, $sql);
$q2=mysqli_query($conn, $sql2);
$j = mysqli_num_rows($query);
$d = mysqli_fetch_array($query);
;
 ?>

														
<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="../user/admin/form/berita/gambar/<?php echo $d['gambar'] ?>" style="width:100%; margin-bottom:20px" alt="">
									</div>									
								</div>
								<div class="col-lg-12 col-md-12">
									<a class="posts-title" href="#"><h3><?php echo $d['judul_berita'] ?></h3></a>
									<small>Posting in <?php echo $d['tanggal'] ?></small> <br><br>
									<div style="text-align:justify;"><?php echo $d['isi_berita'] ?></div>
								</div>
								
							</div>
							
							
							
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Berita Lainnya</h4>
									<div class="popular-post-list">

										<?php while ($dbl = mysqli_fetch_array($q2)) { ?>
											<div class="single-post-list d-flex flex-row align-items-center">
												
												<div class="details">
													<a href="?h=baca_berita&id=<?php echo $dbl['id_berita'] ?>"><h6><?php echo $dbl['judul_berita'] ?></h6></a>
													<p>Posting pada <?php echo $dbl['tanggal'] ?></p>
												</div>
											</div>
											<hr>
										<?php } ?>


									


									</div>
								</div>
									
								
															
							</div>
						</div>
					</div>