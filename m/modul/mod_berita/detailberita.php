<div id="fb-root"></div>
<?php include_once("analyticstracking.php") ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
        appId      : '168067490271817',
        xfbml      : true,
        version    : 'v2.7'
    });
  };

  (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php
  $detail = mysql_query("SELECT * FROM berita, users, kategori, menu
                          WHERE users.username=berita.username
                          AND kategori.id_kategori=berita.id_kategori
                          AND kategori.id_kategori=menu.id_menu
                          AND judul_seo='$_GET[judul]'");
  $d   = mysql_fetch_array($detail);
  $tgl = tgl_indo($d['tanggal']);
  $jam = trans_jam($d['jam']);
?>
<style>
    .bungkus{
        padding-top:0;
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 10px;
        background-color:white;
        margin-bottom:17px;
    }

    .bungkus.nav-nex-pre {
      padding:0;
    }

    .bungkus.nav-nex-pre .berita-next {text-align:right;}
    .bungkus.nav-nex-pre .berita-next span {right:10px;}
    .bungkus.nav-nex-pre span {position:absolute;display:block;color:#19A2AC;font-size:22px;bottom:10px;}
    .bungkus.nav-nex-pre a:first-child {border-right:1px solid rgba(0, 0, 0, 0.2);}
    .bungkus.nav-nex-pre a {
      width:50%;
      padding:10px 10px 40px;
      float:left;
      font-size:17px;
      color:#333;
      font-weight:300;
      min-height:195px;
      position:relative;
    }

    #main{
        background:#ececec ;
        top:50px;
    }
</style>
<?php
  $query = mysql_query("SELECT color, link, nama_menu FROM menu where id_menu = (SELECT id_parent FROM menu WHERE link = '$d[link]')");
  $menu = mysql_fetch_array($query);
?>
<section class="container-fluid bungkus" id="test" style="margin-bottom:0;">
    <p class="daftar-redaksi" style="margin:10px 0 0;font-size:10px;"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=$menu[link]>$menu[nama_menu]</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          </div>
    <h1 class="read_berita" style="margin-top:3px;"><?php echo $d['judul'];?></h1>
    <span class="tanggal-release"><?php echo $d['hari'].", ".$tgl." - ".$jam ?></span>&nbsp;Oleh&nbsp;<span><?php echo $d['username']?></span>
    <div class="box-header row">
        <div class="gambar-berita" style="position:relative;margin:0 0 7px;">
          <span id="toggle-info" class="fa fa-info-circle" style="font-size:35px;position:absolute;right:10px;bottom:10px"></span>
          <img style="height:230px;object-fit:cover;" src='http://harianamanah.com/foto_berita/<?php echo $d['gambar']?>' class='img-responsive' alt='<?php echo $d['judul']?>'>
        </div>
        <div id="info-gambarku" style="padding:0 7px;font-size:12px;display:none;"><?php echo $d['keterangan_gambar']?></div>
    </div>
    <script>
      $("#toggle-info").click(function(){
        $("#info-gambarku").toggle();
      })
    </script>
    <div class="social-optimize">
      <a href="https://www.facebook.com/sharer.php?u=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-facebook" target="_blank"></a>
      <a href="https://twitter.com/intent/tweet?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>&via=harianamanah.com" class="social-share fa fa-twitter" target="_blank"></a>
      <a href="https://plus.google.com/share?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-google-plus" target="_blank"></a>
      <a href="https://line.me/R/msg/text/?<?php echo "$d[judul] http://m.harianamanah.com/berita-$d[judul_seo]"?>" class="social-share line" target="_blank"></a>
      <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
      <a href="whatsapp://send?text=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>" class="social-share fa fa-whatsapp" target="_blank"></a>
      <a href="https://telegram.me/share/url?url=<?php echo "http://m.harianamanah.com/berita-".$d['judul_seo']?>&text=<?php echo $d['judul']?>" class="social-share fa fa-paper-plane" target="_blank"></a>
      <a href="#facebook-comment" class="social-share fa fa-commenting-o"></a>
    </div>
    <div class="box left">
      <span class="berita">
          <?php
          if (strpos($d['isi_berita'], "src='http://harianamanah.com/redaktur/") !== false) {
              echo(str_replace('http://harianamanah.com/redaktur/','http://harianamanah.com/redaktur/',$d['isi_berita']));
          }else  {
              echo(str_replace('src="/redaktur/','src="http://harianamanah.com/redaktur/',$d['isi_berita']));
          }
          mysql_query("UPDATE berita SET dibaca=$d[dibaca]+1 WHERE judul_seo='$_GET[judul]'");
          ?>
      </span>
      <!-- <hr>
      <span>Dibaca : <?php echo $d['dibaca']?></span>
      <hr> -->
      <div class="baca-juga">
          <h3 style='margin-top:0;font-size:19px;color:#00a1a2;'>TERKAIT</h3>
          <ul style="list-style-type: none;">
              <?php
              $detail1=mysql_query("SELECT * FROM berita WHERE username != 'alifahmi' AND id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 5");
              while($p1=mysql_fetch_array($detail1)){
              echo"
                <li><a href='berita-$p1[judul_seo]' title='artikel-lain'>$p1[judul]</a></li>";
              }?>
          </ul>
      </div>
      </div>
      <!-- <div class="iklan">
          <a href="https://abutours.com/" target="_blank" title="AbuTours.com">
              <img class="img-responsive" src="http://harianamanah.com/m/assets/abujie.jpg" alt="iklan">
          </a>
      </div> -->
    </div>
</section>
<section id='facebook-comment' class="container-fluid bungkus" style="background: transparent;">
  <h4 style='margin-top:20px;'>Tinggalkan Jejakmu disini</h4>
  <div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
</section>
<section class="container-fluid bungkus nav-nex-pre">
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
<section class="container-fluid bungkus">
  <center>
    <h1 style="display:inline-block;border-bottom:3px solid red;margin-bottom:30px;">POPULAR</h1>
  </center>  
  <ul class="col-xs-12 rubrik-popular top-<?php echo $_GET['jn']?> ">
    <?php
      $popular = mysql_query("SELECT judul, judul_seo FROM berita WHERE id_kategori = '$d[id_kategori]' ORDER BY dibaca DESC LIMIT 10");
      while($row = mysql_fetch_array($popular))
      {
        echo "<li class='top-popular'><a href='berita-$row[judul_seo]'>$row[judul]</a></li>";
      }
    ?>
  </ul>
</section>
<section class="container-fluid bungkus">
  <div class="baca-juga">
    <div class="garis-bawah" style="border-bottom:1px solid <?php echo $menu['color']?>;">
    <h3 style="color:<?php echo $menu['color']?>;border:0;">TERKINI</h3>
    </div>
      <ul class="list-berita-terkini" style="list-style-type: none;">
          <?php
          $detail1=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '$d[id_parent]' ORDER BY berita.id_berita DESC LIMIT 15");
          while($p1=mysql_fetch_array($detail1)){
          echo"
            <li>
              <img src='http://harianamanah.com/foto_small/$p1[gambar1]' width='100px' alt='$p1[judul]'>
              <a href='berita-$p1[judul_seo]' title='$p1[judul]'>
                <div class='caption' style='font-size:16px;font-weight:500;'>$p1[judul]</div>
              </a>
              <!-- <a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'><span style='background:$menu[color];'>$p1[nama_kategori]</span></a> -->
            </li>";
          }?>
      <div class="clearfix"></div>
      </ul>
  </div>
</section>
