<?php 
@$menu = $_GET['a'];
if ($menu=='') {
  include "form/dashboard/dashboard_admin.php";
}
else if ($menu=='pengumuman') {
  include "form/pengumuman/index.php";
}
else if ($menu=='tambah_pengumuman') {
  include "form/pengumuman/tambah.php";
}
else if ($menu=='manage_kelas') {
  include "form/kelas/manage.php";
}
else if ($menu=='manage_history_kelas') {
  include "form/kelas/manage_history.php";
}
else if ($menu=='manage_mapel') {
  include "form/mapel/manage.php";
}
else if ($menu=='edit_pengumuman') {
  include "form/pengumuman/edit.php";
}
else if ($menu=='calon_siswa') {
  include "form/siswa/calon_siswa.php";
}
else if ($menu=='alumni') {
  include "form/alumni/data_alumni.php";
}
else if ($menu=='detail_alumni') {
  include "form/alumni/detail_alumni.php";
}
else if ($menu=='edit_akun') {
  include "form/dashboard/edit_akun.php";
}
else if ($menu=='siswa_aktif') {
  include "form/siswa/siswa_aktif.php";
}
else if($menu=='tambah_siswa'){
  include "form/siswa/tambah_siswa.php";
}
else if($menu=='edit_siswa'){
  include "form/siswa/edit_siswa.php";
}
else if($menu=='detail_siswa'){
  include "form/siswa/detail_siswa.php";
}
else if($menu=='siswa_perkelas'){
  include "form/siswa_perkelas/index.php";
}
else if($menu=='data_siswa_kelas'){
  include "form/siswa_perkelas/data_siswa_perkelas.php";
}
else if($menu=='penilaian_akhlak'){
  include "form/penilaian_akhlak/data_kelas.php";
}
else if($menu=='manage_nilai'){
  include "form/penilaian_akhlak/manage.php";
}
else if($menu=='kelas'){
  include "form/kelas/data_kelas.php";
}
else if($menu=='history_kelas'){
  include "form/kelas/data_history_kelas.php";
}
else if($menu=='edit_kelas'){
  include "form/kelas/edit_kelas.php";
}
else if($menu=='guru'){
  include "form/guru/data_guru.php";
}
else if($menu=='tambah_guru'){
  include "form/guru/tambah_guru.php";
}
else if($menu=='edit_guru'){
  include "form/guru/edit_guru.php";
}
elseif ($menu=='pelanggaran') {
  include "form/pelanggaran/data_pelanggaran.php";
}
elseif ($menu=='pilih_siswa_melanggar') {
  include "form/pelanggaran/pilih_siswa_melanggar.php";
}
elseif ($menu=='pilih_siswa_berprestasi') {
  include "form/prestasi/pilih_siswa_berprestasi.php";
}
elseif ($menu=='pilih_siswa_konsultasi') {
  include "form/konsultasi/pilih_siswa_konsultasi.php";
}
elseif ($menu=='prestasi') {
  include "form/prestasi/data_prestasi.php";
}
elseif ($menu=='tahun_ajaran') {
  include "form/ta/data_tahun_ajaran.php";
}
elseif ($menu=='user') {
  include "form/user/data_user.php";
}
elseif ($menu=='konsultasi') {
  include "form/konsultasi/data_konsultasi.php";
}
elseif ($menu=='pengambilan') {
  include "form/pengambilan/index.php";
}
elseif ($menu=='pengambilan_baru') {
  include "form/pengambilan/pengambilan_baru.php";
}
elseif ($menu=='hutang_perkelas') {
  include "form/pengambilan/hutang_perkelas.php";
}
elseif ($menu=='checkout_pengambilan') {
  include "form/pengambilan/checkout_pengambilan.php";
}
elseif ($menu=='tambah_user') {
  include "form/user/tambah_user.php";
}
elseif ($menu=='edit_user') {
  include "form/user/edit_user.php";
}

else{
	echo "Fitur ini belum tersedia";
}
 ?>

