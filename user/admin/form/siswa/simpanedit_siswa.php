<?php
session_start();


include "../../../../assets/koneksi.php";
$id		= $_POST['id'];
$nama_siswa		= $_POST['nama_siswa'];
$nis		= $_POST['nis'];
$nisn		= $_POST['nisn'];
$tmpl		= $_POST['tmpl'];
$tgll		= $_POST['tgll'];
$jk		= $_POST['jk'];
$agama		= $_POST['agama'];

$alamat		= $_POST['alamat'];
$no_telp		= $_POST['no_telp'];
$nama_ayah		= $_POST['nama_ayah'];
$nama_ibu		= $_POST['nama_ibu'];
$kerja_ayah		= $_POST['kerja_ayah'];
$kerja_ibu		= $_POST['kerja_ibu'];
// $keterangan		= $_POST['keterangan'];
// $kelas		= $_POST['kelas'];


$password		= 123;

	
$sql = "UPDATE siswa set
nama_siswa='$nama_siswa',

nis='$nis',
nisn='$nisn',

tmpl='$tmpl',
tgll='$tgll',
jk='$jk',
agama='$agama',

alamat='$alamat',
no_telp='$no_telp',
nama_ayah='$nama_ayah',
nama_ibu='$nama_ibu',
kerja_ayah='$kerja_ayah',
kerja_ibu='$kerja_ibu'
where id_siswa='$id'
";

mysqli_query($conn, $sql)or die(mysqli_error());
?>
<script type='text/javascript'>
	alert('Data siswa berhasil diperbaharui');
	<?php if ($_SESSION['level']=='Admin') { ?>
	window.location.href="../../index.php?a=siswa_aktif"
<?php }else{ ?>
	window.location.href="../../"
<?php } ?>
</script>
