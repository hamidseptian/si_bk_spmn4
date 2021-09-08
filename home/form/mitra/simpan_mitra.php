<?php 
session_start();

include "../../../assets/koneksi.php";
$nama =$_POST['nama'];
$pemilik =$_POST['pimilik'];
$alm =$_POST['alm'];
$hp =$_POST['hp'];
$username =$_POST['username'];
$pass =$_POST['password'];



$q1 = mysqli_query($conn, "INSERT into mitra set
                 nama_toko= '$nama',
                pemilik_toko='$pemilik',
                alamat_toko='$alm',
                nohp_toko='$hp',
                username='$username',
                password='$pass',
                status ='Pendaftaran'
    ")or die(mysqli_error());

$_SESSION['pesan'] = '<div class="alert alert-info">Pendaftaran penduduk berhasil<br>Silahkan login dengan memasukan NIK dan password yang sudah di daftarkan</div>';
 ?>

<script type='text/javascript'>
    alert('Data mitra berhasil didaftarkan\nSilahkan login');
    window.location.href="../../../login"
</script>