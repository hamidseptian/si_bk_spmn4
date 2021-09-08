<?php
session_start();

include "../../../assets/koneksi.php";
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
$password		= $_POST['password'];

$sql = "INSERT into penduduk set 
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
password='$password'
";
mysqli_query($conn, $sql)or die(mysqli_error());

$_SESSION['pesan'] = '<div class="alert alert-info">Pendaftaran penduduk berhasil<br>Silahkan login dengan memasukan NIK dan password yang sudah di daftarkan</div>';
?>
<script type='text/javascript'>
	alert('Data penduduk berhasil didaftarkan\nSilahkan login');
	window.location.href="../../../login"
</script>
