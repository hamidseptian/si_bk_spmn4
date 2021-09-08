<?php
include '../../../../assets/koneksi.php';
$id=$_GET['id'];




$sql="DELETE from pelanggaran where id_pelanggaran='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data pelanggaran Dihapus');
	window.location.href='../../?a=pelanggaran'
</script>