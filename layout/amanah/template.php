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
  $d2   = mysql_fetch_array($detail2);
?>

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
            echo "http://harianamanah.com/berita-$d[judul_seo].html";
        } elseif ($d1['video_seo'] != '') {
            echo "http://harianamanah.com/video-$d1[video_seo].html";
        }elseif ($d2['album_seo'] != '') {
            echo "http://harianamanah.com/foto-$d2[album_seo].html";
        } else {
            echo "http://harianamanah.com";
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
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">

	<!-- jQuery and Modernizr-->
  <script src="js/jquery-2.1.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<!-- mobile view -->
    <!-- <script type="text/javascript">
      var URL = window.location.href.split('/').pop();
      if(screen.width < 768)
      {
        document.location = 'http://harianamanah.com/m/'+URL;
      }
    </script> -->

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
			left: 0;
			bottom: 0;
			width: 100%;
		}

		#radio img {
			width: 400px;
    }

  .row.header-row-logo-bulat
  {
    padding: 10px 0;
    background-color: white;
    box-shadow: -9px -4px 20px 0px black;
    /* background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);     */
  }
  .container.nav-menu
  {
    background-color: #1c9fa7;
    background-image: -webkit-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);
    background-image: -moz-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);
    background-image: -o-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);
    background-image: linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);
  }
  nav#logo{
    position:relative;
    top: 50px;
    margin-bottom:0;
  }

  nav#logo img {
    padding:30px 0;
  }
  .logo{display:inline-block;}
</style>
</head>
<body>
<header>
  <!--Navigation-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="row header-row-logo-bulat">
      <div class="container" style="padding:0;">
        <a href="/">
          <img src="logo/assets/pp_ff.png" width="30" alt="Logo bulat Amanah - harianamanah.com">
        </a>
      </div>
    </div>
  </nav>
  <nav id="logo" class="navbar navbar-default" style="background-color:#ececec;">
    <div class="row">
      <div class="container" style="padding:0;">
        <a href="/">
          <div class="logo"><img src="images/amanah.png" width="350px" alt="Logo Amanah - harianamanah.com"></div>
        </a>
        <img style="margin-left:15px;" src="foto_banner/milad_amanah.jpg" alt="banner milad amanah">
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
          echo "<li><a href='$row[link]' style='color:#fff;padding:15px;font-weight:bold;' >$row[nama_menu] </a></li>";
        }?>
        </ul>
        <!-- <ul class="list-inline navbar-right top-social">
          <li><a href="https://www.facebook.com/harianamanah"><i class="fa fa-facebook fa-1x"></i></a></li>
          <li><a href="https://twitter.com/harianamanah"><i class="fa fa-twitter"></i></a></li>
          <li><a id="search"><i class="fa fa-search"></i></a></li>
        </ul> -->
        </div>
      </div>
      <div class="container sub-nav-menu">
      <ul>
        <?php
        $pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
        $subrubrik = mysql_query("SELECT link, nama_menu FROM menu WHERE id_parent = (SELECT id_menu FROM menu WHERE link = '$pop')");
        while($row = mysql_fetch_array($subrubrik)){
          echo "<li class='sub__rubrik'><a href='$row[link]'>$row[nama_menu]</a><i>&nbsp;&nbsp;&nbsp;&bull;</i></li>";
        }
        ?>
        <!-- <pre> -->
        <?php
        //  var_export($_SERVER);
        ?>
        <!-- </pre> -->
      </ul>
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
        <li><a href="/">HOME</a></li>
        <li><a href="hal-tentang-kami.html">TENTANG</a></li>
        <li><a href="hal-privacy-policy.html">KEBIJAKAN PRIVASI</a></li>
        <!-- <li><a href="">PEDOMAN&nbsp;MEDIA&nbsp;SIBER</a></li> -->
        <!-- <li><a href="">ADVERTISEMENT</a></li> -->
        <li><a href="hal-kontak-kami.html">KONTAK</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-menu-expand">
    <div class="container">
    <ul class="menu-utama">
      <li class="kategori">
        <span class="title-menu">KANAL</span>
        <ul>
        <?php
          $menu_sub = mysql_query("SELECT link, nama_menu FROM menu WHERE aktif='Ya' AND (id_parent = 8 || id_parent = 13 || id_parent = 14 || id_parent = 18 || id_parent = 20)");
          while($row = mysql_fetch_array($menu_sub)){
            echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
          }
          ?>
        </ul>
      </li>
      <li style="width:220px;">
        <span class="title-menu">MENU&nbsp;UTAMA</span>
        <ul class="block">
          <?php
          $menu_parent = mysql_query("SELECT link, nama_menu FROM menu WHERE aktif='Ya' AND id_parent='0'");
          while($row = mysql_fetch_array($menu_parent)){
            echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
          }
          ?>
        </ul>
      </li>
      <li style="width:260px;">
        <span class="title-menu">FIND&nbsp;US</span>
        <ul class="block">
          <li style="width:100%">
            <a href="https://play.google.com/store/apps/details?id=com.koran.harian.amanah&hl=in" text-decor="none" target="_blank">
							<img src="images/googleplay.png" alt="android" style="max-width:100%; height:55px; margin-top:10px;">
						</a>
					</li>
          <li style="width:100%;">
            <a href="https://itunes.apple.com/id/app/harian-amanah/id1186655456?mt=8" text-decor="none" target="_blank">
							<img src="images/appstore.png" alt="apple" style="max-width:100%; height:55px; margin-top: 10px; ">
						</a>
          </li>
        </ul>
      </li>
      <li style="width:200px;">
        <span class="title-menu">SOCIAL&nbsp;HUB</span>
        <ul class="block">
          <li><a href="https://www.facebook.com/harianamanah/" target="_blank"><i style='width:30px' class='fa fa-facebook'></i>Facebook</a></li>
          <li><a href="https://twitter.com/harianamanah" target="_blank"><i style='width:30px' class='fa fa-twitter'></i>Twitter</a></li>
          <li><a href="https://plus.google.com/115045050828571942973" target="_blank"><i style='width:30px' class='fa fa-google-plus'></i>Google+</a></li>
          <!-- <li><a href="">LinkedIn</a></li> -->
          <li><a href="https://www.instagram.com/harian_amanah/" target="_blank"><i style='width:30px' class='fa fa-instagram'></i>Instagram</a></li>
          <li><a href="https://www.youtube.com/channel/UCyk4N4qJdhduvO697WQKc1w" target='_blank'><i style='width:30px' class='fa fa-youtube'></i>Youtube</a></li>
        </ul>
      </li>
    </ul>
    </div>
  </div>
  <div class="copy-right">
    <p style="margin:0;">HarianAmanah&nbsp;&copy;&nbsp;2017</p>
  </div>
	</footer>
	<!-- Footer -->
	<!-- JS -->
<script type="text/javascript">
$(document).ready(function()
{
	$(window).bind('scroll',function()
	{
		if ($(this).scrollTop()>900){
			$("#b-top").fadeIn();
      } else {
			$("#b-top").fadeOut(500);
		}
	});

	$("#b-top").click(function(){
		$("html,body").animate({scrollTop:0},1000);
		return false;
	});
});

  $(".flex-container .item-flex:first-child").addClass('grid-thumb-big');
  $(".flex-container .item-flex + .item-flex").addClass('grid-thumb-medium');
  $(".item:first, li[data-target='#carousel-example-generic']:first").addClass('active');
  $("#carousel-example-generic").carousel({interval: 3000});
  </script>
</body>
</html>
