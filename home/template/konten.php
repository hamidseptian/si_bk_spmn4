<?php 
$menu = $_GET['h'];
if ($menu=='profile'){ 
	include "form/profile/profile.php";
}
elseif ($menu=='visi_misi'){ 
	include "form/profile/visi_misi.php";
}
elseif ($menu=='login'){ 
	include "form/login/index.php";
}
elseif ($menu=='struktur_organisasi'){ 
	include "form/profile/struktur_organisasi.php";
}
elseif ($menu=='deskripsi'){ 
	include "form/profile/deskripsi.php";
}
else 
{
	echo "Fitur belum tersedia";
}

 ?>