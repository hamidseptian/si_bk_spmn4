<?php
session_start();

include "../../../../assets/koneksi.php";
$id		= $_POST['id'];
$nik		= $_POST['nik'];
$nama		= $_POST['nama'];
$tmpl		= $_POST['tmpl'];
$tgll		= $_POST['tgll'];
$jk		= $_POST['jk'];
$alamat		= $_POST['alamat'];
$rt		= $_POST['rt'];
$rw		= $_POST['rw'];
$kel		= $_POST['kel'];
$kec		= $_POST['kec'];
$agama		= $_POST['agama'];
$status_kawin		= $_POST['status_kawin'];
$pekerjaan		= $_POST['pekerjaan'];
$kewarganegaraan		= $_POST['kewarganegaraan'];
$berlaku		= $_POST['berlaku'];

$sql = "UPDATE penduduk set 
nik='$nik',
nama='$nama',
tmpl='$tmpl',
tgll='$tgll',
jk='$jk',
alamat='$alamat',
rt='$rt',
rw='$rw',
kelurahan='$kel',
kecamatan='$kec',
agama='$agama',
status_perkawinan='$status_kawin',
pekerjaan='$pekerjaan',
kewarganegaraan='$kewarganegaraan',
berlaku_hingga='$berlaku'
where id_penduduk = '$id'
";
mysqli_query($conn, $sql)or die(mysqli_error());
?>
<script type='text/javascript'>
	alert('Data penduduk berhasil diperbaharui');
	window.location.href="../../index.php?a=penduduk"
</script>