<?php 
include "config/koneksi.php";
error_reporting(0);
	$detail=mysql_query("SELECT * FROM berita,users,kategori    
			WHERE users.username=berita.username 
			AND kategori.id_kategori=berita.id_kategori 
			AND judul_seo='$_GET[judul]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d['tanggal']);
	$baca = $d['dibaca']+1;

	$detail1=mysql_query("SELECT * FROM video WHERE video_seo ='$_GET[judul]'");
	$d1   = mysql_fetch_array($detail1);

	$detail2=mysql_query("SELECT * FROM gallery,users,album    
			WHERE users.username=album.username 
			AND album.id_album=gallery.id_album 
			AND album_seo='$_GET[judul]'");
	$d2   = mysql_fetch_array($detail2); ?>
<!DOCTYPE html>
<html lang="en"
xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8233268686927754",
            enable_page_level_ads: true
        });
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=1056" initial-scale=1 />
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
	echo "http://harianamanah.id/foto_berita/$d[gambar]";
	}elseif($d1['gbr_video']!=''){
	echo "http://harianamanah.id/img_video/$d1[gbr_video]";
	}elseif($d2['gbr_album']!=''){
	echo "http://harianamanah.id/img_album/$d2[gbr_album]";
	}else{
	echo "http://harianamanah.id/images/amanah.jpg";
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
            echo "http://www.harianamanah.id/berita-$d[judul_seo].html";
        } elseif ($d1['video_seo'] != '') {
            echo "http://www.harianamanah.id/video-$d1[video_seo].html";
        }elseif ($d2['album_seo'] != '') {
            echo "http://www.harianamanah.id/foto-$d2[album_seo].html";
        } else {
            echo "http://www.harianamanah.id";
        }

        ?>"/>
        <meta property="og:image" content="<?php
        
      if($d['gambar']!=''){
		echo "http://harianamanah.id/foto_berita/$d[gambar]";
		}elseif($d1['gbr_video']!=''){
		echo "http://harianamanah.id/img_video/$d1[gbr_video]";
		}elseif($d2['gbr_album']!=''){
		echo "http://harianamanah.id/img_album/$d2[gbr_album]";
		}else{
		echo "http://harianamanah.id/images/amanah.jpg";
		}
        ?>"/>
        <meta property="og:site_name" content="harianamanah.id"/>
        <meta property="fb:app_id" content="168067490271817"/>
        <meta name="adx:sections" content="<?php echo "$d[nama_kategori]"; ?>"/>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
    <link href="css/structure.css" rel="stylesheet">
	

	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	<style>
	.tesji img{
		width:100%;
	}
	</style>
    
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/paging.css">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- mobile view -->
    <script type="text/javascript">
      var URL = window.location.href.split('/').pop();
      if(screen.width < 768)
      {
        document.location = 'http://localhost/harianamanah/m/'+URL;
      }
    </script>
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

		#radio{
			text-align: center;
			position: relative;
			width: fit-content;
			height: fit-content;
		}

		#radio button{
			color: white;
			background: #e74c3c;
			position: absolute;
			left: 30px;
			bottom: 30px;
			font-size: 35px;	
			width: 50px;
			height: 50px;
			border-radius: 50px;
			border: 1px solid transparent;
			cursor: pointer;
		}

		#radio audio{
			position: absolute;
			left: 5px;
			bottom: 20px;
			width: 230px;
		}

		#radio img {
			width: 400px;
		}
</style>
<style>
  .row.header-row-logo-bulat
  {
    padding: 10px 0;
    background-color: #052844;
    background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);    
  }
  .container.nav-menu
  {
    background-color: #052844;
    background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);
    
  }
  nav#logo{
    position:relative;
    top: 50px;
  }

  nav#logo img {
    padding:30px 0;
  }
</style>
	</head>

<body>
<header>
  <!--Navigation-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="row header-row-logo-bulat">
      <div class="container" style="padding:0;">
        <a href="">
          <img src="logo/assets/pp_ff.png" width="30" alt="Logo bulat Amanah - harianamanah.com">
        </a>
      </div>
    </div>
  </nav>
  <nav id="logo" class="navbar navbar-default" style="background-color:#F1F1F1;">
    <div class="row">
      <div class="container" style="padding:0;">
        <a href="">
          <div class="logo"><img src="images/amanah.png" width="350px" alt="Logo Amanah - harianamanah.com"></div>
        </a>
      </div>
    </div>
    <div class="row">
    <div class="container nav-menu" style="padding:0;">
      <div class="navbar-header">
        <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0;">
        <ul class="nav navbar-nav">
        <?php
        $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY id_menu");
        while( $row = mysql_fetch_array($result)){
          $idp = $row['id_menu'];
          echo "<li class='dropdown' ><a href='$row[link]' class='dropdown-toggle' data-toggle='dropdown' style='color:#fff;padding:10px 25px;' >$row[nama_menu] </a></li>";
        }?>		
        </ul>
        <!-- <ul class="list-inline navbar-right top-social">
          <li><a href="https://www.facebook.com/harianamanah"><i class="fa fa-facebook fa-1x"></i></a></li>
          <li><a href="https://twitter.com/harianamanah"><i class="fa fa-twitter"></i></a></li>
          <li><a id="search"><i class="fa fa-search"></i></a></li>
        </ul> -->
        </div>
      </div>
    </div>
  </nav>
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

<?php include "konten.php"; ?>	

<footer>
  <div class="footer-logo">
    <div class="container">
      <img src="logo/assets/pp_ff.png"  width="32px" title="Amanah" alt="logo amanah - harianamanah.com">
    </div>
  </div>
  <div class="footer-menu">
    <div class="container">
      <ul class="must-know">
        <li><a href="">HOME</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">PRIVACY POLICY</a></li>
        <!-- <li><a href="">TEAM</a></li> -->
        <li><a href="">ADVERTISEMENT</a></li>
        <li><a href="">CONTACT US</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-menu-expand">
    <div class="container">
    <ul class="menu-utama">
      <li>
        <span class="title-menu">KATEGORI</span>
        <ul>
          <li>Ekobis</li>
          <li>Politik</li>
          <li>Jazirah</li>
          <li>Muslim Star</li>
          <li>Bola+</li>
          <li>Muslimah</li>
          <li>Gen M</li>
          <li>Ormas</li>
          <li>Ensiklopedi Muslim</li>
          <li>Mozaik</li>
          <li>Hikmah</li>
          <li>Tafsir</li>
          <li>Haji & Umrah</li>
          <li>Khazanah</li>
          <li>Legenda</li>
          <li>Islamic View</li>
          <li>Opini</li>
          <li>Esai</li>
        </ul>
      </li>
      <li>
        <span class="title-menu">MENU UTAMA</span>
        <ul class="block">
          <li>News</li>
          <li>LifeStyle</li>
          <li>Komunitas</li>
          <li>Kajian</li>
          <li>Sosok</li>
          <li>Kalam</li>
        </ul>
      </li>
      <li>
        <span class="title-menu">FIND US</span>
        <ul class="block">
          <li>
            <a href="https://play.google.com/store/apps/details?id=com.koran.harian.amanah&hl=in" text-decor="none" target="_blank">
							<img src="images/googleplay.png" alt="android" style="max-width:100%; height:55px; margin-top:10px;">
						</a>
					</li>
          <li>
            <a href="https://itunes.apple.com/id/app/harian-amanah/id1186655456?mt=8" text-decor="none" target="_blank">
							<img src="images/appstore.png" alt="apple" style="max-width:100%; height:55px; margin-top: 10px; ">
						</a>
          </li>
        </ul>
      </li>
    </ul>
    </div>
  </div>
		<!-- <div class="wrap-footer">
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
						<center>
							<h4 style="color:#464646; font-size:20px; margin-top:25px;">Aplikasi</h4>
							<div class="app" style="margin-top: 15px;">
								
							</div>
						</center>
					</div>
				</div>
			</div>
			<div class="back-top" id="b-top">
				<div class="fa fa-angle-up"></div>
			</div>
		</div> -->
		<div class="copy-right">
			<p style="margin:0;">HarianAmanah &copy; 2017</p>
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
<script type="text/javascript">
$(document).ready(function()
{
	$(window).bind('scroll',function()
	{
		if ($(this).scrollTop()>900) 
		{
			$("#b-top").fadeIn();
		}else{
			$("#b-top").fadeOut(500);
		}
	});

	$("#b-top").click(function(){
		$("html,body").animate({scrollTop:0},1000);
		return false;
	});
});
</script>
<script type="text/javascript">
  	     $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
     
            $('#myCarousel').carousel(id);
        });
	
	
	$("#myCarousel").carousel({interval: false}); 
  </script>
</body>
</html>
