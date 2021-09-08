<?php
session_start();

include "../../../assets/koneksi.php";
$nik		= $_POST['nik'];
// 	echo $nik;
$sql = "SELECT nik from penduduk where nik='$nik'
";
$q = mysqli_query($conn, $sql)or die(mysqli_error());
$j = mysqli_num_rows($q);
if ($j>0) {
	echo 1;
}else{
	echo 0;

}
?>