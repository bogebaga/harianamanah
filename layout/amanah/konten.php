<?php if ($_GET['module']=='home'){ ?>
	<div class="featured container" style="top:20px;" >
		<div class="row" style="margin-top: 20px;">
			<div class="col-xs-12 col-lg-9" style='padding-left:0;padding-right:20px;'>
          <a href="lombamewarnaiislami">
            <img src="img_lomba/Banner Mewarnai.jpg" alt="Lomba Mewarnai Islami - harianamanah.com">
          </a>
          <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade hl-slider" data-ride="carousel" style="background-color:#000;height:auto;">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role='listbox'>
            <?php
            $terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE headline='Y' AND username != 'alifahmi' ORDER BY id_berita DESC LIMIT 5");
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
                    <div style='position:relative;'>
                      <a href='berita-$t[judul_seo]'>
                        <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='display:inline-block;vertical-align:top;'>
                      </a>
                      <div class='desc-home' style='display:inline-block;width:290px;bottom:15px;right:15px;position:absolute;background:rgba(2, 2, 2, 0.7686274509803922);padding:12px 12px 20px;'>
                        <a href='kategori-$t[id_kategori]-$t[kategori_seo]' style='background-color:#EFCB17;padding:5px 8px;display:inline-block;color:#000;margin:0 3px'>".strtoupper($t['nama_kategori'])."</a>
                        <p style='font-size:14px;color:#ddd;line-height:1.5;margin:10px 3px 0;word-wrap:break-word;'>".substr(strip_tags($t['isi_berita']), 0, 160).".&nbsp;<a href='berita-$t[judul_seo]'><b style='color:yellow;'>Selanjutnya</b></a></p>
                      </div>
                    </div>
                  </div>
                  <!-- Static Header -->
                  <!-- <div class='slider-berita-terkait' style='position:absolute;margin-top:-45px;right:13px;width:170px;'>
                    <div style='color:#efcb17;font-size:15px;display:inline-block;padding: 7px;border:1px solid #efcb17;'>Berita Terkait</div>
                    <ul style='line-height:.8;margin-top:10px'>";
                      $terkait=mysql_query("SELECT * FROM berita WHERE id_kategori = '$t[id_kategori]' ORDER BY id_berita DESC LIMIT 3");
                      while($u=mysql_fetch_array($terkait)){
                        echo "<li><a href='berita-$u[judul_seo]' style='font-size:12px;color:white;'>$u[judul]</a></li>";
                      };
                echo "</ul></div> --></div>";
              } ?>
            </div>
            <div class='col-xs-12' style='float:none;'>
              <script>
                function open_link (obj){
                window.open(obj.getAttribute("href"), '_self');
                return false;
              }
              </script>
              <ol class='carousel-indicators' style='position:relative;'>
                <?php
                  $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' AND username != 'alifahmi' ORDER BY id_berita DESC LIMIT 5");
                  $i = 0;
                  while($indicator = mysql_fetch_array($terkini)){
                    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'>
                      <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$indicator[gambar]' alt='$indicator[judul]'>
                      <a href='berita-$indicator[judul_seo]' onclick='open_link(this); return false;' style=margin:0;padding:7px;font-size:12px;color:white;display:inline-block;'>$indicator[judul]</a>
                    </li>";
                  $i++;
                  }
                ?>
              </ol>
            </div>
          </div><!-- /carousel -->
        <div class="col-xs-12" style="margin-top:7px;padding:0;">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Billboard Ads -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:795px;height:125px"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="3495752496"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="col-xs-12" style="margin-top:7px;padding:0;">
          <style>
           li p[data-opacity='true']{
            opacity:0;
           }
           li:hover p[data-opacity='true']{
            opacity: 1;
          }
          </style>
            <h1 style="margin-top:0;font-weight:900;">BERITA TERKINI</h1>
            <div class="single_blog_sidebar1 berita-terkini wow fadeInUp">
              <ul id="list-terkini-middle" style="box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.46);">
              <?php
                $x=1;
                $detail1=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori ORDER BY b.id_berita DESC LIMIT 48");
                while($p1=mysql_fetch_array($detail1))
                {
                  $tgl = tgl_indo($p1['tanggal']);
                  $jam = trans_jam($p1['jam']);
                  if($x%11 == 0):
                    if($state):
                      $add_q = "AND id_berita < '$test'";
                    else:
                      $add_q = ''; 
                    endif;
                    $inilah = mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE jenis_berita = 'foto' $add_q ORDER BY b.id_berita DESC LIMIT 1");
                    while($foto=mysql_fetch_array($inilah)):
                      echo "<li style='color:white;background:#252831' data-berita-foto='$foto[id_berita]'>
                      <div class='deskripsi-judul home reda'>
                        <h6 ><a style='color:#fff;font-size:30px;' href='foto-$foto[judul_seo]' title='$foto[judul]'>$foto[judul]</a></h6>
                        <p class='rubrik-tanggal'><a href='kategori-$foto[id_kategori]-$foto[kategori_seo]'>".strtoupper($foto['nama_kategori'])."</a>&nbsp;$foto[hari], $tgl - $jam</p>
                      </div>
                      <a href='foto-$foto[judul_seo]'>
                        <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$foto[gambar]' alt='$foto[judul]' style='object-fit:cover;width:100%;height:400px;'>
                      </a>
                    </li>";
                    $state = true;
                    $test = $foto['id_berita'];
                    endwhile;
                  elseif($x == 3):
                    echo '<li style="color:white;">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-format="fluid"
                                data-ad-layout-key="-bs+2q-4a-fy+1so"
                                data-ad-client="ca-pub-4290882175389422"
                                data-ad-slot="9217631936"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>      
                          </li>';
                  elseif($x == 6):
                    echo "<li style='color:white;'>
                    <img class='lazy' src='foto_statis/base.jpg' data-src='".SITE_URL."foto_iklanheader/trans_makasar.jpg' alt='$p1[judul]' style='width:100%;height:285px'>
                    </li>";
                  elseif($x == 17):
                    echo "<ul class='featured_nav0 berita-lainnya' style='border-bottom:1px solid #ececec;'><h6 style='font-weight:900;padding-left:10px;'>REKOMENDASI</h6>";
                          $detail2=mysql_query("SELECT * FROM berita WHERE utama='Y' order by id_berita DESC limit 8");
                          while($p2=mysql_fetch_array($detail2))
                          {
                            echo"
                                  <li style='width:190px;margin:0 0 10px;padding-right:7px;height:185px;'>
                                    <a class='featured_img' href='berita-$p2[judul_seo]'><img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$p2[gambar]' alt='$p2[judul]'></a>
                                    <div class='featured_title berita-lainnya' style='font-size:14px;'>
                                      <a class='' href='berita-$p2[judul_seo]' style='margin-top:0;padding-top:5px;text-align:left;width:auto;font-weight:normal;'>$p2[judul]</a>
                                    </div>
                                  </li>
                                ";
                          }
                    echo "<div class='clearfix'></div></ul>";
                  elseif($x == 23):
                    echo "<li style='color:white;'>
                      <img class='lazy' src='foto_statis/base.jpg' data-src='".SITE_URL."foto_politik/pol_2.jpg' alt='diaji - harianamanah.com' style='width:100%;height:285px'>
                    </li>";
                  elseif($x == 27):
                    echo "<li style='color:white;'>
                      <img class='lazy' src='foto_statis/base.jpg' data-src='".SITE_URL."foto_iklanheader/ulang_tahun_abu.jpg' alt='gebyar ulang tahun abutours ke 8 - harianamanah.com' style='width:100%;'>
                    </li>";
                  else:
                    echo "<li style='color:white;' data-berita='$p1[id_berita]'>
                    <a href='berita-$p1[judul_seo]'>
                    <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]' style='width:230px;height:140px;object-fit:cover;vertical-align:top;'>
                    </a>
                    <div class='deskripsi-judul home'>
                      <p style='margin-left:7px;' class='rubrik-tanggal'><a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".strtoupper($p1['nama_kategori'])."</a>&nbsp;$p1[hari], $tgl - $jam</p>
                      <h6><a href='berita-$p1[judul_seo]' title='$p1[judul]'>$p1[judul]</a></h6>
                      <p style='margin-bottom:0;'>".substr(strip_tags($p1['isi_berita']), 0, 130)."&nbsp;<a href='berita-$p1[judul_seo]'><b style='color:#009688;'>&hellip;</b></a></p>
                      <p data-opacity='true' style='margin:0 0 0 7px;font-size:15px;margin-top:7px;'>
                        <a href='https://www.facebook.com/sharer.php?u=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank'><i class='fa fa-facebook fa-fw'></i></a>
                        <a href='https://twitter.com/intent/tweet?url=http://harianamanah.com/berita-$p1[judul_seo]&text=$p1[judul]&via=harianamanah' target='_blank'><i class='fa fa-twitter fa-fw'></i></a>
                        <a href='https://plus.google.com/share?url=http://harianamanah.com/berita-$p1[judul_seo]' target='_blank' ><i class='fa fa-google-plus fa-fw'></i></a>
                      </p>
                    </div>
                  </li>";
                  endif;
                  $x++;
                } ?>
              </ul>
              <style>
                #more,#more_indeks {margin-bottom:10px;display:inline-block;padding:7px 40px;box-shadow:0px 1px 5px 0px rgba(0, 0, 0, 0.5686274509803921);border-radius:50px; background:#009688;color:#fff;cursor:pointer;font-weight:700; transition:background .5s ease;}
              </style>
              <div id="more_animasi" style="text-align:center;margin-top:10px;">
                <div id="more">BERITA LAINNYA</div>
              </div>
            </div>
            <div class="row">
              <div id="iklan-footer" style="padding-bottom:10px;margin-top:10px;">
                <div class="iklan">
                  <img src="foto_pasangiklan/adhomebanner.jpg" width="96%">
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- break -->
      <div class="col-xs-12 col-lg-3 hidden-sm hidden-md" style="padding:0">
        <div class="single_blog_sidebar wow fadeInUp" style="margin-bottom:50px;">
        <h1 style="font-weight:bold;margin-top:0;font-size:40px;line-height:.8;background:#00A0A4;padding:5px;color:#fff;">TOPIK UTAMA</h1>
          <ul class="featured_nav2 list-topik-khusus">
            <?php
            $liputan_khusus = mysql_query("SELECT sub_judul, topik FROM berita WHERE topik != '' GROUP BY topik");
            while($row = mysql_fetch_array($liputan_khusus)){
              echo "<li style='background: transparent;'>
                <i class='fa fa-hashtag' style='font-size:20px;margin-right:10px;color:#00a1a2'></i>
                <a style='color:#41454f;font-size:15px;display:inline-block;width:calc(100% - 50px);font-weight:bold;vertical-align:middle;' href='topik-$row[topik]'>$row[sub_judul]</a>
              </li>";
            } ?>
          </ul>
        </div>
        <div class="single_blog_sidebar berita-popular wow fadeInUp">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Custom Square Ads -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:270px;height:270px"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="1205411324"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="single_blog_sidebar berita-popular wow fadeInUp">
          <h1 style="font-weight:900;">BERITA POPULAR</h1>
          <ol class="list-berita-popular">
          <?php
          $date = date('Y-m-d');
          $berita_popular = mysql_query("SELECT * FROM berita WHERE tanggal BETWEEN date_sub('$date', INTERVAL 7 DAY) AND '$date' ORDER BY dibaca DESC LIMIT 10");
          $x=1;
          while($row = mysql_fetch_array($berita_popular)){
            if($x == 1){
              echo "<img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]' style='height:auto;'><li><a style='float:right;width:calc(100% - 65px)' href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a><div class='clearfix'></div></li>";
            }else{
              echo "<li><a style='float:right;width:calc(100% - 65px)' href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a><div class='clearfix'></div></li>";
            }
            $x++;
          }
          ?>
          </ol>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #ebebeb;height:auto;margin-bottom:10px;">
          <img src="foto_iklanheader/gammara.jpg" alt="iklan gammara untuk funday harianamanah.com" style="height:auto">
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #ebebeb;height:auto;margin-bottom:10px;">
          <h1 class="title liputan-khusus" style="background:#EBEBEB;margin:0;margin-bottom:7px;padding:10px 0;color:#31708f; border-bottom:3px solid #31708f">ENSIKLOPEDI MUSLIM</h1>
            <ul class="list-liputan-khusus" style="background:#fff;box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.46);">
            <?php
            $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='60' ORDER BY id_berita DESC LIMIT 6");
            $x=1;
            while($row = mysql_fetch_array($liputan_khusus)){
              $tgl = tgl_indo($row['tanggal']);
              $tgl = tgl_indo($row['tanggal']);
              $jam = trans_jam($row['jam']);
              if($x == 1){
                echo "<li style='padding-top:0;margin:0;'><img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
              }else
              {
                echo "<li style='margin:0;'><img class='lazy' src='foto_statis/base_n.jpg' style='width: 65px;height: 65px;padding-left: 5px;box-sizing: content-box;' data-src='http://harianamanah.com/foto_small/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding: 2px 5px;display:inline-block;font-size: 14px;vertical-align: middle;width: calc(100% - 70px);'>$row[judul]</a></li>";
              }
              $x++;
            }
            $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '60'");
            $kategori = mysql_fetch_array($liputan_khusus);
            echo "<a href=\"$kategori[link]\" style=\"background:#fff;display:block;text-align:center;padding:10px 0;color:#31708f;font-weight:bold;font-size:14px;\"><i class='fa fa-2x fa-search' aria-hidden='true' style='background:#31708f;color:#fff;display:inline-block;padding:5px;border-radius:50px;width:38px;height:38px;'></i><br>Baca Lainnya</a>";
            ?>
            </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="background-color: #ebebeb;height:auto;margin-bottom:10px;">
            <h1 class="title liputan-khusus" style="background:#EBEBEB;margin:0;margin-bottom:7px;padding:10px 0;color:#3f51b5; border-bottom:3px solid #3f51b5;">KONSULTASI</h1>
              <ul class="list-liputan-khusus" style="background:#fff;box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.46);">
              <?php
              $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='6' ORDER BY id_berita DESC LIMIT 3");
              while($row = mysql_fetch_array($liputan_khusus)){
                $tgl = tgl_indo($row['tanggal']);
                $jam = trans_jam($row['jam']);
                echo "<li style='padding-top:0;margin:0;'><img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
              }
              $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '6'");
              $kategori = mysql_fetch_array($liputan_khusus);
              echo "<a href=\"$kategori[link]\" style=\"background:#fff;display:block;text-align:center;padding:10px 0;color:#3f51b5;font-weight:bold;font-size:14px;\"><i class='fa fa-2x fa-search' aria-hidden='true' style='background:#3f51b5;color:#fff;display:inline-block;padding:5px;border-radius:50px;width:38px;height:38px;'></i><br>Baca Lainnya</a>";
              ?>
              </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="background-color: #ebebeb;height:auto;margin-bottom:10px;">
          <h1 class="title liputan-khusus" style="background:#EBEBEB;margin:0;margin-bottom:7px;padding:10px 0;color:#f44336; border-bottom:3px solid #f44336;">MUAMALAH</h1>
            <ul class="list-liputan-khusus" style="background:#fff;box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.46);">
            <?php
            $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='72' ORDER BY id_berita DESC LIMIT 6");
            $x=1;
            while($row = mysql_fetch_array($liputan_khusus)){
              $tgl = tgl_indo($row['tanggal']);
              $jam = trans_jam($row['jam']);
              if($x == 1){
                echo "<li style='padding-top:0;margin:0;'><img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
              }else
              {
                echo "<li style='margin:0;'><img class='lazy' src='foto_statis/base_n.jpg' style='width: 65px;height: 65px;padding-left: 5px;box-sizing: content-box;' data-src='http://harianamanah.com/foto_small/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding: 2px 5px;display:inline-block;font-size: 14px;vertical-align: middle;width: calc(100% - 70px);'>$row[judul]</a></li>";
              }
              $x++;
            }
            $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '72'");
            $kategori = mysql_fetch_array($liputan_khusus);
            echo "<a href=\"$kategori[link]\" style=\"background:#fff;display:block;text-align:center;padding:10px 0;color:#f44336;font-weight:bold;font-size:14px;\"><i class='fa fa-2x fa-search' aria-hidden='true' style='background:#f44336;color:#fff;display:inline-block;padding:5px;border-radius:50px;width:38px;height:38px;'></i><br>Baca Lainnya</a>";
            ?>
            </ul>
          </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #ebebeb;height:auto;margin-bottom:10px;">
          <h1 class="title liputan-khusus" style="background:#EBEBEB;margin:0;margin-bottom:7px;padding:10px 0;color:#2196f3; border-bottom:3px solid #2196f3;">ISLAMIC VIEW</h1>
            <ul class="list-liputan-khusus" style="background:#fff;box-shadow:0px 0px 1px 0px rgba(0, 0, 0, 0.46);">
            <?php
            $liputan_khusus = mysql_query("SELECT * FROM berita WHERE id_kategori='67' ORDER BY id_berita DESC LIMIT 6");
            $x=1;
            while($row = mysql_fetch_array($liputan_khusus)){
              $tgl = tgl_indo($row['tanggal']);
              $jam = trans_jam($row['jam']);
              if($x == 1){
                echo "<li style='padding-top:0;margin:0;'><img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding:10px 10px 0;display:inline-block;font-size:20px;'>$row[judul]</a><span style='display:inline-block;font-weight:300;font-size:11px;padding:5px 10px;'>$row[hari], $tgl - $jam</span></li>";
              }else
              {
                echo "<li style='margin:0;'><img class='lazy' src='foto_statis/base_n.jpg' style='width: 65px;height: 65px;padding-left: 5px;box-sizing: content-box;' data-src='http://harianamanah.com/foto_small/$row[gambar]' alt='$row[judul]'><a href='berita-$row[judul_seo]' style='padding: 2px 5px;display:inline-block;font-size: 14px;vertical-align: middle;width: calc(100% - 70px);'>$row[judul]</a></li>";
              }
              $x++;
            }
            $liputan_khusus = mysql_query("SELECT * FROM menu WHERE id_menu = '71'");
            $kategori = mysql_fetch_array($liputan_khusus);
            echo "<a href=\"$kategori[link]\" style=\"background:#fff;display:block;text-align:center;padding:10px 0;color:#2196f3;font-weight:bold;font-size:14px;\"><i class='fa fa-2x fa-search' aria-hidden='true' style='background:#2196f3;color:#fff;display:inline-block;padding:5px;border-radius:50px;width:38px;height:38px;'></i><br>Baca Lainnya</a>";
            ?>
            </ul>
        </div>
        <div id='scroll-fixed'>
          <div class="single_blog_sidebar berita-foto wow fadeInUp">
            <h1 class="title" style="margin-top:0px;">INFOGRAFIS</h1>
            <ul class="list-berita-foto">
            <?php
            $foto = mysql_query("SELECT * FROM berita WHERE username = 'alifahmi' ORDER BY id_berita DESC LIMIT 1");
            while($row = mysql_fetch_array($foto)){
              echo "
              <li style='position:relative;margin-bottom:2px;'>
                <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' style='height:auto'>
                <div class='black_layer'></div>
                <div style='position:absolute;bottom:0;'>
                  <a href='foto-$row[judul_seo]' title='$row[judul]'><h1 style='color:#fff;font-size:15px;padding:0 5px;'>$row[judul]</h1></a>
                </div>
              </li>";
            }
            ?>
            </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="background-color: #EBEBEB;height:auto;margin-bottom:10px;">
            <h1 class="title" style="color: #4158D0;">FOTO</h1>
            <ul class="list-berita-foto">
            <?php
            $foto = mysql_query("SELECT * FROM berita WHERE username = '19' ORDER BY id_berita DESC LIMIT 1");
            while($row = mysql_fetch_array($foto)){
              echo "
              <li style='position:relative;margin-bottom:2px;'>
                <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' style='height:auto;'>
                <i class='fa fa-2x fa-camera' style='color:#fff;padding:7px;position:absolute;top:0;left:0;'></i>
                <div class='black_layer'></div>
                <div style='position:absolute;bottom:0;'>
                  <a href='foto-$row[judul_seo]' title='$row[judul]'><h1 style='color:#fff;font-size:15px;padding:0 5px;'>$row[judul]</h1></a>
                </div>
              </li>";
            }
            ?>
            </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="background-color:#EBEBEB;height:auto;margin-bottom:10px;">
            <h1 class="title liputan-khusus" style="color:#cd201f;">VIDEO</h1>
            <ul class="list-liputan-video">
            <?php
            $video = mysql_query("SELECT * FROM berita WHERE username = '20' ORDER BY id_berita DESC LIMIT 1");
            while($row = mysql_fetch_array($video)){
              echo "
                <li style='position:relative;margin-bottom:2px;'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' style='height:auto;'>
                  <i class='fa fa-3x fa-play-circle' style='color:#fff;padding:7px;position:absolute;top:0;left:0'></i>
                  <div class='black_layer'></div>
                  <div style='position:absolute;bottom:0;'>
                    <a href='video-$row[judul_seo]' title='$row[judul]'><h1 style='color:#fff;font-size:15px;padding:0 5px;'>$row[judul]</h1></a>
                  </div>
                </li>";
            }
            ?>
            </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="height:auto;">
            <div class="single_blog_sidebar wow fadeInUp">
              <ul class="featured_nav2">
                <li>
                  <div id="radio">
                    <img src="images/radio.jpg" alt="radio bharata post harianamanah.com">
                    <audio src="http://s3.vinhostmedia.com:9324/;" autobuffer autoloop loop controls ></audio>
                  </div>
                </li>
                <div class="clearfix"></div>
              </ul>
            </div>
          </div>
          <div style="text-align:center;">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- W_Custom Square Ads -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:270px;height:270px"
                data-ad-client="ca-pub-4290882175389422"
                data-ad-slot="1205411324"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div>
    </div>
    <!-- <div class="clearfix"></div> -->
  </div>
  </div>
  <script>
  $('#more_animasi').one('click', function(){
    $(this).html('<div><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw" style="color:#009688"></i><span style="color:#fff;padding:7px 0;display:block">Memuat&hellip;</span></div>');
    $.ajax({
      method: 'GET',
      url: 'more-web.php',
      data: {
        urut: $('li[data-berita]:last-child').attr('data-berita'),
        urut_foto: $('li[data-berita-foto]:nth-last-child(5)').attr('data-berita-foto')
      },
      success: function(html)
      {
        if(html)
        {
          $('#list-terkini-middle').append(html);
          $('#more_animasi').html('<a id="more_indeks">INDEX BERITA</a></a>');
          $('.lazy').lazy();
        }
      }
  })
})
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
  <?php  }
  elseif ($_GET['module']=='katepage'){
  include "$f[folder]/menupage.php";}

  elseif ($_GET['module']=='sitemap'){
  include "$f[folder]/sitemap.php";}

  elseif ($_GET['module'] == 'detailfoto')
  include "$f[folder]/modul/mod_foto/detailfoto.php";

  elseif ($_GET['module'] == 'detailvideo')
  include "$f[folder]/modul/mod_video/detailvideo.php";

  elseif ($_GET['module'] == 'detailberita'){
  include "$f[folder]/modul/mod_berita/detailberita.php";}

  elseif ($_GET['module']=='detailkategori'){
  include "$f[folder]/modul/mod_berita/detailkategori.php";}

  elseif ($_GET['module']=='detailtag'){
  include "$f[folder]/modul/mod_halaman/hasiltag.php";}
  
  elseif ($_GET['module']=='hasilcari'){
  include "$f[folder]/modul/mod_berita/hasilcari.php";}

  elseif ($_GET['module']=='halamanstatis'){
  include "$f[folder]/modul/mod_halaman/halaman.php";}

  elseif ($_GET['module']=='warnaislami'){
  include "$f[folder]/modul/mod_halaman/warnaislami.php";}

  elseif ($_GET['module']=='error'){
  include "$f[folder]/notfound.html";}
  ?>
