 <?php 
 $sql="SELECT * from produk p
 left join mitra m on p.id_mitra = m.id_mitra
 ";
$no=1;
$query=mysqli_query($conn, $sql);
$j = mysqli_num_rows($query);
$d = mysqli_fetch_array($query);
 ?>






<?php while ($d = mysqli_fetch_array($query)) { ?>

						<div class="col-lg-4" style="margin-bottom:10px">
							<div class="single-price no-padding">
								<div class="price-top">
									<h4><?php echo $d['nama_produk'] ?></h4>
								</div>
								
								<!-- <div class="price-bottom"> -->
									 <img class="content-image img-fluid d-block mx-auto" src="../user/admin/form/produk/gambar/<?php echo $d['gambar'] ?>" alt="" style="margin:10px">
								<!-- </div> -->
								<table class="table" style="text-align: justify;">
									<tr>
										<td>Harga</td>
										<td>:</td>
										<td><?php echo $d['harga'] ?></td>
									</tr>
									<tr>
										<td>Penjual</td>
										<td>:</td>
										<td><?php echo $d['nama_toko'] ?></td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>:</td>
										<td><?php echo $d['alamat_toko'] ?></td>
									</tr>
									<tr>
										<td>Kontak</td>
										<td>:</td>
										<td><?php echo $d['nohp_toko'] ?></td>
									</tr>
								</table>
								
								
							</div>
						</div>						


<?php } ?>	