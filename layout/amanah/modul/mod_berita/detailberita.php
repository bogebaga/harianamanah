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
<div id="page-content" style="margin-bottom:10px;" class="index-page container">
  <div class="col-xs-12 col-md-12 col-lg-9" style="padding:0;">
    <div id="sidebar">
      <div class="user-panel">
        <div class="info">
          <p class="daftar-redaksi"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=".SITE_URL.'kategori/'.lcfirst($menu['link']).">".$menu['nama_menu']."</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
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
            <?php echo"<h1>$d[judul]</h1>"; ?>
        </div>
        <div class="sosial" style="float:right;width:200px;">
          <ul class="list-inline" style="text-align:left;margin:0;">
            <a style="border-radius: 100%;width: 42px;font-size:20px;height: 42px;text-align: center;display: inline-block;line-height: 2;" href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
            <a style="border-radius: 100%;width: 42px;font-size:20px;height: 42px;text-align: center;display: inline-block;line-height: 2;" href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
            <a style="border-radius: 100%;width: 42px;font-size:20px;height: 42px;text-align: center;display: inline-block;line-height: 2;" href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
            <a style="border-radius: 100%;width: 42px;font-size:20px;height: 42px;text-align: center;display: inline-block;line-height: 2;" href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
            <!-- <a href="https://line.me/R/msg/text/?<?php echo "$d[judul] http://harianamanah.com/berita-$d[judul_seo]"?>" class="social-share line" target="_blank"></a> -->
            <!-- <a href="whatsapp://send?text=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-whatsapp" target="_blank"></a> -->
            <!-- <a href="https://telegram.me/share/url?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>" class="social-share fa fa-paper-plane" target="_blank"></a> -->
            <!-- <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script> -->
          </ul>
        </div>
      </div>
      <div class="info">
        <span class="info-name"> <?php echo ucfirst($d['nama_lengkap']);?></span>
        <p class="daftar-redaksi" style="font-size:12px;color:rgba(49, 49, 49, 0.76);"><?php echo"$d[hari], $tgl - $jam"; ?></p>
      </div>
      <hr>
      <div class="dua-atas">
        <div class="single_blog_sidebar wow fadeInUp">
        <?php
        echo "<img class='main-pic lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$d[gambar]' alt='$d[judul]'>";
        echo "<p class='caption-pic'>$d[keterangan_gambar]</p>";
        echo "<hr style='margin-right:-15px;margin-left:-15px;'>";
        echo '<div class="isi-berita">';
        $konten = explode('</p>', $d['isi_berita']);
        for($i = 0; $i < count($konten); $i++):
          if($i == count($konten)-1):
          ?>
          <div class="baca-juga-berita terkait">
            <h2 style="color:#00a0a5;font-size:17px;text-transform:uppercase;text-align:left;">Berita Terkait</h2>
            <ul>
              <?php
              $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 6");
              while($p1=mysql_fetch_array($detail1))
              {
                $idarray = $p1['id_berita'];
                echo "
                      <li>
                        <a href='berita-$p1[judul_seo]'>$p1[judul]</a>
                      </li>
                    ";}
              ?>
            </ul>
          </div>
          <br>
          <?php
          endif;
          echo $konten[$i].'</p>';
        endfor;
        ?>
        <table>
          <tr><td colspan="1">Laporan</td><td width="25px" align="center">:</td><td><?= ucfirst($d['reporter'])?></td></tr>
          <tr><td colspan="1">Editor</td><td width="25px" align="center">:</td><td><?= ucfirst($d['nama_lengkap'])?></td></tr>
        </table>
        <div class="sosial">
          <ul class="list-inline" style="text-align:left;;margin:10px 0 20px 0;">
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 1.67;font-size:28px;" href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 1.67;font-size:28px;" href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 1.67;font-size:28px;" href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
            <a style="border-radius: 100%;width: 42px;height: 42px;text-align: center;display: inline-block;line-height: 1.67;font-size:28px;" href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
          </ul>
        </div>
        <div class="tagline">
          <span>TAGS</span>
          <?php
              echo "<a href=".SITE_URL.'kategori/'.lcfirst($menu['link']).">#".$menu['nama_menu']."</a><a href='$d[link]'>#$d[nama_kategori]</a>";
              if($d['tag'] != ''):
                $array = explode(',', $d[tag]);
                foreach($array as $tag):
                  // echo $tag;
                  echo "<a href='".SITE_URL."tag/".seo_title($tag)."'>#".ucwords($tag)."</a>";
                endforeach;
              endif;
              ?>
        </div>
        <?php
        echo '</div>';
        mysql_query("UPDATE berita SET dibaca='$d[dibaca]'+1 WHERE judul_seo='$_GET[judul]'");
        ?>
        <div id="ads_news" class='hidden-xs hidden-sm hidden-md' style='width:160px;'>
          <!-- <img src='foto_Iklan_isiberita/ems web.png' style='float:right;width:160px;height:100%;'>-->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- W_Half_page_ads -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-4290882175389422"
                data-ad-slot="4658060817"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        
        <div class="match_content"> 
            <h6 style="display:inline-block; padding:10px 0px; text-transform:uppercase; font-weight:bold !important; text-align:left; color:#000; border-bottom:3px solid <?php echo $menu['color']?>;margin:15px; margin-left:0;">REKOMENDASI</h6>
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
        </div>
        <!-- end of news content -->
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
          <div class='kotak' style="width:100%;float:none;">
            <div class="row">
              <h6 style="display:inline-block;width:auto;padding:13px 0;text-align:left;text-transform:uppercase !important;border-bottom:3px solid <?php echo $menu['color']?>; font-weight:bold !important; color:#000;margin:15px;">Terkini</h6>
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
                      <a href='berita-$p1[judul_seo]' style='font-size:25px;text-align:left;padding-left:0;font-weight:300;'>$p1[judul]</a>
                    </h3>
                      <p class='rubrik-tanggal'><a style='color:#052844;pointer:cursor;' href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".ucfirst($p1[nama_kategori])."</a> | $p1[hari], $tgl - $jam </p>
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
<!-- <div class="clearfix"></div> -->
<div class="hidden-xs col-lg-3" style="padding-right:0;">
      <div id="scroll-fixed">
        <div class="single_blog_sidebar wow fadeInUp">
          <ul class="featured_nav0 read-news">
          <!-- id="fixed-baca" data-spy="affix" -->
          <li>
            <h1 class="title berita-foto" style="color:#333;font-weight:bold;font-size:20px;text-align:left;margin-top:0;">TOPIK</h1>

          </li>
           <li>
              <h1 class="title berita-foto" style="color:#333;font-weight:bold;font-size:20px;text-align:left;margin-top:0;">POPULAR</h1>
              <div class="single_blog_sidebar wow fadeInUp popular-rubrik" style="background-color:#fff;margin-bottom:10px;">
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
            <li class="email-subs">
              <div class="panel panel-default">
                <div class="panel-heading" style="padding-top:20px;">
                  <i class="fa fa-3x fa-newspaper-o main-icon"></i>
                  <span class="caption-text">Dapat berita terbaru dari kami</span>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Alamat Email">
                    <div class="input-group-btn">
                      <button class="btn btn-default">
                        <i class="fa fa-paper-plane"></i>
                      </button>
                    </div>
                  </div>
                  <span class="caption-desc">contoh: example@email.com</span>
                </div>
                <div class="panel-body">
                  <span><b>Ikuti kami di social</b></span>
                  <a href="https://www.facebook.com/harianamanah/" target="_blank" style="color:#3b5999">
                    <i class="fa fa-fw fa-facebook-official"></i>
                  </a>
                  <a href="https://twitter.com/harianamanah" target="_blank" style="color:#55acee">
                    <i class="fa fa-fw fa-twitter-square"></i>
                  </a>
                  <a href="https://www.instagram.com/harian_amanah/" target="_blank" style="color:#e4405f">
                    <i class="fa fa-fw fa-instagram"></i>
                  </a>
                  <a href="https://www.linkedin.com/company/13466134" target="_blank" style="color:#0077B5">
                    <i class="fa fa-fw fa-linkedin-square"></i>
                  </a>
                </div>
              </div>
            </li>
            <?php
            $iklantengah=mysql_query("SELECT * FROM pasangiklan WHERE id_pasangiklan != '$idc1'  ORDER BY id_pasangiklan DESC LIMIT 1");
            while($c=mysql_fetch_array($iklantengah))
            {
              $idc2 = $c['id_pasangiklan'];
              // // echo "
              //       <li>
              //         <a class='featured_img' href='$c[url]' >
              //         <img src='foto_pasangiklan/$c[gambar]' alt='iklan harianamanah.com bawah' width='100%'></a>
              //       </li>";
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
  </div>
  <div style="text-align:center;">
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