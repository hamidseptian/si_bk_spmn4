<?php
include '../../../../assets/koneksi.php';
$id=$_GET['id'];




$sql="DELETE from prestasi where id_prestasi='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data prestasi Dihapus');
	window.location.href='../../?a=prestasi'
</script>