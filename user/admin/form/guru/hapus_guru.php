<?php

include "../../../../assets/koneksi.php";
$id=$_GET['id'];




$sql="DELETE from guru where id_ptk='$id'";
$result=mysqli_query($conn, $sql) or die ('GAGAL');
?>
<script type="text/javascript">
	alert('Data Guru dihapus');
	window.location.href='../../?a=guru'
</script>