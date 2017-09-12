<?php
session_start();
  include "../config/koneksi.php";
  include "../config/library.php";
  include "../config/fungsi_indotgl.php";
  include "../config/fungsi_combobox.php";
  include "../config/class_paging.php";

  error_reporting(0);

        $detail=mysql_query("SELECT * FROM berita,users,kategori
                      WHERE users.username=berita.username
                      AND kategori.id_kategori=berita.id_kategori
                      AND judul_seo= '$_GET[judul]'");
				$d   = mysql_fetch_array($detail);
				$tgl = tgl_indo($d['tanggal']);
				$baca = $d['dibaca']+1;

        $detail1=mysql_query("SELECT * FROM video WHERE video_seo = $_GET[judul]");
        $d1   = mysql_fetch_array($detail1);

        $detail2=mysql_query("SELECT * FROM gallery,users,album
              WHERE users.username=album.username
              AND album.id_album=gallery.id_album
              AND album_seo='$_GET[judul]'");
        $d2   = mysql_fetch_array($detail2);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
    <title><?php
        if($d['judul'] !=''){
            echo"$d[judul]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d1['jdl_video'] !=''){
            echo"$d1[jdl_video]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d2['jdl_album'] !=''){
            echo"$d2[jdl_album]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }else{
            echo"Media Islam Indonesia, Berita Islam Terkini, Media Muslim , Dunia Islam, Berita Haji Umroh || Harian Amanah";
        }
        ?></title>
    <meta name="title" content="<?php
	if($d['judul'] !=''){
            echo"$d[judul]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d1['jdl_video'] !=''){
            echo"$d1[jdl_video]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d2['jdl_album'] !=''){
            echo"$d2[jdl_album]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }else{
            echo"Media Islam Indonesia, Berita Islam Terkini, Media Muslim , Dunia Islam, Berita Haji Umroh || Harian Amanah";
        }
        ?>">
    <meta name="description" content="Media Islam Indonesia, Berita Islam Terkini, Media Muslim , Dunia Islam, Berita Haji Umroh || Harian Amanah">
    <meta name=keywords content="situs, media muslim ,berita,berita islam, muslim, populer, indonesia, hijab, sunnah, sejarah, ummat, dakwah, foto, video, gaya, hidup, halal, haram, ramadhan, idul, fitri, adha, qurban, zakat, puasa, shalat, wudhu, quran, hadist, syariah" />
    <meta name="author" content="">
	<meta name="image"  content="<?php
	if($d['gambar']!=''){
	echo "http://harianamanah.com/foto_berita/$d[gambar]";
	}elseif($d1['gbr_video']!=''){
	echo "http://harianamanah.com/img_video/$d1[gbr_video]";
	}elseif($d2['gbr_album']!=''){
	echo "http://harianamanah.com/img_album/$d2[gbr_album]";
	}else{
	echo "http://harianamanah.com/images/amanah.jpg";
	}
	?>" />
  		<meta property="og:title" content="<?php
       if($d['judul'] !=''){
            echo"$d[judul]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d1['jdl_video'] !=''){
            echo"$d1[jdl_video]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }elseif($d2['jdl_album'] !=''){
            echo"$d2[jdl_album]" ." | Berita Islam Terkini HarianAmanah Media Islam Indonesia";
        }else{
            echo"Media Islam Indonesia, Berita Islam Terkini, Media Muslim , Dunia Islam, Berita Haji Umroh || Harian Amanah";
        }
        ?>"/>

        <meta property="og:description" content="Media Islam Indonesia, Berita Islam Terkini, Bersama Ummat Eratkan Ukhuwah!"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php

        if ($d['judul_seo'] != '') {
            echo "http://www.harianamanah.com/berita-$d[judul_seo].html";
        } elseif ($d1['video_seo'] != '') {
            echo "http://www.harianamanah.com/video-$d1[video_seo].html";
        }elseif ($d2['album_seo'] != '') {
            echo "http://www.harianamanah.com/foto-$d2[album_seo].html";
        } else {
            echo "http://www.harianamanah.com";
        }
        ?>"/>
        <meta property="og:image" content="<?php
      if($d['gambar']!=''){
		echo "http://harianamanah.com/foto_berita/$d[gambar]";
		}elseif($d1['gbr_video']!=''){
		echo "http://harianamanah.com/img_video/$d1[gbr_video]";
		}elseif($d2['gbr_album']!=''){
		echo "http://harianamanah.com/img_album/$d2[gbr_album]";
		}else{
		echo "http://harianamanah.com/images/amanah.jpg";
		}
        ?>"/>
        <meta property="og:site_name" content="harianamanah.com"/>
        <meta property="fb:app_id" content="168067490271817"/>
        <meta name="adx:sections" content="<?php echo "$d[nama_kategori]"; ?>"/>
        <meta name="theme-color" content="#009688">
        <meta name="msapplication-navbutton-color" content="#009688">
        <meta name="apple-mobile-web-app-status-bar-style" content="#009688">

  <link rel="shortcut icon" href="../favicon.png">
	<link rel="stylesheet" type="text/css" href="css/dream.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/Berita.css">
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    <!--Line Share -->
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    <script type="text/javascript">LineIt.loadButton();</script>
	<!--Bootstrap Theme-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/sidemenu.css">
	<!-- JS -->
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
	<!--Owl Carousel-->
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<!--  jQuery 1.7+  -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<!-- Include js plugin -->
	<script src="js/owl.carousel.js"></script>
    <title><?php
        if($d['judul'] !=''){
            echo"$d[judul]";
        }else{
            echo"Harian Amanah || Bersama Ummat Tegakkan Ukhuwah!";
        }
        ?></title>
	<!--Owl End-->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php if ($_GET['module']=='news' ||$_GET['module']=='lifestyle' ||$_GET['module']=='komunitas' ||$_GET['module']=='kajian' ||$_GET['module']=='sosok' ||$_GET['module']=='kalam'||$_GET['module']=='detailberita'): ?>
<?php else: ?>
	<?php if (empty($_SESSION['cek'])): ?>
		<div id="loader">
			<div class="page-loader">
			<center>
				<img src="assets/amanah-flash.png" width="300px" alt="static">
				<img src="assets/loader.gif" width="130px" alt="dinamis" style="margin-top:50px;">
			</center>
			</div>
		</div>
		<?php $_SESSION['cek'] = $_GET['module']; ?>
	<?php else: ?>
	<?php endif ?>
<?php endif ?>
	<header class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#menuSamping">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="tutup"><span class="big-close"></span></button>
				<a href="./" class="navbar-brand"><img src="assets/amanah1.png" class="img-responsive" alt="logo-amanah"></a>
				<form method="POST" action="hasil-pencarian.html">
					<input type="text" name="kata" placeholder="Cari Di Sini">
				</form>
			</div>
		</div>
		<div id="menuSamping" class="sidenav">
      <!-- <p>KATEGORI</p> -->
      <h2 class="caption">HARIANAMANAH</h2>
      <!-- <ul class="nav navbar-nav">
        <li><a class='tagging'>TEST</a></li>
      </ul> -->
      <h2 class="caption">KANAL</h2>
			<ul class="nav navbar-nav">
					<?php
			$result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY id_menu");
			while( $row = mysql_fetch_array($result)){
				$idp = $row['id_menu'];
				if($row['nama_menu']!== 'Info Alharam'){
				echo"
				<li>
				<a href='$row[link]' class='tagging'  >$row[nama_menu] </a>
				<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='fa fa-angle-down panah6'></span></a>
				<ul class='dropdown-menu'>
				";
				}elseif(($row['nama_menu'] == 'Info Alharam')){
				echo"
				<li>
				<a href='$row[link]' class='tagging'  >$row[nama_menu] </a>
				<ul class='dropdown-menu'>
				";
				}
			$result1 = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent=$idp ORDER BY id_menu");
			while( $row1 = mysql_fetch_array($result1)){
				echo"
								<li><a href='$row1[link]'>$row1[nama_menu]</a></li>
							";
			}
				echo"
					</ul>
				</li>
				";
			}
			?>
				</ul>
		</div>
	</header>
	<section id="main">
<?php include "content.php"; ?>
	<footer>
		<a href="#" class="go-top"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
	 	<div class="gambar-footer">
		 	<a href="#">
		 		<img src="assets/pp_ff.png" width="38px">
		 	</a>
	 	</div>
	 	<div class="menu-footer">
		 	<a>TENTANG</a>
      <a>PRIVASI</a>
      <a>KONTAK</a>
	 	</div>
    <div class="isi-footer">
      <span class="copyright">
        HarianAmanah&nbsp;&copy;&nbsp;2017
      </span>
    </div>
	</footer>
</section>
<script>
	$('#loader').fadeOut('slow');
</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#owl-demo").owlCarousel({
			navigation : false,
			slideSpeed : 200,
			paginationSpeed : 400,
			singleItem:true,
			autoplay:true,
			pagination:false
			});

			//iklan and tag
			$('.close-headline').click(function(event){
				event.preventDefault();
				$(this).parents('.headline-text').fadeOut('slow');
			});

			$('.close-iklan').click(function(event){
				event.preventDefault();
				$(this).parents('.iklan-fixed').fadeOut('slow');
			});

		// Show or hide the sticky footer button
		// $(window).scroll(function() {
		// 	if ($(this).scrollTop() > 400) {
		// 		$('.go-top').fadeIn(200);
		// 	} else {
		// 		$('.go-top').fadeOut(200);
		// 	}
		// });

		// Animate the scroll to top
		$('.go-top').click(function(event) {
			event.preventDefault();

			$('html, body').animate({scrollTop: 0}, 300);
		})

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var arah = 1;
			$(".tutup").hide();

			$(".navbar-toggle").click(function(event) {
				$("#menuSamping").css('width', '100%');
				// $("#main").css('margin-left', '220px');
				// $("#main").css('background', 'rgba(0, 0, 0, 0.4)');
				$(".navbar-toggle").hide();
				$(".tutup").show();
			});

			$(".tutup").click(function(event) {
				$("#menuSamping").css('width', '0');
				// $("#main").css('margin-left', '0');
				// $("#main").css('background', 'white');
				$(".tutup").hide();
				$(".navbar-toggle").show();
			});

			$("#main").click(function(event) {
				$("#menuSamping").css('width', '0');
				// $("#main").css('margin-left', '0');
				// $("#main").css('background', 'white');
				$(".navbar-toggle").show();
				$(".tutup").hide();
			});
		});
	</script>
		<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>
<script>
    $('#myModal').modal('show');

    setTimeout(function(){
        $('#myModal').modal('hide')
    }, 5000);
</script>

</body>