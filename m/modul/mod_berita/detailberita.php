<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
  $detail = mysql_query("SELECT * FROM berita, users, kategori, menu
                          WHERE users.id=berita.username
                          AND kategori.id_kategori=berita.id_kategori
                          AND kategori.id_kategori=menu.id_menu
                          AND judul_seo='$_GET[judul]'");
  $d   = mysql_fetch_array($detail);
  $tgl = tgl_indo_short($d['tanggal']);
  $jam = trans_jam($d['jam']);
 
  $query = mysql_query("SELECT color, link, nama_menu FROM menu where id_menu = (SELECT id_parent FROM menu WHERE link = '$d[link]')");
  $menu = mysql_fetch_array($query);
?>
<section class="container-fluid bungkus" id="test" style="margin-bottom:0;">
    <p class="daftar-redaksi" style="margin:10px 0 0;font-size:10px;"><?php echo "<a href='".SITE_URL."'>Home</a>&nbsp;&#8883;&nbsp;<a href='".SITE_URL."kategori/$menu[link]'>$menu[nama_menu]</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          </div>
    <h1 class="read_berita" style="margin-top:3px;"><?php echo $d['judul'];?></h1>
    <!-- <span style='display:block'><?php echo ucfirst($d['username'])?></span> -->
    <span class="tanggal-release">Oleh&nbsp;<?php echo ucfirst($d['username'])."&nbsp;pada&nbsp;".$tgl.",&nbsp;".$jam ?></span>
    <div class="social-optimize">
      <a href="https://www.facebook.com/sharer.php?u=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-facebook" target="_blank"></a>
      <a href="https://twitter.com/intent/tweet?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="social-share fa fa-twitter" target="_blank"></a>
      <a href="https://plus.google.com/share?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-google-plus" target="_blank"></a>
      <a href="https://line.me/R/msg/text/?<?php echo "http://m.harianamanah.com/berita-$d[judul_seo]"?>" class="social-share line" target="_blank"></a>
      <a href="whatsapp://send?text=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-whatsapp" target="_blank"></a>
      <a href="https://telegram.me/share/url?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>" class="social-share fa fa-paper-plane" target="_blank"></a>
      <a href="#facebook-comment" class="social-share fa fa-commenting-o"></a>
    </div>
    <div class="box-header">
      <div class="gambar-berita" style="position:relative;margin:0 0 7px;">
        <span id="toggle-info" class="fa fa-info-circle" style="font-size:35px;position:absolute;right:10px;bottom:10px"></span>
        <img style="height:230px;object-fit:cover;" class='lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/<?php echo $d['gambar']?>' class='img-responsive' alt='<?php echo $d['judul']?>'>
      </div>
      <div id="info-gambarku" style="padding:0 7px;font-size:12px;display:none;"><?php echo $d['keterangan_gambar']?></div>
    </div>
    <script>
      $("#toggle-info").click(function(){
        $("#info-gambarku").toggle();
      })
    </script> 
   
    <div class="box left">
      <div class="berita">
      <?php
      $konten = explode('</p>', $d['isi_berita']);
      for($i = 0; $i < count($konten); $i++):
        if($i == 1): ?>
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
        elseif($i == count($konten)-2): ?>
          <div class="baca-juga-berita">
            <b style="display:inline-block;margin-bottom:10px;border-bottom:1px solid #333;">BERITA TERKAIT</b>
            <ul>
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE username != 'alifahmi' AND id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 5");
                while($p1=mysql_fetch_array($detail1)){
                echo"
                  <li>
                    <a href='berita-$p1[judul_seo]' title='artikel-lain'>$p1[judul]</a>
                  </li>";
                }?>
            </ul>
        </div>
      <?php
        endif;
        echo $konten[$i]."</p>";
      endfor;
      mysql_query("UPDATE berita SET dibaca=$d[dibaca]+1 WHERE judul_seo='$_GET[judul]'");
      ?>
      </div>
      <div class="social-optimize" style='margin:30px 0;text-align:center;'>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share big fa fa-facebook" target="_blank"></a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="social-share big fa fa-twitter" target="_blank"></a>
        <a href="https://plus.google.com/share?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share big fa fa-google-plus" target="_blank"></a>
        <a href="https://line.me/R/msg/text/?<?php echo "http://m.harianamanah.com/berita-$d[judul_seo]"?>" class="social-share big line" target="_blank"></a>
        <a href="whatsapp://send?text=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share big fa fa-whatsapp" target="_blank"></a>
        <a href="https://telegram.me/share/url?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>" class="social-share big fa fa-paper-plane" target="_blank"></a>
        <a href="#facebook-comment" class="social-share big fa fa-commenting-o"></a>
      </div> 
      <table>
        <tr><td colspan="1">Sumber</td><td width="25px" align="center">:</td><td><?= ucfirst($d['reporter'])?></td></tr>
        <tr><td colspan="1">Reporter</td><td width="25px" align="center">:</td><td><?= ucfirst($d['username'])?></td></tr>
      </table>
      <br>
      <h5>TAGS</h5>
      <div class="tagline">
        <?php
            echo "<a href='".SITE_URL."kategori/$menu[link]'>#$menu[nama_menu]</a><a href='$d[link]'>#$d[nama_kategori]</a>";
            if($d[tag] != ''):
              $array = explode(',', $d[tag]);
              foreach($array as $tag):
                // echo $tag;
                echo "<a  href='tag/".seo_title($tag)."'>#".ucwords($tag)."</a>";
              endforeach;
            endif;
          ?>
      </div>
  </div>
  <!-- <hr>
  <span>Dibaca : <?php echo $d['dibaca']?></span>
  <hr> -->
  <!-- <div class="baca-juga">
    <ul style="list-style-type: none;">
      <?php
            $detail1=mysql_query("SELECT * FROM berita WHERE username != 'alifahmi' AND id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 5");
            while($p1=mysql_fetch_array($detail1)){
            echo"
            <li>
                <img class='lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$p1[gambar]' alt='$p1[judul]' style='border-radius:50px;width:42px;'>
                <a href='berita-$p1[judul_seo]' title='artikel-lain'>$p1[judul]</a>
              </li>";
            }?>
          </ul>
        </div> -->
      </div>
    </div>
</section>
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
<div style="text-align:center;margin-top: 20px;">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- B_Center Ads -->
  <ins class="adsbygoogle"
      style="display:inline-block;width:300px;height:250px"
      data-ad-client="ca-pub-4290882175389422"
      data-ad-slot="1158479752"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div>
<section id='facebook-comment' class="container-fluid bungkus" style="background: transparent;">
  <h4 style='margin-top:20px;'>Tinggalkan Jejakmu disini</h4>
  <div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
</section>
<section class="container-fluid bungkus nav-nex-pre" style='margin:0;border-bottom:1px solid #e0e0e0;'>
  <?php
  // echo $d['id_kategori'];
    $link_berita_prev = mysql_query("SELECT * FROM berita WHERE id_berita < $d[id_berita] AND id_kategori = '$d[id_kategori]' ORDER BY id_berita DESC LIMIT 1");
    while($row_p=mysql_fetch_array($link_berita_prev)){
      echo "<a class='berita-next' href='berita-$row_p[judul_seo]'>$row_p[judul]<span class='fa fa-long-arrow-left'></span></a>";
    }
    $link_berita_next = mysql_query("SELECT * FROM berita WHERE id_berita > $d[id_berita] AND id_kategori = '$d[id_kategori]' LIMIT 1");
    while($row_n=mysql_fetch_array($link_berita_next)){
      echo "<a class='berita-prev' href='berita-$row_n[judul_seo]'>$row_n[judul]<span class='fa fa-long-arrow-right'></span></a>";
    }
  ?>
</section>
<section>
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
</section>
<section class="container-fluid bungkus">
  <section class="container-fluid bungkus" style="padding:0;">
    <div class="baca-juga">
      <div class="garis-bawah" style="border-bottom:1px solid <?php echo $menu['color']?>;">
      <h3 style="color:<?php echo $menu['color']?>;border:0;margin:0;">TERKINI</h3>
      </div>
        <ul class="list-berita-terkini" style="list-style-type: none;">
            <?php
            $detail1=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '$d[id_parent]' ORDER BY berita.id_berita DESC LIMIT 7");
            $x=1;
            while($p1=mysql_fetch_array($detail1)){
            if($x == 6):
            ?>
              <div class="clearfix"></div>
              <h5>BERITA REKOMENDASI</h5>
              <section style="white-space:nowrap;overflow:auto;border-bottom:1px solid #e0e0e0;">
                <?php
                  $topik = mysql_query("SELECT judul, judul_seo, gambar FROM berita, menu WHERE id_kategori = id_menu AND berita.aktif = 'Y' AND nama_menu = '$d[nama_menu]' ORDER BY id_berita DESC LIMIT 15");
                  while ($tp = mysql_fetch_array($topik))
                  {
                    echo "<article class= 'artikle' style='border:0;width:200px;display:inline-block;padding-right:15px;white-space:normal;vertical-align:top;'>
                    <div class='list-picture'>
                    <a href='berita-$tp[judul_seo]' style='width:100%;'>
                    <img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$tp[gambar]' alt='$tp[judul]' style='object-fit:cover;height:115px;width:100%;'>
                    </a>
                    </div>
                    <div class='artikle-text' data-target='update' style='padding:0;margin-top:10px;width:100% !important'>
                    <a href='berita-$tp[judul_seo]' class='berita' title='$tp[judul]' style='font-weight:500;font-size:12px;width:100% !important'>$tp[judul]</a>
                    <br>
                    </div>
                    </article>";
                  }
                  ?>
              </section>
              <h5>BERITA POPULAR</h5>
              <section style="white-space:nowrap;overflow:auto;border-bottom:1px solid #e0e0e0;">
                <?php
                  $date = date('Y-m-d');
                  $topik = mysql_query("SELECT * FROM berita, menu WHERE tanggal BETWEEN date_sub('$date', INTERVAL 30 DAY) AND '$date' AND id_kategori = id_menu AND nama_menu = '$d[nama_menu]' ORDER BY dibaca DESC LIMIT 15");
                  while ($tp = mysql_fetch_array($topik))
                  {
                  echo "<article class= 'artikle' style='border:0;width:200px;display:inline-block;padding-right:15px;white-space:normal;vertical-align:top;'>
                          <div class='list-picture'>
                            <a href='berita-$tp[judul_seo]' style='width:100%;'>
                              <img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$tp[gambar1]' alt='$tp[judul]' style='object-fit:cover;height:115px;width:100%;'>
                            </a>
                          </div>
                          <div class='artikle-text' data-target='update' kode='$tp[id_berita]' style='padding:0;margin-top:10px;width:100% !important'>
                            <a href='berita-$tp[judul_seo]' class='berita' title='$tp[judul]' style='font-weight:500;font-size:12px;width:100% !important'>$tp[judul]</a>
                            <br>
                          </div>
                        </article>";
                  }
                ?>
              </section>
            <?php
            elseif($x == 7): 
            ?>
                <div style="text-align:center;">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- B_Center Ads -->
                  <ins class="adsbygoogle"
                      style="display:inline-block;width:300px;height:250px"
                      data-ad-client="ca-pub-4290882175389422"
                      data-ad-slot="1158479752"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
            <?php 
            else:
              echo"
              <li>
                <img class='lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$p1[gambar1]' width='120' height='75' alt='$p1[judul]' style='object-fit:cover;'>
                <a href='berita-$p1[judul_seo]' title='$p1[judul]' style='padding:0;'>
                  <div class='caption' style='font-size:16px;font-weight:500;'>$p1[judul]</div>
                </a>
                <!-- <a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'><span style='background:$menu[color];'>$p1[nama_kategori]</span></a> -->
              </li>";
            endif;
            $x++;
            }?>
        <div class="clearfix"></div>
        </ul>
    </div>
  </section>
</section>
<br>
<section style="text-align:center;">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- M_Banner -->
  <ins class="adsbygoogle"
      style="display:inline-block;width:320px;height:50px"
      data-ad-client="ca-pub-4290882175389422"
      data-ad-slot="6679890438"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</section>
