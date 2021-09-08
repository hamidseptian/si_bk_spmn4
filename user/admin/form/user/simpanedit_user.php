<?php 
include "../../../../assets/koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$id		= $_POST['id'];
$id_user		= $_POST['id_user'];


$q = mysqli_query($conn, "SELECT * from admin where username='$username' and password='$password' and id !='$id_user'");
$j =  mysqli_num_rows($q) ;
if ($j>0 ) { ?>
		<script type="text/javascript">
		alert('Data user gagal disimpan\nUsername dan password sudah digunakan');
		window.location.href="../../?a=tambah_user&id=<?php echo $id ?>"

	</script>
	<?php 
	
}else{

	$q1=mysqli_query($conn, "UPDATE admin set 
		 username = '$username',
		 password = '$password',
		 level = '$level'
		 where id='$id_user'
		")or die(mysqli_error()); 

?>

	<script type="text/javascript">
		alert('Data user berhasil disimpan');
		window.location.href="../../?a=user"

	</script>
<?php } ?>