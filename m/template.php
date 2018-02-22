<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";
include "../config/fungsi_seo.php";
include "../config/desc.php";
include "../config/Mobile_Detect.php";
define ('SITE_URL', site_URL()."m/");

$automobile = new Mobile_Detect;
$pop = array_pop(explode('/', $_SERVER['REQUEST_URI']));
if(! $automobile->isMobile()){
  header('Location: http://www.harianamanah.com/'.$pop);
  exit();
}
  // var_export($_SERVER);
  error_reporting(0);

	$detail=mysql_query("SELECT * FROM berita,users,kategori
			WHERE users.id=berita.username
			AND kategori.id_kategori=berita.id_kategori
			AND judul_seo='$_GET[judul]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d['tanggal']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta http-equiv="content-language" content="In-Id">
  <meta http-equiv="Content-Type" content="text/html;">
  <meta http-equiv="refresh" content="900">
  <meta name="geo.country" content="id">
  <meta name="geo.placename" content="Indonesia">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta name="language" content="id">
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="googlebot-news" content="index, follow" />
  <meta name="title" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
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
    echo htmlentities($d['judul']);
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
    echo htmlentities($d['judul']);
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
  <meta property="og:image:alt" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
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
  ?>">
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
  <meta property="og:site_name" content="harianamanah.com" />
  <meta property="og:locale" content="id_ID" />
  <meta property="fb:app_id" content="490830364408744" />
  <meta property="fb:pages" content="490830364408744" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@harianamanah" />
  <meta name="twitter:site:id" content="@harianamanah" />
  <meta name="twitter:creator" content="@harianamanah" />
  <meta name="twitter:title" content="<?php
  if($_GET['jn']):
    $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$_GET[jn]'"));
    echo ucfirst($title['nama_menu'])." | Kiblat Berita Islami - harianamanah.com";
  elseif($_GET['judul']):
    echo htmlentities($d['judul']);
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
  <meta name="theme-color" content="<?= $color['color']?>">
  <meta name="msapplication-navbutton-color" content="<?= $color['color']?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?= $color['color']?>">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link rel="shortcut icon" href="<?= SITE_URL?>favicon.png">
  <!--Bootstrap Theme-->
  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  <link rel="stylesheet" href="<?= SITE_URL?>css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?= SITE_URL?>fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= SITE_URL?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= SITE_URL?>css/style.css?v=1.01">
  <link rel="stylesheet" href="<?= SITE_URL?>css/berita.css?v=1.01">
  <link rel="stylesheet" href="<?= SITE_URL?>css/dream.css?v=1.01">
  <link rel="stylesheet" href="<?= SITE_URL?>css/sidemenu.css?v=1.01">
  <script src="<?= SITE_URL?>js/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="<?= SITE_URL?>js/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
 
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
    }
  }
  </script>
  <?php 
    include_once "heatmap.php"; 
    include_once "analyticstracking.php"; 
    include_once "adsense.php"; 
  ?>
</head>
<body>
    <div style="text-align:center;">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- M_Banner -->
      <ins class="adsbygoogle"
          style="display:inline-block;width:320px;height:50px"
          data-ad-client="ca-pub-4290882175389422"
          data-ad-slot="6679890438"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <header id="head_fixed" class="navbar navbar-default <?php echo $color['link'];?>">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#menuSamping">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <button type="button" class="tutup"><span class="big-close"></span></button>
            <a href="<?php echo SITE_URL?>" class="navbar-brand"><img src="<?php echo SITE_URL?>assets/amanah1.png" class="img-responsive" alt="logo-amanah"></a>
            <form method="GET" action="search" style="width:100vw;">
              <div style="width:28px;height:28px;border-radius:50%;border:1px solid #fff;margin-top:11px;margin-right:11px;float:right;"></div>
              <input type="text" name="query-search" placeholder="Cari berita dan peristiwa">
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
        <hr style="margin-top:0;">
        <h2 class='caption' style="color:#fff;background-color:#333;display:inline-block;margin:0 0 10px 10px;padding:5px;">PILKADA</h2>
        <ul class="nav navbar-nav container-log">
        <?php
          $query = mysql_query("SELECT DISTINCT kategori_pilkada FROM pilkada");
          while($gub = mysql_fetch_array($query)):
            echo "<li><a class='tagging' href='".SITE_URL."pilkada/$gub[kategori_pilkada]' style='padding:10px 15px;'>#&nbsp;$gub[kategori_pilkada]</a></li>" ;
          endwhile;
        ?>
        </ul>
        <hr>
        <h2 class="caption">HARIANAMANAH</h2>
        <ul class="nav navbar-nav">
          <!-- <li><a class='tagging'>BERITA UTAMA</a></li> -->
          <li><i class='fa fa-2x fa-lightbulb-o' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='<?php echo SITE_URL?>' class='tagging'>Terkini</a></li>
          <li><i class='fa fa-2x fa-flash' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='<?php echo SITE_URL."popular"?>' class='tagging'>Popular</a></li>
          <li><i class='fa fa-2x fa-thumbs-o-up' style='color:#009688;width:35px;padding:0 0 0 25px'></i><a href='<?php echo SITE_URL."rekomendasi"?>' class='tagging'>Rekomendasi</a></li>
        </ul>
        <hr>
        <h2 class="caption">KANAL</h2>
              <ul class="nav navbar-nav">
      <?php
        $result = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent='0' ORDER BY menu_order");
        while ($row = mysql_fetch_array($result)) {
          $idp = $row['id_menu'];
          if ($row['nama_menu']!== 'Info Alharam') {
              echo"
          <li>
          <a href='".SITE_URL."kategori/$row[link]' class='tagging' >$row[nama_menu] </a>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='fa fa-angle-down panah6'></span></a>
          <ul class='dropdown-menu'>
          ";
          } elseif (($row['nama_menu'] == 'Info Alharam')) {
              echo"
          <li>
          <a href='".SITE_URL."$row[link]' class='tagging'>$row[nama_menu] </a>
          <ul class='dropdown-menu'>
          ";
          }
          $result1 = mysql_query("SELECT * FROM menu WHERE aktif='Ya' AND id_parent=$idp ORDER BY id_menu");
          while ($row1 = mysql_fetch_array($result1)) {
            echo "<li><a href='".SITE_URL."$row1[link]'>$row1[nama_menu]</a></li>";
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
        <a class="go-top"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
      </div>
    <div class="menu-footer">
      <a href="<?= SITE_URL?>hal-tentang-kami">Tentang Kami</a>
      <a href="<?= SITE_URL?>hal-privacy-policy">Privasi</a>
      <a href="<?= SITE_URL?>hal-kontak-kami">Kontak</a>
      <a href="<?= SITE_URL?>hal-redaksi">Redaksi</a>
    </div>
      <div class="state-one">
        <ul class="block">
          <li style="display:inline-block;">
            <a href="https://play.google.com/store/apps/details?id=com.koran.harian.amanah&hl=in" text-decor="none" target="_blank">
              <img src="<?= SITE_URL?>images/googleplay.png" alt="android">
            </a>
          </li>
          <li style="display:inline-block;">
            <a href="https://itunes.apple.com/id/app/harian-amanah/id1186655456?mt=8" text-decor="none" target="_blank">
              <img src="<?= SITE_URL?>images/appstore.png" alt="apple">
            </a>
          </li>
        </ul>
      </div>
    <div class="isi-footer">
      <span class="copyright">
        2015&nbsp;&#45;&nbsp;2018&nbsp;&copy;&nbsp;PT. Harian Amanah Alharam - All Rights Reserved.
      </span>
    </div>
    </footer>
</section>
 <!-- JS -->
 
  <script src="<?= SITE_URL?>js/jquery.lazy.min.js" type="text/javascript"></script>
  <script src="<?= SITE_URL?>js/mha.js?v=1.01" type="text/javascript"></script>
</body>
</html>

<?php
  mysql_close($link);
?>