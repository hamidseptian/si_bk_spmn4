
<?php
include "../../../../assets/koneksi.php";

$nama		= $_POST['nama'];
$nuptk		= $_POST['nuptk'];
$jk		= $_POST['jk'];
$tmpl		= $_POST['tmpl'];
$tgll		= $_POST['tgll'];
$nip		= $_POST['nip'];
$sp		= $_POST['sp'];
$jptk		= $_POST['jptk'];
$gelardepan		= $_POST['gelardepan'];
$gelarblkg		= $_POST['gelarblkg'];
$pendidikan		= $_POST['pendidikan'];
$jurusan		= $_POST['jurusan'];
$sertifikasi		= $_POST['sertifikasi'];
$tmt		= $_POST['tmt'];
$tugastambahan		= $_POST['tugastambahan'];



	$sql = "INSERT into guru set 
	nama_ptk='$nama',
	nuptk='$nuptk',
	jk='$jk',
	tmpl='$tmpl',
	tgll='$tgll',
	nip='$nip',
	status_pegawai='$sp',
	jenis_ptk='$jptk',
	gelar_depan='$gelardepan',
	gelar_belakang='$gelarblkg',
	jenjang_pendidikan='$pendidikan',
	jurusan='$jurusan',
	sertifikasi='$sertifikasi',
	tmt_kerja='$tmt',
	tugas_tambahan='$tugastambahan'
";

mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
	alert('Data guru berhasil disimpan');
	window.location.href="../../index.php?a=guru"
</script>