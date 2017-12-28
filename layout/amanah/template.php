<?php
define ('SITE_URL', site_URL());

$automobile = new Mobile_Detect;
$pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
if($automobile->isMobile()){
  header('Location: http://m.harianamanah.com/'.$pop);
  exit();
}
error_reporting(0);

$detail=mysql_query("SELECT * FROM berita,users,kategori
			WHERE users.username=berita.username
			AND kategori.id_kategori=berita.id_kategori
			AND judul_seo='$_GET[judul]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d['tanggal']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="refresh" content="900">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="author" content="harianamanah.com">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="googlebot" content="noindex, nofollow" />
  <meta name="googlebot-news" content="noindex, nofollow" />
  <meta name="title" content="<?php
  if($_GET['menu']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[menu]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;?>" />
  <meta name="description" content="<?php
  if($d['isi_berita'] != '')
    echo desc($d['isi_berita']);
  else
    echo "Indeks berita islam terkini dari Dunia islam, Olahraga, Tekno, Ekonomi, Jazirah, politik, halal destination, Islamic View, berita haji dan umroh dan international";
  ?>" />
  <meta name="image"  content="<?php
  if($d['gambar']!=''){
    echo "http://harianamanah.com/foto_berita/$d[gambar]";
  }else{
    echo "http://harianamanah.com/images/amanah.jpg";
  }
  ?>" />
  <title><?php
  if($_GET['menu']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[menu]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;
  ?></title>
  <meta property="og:title" content="<?php
  if($_GET['menu']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[menu]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;?>" />
  <meta property="og:description" content="<?php
  if($d['isi_berita'] != '')
    echo desc($d['isi_berita']);
  else
    echo "Indeks berita islam terkini dari Dunia islam, Olahraga, Tekno, Ekonomi, Jazirah, politik, halal destination, Islamic View, berita haji dan umroh dan international";
  ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php
  if ($d['judul_seo'] != '') {
      echo "http://harianamanah.com/berita-$d[judul_seo]";
  } else {
      echo "http://harianamanah.com";
  }?>" />
  <meta property="og:image" content="<?php
  if($d['gambar']!=''){
  echo "http://harianamanah.com/foto_berita/$d[gambar]";
  }else{
  echo "http://harianamanah.com/images/amanah.jpg";
  }?>" />
  <meta property="og:site_name" content="harianamanah.com" />
  <meta property="og:locale" content="id_ID" />
  <meta property="fb:app_id" content="490830364408744" />
  <meta property="fb:pages" content="490830364408744" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@harianamanah" />
  <meta name="twitter:site:id" content="@harianamanah" />
  <meta name="twitter:creator" content="@harianamanah" />
  <meta name="twitter:title" content="<?php
  if($_GET['menu']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[menu]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;?>" />
  <meta name="twitter:url" content="<?php
  if ($d['judul_seo'] != '') {
      echo "http://harianamanah.com/berita-$d[judul_seo]";
  } else {
      echo "http://harianamanah.com";
  }?>" />
  <meta name="twitter:description" content="<?php
  if($d['isi_berita'] != '')
    echo desc($d['isi_berita']);
  else
    echo "Indeks berita islam terkini dari Dunia islam, Olahraga, Tekno, Ekonomi, Jazirah, politik, halal destination, Islamic View, berita haji dan umroh dan international";
  ?>" />
  <meta name="twitter:image" content="<?php
  if($d['gambar']!=''){
    echo "http://harianamanah.com/foto_berita/$d[gambar]";
  }else{
    echo "http://harianamanah.com/images/amanah.jpg";
  }
  ?>" />

  <!-- Bootstrap Core CSS -->
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo SITE_URL;?>css/structure.css">
  <link rel="stylesheet" href="<?php echo SITE_URL;?>owl-carousel/owl.carousel.css" >
  <link rel="stylesheet" href="<?php echo SITE_URL;?>owl-carousel/owl.theme.css" >
  <link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css">
  <link rel="stylesheet" href="<?php echo SITE_URL;?>css/new.css">
  <link rel="stylesheet" href="<?php echo SITE_URL;?>font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900">
  <!-- jQuery and Modernizr-->
  <script src="<?php echo SITE_URL;?>js/jquery-2.1.1.js"></script>
  <script src="<?php echo SITE_URL;?>js/jquery.lazy.min.js"></script>
  <script src="<?php echo SITE_URL;?>js/jquery.lazy.plugins.min.js"></script>
  <script src="<?php echo SITE_URL;?>js/jquery-scrolltofixed-min.js"></script>
  <script src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
  <script type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "NewsArticle",
    "headline": "<?php
  if($d['judul'] !=''){
    echo "$d[judul]";
  }else{
    echo "Kiblat Berita Islami - harianamanah.com";
  }?>",
    "datePublished": "<?php echo $d['tanggal']?>",
    "description": "<?php
  if($d['isi_berita'] != '')
    echo desc($d['isi_berita']);
  else
    echo "Indeks berita islam terkini dari Dunia islam, Olahraga, Tekno, Ekonomi, Jazirah, politik, halal destination, Islamic View, berita haji dan umroh dan international";
  ?>",
    "image": {
      "@type": "ImageObject",
      "height": "350",
      "width": "595",
      "url": "<?php
  if($d['gambar']!=''){
    echo "http://harianamanah.com/foto_berita/$d[gambar]";
  }else{
    echo "http://harianamanah.com/images/amanah.jpg";
  }
  ?>"
    },
    "author": "harianamanah",
    "publisher": {
      "@type": "Organization",
      "logo": {
        "@type": "ImageObject",
        "url": "http://harianamanah.com/logo/assets/pp_ff.png"
      },
      "name": "harianamanah"
    },
    "articleBody": "<?php echo fullbody($d['isi_berita'])?>"
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
			width: 100%;
		}

		#radio img {
      width: 100%;
      height:80px;
    }

  .row.header-row-logo-bulat
  {
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
    top: 60px;
    margin-bottom:35px;
  }

  nav#logo img {
    padding:15px 0 10px;
  }
  .logo{display:inline-block;}
</style>
<?php
  include_once "heatmap.php";
  include_once "analyticstracking.php";
  include_once "adsense.php";
  ?>
</head>
<body>
<header>
  <!--Navigation-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="row header-row-logo-bulat">
      <div class="container" style="padding:0;">
        <a href="/" style="display:inline-block; padding:13px 30px 13px 0;border-right:1px solid rgba(38, 41, 50, 0.12);">
          <img src="<?php echo SITE_URL?>logo/assets/pp_ff.png" width="30" alt="Logo bulat Amanah - harianamanah.com">
        </a>
        <div id="cari">
          <div class="mid1">
          <form method="GET" action="search">
            <input type="text" name="query-search" placeholder='Cari berita dan peristiwa'>
            <button><i class="fa fa-circle-thin"></i></button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <nav id="logo" class="navbar navbar-default" style="background-color:#ececec;">
    <div class="row">
      <div class="container" style="padding:0;">
        <a href="/">
          <div class="logo"><img src="<?php echo SITE_URL?>images/amanah.png" width="400px" alt="Logo Amanah - harianamanah.com"></div>
        </a>
        <!-- <img width="665" src="foto_banner/milad_amanah.jpg" alt="banner milad amanah"> -->
      <div style="vertical-align:middle;display:inline-block;">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Banner Top 2 -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:665px;height:120px"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="6871376407"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script></div>
      </div>
    </div>
    <?php
      if($_GET['menu']):
        $color = mysql_fetch_array(mysql_query("SELECT gradient, color, link FROM menu WHERE link = '$_GET[menu]'"));
      elseif($_GET['judul']):
        $color = mysql_fetch_array(mysql_query("SELECT gradient, color, link FROM menu WHERE id_menu = (SELECT id_parent FROM menu WHERE id_menu = (SELECT id_kategori FROM berita WHERE judul_seo = '$_GET[judul]'))"));
      elseif($_GET['id']):
        $color = mysql_fetch_array(mysql_query("SELECT gradient, color, link FROM menu WHERE id_menu = (SELECT id_parent FROM menu WHERE id_menu = '$_GET[id]')"));
      else:
        $color = ["color" => "#1c9fa7"];
      endif;
    ?>
    <div class="row">
    <div class="container nav-menu" style="padding:0;<?php echo $color['gradient']?>">
      <div class="navbar-header">
        <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0;position:relative;">
        <ul class="nav navbar-nav" style="position:relative;">
          <?php
          $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY menu_order");
          while( $row = mysql_fetch_array($result)){
            $idp = $row['id_menu'];
            echo "
              <li data-caption= \"$row[link]\" class=\"main-menu\" style=\"position:static;\">
                <a href='".SITE_URL.$row[link]."' style='color:#fff;font-size:17px;padding:13px 15px;font-weight:bold;text-transform:uppercase;' >$row[nama_menu]</a>
                <ul class=\"menu-show sub-nav-menu ".strtolower($row[link])."\">";
                $sub_rubrik = mysql_query("SELECT link, nama_menu FROM menu WHERE id_parent = '$row[id_menu]' AND aktif = 'Ya'");
                while($row_sub = mysql_fetch_array($sub_rubrik)){
                echo "
                    <li class=\"sub__rubrik\">
                      <a href='".SITE_URL.$row_sub[link]."' style='font-size:15px;font-weight:bolder;padding:10px 0;display:inline-block;'>$row_sub[nama_menu]</a>
                    </li>";
                }
                echo "</ul></li>";
          }?>
        </ul>
        <ul class="sub-nav-menu sub-menu-rubrik menu-show">
        <?php
          // $pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
          // if($pop){
            // $sub_rubrik = mysql_query("SELECT link, nama_menu FROM menu WHERE id_parent = (SELECT id_menu FROM menu WHERE link = '$pop') AND aktif = 'Ya'");
          // }else{
          //   $sub_rubrik = mysql_query("SELECT link, nama_menu FROM menu WHERE id_parent = (SELECT id_parent FROM menu WHERE link = '$pop') AND aktif = 'Ya'");
          // }
          if($_GET['menu']):
            $sub_rubrik = mysql_query("SELECT nama_menu, link FROM menu WHERE id_parent = (SELECT id_menu FROM menu WHERE link = '$_GET[menu]')");
          elseif($_GET['judul']):
            $sub_rubrik = mysql_query("SELECT nama_menu, link FROM menu WHERE id_parent = (SELECT id_parent FROM menu WHERE id_menu = (SELECT id_kategori FROM berita WHERE judul_seo = '$_GET[judul]'))");
          elseif($_GET['id']):
            $sub_rubrik = mysql_query("SELECT nama_menu, link FROM menu WHERE id_parent = (SELECT id_parent FROM menu WHERE id_menu = '$_GET[id]')");
          endif;
          
          while($row_sub = mysql_fetch_array($sub_rubrik)){
          echo "
            <li class=\"sub__rubrik\">
              <a href='".SITE_URL.$row_sub[link]."' style='font-size:15px;font-weight:bolder;padding:10px 0;display:inline-block;'>$row_sub[nama_menu]</a>
              <i>&nbsp;&nbsp;&nbsp;•</i>
            </li>";
          }
          echo "</ul>";
        ?>
      </div>
      </div>
    </div>
  </nav>
</header>
<?php 
  include_once "embed.php";
  include_once "konten.php"; 
?>
<!-- <div class="clearfix"></div> -->
<footer>
  <div class="footer-logo">
    <div class="gambar-footer">
      <a href="/" class="go-top"><span class="fa fa-angle-up" aria-hidden="true" style="color:#1f2126;"></span></a>
            <!-- <a href="#">
                <img src="assets/pp_ff.png" width="38px">
            </a> -->
    </div>
    <!-- <div class="container">
      <img src="logo/assets/pp_ff.png"  width="32px" title="Amanah" alt="logo amanah - harianamanah.com">
    </div> -->
  </div>
  <div class="footer-menu-expand">
    <div class="container">
    <ul class="menu-utama">
      <li class="kategori">
        <span class="title-menu">KANAL</span>
        <ul>
        <?php
          $menu_sub = mysql_query("SELECT link, nama_menu FROM menu WHERE aktif='Ya' AND id_parent != 0;");
          while($row = mysql_fetch_array($menu_sub)){
            echo "<li><a href='".SITE_URL.$row[link]."'>$row[nama_menu]</a></li>";
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
            echo "<li><a href='".SITE_URL.$row[link]."'>$row[nama_menu]</a></li>";
          }
          ?>
        </ul>
      </li>
      <li style="width:200px;">
        <span class="title-menu">SOCIAL&nbsp;HUB</span>
        <ul class="block">
          <li><a href="https://www.facebook.com/harianamanah/" target="_blank"><i style='margin-right:5px;' class='fa fa-fw fa-facebook'></i>Facebook</a></li>
          <li><a href="https://twitter.com/harianamanah" target="_blank"><i style='margin-right:5px;' class='fa fa-fw fa-twitter'></i>Twitter</a></li>
          <li><a href="https://www.instagram.com/harian_amanah/" target="_blank"><i style='margin-right:5px;' class='fa fa-fw fa-instagram'></i>Instagram</a></li>
          <li><a href="https://plus.google.com/115045050828571942973" target="_blank"><i style='margin-right:5px;' class='fa fa-fw fa-google-plus'></i>Google+</a></li>
          <li><a href="https://www.linkedin.com/company/13466134"><i style='margin-right:5px;' class='fa fa-fw fa-linkedin'></i>LinkedIn</a></li>
          <li><a href="https://www.youtube.com/channel/UCyk4N4qJdhduvO697WQKc1w" target='_blank'><i style='margin-right:5px;' class='fa fa-fw fa-youtube'></i>Youtube</a></li>
        </ul>
      </li>
      <li style="width:260px;">
        <ul class="block">
          <li style="width:100%">
            <a href="https://play.google.com/store/apps/details?id=com.koran.harian.amanah&hl=in" text-decor="none" target="_blank">
							<img src="<?php echo SITE_URL?>images/googleplay.png" alt="android" style="max-width:100%; height:55px; margin-top:10px;">
						</a>
					</li>
          <li style="width:100%;">
            <a href="https://itunes.apple.com/id/app/harian-amanah/id1186655456?mt=8" text-decor="none" target="_blank">
							<img src="<?php echo SITE_URL?>images/appstore.png" alt="apple" style="max-width:100%; height:55px; margin-top: 10px; ">
						</a>
          </li>
        </ul>
      </li>
    </ul>
    </div>
  </div>
  <div class="footer-menu">
    <div class="container">
      <ul class="must-know">
        <li><a style="color:#EFCB03;" href="<?php echo SITE_URL?>hal-tentang-kami">TENTANG KAMI</a></li>
        <li><a style="color:#EFCB03;" href="<?php echo SITE_URL?>hal-redaksi">REDAKSI</a></li>
        <li><a style="color:#EFCB03;" href="<?php echo SITE_URL?>hal-privacy-policy">KEBIJAKAN PRIVASI</a></li>
        <li><a style="color:#EFCB03;" href="<?php echo SITE_URL?>hal-kontak-kami">KONTAK</a></li>
        <li><a style="color:#EFCB03;" href="<?php echo SITE_URL?>sitemap">SITEMAP</a></li>
      </ul>
    </div>
  </div>
  <div class="copy-right">
    <div class="container">
      <p style="margin:0;">&copy;&nbsp;2017&nbsp;PT. Harian Amanah Alharam - All Rights Reserved.</p>
    </div>
  </div>
	</footer>
	<!-- Footer -->
  <!-- JS -->
<script type="text/javascript">
  $(document).ready(function()
  {
    $(window).scroll(function(){
      console.log(window.scrollY-$('footer').height());
    })
    
    var $allVideo = $('iframe[src*="www.youtube.com"]'),
        $fluidEle = $('.isi-berita, .main-video');

    $allVideo.each(function(){
      $(this).attr('data-aspectratio', this.height / this.width).removeAttr('height').removeAttr('width');
    });

    $(window).resize(function(){
      var newWidth = $fluidEle.width();

      $allVideo.each(function(){
        var $el = $(this);
        $el.width(newWidth).height(newWidth * $el.attr('data-aspectratio'));
      });
    }).resize();
    // $("#scroll-fixed").scrollToFixed({
    //   marginTop: 25
    // });
    $("#scroll-fixed").scrollToFixed({
      marginTop: function(){
        var marginTop = $(window).height() - $("#scroll-fixed").outerHeight(true) - 20;
        if(marginTop >= 0) return 20;
        return marginTop;
        }, 
      // postAbsolute: function(){$("#scroll-fixed").css('left', '0 !important');},
      limit: $('footer').offset().top - $('#scroll-fixed').outerHeight(true) - 100,
      unfixed: function(){$("#scroll-fixed").css({
        left: 0,
        top: $('footer').offset().top - $('#scroll-fixed').outerHeight(true) - 330
      })}
    })
    
    $("#ads_news").scrollToFixed({
      marginTop: 60
    });

    $('.lazy').lazy();
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
    
    $(".main-menu").hover(function(){
      $(this).find('.menu-show').stop(true, true).delay(200).fadeIn(500);}, 
      function(){$(this).find('.menu-show').stop(true, true).delay(200).fadeOut(500);}
    );
      
    $('.go-top').click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
    });
  });

  $(".flex-container .item-flex:first-child").addClass('grid-thumb-big');
  $(".flex-container .item-flex + .item-flex").addClass('grid-thumb-medium');
  $(".item:first, li[data-target='#carousel-example-generic']:first").addClass('active');
  $("#carousel-example-generic").carousel({interval: 3000});
  </script>
</body>
</html>