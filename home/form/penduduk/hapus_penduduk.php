<?php
include '../../../../assets/koneksi.php';
$id=$_GET['id'];





$sql="DELETE from penduduk where id_penduduk='$id'";;
$result=mysqli_query($conn, $sql) or die ('GAGAL');;
?>
<script type="text/javascript">
	alert('Data penduduk dihapus');
	window.location.href='../../?a=penduduk'
</script>