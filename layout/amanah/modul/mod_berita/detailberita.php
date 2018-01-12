<?php
$detail=mysql_query("SELECT * FROM berita,users,kategori,menu
            WHERE users.id=berita.username
            AND kategori.id_kategori=berita.id_kategori
            AND kategori.id_kategori=menu.id_menu
            AND judul_seo='$_GET[judul]'");
$d   = mysql_fetch_array($detail);
$tgl = tgl_indo($d['tanggal']);
$jam = trans_jam($d['jam']);
// var_export(array_flip($param));
// echo $d['id_kategori'];
$main_menu = mysql_query("SELECT * FROM menu WHERE id_menu = (SELECT id_parent FROM menu WHERE id_menu = '$d[id_kategori]')");
$menu = mysql_fetch_array($main_menu);
// echo $d['id_kategori'];
// echo $d['judul'];
?>
<div id="page-content" style="background-color: #ECECEC;margin-bottom:10px;margin-top:130px;" class="index-page container">
  <div class="col-xs-12 col-md-12 col-lg-9" style="background:#fff;">
    <div id="sidebar">
      <div class="user-panel">
        <div class="info">
          <p class="daftar-redaksi"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=".lcfirst($menu['link']).">".$menu['nama_menu']."</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          <ul class="block-top" style="width:auto;float:right;">
            <li style="display:inline-block;width:28px;"><a href="https://www.facebook.com/harianamanah/" target="_blank" style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-facebook-official'></i></a></li>
            <li style="display:inline-block;width:28px;"><a href="https://twitter.com/harianamanah" target="_blank" style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-twitter-square'></i></a></li>
            <li style="display:inline-block;width:28px;"><a href="https://www.instagram.com/harian_amanah/" target="_blank" style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-instagram'></i></a></li>
            <li style="display:inline-block;width:28px;"><a href="https://plus.google.com/115045050828571942973" target="_blank" style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-google-plus-square'></i></a></li>
            <li style="display:inline-block;width:28px;"><a href="https://www.linkedin.com/company/13466134" target="_blank" style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-linkedin-square'></i></a></li>
            <li style="display:inline-block;width:28px;"><a href="https://www.youtube.com/channel/UCyk4N4qJdhduvO697WQKc1w" target='_blank' style='color:#abb3b7;'><i class='fa fa-2x fa-fw fa-youtube-square'></i></a></li>
          </ul>
        </div>
        <div class="judul">
            <?php echo"<h1 style='color:$menu[color]'>$d[judul]</h1>"; ?>
        </div>
        <div class="sosial" style="float:right;width:200px;">
          <ul class="list-inline" style="text-align:left;margin:0;">
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 2.4;" href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 2.4;" href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 2.4;" href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 2.4;" href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
            <!-- <a href="https://line.me/R/msg/text/?<?php echo "$d[judul] http://harianamanah.com/berita-$d[judul_seo]"?>" class="social-share line" target="_blank"></a> -->
            <!-- <a href="whatsapp://send?text=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-whatsapp" target="_blank"></a> -->
            <!-- <a href="https://telegram.me/share/url?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>" class="social-share fa fa-paper-plane" target="_blank"></a> -->
            <!-- <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script> -->
          </ul>
        </div>
      </div>
      <div class="info">
        <span class="info-name"> <?php echo ucfirst($d['username']);?></span>
        <p class="daftar-redaksi" style="font-size:12px;color:rgba(49, 49, 49, 0.76);"><?php echo"$d[hari], $tgl - $jam"; ?></p>
      </div>
      <hr>
      <div class="dua-atas">
        <div class="single_blog_sidebar wow fadeInUp">
        <?php
        echo "<div class='row'><img class='main-pic lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$d[gambar]' alt='$d[judul]'></div>";
        echo "<p class='caption-pic'>$d[keterangan_gambar]</p>";
        echo "<hr style='margin-right:-15px;margin-left:-15px;'>";
        echo "<div id='ads_news'><img src='foto_Iklan_isiberita/ems web.png' style='float:left;width:160px;height:100%;'></div>";
        echo '<div class="isi-berita">';
        $konten = explode('</p>', $d['isi_berita']);
        for($i = 0; $i < count($konten); $i++):
          if($i == 1): 
          ?>
          <p style="text-align:center;">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- B_Center Ads -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:300px;height:250px"
                data-ad-client="ca-pub-4290882175389422"
                data-ad-slot="1158479752"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </p>
          <?php  
          endif;
          echo $konten[$i].'</p>';
        endfor;
        echo '</div>';
        echo "<div class='clearfix'></div>";
        mysql_query("UPDATE berita SET dibaca='$d[dibaca]'+1 WHERE judul_seo='$_GET[judul]'");
        ?>
        <div class="tagline">
        <span><i class="fa fa-"></i>TAGS</span>
          <!-- <a href="tag/test1">test1</a>
          <a href="tag/test1">TEST!TEST!TEST!</a>
          <a href="tag/test1">TEST!</a>
          <a href="tag/test1">test1TEST!TEST!</a> -->
        </div>
        <div class="match_content"> 
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <ins class="adsbygoogle"
              style="display:block"
              data-ad-format="autorelaxed"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="9556530284"></ins>
          <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div id="facebook-comment" class="fb-comments" data-href="" data-width="100%" data-numposts="10"></div>
        <!-- <div style="float:left;">Dibaca: <?php echo $d['dibaca']?></div> -->
        <div class="sosial">
          <ul class="list-inline" style="text-align:center;;margin:0;">
            <a style="border-radius: 100%;width: 52px;height: 52px;text-align: center;display: inline-block;line-height: 1.7;font-size:30px;" href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
            <a style="border-radius: 100%;width: 52px;height: 52px;text-align: center;display: inline-block;line-height: 1.7;font-size:30px;" href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
            <a style="border-radius: 100%;width: 52px;height: 52px;text-align: center;display: inline-block;line-height: 1.7;font-size:30px;" href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
            <a style="border-radius: 100%;width: 52px;height: 52px;text-align: center;display: inline-block;line-height: 1.7;font-size:30px;" href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
          </ul>
        </div>
        <div id='terkait-berita' class='kotak' style="width:100%;float:none">
          <div class="row">
            <h2 style="color:#00a0a5;font-size:17px;padding:13px 15px;text-transform:uppercase;text-align:left;">Berita Terkait</h2>
          </div>
            <ul class="featured_nav0 berita-terkait">
            <?php
            $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 6");
            while($p1=mysql_fetch_array($detail1))
            {
              $idarray = $p1['id_berita'];
              echo "
                    <li style='width:48%;text-align:left;margin-top:5px;padding-bottom:0;border:0;'>
                        <img class='lazy' src='foto_statis/base_n.jpg' data-src='http://harianamanah.com/foto_small/$p1[gambar]' alt='$p1[judul]' style='width:19%;height:65px;'>
                        <div class='featured_title berita-terkait' style='display:inline-block;width:75%;vertical-align:top;'>
                        <a href='berita-$p1[judul_seo]' style='text-align:left;padding-left:0;font-weight:100;font-size:15px;'>$p1[judul]</a>
                        </div>
                      </li>
                    ";}
            ?>
          </ul>
          <div class='clearfix'></div>
        </div>
        <div style="margin-top:10px;text-align:center;">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- W_Banner Top Ads -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:640px;height:95px"
              data-ad-client="ca-pub-4290882175389422"
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="related-news">
          <div class='kotak' style="width:100%;margin-bottom:10px;float:none">
          <div class='row'>
            <h6 style="display:inline-block;padding:10px 0px;text-transform:uppercase;font-weight:bold !important;text-align:left;color:#000;border-bottom:3px solid <?php echo $menu['color']?>;margin:15px;">BERITA REKOMENDASI</h6>
          </div>
            <ul class="featured_nav0 berita-lainnya">
            <?php
            $detail2=mysql_query("SELECT * FROM berita, menu WHERE id_kategori = id_menu AND nama_menu = '$d[nama_menu]' order by id_berita DESC limit 8");
            while($p2=mysql_fetch_array($detail2))
            {
              echo"
                    <li style='width:190px;margin:0 0 10px;padding-right:7px;height:185px;'>
                      <a class='featured_img' href='berita-$p2[judul_seo]'><img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$p2[gambar]' alt='$p2[judul]'></a>
                      <div class='featured_title berita-lainnya' style='font-size:14px;'>
                        <a href='berita-$p2[judul_seo]' style='margin-top:0;padding-top:5px;text-align:left;width:auto;font-weight:bold;'>$p2[judul]</a>
                      </div>
                    </li>
                  ";
            }?>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class='kotak' style="width:100%;float:none;">
            <div class="row">
              <h2 style="display:inline-block;width:auto;padding:13px 0;text-align:left;text-transform:uppercase !important;border-bottom:3px solid <?php echo $menu['color']?>; font-weight:bold !important; color:#000;margin:15px;">Berita Terkini</h2>
            </div>
            <ul class="featured_nav0">
            <?php
            $detail1=mysql_query("SELECT * FROM berita, kategori WHERE username != 'alifahmi' AND berita.id_kategori = kategori.id_kategori AND berita.id_berita != '$d[id_berita]' ORDER BY berita.id_berita DESC LIMIT 6, 10");
            while($p1=mysql_fetch_array($detail1))
            {
              $tgl = tgl_indo($p1['tanggal']);
              $jam = trans_jam($p1['jam']);

              $idarray = $p1['id_berita'];
              echo "
                <li style='text-align:left;float:none;'>
                    <a class='featured_img berita-terkini'><img class='lazy' src='foto_statis/base_n.jpg' data-src='http://harianamanah.com/foto_small/$p1[gambar]' alt='$p1[judul]'></a>
                    <div class='deskripsi-judul'>
                      <h3 class='featured_title berita-terkini'>
                      <a href='berita-$p1[judul_seo]' style='font-size:20px;text-align:left;padding-left:0;font-weight:bold;'>$p1[judul]</a>
                    </h3>
                      <p class='rubrik-tanggal'><a style='color:#052844;pointer:cursor;' href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".ucfirst($p1[nama_kategori])."</a> | $p1[hari], $tgl - $jam </p>
                      <p style='margin-left:15px;display:inline-block;'>".substr(strip_tags($p1['isi_berita']), 0, 160)."</p>
                    </div>
                  </li>
                ";} ?>
            </ul>
            <div id="iklan-footer">
              <?php
              $iklantengah=mysql_query("SELECT * FROM iklanatas  ORDER BY id_iklanatas DESC LIMIT 1");
              while($b=mysql_fetch_array($iklantengah))
              {
                $id1 = $b['id_iklanatas'];
                echo "<div class='iklan' width='100%' style='position:relative;'>
                      <a href='$b[url]' target='_blank' title='$b[judul]'>
                      <img src='foto_iklanatas/$b[gambar]' alt='abutours beriklan di harianamanah.com' style='height:auto;'></a>
                      </div>";
              }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="clearfix"></div> -->
<div class="hidden-xs col-lg-3" style="background:#ECECEC;padding-right:0;">
        <div class="single_blog_sidebar wow fadeInUp">
        <ul class="featured_nav0 read-news">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- W_Right Banner Ads -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:270px;height:350px"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="1385019502"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        <!-- id="fixed-baca" data-spy="affix" -->
         <li style="background:#EBEBEC;">
            <h1 class="title berita-foto" style="color:<?php echo $menu['color']?>;font-weight:bold;text-align:left;margin-top:0;">POPULAR <?php echo strtoupper($d['nama_menu'])?></h1>
            <div class="single_blog_sidebar wow fadeInUp popular-rubrik <?php echo $menu['link']?>" style="background-color:#fff;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.44); margin-bottom:10px;">
              <ol class="list-berita-popular-rubrik">
              <?php
              $date = date('Y-m-d');
              $berita_popular = mysql_query("SELECT * FROM berita WHERE tanggal BETWEEN date_sub('$date', INTERVAL 30 DAY) AND '$date' AND id_kategori = '$d[id_kategori]' ORDER BY dibaca DESC LIMIT 5");
              $x=1;
              while($row = mysql_fetch_array($berita_popular)){
              if ($x == 1):
                echo "
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]' style='height:auto;'>
                  <li>
                    <a href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a>
                    <div class='clearfix'></div>
                  </li>";
              else:
                echo "
                  <li>
                    <a href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a>
                    <div class='clearfix'></div>
                  </li>";
              endif;
              $x++;  
              }?>
              </ol>
            </div>
          </li>
          <?php
          $iklantengah=mysql_query("SELECT * FROM pasangiklan WHERE id_pasangiklan != '$idc1'  ORDER BY id_pasangiklan DESC LIMIT 1");
          while($c=mysql_fetch_array($iklantengah))
          {
            $idc2 = $c['id_pasangiklan'];
            echo "
                  <li>
                    <a class='featured_img' href='$c[url]' >
                    <img src='foto_pasangiklan/$c[gambar]' alt='iklan harianamanah.com bawah' width='100%'></a>
                  </li>";
          }?>
           <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- W_Right Banner Ads -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:270px;height:350px"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="1385019502"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </ul>
      </div>
    </div>
  </div>

  <div style="align:center;">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Banner Bottom -->
      <ins class="adsbygoogle"
          style="display:inline-block;width:728px;height:90px"
          data-ad-client="ca-pub-4290882175389422"
          data-ad-slot="4948221961"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    <!-- End Banner Bottom -->
  </div>
  <!-- <div class="clearfix"></div> -->