<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";
include "../config/desc.php";
include "../config/Mobile_Detect.php";
define ('SITE_URL', site_URL());

$automobile = new Mobile_Detect;
$pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
if(!$automobile->isMobile()){
  header('Location:'.SITE_URL.$pop);
  exit();
}
  // var_export($_SERVER);
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="refresh" content="120">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="googlebot-news" content="index, follow" />
  <meta name="title" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo $d['judul'];
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'home'):
    echo "Berita Islami Terkini - harianamanah.com";
  elseif($_GET['module'] == 'rekomendasi'):
    echo "Rekomendasi Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'popular'):
    echo "Berita Popular Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;
  ?>" />
  <meta name="image"  content="<?php
  if($d['gambar']!=''){
    echo "http://harianamanah.com/foto_berita/$d[gambar]";
  }else{
    echo "http://harianamanah.com/images/amanah.jpg";
  }
  ?>" />
  <title><?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo $d['judul'];
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'home'):
    echo "Berita Islami Terkini - harianamanah.com";
  elseif($_GET['module'] == 'rekomendasi'):
    echo "Rekomendasi Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'popular'):
    echo "Berita Popular Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;
  ?></title>
  <meta property="og:title" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo $d['judul'];
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'home'):
    echo "Berita Islami Terkini - harianamanah.com";
  elseif($_GET['module'] == 'rekomendasi'):
    echo "Rekomendasi Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'popular'):
    echo "Berita Popular Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;
  ?>" />
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
  <meta property="fb:admins" content="490830364408744" />
  <meta property="fb:pages" content="824693407689103" />
  <meta property="fb:app_id" content="168067490271817" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@harianamanah" />
  <meta name="twitter:site:id" content="@harianamanah" />
  <meta name="twitter:creator" content="@harianamanah" />
  <meta name="twitter:title" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo $d['judul'];
  elseif($_GET['id']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$_GET[id]'"));
    echo $title['nama_kategori']." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'hasilcari'):
    echo "Pencarian | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'home'):
    echo "Berita Islami Terkini - harianamanah.com";
  elseif($_GET['module'] == 'rekomendasi'):
    echo "Rekomendasi Berita Islami - harianamanah.com";
  elseif($_GET['module'] == 'popular'):
    echo "Berita Popular Islami - harianamanah.com";
  else:
    echo "Kiblat Berita Islami - harianamanah.com";
  endif;
  ?>" />
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
  <?php
  if($_GET['jn']):
    $color = mysql_fetch_array(mysql_query("SELECT color, link FROM menu WHERE link = '$_GET[jn]'"));
  elseif($_GET['judul']):
    $color = mysql_fetch_array(mysql_query("SELECT color, link FROM menu WHERE id_menu = (SELECT id_parent FROM menu WHERE id_menu = '$d[id_kategori]')"));
  elseif($_GET['id']):
    $color = mysql_fetch_array(mysql_query("SELECT color, link FROM menu WHERE id_menu = (SELECT id_parent FROM menu WHERE id_menu = '$_GET[id]')"));
  else:
    $color = ["color" => "#1c9fa7"];
  endif;
  ?>
  <meta name="theme-color" content="<?php echo $color['color']?>">
  <meta name="msapplication-navbutton-color" content="<?php echo $color['color']?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color['color']?>">

  <link rel="shortcut icon" href="favicon.png">
  <!--Bootstrap Theme-->
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dream.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/Berita.css" type="text/css">
  <link rel="stylesheet" href="css/sidemenu.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  <!-- JS -->
  <script type="text/javascript" src="js/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="js/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.lazy.min.js"></script>
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
  <?php 
    include_once "heatmap.php"; 
    include_once "analyticstracking.php"; 
    include_once "adsense.php"; 
  ?>
</head>
<body>
<!-- <style>
@-webkit-keyframes flicker{
    0% {opacity:1;}
    50% {opacity:0;}
    100% {opacity:1;}
   }
@keyframes flicker{
0% {opacity:1;}
50% {opacity:0;}
100% {opacity:1;}
}
</style> -->
<?php if (empty($_SESSION['cek'])) : ?>
  <div id="loader" >
    <div class="page-loader">
    <center>
      <img src="assets/logo/pp_ff.png" width="160px" alt="dinamis" style="margin-top:50px;">
    </center>
    </div>
  </div>
  <?php 
    $_SESSION['cek'] = $_GET['module'];
    endif;
    // $pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
  ?>
    <header class="navbar navbar-default navbar-fixed-top <?php echo $color['link'];?>">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#menuSamping">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="tutup"><span class="big-close"></span></button>
                <a href="./" class="navbar-brand"><img src="assets/amanah.png" class="img-responsive" alt="logo-amanah"></a>
                <form method="GET" action="search" style="width:100vw;">
          <div style="width:28px;height:28px;border-radius:50%;border:1px solid #fff;margin-top:11px;margin-right:11px;float:right;"></div><input type="text" name="query-search" placeholder="Cari berita dan peristiwa">
                </form>
            </div>
      </div>
      <div id="menuSamping" class="sidenav">
        <!-- <p>KATEGORI</p> -->
        <ul class="nav navbar-nav social-hub"  style="margin:0;">
          <li class="facebook"><a href="https://www.facebook.com/harianamanah/" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
          <li class="twitter-nav"><a href="https://twitter.com/harianamanah" target="_blank"><span class="fa fa-twitter-square"></span></a></li>
          <li class="instagram"><a href="https://www.instagram.com/harian_amanah/" target="_blank"><span class="fa fa-instagram"></span></a></li>
          <li class="google"><a href="https://plus.google.com/115045050828571942973" target='_blank'><span class="fa fa-google-plus-square"></span></a></li>
          <li class="linkedin"><a href="https://www.linkedin.com/company/13466134" target="_blank"><span class="fa fa-linkedin-square"></span></a></li>
          <li class="youtube"><a href="https://www.youtube.com/channel/UCyk4N4qJdhduvO697WQKc1w" target='_blank'><span class="fa fa-youtube-square"></span></a></li>
        </ul>
        <h2 class="caption">HARIANAMANAH</h2>
        <ul class="nav navbar-nav">
          <!-- <li><a class='tagging'>BERITA UTAMA</a></li> -->
          <li><i class='fa fa-2x fa-lightbulb-o' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='./' class='tagging'>Terkini</a></li>
          <li><i class='fa fa-2x fa-flash' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='popular' class='tagging'>Popular</a></li>
          <li><i class='fa fa-2x fa-thumbs-o-up' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='rekomendasi' class='tagging'>Rekomendasi</a></li>
        </ul>
        <h2 class="caption">KANAL</h2>
              <ul class="nav navbar-nav">
      <?php
        $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY id_parent");
        while ($row = mysql_fetch_array($result)) {
          $idp = $row['id_menu'];
          if ($row['nama_menu']!== 'Info Alharam') {
              echo"
          <li>
          <a href='$row[link]' class='tagging' >$row[nama_menu] </a>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='fa fa-angle-down panah6'></span></a>
          <ul class='dropdown-menu'>
          ";
          } elseif (($row['nama_menu'] == 'Info Alharam')) {
              echo"
          <li>
          <a href='$row[link]' class='tagging'>$row[nama_menu] </a>
          <ul class='dropdown-menu'>
          ";
          }
          $result1 = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent=$idp ORDER BY id_menu");
          while ($row1 = mysql_fetch_array($result1)) {
                  echo "<li><a href='$row1[link]'>$row1[nama_menu]</a></li>";
          }
          echo "</ul>
          </li>";
          }?>
          <div class='clearfix'></div>
        </ul>
      </div>
    </header>
    <section id="main">
    <?php include "content.php"; ?>
    <footer>
      <div class="gambar-footer">
        <a href="/" class="go-top"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
      </div>
      
  <div class="state-one">
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
        <li class="kategori">
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
        <li>
          <span class="title-menu">FIND&nbsp;US</span>
          <ul class="block">
            <li style="display:inline-block;">
              <a href="https://play.google.com/store/apps/details?id=com.koran.harian.amanah&hl=in" text-decor="none" target="_blank">
                <img src="images/googleplay.png" alt="android">
              </a>
            </li>
            <li style="display:inline-block;">
              <a href="https://itunes.apple.com/id/app/harian-amanah/id1186655456?mt=8" text-decor="none" target="_blank">
                <img src="images/appstore.png" alt="apple">
              </a>
            </li>
          </ul>
        </li>
      </ul>
      </div>
    </div>
    <div class="menu-footer">
        <a href="#">TENTANG</a>
        <a href="#">PRIVASI</a>
        <a href="#">KONTAK</a>
      </div>
    <div class="isi-footer">
      <span class="copyright">
        HarianAmanah&nbsp;&copy;&nbsp;2017
      </span>
    </div>
    </footer>
</section>
<script type="text/javascript">
  $('.lazy').lazy();
  $('#loader').fadeOut('slow');
  $(document).ready(function() {
      //iklan and tag
      $('.close-headline').click(function(event){
          event.preventDefault();
          $(this).parents('.headline-text').fadeOut('slow');
      });
      $('.close-iklan').click(function(event){
          event.preventDefault();
          $(this).parents('.iklan-fixed').fadeOut('slow');
      });
    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });
  });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var arah = 1;
        $(".tutup").hide();
        $(".navbar-toggle").click(function(event) {
            $("#menuSamping").css('width', '100%');
            $(".navbar-toggle").hide();
            $(".tutup").show();
        });
        $(".tutup").click(function(event) {
            $("#menuSamping").css('width', '0');
            $(".tutup").hide();
            $(".navbar-toggle").show();
        });
        $("#main").click(function(event) {
            $("#menuSamping").css('width', '0');
            $(".navbar-toggle").show();
            $(".tutup").hide();
        });
    });
</script>
</body>