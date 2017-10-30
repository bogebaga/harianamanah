<?php
  $detail=mysql_query("SELECT * FROM berita,users,kategori,menu
            WHERE users.username=berita.username
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
?>
<div id="page-content" style="background-color: #ECECEC;margin-bottom:10px;margin-top:130px;" class="index-page container">
<div class="col-md-9" style="background:#fff;">
<div id="sidebar">
        <div class="user-panel">
        <div class="info">
            <p class="daftar-redaksi"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=".lcfirst($menu['link']).">".$menu['nama_menu']."</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          </div>
          <div class="judul">
              <?php echo"<h1 style='color:$menu[color]'>$d[judul]</h1>"; ?>
          </div>
          <div class="sosial" style="float:right;width:200px;">
            <ul class="list-inline" style="text-align:left;margin:0;">
              <a href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
              <a href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
              <a href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
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
            echo "<div class='row'><img class='main-pic' src='http://harianamanah.com/foto_berita/$d[gambar]' alt='$d[judul]'></div>";
            echo "<p class='caption-pic'>$d[keterangan_gambar]</p>";
            echo "<img id='ads_news' src='foto_Iklan_isiberita/ems web.png' style='float:left;margin-top:19px;width:160px'>";
            echo '<div class="isi-berita">';
            echo "$d[isi_berita]";
            echo '</div>';
            echo "<div class='clearfix'></div>";
            mysql_query("UPDATE berita SET dibaca='$d[dibaca]'+1 WHERE judul_seo='$_GET[judul]'");
            ?>
            <hr>
            <div style="float:left;">Dibaca: <?php echo $d['dibaca']?></div>
            <div class="sosial">
              <ul class="list-inline" style="text-align:right;margin:0;">
                <a href="https://www.facebook.com/sharer.php?u=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-facebook" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-facebook"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="btn-twitter" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-twitter"></i></a>
                <a href="https://plus.google.com/share?url=<?php echo "http://harianamanah.com/berita-".$d['judul_seo']?>" class="btn-google" target="_blank" style="padding:10px;"><i class="fa fa-fw fa-google-plus"></i></a>
                <a href="#facebook-comment" class="btn-facebook" style="padding:10px;background-color:#02b875;"><i class="fa fa-fw fa-commenting-o"></i></a>
              </ul>
            </div>
            <hr>
            <div id="facebook-comment" class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
            <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
            <div class="related-news">
              <div class='kotak' style="width:100%;float:none">
              <br>
              <div class="row">
                <h2 style="padding:13px 15px;text-transform:uppercase;font-weight:bold !important;text-align:left;background:#ECEFF1;color:#232d31;">Berita Terkait</h2>
              </div>
                <ul class="featured_nav0 berita-terkait">
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 10");
                while($p1=mysql_fetch_array($detail1))
                {
                  $idarray = $p1['id_berita'];
                  echo "
                        <li style='width:47%;text-align:left;margin-bottom:15px;padding-bottom:0;'>
                            <div class='featured_title berita-terkait'>
                            <a href='berita-$p1[judul_seo]' style='text-align:left;padding-left:0;font-weight:bold;font-size:15px;'>$p1[judul]</a>
                            </div>
                          </li>
                        ";}
                ?>
                </ul>
                <div class='clearfix'></div>
              </div>
              <div class='kotak' style="width:100%;margin-bottom:30px;float:none">
              <br>
              <div class='row'>
                <h2 style="padding:13px 15px;text-transform:uppercase;font-weight:bold !important;text-align:left;background:#ECEFF1;color:#232d31;margin-bottom:25px;">Berita Lainnya</h2>
              </div>
                <ul class="featured_nav0 berita-lainnya">
                <?php
                $detail2=mysql_query("SELECT * FROM berita WHERE id_kategori != '$d[id_kategori]' AND id_berita != '$d[id_berita]'  order by id_berita DESC limit 8");
                while($p2=mysql_fetch_array($detail2))
                {
                  echo"
                        <li style='width:190px;margin:0 0 10px;padding-right:7px;height:185px;'>
                          <a class='featured_img' href='berita-$p2[judul_seo]'><img src='http://harianamanah.com/foto_berita/$p2[gambar]' alt='$p2[judul]'></a>
                          <div class='featured_title berita-lainnya' style='font-size:14px;'>
                            <a class='' href='berita-$p2[judul_seo]' style='margin-top:0;padding-top:5px;text-align:left;width:auto;font-weight:bold;'>$p2[judul]</a>
                          </div>
                        </li>
                      ";
                }?>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class='kotak' style="width:100%;float:none;">
              <div class="row">
                <h2 style="padding:13px 15px;text-align:left;text-transform:uppercase !important;font-weight:bold !important; color:#fff;margin-bottom:20px;<?php echo $menu['gradient']?>"">Berita Terkini</h2>
              </div>
                <ul class="featured_nav0">
                <?php
                $detail1=mysql_query("SELECT * FROM berita, kategori WHERE berita.id_kategori = kategori.id_kategori AND berita.id_berita != '$d[id_berita]' ORDER BY berita.id_berita DESC LIMIT 6, 10");
                while($p1=mysql_fetch_array($detail1))
                {
                  $tgl = tgl_indo($p1['tanggal']);
                  $jam = trans_jam($p1['jam']);

                  $idarray = $p1['id_berita'];
                  echo "
                    <li style='text-align:left;float:none;'>
                        <a class='featured_img berita-terkini'><img src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]'></a>
                        <div class='deskripsi-judul'>
                          <h3 class='featured_title berita-terkini'>
                          <a href='berita-$p1[judul_seo]' style='font-size:20px;text-align:left;padding-left:0;font-weight:bold;'>$p1[judul]</a>
                          </h3>
                          <p class='rubrik-tanggal'><a style='color:#052844;pointer:cursor;' href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".ucfirst($p1[nama_kategori])."</a> | $p1[hari], $tgl - $jam </p>
                          <p style='margin-left:15px;'>".substr(strip_tags($p1['isi_berita']), 0, 160)."</p>
                        </div>
                      </li>
                    ";} ?>
                </ul>
                <div id="iklan-footer" style="">
                  <?php
                  $iklantengah=mysql_query("SELECT * FROM iklanatas  ORDER BY id_iklanatas DESC LIMIT 1");
                  while($b=mysql_fetch_array($iklantengah))
                  {
                    $id1 = $b['id_iklanatas'];
                    echo "<div class='iklan' width='100%' style='position:relative;'>
                          <a href='$b[url]' target='_blank' title='$b[judul]'>
                          <img src='foto_iklanatas/$b[gambar]' alt='abutours beriklan di harianamanah.com'></a>
                          </div>";
                  }?>
                </div>
              </div>
            </div>
            </div>
      </div>

  </div>
</div>
<div class="col-md-3" style="background:#ECECEC;padding-right:0;">
        <div class="single_blog_sidebar wow fadeInUp">
          <ul class="featured_nav0 read-news">
          <!-- <?php
          $iklantengah=mysql_query("SELECT * FROM pasangiklan  ORDER BY id_pasangiklan DESC LIMIT 1");
          while($c=mysql_fetch_array($iklantengah))
          {
            $idc1 = $c['id_pasangiklan'];
            echo "
                  <li>
                  <a class='featured_img' href='$c[url]' >
                  <img src='foto_pasangiklan/$c[gambar]' alt='iklan harianamanah.com atas' width='100%'></a>
                  </li>
                  ";
          } ?> -->
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
          <li style="border:1px solid <?php echo $menu['color']?>">
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
              <div class="title liputan-khusus" style="padding:10px 15px;color:white;font-weight:bold;text-align:right;<?php echo $menu['gradient']?>"><?php echo strtoupper($d['nama_menu'])?></div>
                <ul class="list-liputan-khusus">
            <?php
            $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='$d[id_kategori]' AND id_berita != '$d[id_berita]' ORDER BY id_berita DESC LIMIT 5");
            while($row = mysql_fetch_array($liputan_khusus)){
              $tgl = tgl_indo($row['tanggal']);
              $jam = trans_jam($row['jam']);
              echo "
                  <li style='padding-top:0;margin:0;position:relative;'>
                    <img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]' style='height:250px;'>
                    <a href='berita-$row[judul_seo]' style='width:100%;padding:10px;display:block;font-size:15px;background:rgba(0, 0, 0, 0.78);color:#fff;position:absolute;bottom:0'>$row[judul]</a>
                  <!-- <span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;position:absolute;'>$row[hari], $tgl - $jam</span> -->
                  </li>";
            }
            echo "<a href=\"$d[link]\" style=\"display:block;text-align:center;padding:10px 0;color:$menu[color];font-weight:bold;font-size:14px;\">$d[nama_menu] Lainnya</a></a>";
            ?>
            </ul>
          </div>
        </li>
        <!-- id="fixed-baca" data-spy="affix" -->
         <li style="background:#EBEBEC;">
            <div class="single_blog_sidebar wow fadeInUp popular-rubrik <?php echo $menu['link']?>" style="background-color:#fff;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.44); margin-bottom:10px;">
              <div class="title berita-foto" style="color:#fff;padding:15px;font-weight:bold;text-align:right;<?php echo $menu['gradient']?>">POPULAR <?php echo strtoupper($d['nama_menu'])?></div>
              <ol class="list-berita-popular-rubrik" style="border:1px solid <?php echo $menu['color']?>">
              <?php
              $berita_popular = mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' ORDER BY dibaca DESC LIMIT 10");
              while($row = mysql_fetch_array($berita_popular)){
                echo "
                  <li>
                    <a href='berita-$row[judul_seo]' title='$row[judul]'>".substr($row['judul'], 0, 50)."&hellip;</a>
                    <div class='clearfix'></div>
                  </li>";
              }
              ?>
              </ol>
            </div>
          </li>
          <li>
          <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh2wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYFQehmFUC6/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Harian Amanah (@harian_amanah)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-08-22T04:09:53+00:00">Aug 21, 2017 at 9:09pm PDT</time></p></div></blockquote>
          <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
        </li>
        <li>
          <div class="fb-page" data-href="https://www.facebook.com/harianamanah/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/harianamanah/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/harianamanah/">Harian Amanah</a></blockquote></div>
        </li>
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- <div class="container">
  <div id="iklan-footer" class="col-md-12" style="float:none;">
    <?php
    $iklantengah=mysql_query("SELECT * FROM iklanatas  ORDER BY id_iklanatas DESC LIMIT 1");
    while($b=mysql_fetch_array($iklantengah))
    {
      $id1 = $b['id_iklanatas'];
      echo "<div class='iklan' width='100%' style='position:relative;'>
            <a href='$b[url]' target='_blank' title='$b[judul]'>
            <img src='foto_iklanatas/$b[gambar]' alt='abutours beriklan di harianamanah.com' style='position:absolute;bottom:0;'></a>
            </div>";
    }?>
  </div>
</div> -->
<script>
  // $('#ads_news').affix({
  //   offset: {
  //     top: $('#ads_news').offset().top
  //     // bottom: ($('#iklan-footer').outerHeight(true)+$('.related-news').outerHeight(true)+($('.isi-berita').outerHeight(true)-$('#ads_news').outerHeight(true)))+300
  //   }
  // });
  $("#fixed-baca").affix({
    offset : {
      top: $("#fixed-baca").offset().top,
      bottom: $("#iklan-footer").outerHeight(true) + 705
    }
  });
</script>
<!-- <div class="clear">&nbsp;</div> -->