<?php
include '../../../../assets/koneksi.php';
$id=$_GET['id'];




$sql="DELETE from konsultasi where id_konsultasi='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data konsultasi Dihapus');
	window.location.href='../../?a=konsultasi'
</script>