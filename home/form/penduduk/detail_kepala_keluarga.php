<?php
session_start();

include "../../../../assets/koneksi.php";
$nik		= $_POST['nik'];
// 	echo $nik;
$sql = "SELECT * from penduduk where nik='$nik'
";

$j = mysqli_num_rows($q);
$d = mysqli_fetch_array($q);
?>
<table class="table">
	<tr>
		<td>NIK</td>
		<td><?php echo $d['nik'] ?></td>
	</tr>
	
</table>