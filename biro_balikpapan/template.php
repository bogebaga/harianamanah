<?php 
 // Panggil semua fungsi yang dibutuhkan (semuanya ada di folder ../config)
include "../config/koneksi.php";
include "../config/fungsi_indotgl.php";
include "../config/class_paging.php";
include "../config/fungsi_combobox.php";
include "../config/library.php";
include "../config/fungsi_autolink.php";
include "../config/fungsi_badword.php";
include "../config/fungsi_kalender.php";
include "../config/option.php";
error_reporting(0);

$site = "http://harianamanah.id/";

				$detail=mysql_query("SELECT * FROM berita,users,kategori    
                      WHERE users.username=berita.username 
                      AND kategori.id_kategori=berita.id_kategori 
                      AND judul_seo='$_GET[judul]'");
				$d   = mysql_fetch_array($detail);
				$tgl = tgl_indo($d['tanggal']);
				$baca = $d['dibaca']+1;
				
?>
<!DOCTYPE html>
<html lang="en"
		xmlns="http://www.w3.org/1999/xhtml"
      	xmlns:og="http://ogp.me/ns#"
      	xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="<?php 
	
	if($d['judul']!=''){
	echo"$d[judul]";
	}else{
		echo"HARIAN AMANAH ";
	}
	
	?>">
    <meta name="description" content="Harian Amanah Media Muslim Indonesia">
    <meta name="author" content="">
	<meta name="image"  content="<?php 
	if($d['gambar']!='')
	{
		echo $site."foto_berita/small_$d[gambar]";
	}
	else
	{
		echo $site."images/amanah.jpg";
	}
	?>
	"/>
	<meta property="og:url"           content="<?php 
	if($d['judul_seo']!=''){
	echo"http://www.harianamanah.id/berita-$d[judul_seo].html";
	}else{
	echo"http://www.harianamanah.id";	
	}
	
	?>" />
	<meta property="og:type"          content="Harian Amanah" />
	<meta property="og:title"         content="<?php 
	if($d['judul']!=''){
	echo"$d[judul]";
	}else{
		echo"HARIAN AMANAH ";
	}
	?>" />
	<meta property="og:description"   content="Harian Amanah Bersama Ummat, Tegakkan Ukhuwah!" />
	<meta property="og:image"         content="<?php 
	if($d['gambar']!=''){
	echo $site."foto_berita/small_$d[gambar]";
	}else{
	echo $site."images/amanah.jpg";
	}
	?>" />
    <title>Harian Amanah</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo $site; ?>css/bootstrap.min.css"  type="text/css">

    <link href="<?php echo $site; ?>css/daerah/structure.css" rel="stylesheet">
	

	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $site; ?>css/daerah/style.css">
    <link rel="stylesheet" href="<?php echo $site; ?>css/daerah/new.css">
    <link rel="stylesheet" href="<?php echo $site; ?>css/daerah/paging.css">
	<link href="<?php echo $site; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo $site; ?>font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

<style>
#err{
	background-image: url("images/404.jpg"); 
	background-repeat: no-repeat;
	background-size: 100% auto;
	margin-bottom:-50px;
	}
	
@media(max-width:629px){
	#err{
	background-image: url("images/404.jpg"); 
	background-repeat: no-repeat;
	background-size: 150% auto;
	margin-bottom:-50px;
	}
}
	
	@media(max-width:476px){
	#err{
	background-image: url("images/404.jpg"); 
	background-repeat: no-repeat;
	background-size: 180% auto;
	margin-bottom:-50px;
	}
}
@media(max-width:421px){
	#err{
	background-image: url("images/404.jpg"); 
	background-repeat: no-repeat;
	background-size: 210% auto;
	margin-bottom:-50px;
	}
}
@media(max-width:373px){
	#err{
	background-image: url("images/404.jpg"); 
	background-repeat: no-repeat;
	background-size: 210% auto;
	margin-bottom:-80px;
	}
}
</style>
	
	</head>

<body>
<header>
<!--Navigation-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
	<div class="row">
	<div class="tengah">
		<div class="navbar-header">
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			<a class="navbar-brand" href="../">
				<div class="logo"><img src="<?php echo $site; ?>images/amanah.png" height="35px" width="165px"></div>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse" height="800px">
			<ul class="nav navbar-nav">
			
				
				<?php
			$result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY id_menu");
			while( $row = mysql_fetch_array($result)){
				$idp = $row['id_menu'];
				echo"
				<li class='dropdown' ><a href='$row[link]' class='dropdown-toggle' data-toggle='dropdown' >$row[nama_menu] </a>
				<div class='dropdown-menu'>
						<div class='dropdown-inner'>
							<ul class='list-unstyled'>
				";
				
			$result1 = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent=$idp ORDER BY id_menu");	
			while( $row1 = mysql_fetch_array($result1)){
				echo"
								<li><a href='$row1[link]'>$row1[nama_menu]</a></li>
							";
			}	
				echo"
					</ul>
						</div>
					</div>
				</li>
				";
			}
			?>		
			</ul>
			<ul class="list-inline navbar-right top-social">
				<li><a href="https://www.facebook.com/harianamanah"><i class="fa fa-facebook fa-1x"></i></a></li>
				<li><a href="https://twitter.com/harianamanah"><i class="fa fa-twitter"></i></a></li>

				<li>
				<a id="search"><i class="fa fa-search"></i></a>

				</li>
			</ul>
			</div>
		</div>
	</div>
			<div id="cari">
			<div class="mid1">
			<form method="POST" action="hasil-pencarian.html">
			<input type="text" name="kata">
			<button><i class="fa fa-search"></i></button>
			</form>
			</div>
			</div>	
</header>
<?php include_once("analyticstracking.php") ?>
<script>
$(document).ready(function(){
    $("#search").click(function(){
        $("#cari").toggle();
    });
});
</script>
<?php 
include"content.php";
?>	
	
<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-footer footer-1">
						<div class="footer-heading"><h4>Menu Utama</h4></div>
						<div class="content">
						
							<h5><a href="news.html" class="blue">News</a></h5>
							<h5><a href="lifestyle.html" class="purple">LifeStyle</a></h5>
							<h5><a href="komunitas.html" class="red">Komunitas</a></h5>
							<h5><a href="kajian.html" class="green">Kajian</a></h5>
							<h5><a href="sosok.html" class="yellow">Sosok</a></h5>
							<h5><a href="kalam.html" class="orange">Kalam</a></h5>
						
						</div>
					</div>
					<div class="col-md-4 col-footer footer-2">
						<div class="footer-heading"><h4>Kategori</h4></div>
						<div class="content">
							<ul class="list-inline">
							<a href="kategori-21-ekobis.html">Ekobis</a>
							<a href="kategori-22-politik.html">Politik</a>
							<a href="kategori-56-jazirah.html">Jazirah</a>
							</ul>
							<ul class="list-inline">
							<a href="kategori-70-muslim-star.html">Muslim Star</a>
							<a href="kategori-55-bola.html">Bola+</a>
							</ul>
							<ul class="list-inline">
							<a href="kategori-57-muslimah.html">Muslimah</a>
							<a href="kategori-58-gen-m.html">Gen M</a>
							<a href="kategori-59-ormas.html">Ormas</a>
							</ul>
							<ul class="list-inline">
							<a href="kategori-60-ensiklopedi-muslim.html">Ensiklopedi Muslim</a>
							<a href="kategori-61-mozaik.html">Mozaik</a>
							<a href="kategori-62-hikmah.html">Hikmah</a>
							<a href="kategori-63-tafsir.html">Tafsir</a>
							<a href="kategori-64-haji-umrah.html">Haji & Umrah</a>
							</ul>
							<ul class="list-inline">
							<a href="kategori-65-khazanah.html">Khazanah</a>
							<a href="kategori-66-legenda.html">Legenda</a>
							</ul>
							<ul class="list-inline">
							<a href="kategori-67-islamic-view.html">Islamic View</a>
							<a href="kategori-68-opini.html">Opini</a>
							<a href="kategori-69-esai.html">Esai</a>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-footer footer-3">
						<div class="footer-heading"><h4>About Us</h4></div>
						<div class="content">
							<h6><a href="hal-tentang-kami.html" class="blue">Profil</a></h6>
							<h6><a href="hal-kontak-kami.html" class="purple">Kontak</a></h6>
						</div>
					</div>
				</div>
			</div>
			<div class="back-top" id="b-top">
				<div class="fa fa-angle-up"></div>
			</div>
		</div>
		<div class="copy-right">
			<p>Copyright 2016 - HarianAmanah </p>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
	
	<script>
	var mq = window.matchMedia( "(max-width: 767px)" );
	if (mq.matches) {
		
	} else {
		$(document).ready(function(){
		$(".dropdown").click(function(event){
        event.stopPropagation();
    });
    
});
	}
	
	</script>
	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
<script type="text/javascript">
$(document).ready(function(){

	var colormenu = $(location).attr('href');

	if (colormenu == "/news.html") 
		{
			$('#news').addClass('blue');
		}

});
</script>

</body>
</html>
