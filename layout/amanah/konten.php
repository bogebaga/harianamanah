<?php if ($_GET['module']=='home'){ ?>
	<div class="featured container" >
    <div class="headline__ads__news">
    </div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-xs-9" style='padding-left:0;padding-right:7px;'>
          <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade hl-slider" data-ride="carousel" style="background-color:#000;height:690px;/* background-image: linear-gradient(90deg, #052844 1%, #073e69 100%); */">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role='listbox'>
            <?php
            $terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE headline='Y' ORDER BY id_berita DESC LIMIT 4");
            while($t=mysql_fetch_array($terkini)){
              $tgl = tgl_indo($t['tanggal']);
              $jam = trans_jam($t['jam']);
              echo"
                <div class='item'>
                  <div class='col-xs-12' style='float:none;padding-bottom:8px;'>
                    <div class='tanggal-news' style='color:#fff;padding-top:10px;font-size:14px;'> $t[hari], $tgl - $jam</div>
                    <div class='header-text'>
                      <h1 id='title'><a href='berita-$t[judul_seo]'>$t[judul]</a></h1>
                    </div><!-- /header-text -->
                    <a href='berita-$t[judul_seo]'><img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='display:inline-block;vertical-align:top;'></a></a>
                    <div class='desc-home' style='display:inline-block;width:155px;'>
                      <a href='kategori-$t[id_kategori]-$t[kategori_seo]' style='background-color:#EFCB17;padding:5px 8px;display:inline-block;color:#000;margin:0 3px'>".strtoupper($t['nama_kategori'])."</a>
                      <p style='font-size:14px;color:#ddd;line-height:1.5;margin:10px 3px 0;word-wrap:break-word;'>".substr(strip_tags($t['isi_berita']), 0, 160).".&nbsp;<a href='berita-$t[judul_seo]'><b style='color:yellow;'>Selanjutnya</b></a></p>
                    </div>
                  </div>
                  <!-- Static Header -->
                  <div class='slider-berita-terkait' style='position:absolute;margin-top:-45px;right:13px;width:170px;'>
                    <div style='color:#efcb17;font-size:15px;display:inline-block;padding: 7px;border:1px solid #efcb17;'>Berita Terkait</div>
                    <ul style='line-height:.8;margin-top:10px'>";
                      $terkait=mysql_query("SELECT * FROM berita WHERE id_kategori = '$t[id_kategori]' ORDER BY id_berita DESC LIMIT 3");
                      while($u=mysql_fetch_array($terkait)){
                        echo "<li><a href='berita-$u[judul_seo]' style='font-size:12px;color:white;'>$u[judul]</a></li>";
                      };
                echo "</ul></div></div>";
              } ?>
            </div>
            <div class='col-xs-12'>
              <ol class='carousel-indicators'>
                <?php
                  $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 4");
                  $i = 0;
                  while($indicator = mysql_fetch_array($terkini)){
                    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'>
                      <img src='http://harianamanah.com/foto_berita/$indicator[gambar]' alt='$indicator[judul]'>
                      <a href='berita-$indicator[judul_seo]' style=margin:0;padding:7px;font-size:12px;color:white;display:inline-block;'>$indicator[judul]</a>
                    </li>";
                  $i++;
                  }
                ?>
              </ol>
            </div>
          </div><!-- /carousel -->
        <div class="col-md-12" style="margin-top:7px;padding:0;">
          <div class="col-md-4" style="padding-left:0;">
            <!-- <div id="sidebar-1" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:500px;margin-bottom:10px;">
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #1c9fa7;background-image: -webkit-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: -moz-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: -o-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);">BERITA POPULAR</div>
            </div>
            <div class="single_blog_sidebar berita-popular wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
              <div class="title">BERITA POPULAR</div>
              <ol class="list-berita-popular">
              <?php
              $berita_popular = mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 5");
              while($row = mysql_fetch_array($berita_popular)){
                echo "<li><a style='float:right;width:185px;' href='berita-$row[judul_seo]' title='$row[judul]'>".substr($row[judul], 0, 50)."&hellip;</a><div class='clearfix'></div></li>";
              }
              ?>
              </ol>
            </div> -->
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #b721ff;">
              <div class="title liputan-khusus" style="background-color: #b721ff;
              background-image: linear-gradient(79deg, #b721ff 0%, #ba76dc 100%);              
                padding:10px 15px;color:white;">TAUSIYAH</div>
                <ul class="list-liputan-khusus">
                <?php
                $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='71' ORDER BY id_berita DESC LIMIT 3");
                while($row = mysql_fetch_array($liputan_khusus)){
                  $tgl = tgl_indo($row['tanggal']);
                  $jam = trans_jam($row['jam']);
                  echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
                }
                $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '71'");
                $kategori = mysql_fetch_array($liputan_khusus);
                echo "<a href=\"$kategori[link]\" style=\"display:block;text-align:center;padding:10px 0;color:#b721ff;font-weight:bold;font-size:14px;\">Tausiyah Lainnya</a></a>";
                ?>
                </ul>
            </div>
           
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #00bcd4;">
            <div class="title liputan-khusus" style="background-color: #00bcd4;
            background-image: linear-gradient(104deg, #00bcd4 0%, #96d0de 100%);
              padding:10px 15px;color:white;">MUAMALAH</div>
              <ul class="list-liputan-khusus">
              <?php
              $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='72' ORDER BY id_berita DESC LIMIT 3");
              while($row = mysql_fetch_array($liputan_khusus)){
                $tgl = tgl_indo($row['tanggal']);
                $jam = trans_jam($row['jam']);
                echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
              }
              $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '72'");
              $kategori = mysql_fetch_array($liputan_khusus);
              echo "<a href=\"$kategori[link]\" style=\"display:block;text-align:center;padding:10px 0;color:#0093E9;font-weight:bold;font-size:14px;\">Muamalah Lainnya</a></a>";
              ?>
              </ul>
            </div>
            <div id="fixed-left" class="single_blog_sidebar berita-popular wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #007A7F">
              <div class="title">BERITA POPULAR</div>
              <ol class="list-berita-popular">
              <?php
              $berita_popular = mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 10");
              while($row = mysql_fetch_array($berita_popular)){
                echo "<li><a style='float:right;width:185px;' href='berita-$row[judul_seo]' title='$row[judul]'>".substr($row[judul], 0, 50)."&hellip;</a><div class='clearfix'></div></li>";
              }
              ?>
              </ol>
            </div>
          </div>
          <style>
           li p[data-opacity='true']{
            opacity:0;
           }
           li:hover p[data-opacity='true']{
            opacity: 1;
          }
          </style>
          <div class="col-md-8" style="padding:0;">
            <div class="single_blog_sidebar1 berita-terkini wow fadeInUp">
              <div class="title">BERITA TERKINI</div>
              <ul id='list-terkini-middle'>
              <?php
                $x=1;
                $detail1=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori ORDER BY b.id_berita DESC LIMIT 100");
                while($p1=mysql_fetch_array($detail1))
                {
                  $tgl = tgl_indo($p1['tanggal']);
                  $jam = trans_jam($p1['jam']);
                  if($x%15 == 0)
                      echo "<li style='color:white;background:#1F2126;' data-berita='$p1[id_berita]'>
                      <div class='deskripsi-judul home reda' style='min-width:275px;width:275px;'>
                        <h6><a href='berita-$p1[judul_seo]' title='$p1[judul]'>".substr($p1['judul'], 0, 60)."&hellip;</a></h6>
                        <p class='rubrik-tanggal'><a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".strtoupper($p1['nama_kategori'])."</a> | $p1[hari], $tgl - $jam</p>
                        <p style='color:#fff;margin-bottom:0;'>".substr(strip_tags($p1['isi_berita']), 0, 180)."&nbsp;<a href='berita-$p1[judul_seo]'><b style='color:yellow;'>&hellip;</b></a></p>
                        <p data-opacity='true' style='margin-bottom:0;'>
                          <a class='btn btn-social-icon' href='https://www.facebook.com/sharer.php?u=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank'><i class='fa fa-facebook fa-fw'></i></a>
                          <a class='btn btn-social-icon' href='https://twitter.com/intent/tweet?url=http://harianamanah.com/berita-$p1[judul_seo]&text=$p1[judul]&via=harianamanah' target='_blank'><i class='fa fa-twitter fa-fw'></i></a>
                          <a class='btn btn-social-icon' href='https://plus.google.com/share?url=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank' ><i class='fa fa-google-plus fa-fw'></i></a>
                        </p>
                      </div>
                      <a href='berita-$p1[judul_seo]'>
                      <img class='lazy' data-src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]' style='width:230px;height:195px;object-fit:cover;vertical-align:top;'>
                      </a>
                    </li>";
                  else
                    echo "<li style='color:white;' data-berita='$p1[id_berita]'>
                    <a href='berita-$p1[judul_seo]'>
                    <img class='lazy' data-src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]' style='width:140px;height:140px;object-fit:cover;vertical-align:top;'>
                    </a>
                    <div class='deskripsi-judul home'>
                      <h6><a href='berita-$p1[judul_seo]' title='$p1[judul]'>".substr($p1['judul'], 0, 60)."&hellip;</a></h6>
                      <p class='rubrik-tanggal'><a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".strtoupper($p1['nama_kategori'])."</a> | $p1[hari], $tgl - $jam</p>
                      <p style='color:#fff;margin-bottom:0;'>".substr(strip_tags($p1['isi_berita']), 0, 130)."&nbsp;<a href='berita-$p1[judul_seo]'><b style='color:yellow;'>&hellip;</b></a></p>
                      <p data-opacity='true' style='margin:0 0 0 12px;'>
                        <a class='btn btn-social-icon' href='https://www.facebook.com/sharer.php?u=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank'><i class='fa fa-facebook fa-fw'></i></a>
                        <a class='btn btn-social-icon' href='https://twitter.com/intent/tweet?url=http://harianamanah.com/berita-$p1[judul_seo]&text=$p1[judul]&via=harianamanah' target='_blank'><i class='fa fa-twitter fa-fw'></i></a>
                        <a class='btn btn-social-icon' href='https://plus.google.com/share?url=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank' ><i class='fa fa-google-plus fa-fw'></i></a>
                      </p>
                    </div>
                  </li>";
                  $x++;
                } ?>
              </ul>
              <style>
                #more,#more_indeks {margin-bottom:10px;display:inline-block;padding:5px 20px; border:1px solid #EFCB17;color:#EFCB17;cursor:pointer; transition:background .5s ease;}
                #more:hover, #more_indeks:hover {background:#EFCB17; color:#262932}
              </style>
              <div id="more_animasi" style="text-align:center;">
                <div id="more">Lainnya</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- break -->
      <div class="col-xs-3" style="padding:0">
        <div class="single_blog_sidebar wow fadeInUp">
        <h1 style="margin-top:0;padding:5px;background:#00A0A5;color:#fff;"><b>TOPIK KHUSUS</b></h1>
          <ul class="featured_nav2 list-topik-khusus">
            <li></li>
          </ul>
        </div>
     
      <div class="single_blog_sidebar wow fadeInUp" style="height:auto;">
        <!-- <blockquote class="twitter-tweet" data-lang="en"><p lang="und" dir="ltr"><a href="https://t.co/FUB6zzRiUG">https://t.co/FUB6zzRiUG</a> <a href="https://twitter.com/hashtag/harianamanah?src=hash">#harianamanah</a> <a href="https://twitter.com/hashtag/koranamanah?src=hash">#koranamanah</a> <a href="https://twitter.com/hashtag/abucorp?src=hash">#abucorp</a> <a href="https://twitter.com/hashtag/dailyquotes?src=hash">#dailyquotes</a> <a href="https://twitter.com/hashtag/quoteoftheday?src=hash">#quoteoftheday</a> <a href="https://twitter.com/hashtag/muslimquotes?src=hash">#muslimquotes</a> <a href="https://twitter.com/hashtag/muslim?src=hash">#muslim</a> <a href="https://twitter.com/hashtag/tausiyah?src=hash">#tausiyah</a> <a href="https://twitter.com/hashtag/teladanrasul?src=hash">#teladanrasul</a> <a href="https://t.co/NF6lNauPIZ">pic.twitter.com/NF6lNauPIZ</a></p>&mdash; Harian Amanah (@HarianAmanah) <a href="https://twitter.com/HarianAmanah/status/900991240035983360">August 25, 2017</a></blockquote> -->
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        <!-- <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYFQehmFUC6/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Harian Amanah (@harian_amanah)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-08-22T04:09:53+00:00">Aug 21, 2017 at 9:09pm PDT</time></p></div></blockquote>
        <script async defer src="//platform.instagram.com/en_US/embeds.js"></script> -->
        
        <div class="fb-page" data-href="https://www.facebook.com/harianamanah/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/harianamanah/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/harianamanah/">Harian Amanah</a></blockquote></div>
        
        <!-- <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fharianamanah%2Fposts%2F824693491022428%3A0&width=500" width="100%" height="385px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
      <div class="single_blog_sidebar wow fadeInUp">
        <ul class="featured_nav2">
          <li>
            <div id="radio">
              <img src="images/radio.jpg" alt="radio bharata post harianamanah.com">
              <audio src="http://s3.vinhostmedia.com:9324/;" autobuffer autoloop loop controls ></audio>
            </div>
          </li>
          <div class="clearfix"></div>
          <!-- <li>
            <div id="radio"><img src="foto_iklanatas/box_abu.gif" alt="iklan abutours post harianamanah.com"></div>
          </li>
          <div class="clearfix"></div> -->
        </ul>
      </div>
      <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #0093E9">
        <div class="title liputan-khusus" style="background-color: #0093E9;
          background-image: -webkit-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
          background-image: -moz-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
          background-image: -o-linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
          background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
          padding:10px 15px;color:white;">ISLAMIC VIEW</div>
          <ul class="list-liputan-khusus">
          <?php
          $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='67' ORDER BY id_berita DESC LIMIT 3");
          while($row = mysql_fetch_array($liputan_khusus)){
            $tgl = tgl_indo($row['tanggal']);
            $jam = trans_jam($row['jam']);
            echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
          }
          $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '71'");
          $kategori = mysql_fetch_array($liputan_khusus);
          echo "<a href=\"$kategori[link]\" style=\"display:block;text-align:center;padding:10px 0;color:#0093E9;font-weight:bold;font-size:14px;\">Islamic Lainnya</a></a>";
          ?>
          </ul>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #31708f">
          <div class="title liputan-khusus" style="background-color: #31708f;
          background-image: linear-gradient(105deg, #31708f 0%, #6a8fa5 74%);
          
            padding:10px 15px;color:white;">ENSIKLOPEDI MUSLIM</div>
            <ul class="list-liputan-khusus">
            <?php
            $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='60' ORDER BY id_berita DESC LIMIT 3");
            while($row = mysql_fetch_array($liputan_khusus)){
              $tgl = tgl_indo($row['tanggal']);
              $jam = trans_jam($row['jam']);
              echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
            }
            $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '60'");
            $kategori = mysql_fetch_array($liputan_khusus);
            echo "<a href=\"$kategori[link]\" style=\"display:block;text-align:center;padding:10px 0;color:#31708f;font-weight:bold;font-size:14px;\">Ensiklopedi Lainnya</a></a>";
            ?>
            </ul>
          </div>
        <!-- <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
          <div class="title liputan-khusus" style="background-color: #ff9d25;background-image: linear-gradient(62deg, #ff9d25 0%, #ffca00 100%);padding:10px 15px;color:white;">LIPUTAN KHUSUS</div>
          <ul class="list-liputan-khusus">
          <?php
          $liputan_khusus = mysql_query("SELECT * FROM berita WHERE utama = 'Y' ORDER BY id_berita DESC LIMIT 8");
          $foto = TRUE;
          while($row = mysql_fetch_array($liputan_khusus)){
            $tgl = tgl_indo($row['tanggal']);
            $jam = trans_jam($row['jam']);
            if($foto){
              echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
            }else{
              echo "<li><a style='color:#444444;' href='berita-$row[judul_seo]'>$row[judul]</a></li>";
            }
            $foto = FALSE;
          }
          ?>
          </ul>
        </div> -->
        <div class="single_blog_sidebar berita-foto wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
          <div class="title">BERITA FOTO</div>
          <ul class="list-berita-foto">
          <?php
          $foto = mysql_query("SELECT * FROM video ORDER BY tanggal DESC LIMIT 1");
          while($row = mysql_fetch_array($foto)){
            echo "
            <li style='position:relative;margin-bottom:2px;'>
              <img src='img_video/$row[gbr_video]'>
              <div class='black_layer'><div>
              <i class='fa fa-2x fa-camera' style='color:#fff;padding:7px;'></i>
            </li>";
          }
          ?>
          </ul>
        </div>
      <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
        <div class="title liputan-khusus" style="background-color: #cd201f;background-image: linear-gradient(112deg, #cd201f 0%, #7a0707 100%);padding:10px 15px;color:white;">VIDEO</div>
        <ul class="list-liputan-video">
        <?php
        $video = mysql_query("SELECT * FROM video ORDER BY tanggal DESC LIMIT 1");
        while($row = mysql_fetch_array($video)){
          echo "
            <li style='position:relative;margin-bottom:2px;'>
              <img src='img_video/$row[gbr_video]'>
              <div class='black_layer'><div>
              <i class='fa fa-3x fa-play-circle' style='color:#fff;padding:7px;'></i>
            </li>";
        }
        ?>
        </ul>
      </div>

      <div id="fixed-right" data-spy="affix" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;border:1px solid #ff9d25;">
        <div class="title liputan-khusus" style="background-color: #ff9d25;background-image: linear-gradient(62deg, #ff9d25 0%, #ffca00 100%);padding:10px 15px;color:white;">LIPUTAN KHUSUS</div>
        <ul class="list-liputan-khusus">
        <?php
        $liputan_khusus = mysql_query("SELECT * FROM berita WHERE utama = 'Y' ORDER BY id_berita DESC LIMIT 8");
        $foto = TRUE;
        while($row = mysql_fetch_array($liputan_khusus)){
          $tgl = tgl_indo($row['tanggal']);
          $jam = trans_jam($row['jam']);
          if($foto){
            echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
          }else{
            echo "<li><a style='color:#444444;' href='berita-$row[judul_seo]'>$row[judul]</a></li>";
          }
          $foto = FALSE;
        }
        ?>
        </ul>
      </div>
    </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="row">
    <div id="iklan-footer" style="padding-bottom:10px;margin-top:10px;">
      <div class="iklan">
        <img src="foto_pasangiklan/adhomebanner.jpg" width="100%">
      </div>
    </div>
  </div>
  </div>
  <script>
  $('#more_animasi').one('click', function(){
    $(this).html('<div><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw" style="color:#EFCB17"></i><span style="color:#fff;padding:7px 0;display:block">Memuat&hellip;</span></div>');
    $.ajax({
      method: 'GET',
      url: 'more-web.php',
      data: {
        urut: $('li[data-berita]:last-child').attr('data-berita')
      },
      success: function(html)
      {
        if(html)
        {
          $('#list-terkini-middle').append(html);
          $('#more_animasi').html('<br><a id="more_indeks">Indeks</a>');
          $('.lazy').lazy();
        }
      }
    })
  });
  </script>
 <!-- <script>
		var loadMore = true;
		var page = 1;
		$(window).scroll(function(){
			var nearbottom = 100;
			if(($(window).scrollTop()+nearbottom >= $(document).height()-$(window).height()) && loadMore)
			{
				loadMore = false;
				if (page <= 20)
				{
					$.ajax({
						url: 'more-web.php?kategori=&page='+page+'&urut='+$('li:last').attr('kode'),
						beforeSend: function()
						{
							$('#more').show();
						},
						complete: function()
						{
							$('#more').hide();
						},
						success: function(result)
						{
							$('#daftar-artikel').append(result);
							loadMore = true;
						}
					});
				}
				page++;
			}
		});
  </script> -->
  <script>
   $("#fixed-right").affix({
     offset : {
       top: $('#fixed-right').offset().top,
       bottom: $('#iklan-footer').outerHeight(true) + 760
     }
   });

   $("#fixed-left").affix({
     offset : {
       top: $('#fixed-left').offset().top,
       bottom: $('#iklan-footer').outerHeight(true) + 760
     }
   });
  </script>
  <?php  }
   // NEWS////////////////////////////////////////////
  elseif ($_GET['module']=='katepage'){
  include "$f[folder]/menupage.php";}

    ////////////////////////////////////////////////////////////
  elseif ($_GET['module']=='sitemap'){
  include "$f[folder]/modul/mod_berita/sitemap.php";}
      
  // DETAIL BERITA////////////////////////////////////////////
  elseif ($_GET['module'] == 'detailberita'){
  include "$f[folder]/modul/mod_berita/detailberita.php";}
  ////////////////////////////////////////////////////////////

  //DETAIL FOTO////////////////////////////////////////////
  elseif ($_GET['module']=='foto'){
  include "$f[folder]/modul/mod_berita/detailfoto.php";}
  ////////////////////////////////////////////////////////////


  // BERITA FOTO////////////////////////////////////////////
  elseif ($_GET['module']=='beritafoto'){
    include "$f[folder]/modul/mod_berita/foto.php";}
  ////////////////////////////////////////////////////////////

   // KATEGORI BERITA ////////////////////////////////////////////
  elseif ($_GET['module']=='detailkategori'){
  include "$f[folder]/modul/mod_berita/detailkategori.php";}
  ////////////////////////////////////////////////////////////

  // CARI BERITA ////////////////////////////////////////////
  elseif ($_GET['module']=='hasilcari'){
  include "$f[folder]/modul/mod_berita/hasilcari.php";}
  ////////////////////////////////////////////////////////////

   // DEATAIL HALAMAN STATIS ////////////////////////////////////////////
  elseif ($_GET['module']=='halamanstatis'){
  include "$f[folder]/modul/mod_halaman/halaman.php";}
  /////////////////////////////////////////////////////////////

   // DEATAIL HALAMAN STATIS ////////////////////////////////////////////
  elseif ($_GET['module']=='error'){
  include "$f[folder]/notfound.html";}

  /////////////////////////////////////////////////////////////
  ?>
