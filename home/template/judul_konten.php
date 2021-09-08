<?php 
$menu = $_GET['h'];
if ($menu=='profile'){ 
	echo "Profile";
}
elseif ($menu=='visi_misi'){ 
	echo "Visi Misi";
}
elseif ($menu=='login'){ 
	echo "Login";
}
elseif ($menu=='struktur_organisasi'){ 
	echo "Struktur Organisasi";
}
elseif ($menu=='deskripsi'){ 
	echo "Deskripsi Singkat Tentang Profil Smpn 4 Batang Anai.";
}
else 
{
	echo "Fitur belum tersedia";
}

 ?>