<div class="featured container" style="top:35px;" >
		<div class="row">
    <!-- <a href="lombamewarnaiislami" style="margin-bottom:10px;display:block;">
      <img src="img_lomba/Proposal Lomba Mewarnai.jpg" alt="Lomba Mewarnai Islami - harianamanah.com" style="width:100%;">
    </a> -->
			<div class="col-xs-12 col-lg-9" style='padding-left:0;padding-right:20px;'>
          <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade hl-slider" data-ride="carousel" style="height:auto;">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role='listbox'>
            <?php
            $terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE headline='Y' AND username != 'alifahmi' ORDER BY id_berita DESC LIMIT 5");
            while($t=mysql_fetch_array($terkini)){
              $tgl = tgl_indo($t['tanggal']);
              $jam = trans_jam($t['jam']);
              echo"
                <div class='item'>
                  <div class='col-xs-12' style='float:none;padding-bottom:8px;padding-left:0;'>
                    <div style='position:relative;'>
                      <a href='berita-$t[judul_seo]'>
                        <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='display:inline-block;vertical-align:top;'>
                      </a>
                    </div>
                    <div class='header-text'>
                    <div class='desc-home' style='display:inline-block;bottom:15px;right:15px;background:rgba(2, 2, 2, 0.7686274509803922);padding:12px;'>
                        <a href='kategori-$t[id_kategori]-$t[kategori_seo]' style='font-size:12px;background-color:#EFCB17;padding:0 5px;display:inline-block;color:#000;'>".strtoupper($t['nama_kategori'])."</a>
                        <div class='tanggal-news' style='display:inline-block;font-size:12px;'> $t[hari], $tgl - $jam</div>
                        <h1 id='title' style='font-size:35px;margin-top:7px;'><a href='berita-$t[judul_seo]'>$t[judul]</a></h1>
                        <p style='font-size:12px;color:#ddd;line-height:1.5;word-wrap:break-word;margin:0;'>".substr(strip_tags($t['isi_berita']), 0, 160).".&nbsp;<a href='berita-$t[judul_seo]'><b style='color:yellow;'>Selanjutnya</b></a></p>
                    </div>
                    <br>
                    </div>
                  </div>
                  <!-- Static Header -->
                  <!-- <div class='slider-berita-terkait' style='position:absolute;margin-top:-45px;right:13px;width:170px;'>
                    <div style='color:#efcb17;font-size:15px;display:inline-block;padding: 7px;border:1px solid #efcb17;'>Berita Terkait</div>
                    <ul style='line-height:.8;margin-top:10px'>";
                      $terkait=mysql_query("SELECT * FROM berita WHERE id_kategori = '$t[id_kategori]' ORDER BY id_berita DESC LIMIT 3");
                      while($u=mysql_fetch_array($terkait)){
                        echo "<li><a href='berita-$u[judul_seo]' style='font-size:12px;color:#333;'>$u[judul]</a></li>";
                      };
                echo "</ul></div> --></div>";
              } ?>
            </div>
            <div class='col-xs-12' style='float:none;padding-left:0;'>
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
                      <a href='berita-$indicator[judul_seo]' onclick='open_link(this); return false;' style=margin:0;padding:7px;font-size:15px;color:#333;display:inline-block;'>$indicator[judul]</a>
                    </li>";
                  $i++;
                  }
                ?>
              </ol>
            </div>
          </div><!-- /carousel -->
        <div class="col-xs-12" style="margin-top:7px;padding:0;text-align:center;">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- W_Banner Bottom -->
          <ins class="adsbygoogle"
              style="display:inline-block;width:728px;height:90px"
              data-ad-client="ca-pub-4290882175389422"
              data-ad-slot="4948221961"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="col-xs-12" style="margin-top:7px;padding:0;">
            <!-- <h1 style="margin-top:0;font-weight:900;">BERITA TERKINI</h1> -->
            <div class="single_blog_sidebar1 berita-terkini wow fadeInUp">
              <ul id="list-terkini-middle">
              <?php
                $x=1;
                $detail1=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori AND jenis_berita != 'foto' AND username != '28' ORDER BY b.id_berita DESC LIMIT 48");
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
                      echo "<li data-berita-foto='$foto[id_berita]'>
                      <a href='foto-$foto[judul_seo]'>
                        <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$foto[gambar]' alt='$foto[judul]' style='object-fit:cover;width:100%;height:400px;'>
                      </a>
                      <div class='deskripsi-judul home reda' style='margin-top:15px;'>
                        <h6 ><a style='color:#333;font-size:30px;' href='foto-$foto[judul_seo]' title='$foto[judul]'>$foto[judul]</a></h6>
                        <p class='rubrik-tanggal'><a href='kategori-$foto[id_kategori]-$foto[kategori_seo]'>".strtoupper($foto['nama_kategori'])."</a>&nbsp;$foto[hari], $tgl - $jam</p>
                      </div>
                    </li>";
                    $state = true;
                    $test = $foto['id_berita'];
                    endwhile;
                  elseif($x == 32):
                    echo '<li style="color:white;">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-format="autorelaxed"
                                data-ad-client="ca-pub-4290882175389422"
                                data-ad-slot="9556530284"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                          </li>';
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
                  elseif($x==6 || $x==12 || $x==18 || $x==23 || $x ==31 || $x==39):
                    echo '<li style="text-align:center;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                          <!-- W_Banner Bottom -->
                          <ins class="adsbygoogle"
                              style="display:inline-block;width:728px;height:90px"
                              data-ad-client="ca-pub-4290882175389422"
                              data-ad-slot="4948221961"></ins>
                          <script>
                          (adsbygoogle = window.adsbygoogle || []).push({});
                          </script></li>';
                  
                  else:
                    echo "<li style='color:white;' data-berita='$p1[id_berita]'>
                    <a href='berita-$p1[judul_seo]'>
                    <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]' style='width:230px;height:140px;object-fit:cover;vertical-align:top;'>
                    </a>
                    <div class='deskripsi-judul home'>
                      <p style='margin-left:7px;' class='rubrik-tanggal'><a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'>".strtoupper($p1['nama_kategori'])."</a>&nbsp;$p1[hari], $tgl - $jam</p>
                      <h6><a href='berita-$p1[judul_seo]' title='$p1[judul]'>$p1[judul]</a></h6>
                    </div>
                  </li>";
                  endif;
                  $x++;
                } ?>
              </ul>
              
              <div id="more_animasi" style="text-align:center;margin-top:10px;">
                <div id="more">BERITA LAINNYA</div>
              </div>
            </div>
            <div class="row">
              <div id="iklan-footer" style="padding-bottom:10px;margin-top:10px;">
                <div class="iklan">
                  <!-- <img src="foto_pasangiklan/adhomebanner.jpg" width="96%"> -->
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- W_Home_Bottom_Banner -->
                  <ins class="adsbygoogle"
                      style="display:inline-block;width:782px;height:200px"
                      data-ad-client="ca-pub-4290882175389422"
                      data-ad-slot="3687949871"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- break -->
      <div class="col-xs-12 col-lg-3 hidden-sm hidden-md" style="padding:0">
        <div class="single_blog_sidebar wow fadeInUp" style="margin-bottom:50px;">
        <h1 style="font-weight:900;margin-top:0;font-size:20px;line-height:.8;color:#333;">TOPIK UTAMA</h1>
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
          <h1 style="font-weight:900;font-size:20px;">BERITA POPULAR</h1>
          <ol class="list-berita-popular">
          <?php
          $date = date('Y-m-d');
          $berita_popular = mysql_query("SELECT judul,judul_seo, nama_menu, link FROM berita, menu WHERE id_menu = id_kategori AND tanggal BETWEEN date_sub('$date', INTERVAL 7 DAY) AND '$date' ORDER BY dibaca DESC LIMIT 10");
          $x=1;
          while($row = mysql_fetch_array($berita_popular)){
            if($x == 1){
              echo "<img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]' style='height:auto;'><li>
              <a href='$row[link]' style='float:right;width:calc(100% - 65px);text-transform:uppercase;color:#35a0a4;font-size:11px;margin-bottom:5px;'>$row[nama_menu]</a>
              <a style='float:right;width:calc(100% - 65px)' href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a><div class='clearfix'></div></li>";
            }else{
              echo "<li>
                <a href='$row[link]' style='float:right;width:calc(100% - 65px);text-transform:uppercase;color:#35a0a4;font-size:11px;margin-bottom:5px;'>$row[nama_menu]</a>
                <a style='float:right;width:calc(100% - 65px)' href='berita-$row[judul_seo]' title='$row[judul]'>$row[judul]</a><div class='clearfix'></div>
              </li>";
            }
            $x++;
          }
          ?>
          </ol>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- W_Right Banner Ads -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:270px;height:350px"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="1385019502"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

        <!-- <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-bottom:10px;">
        
          <h1 class="title liputan-khusus" style="background:#fff;margin:0;margin-bottom:7px;padding:10px 0;font-size:20px;color:#31708f;">ENSIKLOPEDI MUSLIM</h1>
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
          </div> -->
        <div id='scroll-fixed'>
          <div class="single_blog_sidebar wow fadeInUp" style="margin-bottom:50px;">
          <h1 style="font-weight:bold;margin-top:0;font-size:20px;line-height:.8;padding:5px;color:#333;">AMANAH PAPER</h1>
            <ul class="list-topik-khusus">
              <?php
              $paper = mysql_query("SELECT judul, gambar, judul_seo FROM berita WHERE username = '28' ORDER BY id_berita DESC LIMIT 1");
              while($row = mysql_fetch_array($paper)){
                echo "<li style='background: transparent;'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]' style='height:auto'>
                  <a style='font-size:15px;display:inline-block;vertical-align:middle;' href='amanahpaper/$row[judul_seo]'>$row[judul]
                  </a>
                </li>";
              } ?>
            </ul>
          </div>
          
          <div class="single_blog_sidebar berita-foto wow fadeInUp">
            <h1 class="title" style="margin-top:0px;font-size:20px;">INFOGRAFIS</h1>
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
          <div class="single_blog_sidebar wow fadeInUp" style="height:auto;margin-bottom:10px;">
            <h1 class="title" style="color: #4158D0;font-size:20px;">FOTO</h1>
            <ul class="list-berita-foto">
            <?php
            $foto = mysql_query("SELECT * FROM berita WHERE jenis_berita = 'foto' ORDER BY id_berita DESC LIMIT 1");
            while($row = mysql_fetch_array($foto)){
              echo "
              <li style='position:relative;margin-bottom:2px;'>
                <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]'>
                
                <div class='black_layer'></div>
                <div style='position:absolute;bottom:0;'>
                  <a href='foto-$row[judul_seo]' title='$row[judul]'><h1 style='color:#fff;font-size:15px;padding:0 5px;margin:0;'>$row[judul]</h1></a>
                  <svg style='display:block;width:24px;height:24px;float:right;margin-right:5px;' viewBox='0 0 24 24'>
                   <path fill='#fff' d='M1,5H3V19H1V5M5,5H7V19H5V5M22,5H10A1,1 0 0,0 9,6V18A1,1 0 0,0 10,19H22A1,1 0 0,0 23,18V6A1,1 0 0,0 22,5M11,17L13.5,13.85L15.29,16L17.79,12.78L21,17H11Z' />
                  </svg>
                </div>
              </li>";
            }
            ?>
            </ul>
          </div>
          <div class="single_blog_sidebar wow fadeInUp" style="height:auto;margin-bottom:10px;">
            <h1 class="title liputan-khusus" style="color:#cd201f;font-size:20px;">VIDEO</h1>
            <ul class="list-liputan-video">
            <?php
            $video = mysql_query("SELECT * FROM berita WHERE jenis_berita = 'video' ORDER BY id_berita DESC LIMIT 1");
            while($row = mysql_fetch_array($video)){
              echo "
                <li style='position:relative;margin-bottom:2px;'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]'>
                  
                  <div class='black_layer'></div>
                  <div style='position:absolute;bottom:0;'>
                    <a href='video-$row[judul_seo]' title='$row[judul]'><h1 style='color:#fff;font-size:15px;padding:0 5px;margin:0;'>$row[judul]</h1></a><svg style='width:24x;height:24px;display:block;float:right;margin-right:5px;' viewBox='0 0 24 24'>
                    <path fill='#fff' d='M17,10.5V7A1,1 0 0,0 16,6H4A1,1 0 0,0 3,7V17A1,1 0 0,0 4,18H16A1,1 0 0,0 17,17V13.5L21,17.5V6.5L17,10.5Z' />
                  </svg>
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
          <br>
          <br>
          <div class="single_blog_sidebar wow fadeInUp" style="margin-bottom:50px;">
          <h1 style="font-weight:bold;margin-top:0;font-size:20px;line-height:.8;padding:5px;color:#333;">PILKADA SULSEL 2018</h1>
            <ul class="list-topik-khusus">
              <img src="<?= SITE_URL."foto_banner/leader_amanah.jpg"?>" style="height:auto;margin-bottom:10px;">
              <?php 
                $query = mysql_query("SELECT DISTINCT kategori_pilkada FROM pilkada");
                while($row = mysql_fetch_array($query)):
                  echo "<li style='background: transparent;'>
                  <i class='fa fa-hashtag' style='font-size:15x;margin-right:10px;color:#333'></i>
                  <a style='color:#41454f;line-height:1.5;font-size:20px;display:inline-block;width:calc(100% - 50px);font-weight:100;vertical-align:middle' href='pilkada/$row[kategori_pilkada]'>$row[kategori_pilkada]</a>
                </li>";
                endwhile;
              ?>
            </ul>
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
    $(this).html('<div><i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw" style="color:#009688"></i><span style="color:#fff;padding:7px 0;display:block;">Memuat&hellip;</span></div>');
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