<?php 

include "../assets/koneksi.php";
 ?>
 <!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>SI BK</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../assets/chillaid/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../assets/desain/css/bootstrap.css">
 <script type="text/javascript" src="../assets/adminlte/js/jquery.js"></script>
</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
    	<img src="gambar/logo.png" style="width:50px; margin-top:-10px">
    	<h1 class="logoname" style="float:right; margin-top:-5px; margin-left:20px">SMPN 4 Batang Anai</h1>
      
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li><a href="index.php">Home</a></li>
      
       <li ><a class="drop" href="#">Profile</a>
          <ul style="background: black">
             <!-- <li class=""><a href="?h=profile">Sejarah Singkat</a></li> -->
          <li><a href="?h=deskripsi">Deskripsi Singkat Sekolah</a></li>
          <li><a href="?h=visi_misi">Visi Misi</a></li>
          <li><a href="?h=struktur_organisasi">Struktur Organisasi</a></li>
          <!-- <li><a href="?h=daftar_mitra">Struktur Organisasi</a></li> -->
          </ul>
        </li>
      <!-- <li class=""><a href="?h=berita">Berita</a></li> -->
    
          <li><a href="?h=login">Login</a></li>
      
      </ul>
    </nav>
  </header>
</div>






















<?php if (!isset($_GET['h'])) { ?>

<div class="bgded overlay" style="background-image:url('gambar/banner.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
    	   
      <p>Selamat Datang Di Website</p>
      <h3 class="heading">SMP Negeri 4 Batang Anai</h3>
  
      <!-- <footer><a class="btn" href="#">Tristique vehicula</a></footer> -->
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<?php } 
			else { ?>









<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content three_quarter first"> 
      <h2><?php include "template/judul_konten.php"; ?></h2>
     
<?php include "template/konten.php"; ?>
    </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php } ?>
<!-- <div class="bgded overlay row4" style="background-image:url('../assets/chillaid/images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h1 class="logoname"><a href="../assets/chillaid/index.html">Chill<span>a</span>id</a></h1>
      <p>Scelerisque facilisis sapien turpis facilisis libero eu viverra purus dui ac leo sed vitae diam morbi sed nibh in eget dolor phasellus rhoncus odio morbi elit nunc id elit donec elementum [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat metus nullam</h6>
      <ul class="nospace linklist">
        <li><a href="#">Sagittis leo morbi quis</a></li>
        <li><a href="#">Nulla vehicula felis laoreet</a></li>
        <li><a href="#">Pulvinar proin et eros ac</a></li>
        <li><a href="#">Mi vulputate accumsan fusce</a></li>
        <li><a href="#">At massa in sed tortor sit amet</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Tincidunt ullamcorper</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="../assets/chillaid/images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Fusce vel lectus nunc</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Lacinia donec tortor lectus varius vel egestas a dictum in odio mauris metus.</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Turpis iaculis ac hendrerit vel pretium non magna sed non metus ut at nisi morbi.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
  </footer>
</div> -->
<div class="wrapper row5" style="position: fixed; bottom: 0;">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2021 - Sistem Informasi Bimbingan Konseling</p>
    <p class="fl_right"><a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Rifki Afdal</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../assets/chillaid/layout/scripts/jquery.min.js"></script>
<script src="../assets/chillaid/layout/scripts/jquery.backtotop.js"></script>
<script src="../assets/chillaid/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>