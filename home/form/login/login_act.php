<?php 
session_start();
include '../../../assets/koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
if ($level=="") { ?>
	<script>
		alert('Anda belum memilih hak akses\nSilahkan pilih hak akses terlebih dahulu');
			window.location.href='../../?h=login';
	</script>
	
<?php }
else{
	if ($level=='Siswa') {
		$q = mysqli_query($conn, "SELECT * from siswa where nisn='$username' and password='$password'");	
		$j = mysqli_num_rows($q);
		$d = mysqli_fetch_array($q);
		$status = $d['status_siswa'];

		if ($j>0) {
			if ($status=='Aktif' || $status=='Selesai') {
				$_SESSION['id_user'] = $d['id_siswa'];
				$_SESSION['level'] = "Siswa";
				$_SESSION['login']=true;
				header("location:../../../user/admin");
			}else{ ?>
				<script>
					alert('Akun anda belum aktif');
					window.location.href='../../?h=login';
				</script>
			<?php }
		}else{ ?>
				<script>
					alert('Username dan password salah cuy	');
					window.location.href='../../?h=login';
				</script>
			<?php }	
	}else{
		$q = mysqli_query($conn, "SELECT * from admin where username='$username' and password='$password'");	
		$j = mysqli_num_rows($q);
		$d = mysqli_fetch_array($q);

		if ($j>0) {
				$_SESSION['id_user'] = $d['id'];
				$_SESSION['level'] = $d['level'];
				$_SESSION['login']=true;
				header("location:../../../user/admin");
			}else{ ?>
				<script>
					alert('Username dan password salah jon');
					window.location.href='../../?h=login';
				</script>
			<?php }	
	}
} ?>