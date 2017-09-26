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
  $baca = $d['dibaca']+1;
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
  $query = mysql_query("SELECT link, nama_menu FROM menu where id_menu = (SELECT id_parent FROM menu WHERE link = '$d[link]')");
  $menu = mysql_fetch_array($query);
?>
<section class="container-fluid bungkus" id="test">
    <p class="daftar-redaksi" style="margin:10px 0 0;font-size:12px;"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=$menu[link]>$menu[nama_menu]</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          </div>
    <h1 class="read_berita"><?php echo $d['judul'];?></h1>
    <span class="tanggal-release"><?php echo $d['hari'].", ".$tgl." - ".$jam ?></span>&nbsp;Oleh&nbsp;<span><?php echo $d['username']?></span>
    <div class="box-header row">
        <div class="gambar-berita" style="position:relative;margin:0 0 7px;">
          <span id="toggle-info" class="fa fa-info-circle" style="font-size:35px;position:absolute;right:10px;bottom:10px"></span>
          <img src='http://harianamanah.com/foto_berita/<?php echo $d['gambar']?>' class='img-responsive' alt='img'>
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
        <!-- <div id="hasil"></div> -->
        <!-- <input type="hidden" class="ip" value="<?php echo $ip; ?>" > -->
        <!-- <input type="hidden" class="jud" value="<?php echo $_GET['judul']; ?>" > -->
        <span class="berita">
            <?php
            if(!empty($d['youtube'])) {
                echo "
						<iframe width='100%' tabindex='0' style='background:#000; min-height: 480px;' allowfullscreen='1' src='$d[youtube]' frameborder='0' height='480' allowfullscreen></iframe>
						";
            }
            ?>
				<?php
                if (strpos($d['isi_berita'], "src='http://harianamanah.com/redaktur/") !== false) {
                    echo(str_replace('http://harianamanah.com/redaktur/','http://harianamanah.com/redaktur/',$d['isi_berita']));
                }else  {
                    echo(str_replace('src="/redaktur/','src="http://harianamanah.com/redaktur/',$d['isi_berita']));
                }
                $acak           = rand(44,77);
                mysql_query("UPDATE berita SET dibaca=$d[dibaca]+$acak WHERE judul_seo='$_GET[judul]'");
                ?>
			</span>
        <div class="iklan">
            <a href="https://abutours.com/" target="_blank" title="AbuTours.com">
                <img class="img-responsive" src="http://harianamanah.com/m/assets/abujie.jpg" alt="iklan">
            </a>
        </div>
    </div>
</section>
<section class="container-fluid bungkus">
  <div class="baca-juga">
    <div class="garis-bawah">
    <h3>TERKAIT</h3>
    </div>
      <ul style="list-style-type: none;">
          <?php
          $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' AND id_berita != $d[id_berita] order by id_berita DESC limit 9");
          while($p1=mysql_fetch_array($detail1)){
          echo"
            <li><a href='berita-$p1[judul_seo]' title='artikel-lain'>$p1[judul]</a></li>";
          }?>
      </ul>
  </div>
</section>
<section class="container-fluid bungkus">
  <div class="baca-juga">
    <div class="garis-bawah" style="border-bottom:1px solid #a94442">
    <h3 style="color:#a94442;border:0;">POPULAR</h3>
    </div>
      <ul style="list-style-type: none;">
          <?php
          $detail1=mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 5");
          while($p1=mysql_fetch_array($detail1)){
          echo"
            <li><a href='berita-$p1[judul_seo]' title='artikel-lain'>$p1[judul]</a></li>";
          }?>
      </ul>
  </div>
</section>
<section id='facebook-comment' class="container-fluid bungkus">
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
  <div class="baca-juga">
    <div class="garis-bawah" style="border-bottom:1px solid #009688;">
    <h3 style="color:#009688;border:0;">TERKINI</h3>
    </div>
      <ul class="list-berita-terkini" style="list-style-type: none;">
          <?php
          $detail1=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori ORDER BY id_berita DESC LIMIT 20");
          while($p1=mysql_fetch_array($detail1)){
          echo"
            <li>
              <a href='berita-$p1[judul_seo]' title='$p1[judul]'>
                <div class='caption'>".substr($p1['judul'], 0, 50)."&hellip;</div>
              </a>
              <img src='http://harianamanah.com/foto_small/$p1[gambar1]' width='85px' alt='$p1[judul]'>
              <a href='kategori-$p1[id_kategori]-$p1[kategori_seo]'><span>$p1[nama_kategori]</span></a>
            </li>";
          }?>
      <div class="clearfix"></div>
      </ul>
  </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        var judul =  $(".jud").val();
        // setTimeout(function(){
        //     $.post("select.php", {jud: judul }, function(result){
        //         $("#hasil")(result);
        //     });
        // }, 500);

    });
    $('.nilai').hide();
    ul.click(function(event) {
        $(this).toggleClass('active');
        $('.nilai').show();
        $('.bungkus').css('background', 'rgba(0, 0, 0, 0.4)');
        $('.garis-bawah').css('opacity', '0.7');
        $('.iklan').css('opacity', '0.7');
        $('footer').css('background', 'rgba(0, 0, 0, 0.4)');
        $('.isi-footer img').css('z-index', '-1');
        if ($(this).hasClass('active')) {
            for(var a = 0; a < i; a++){
                li.eq(a).css({
                    'transition-delay' : ""+(50*a)+"ms",
                    'right' :(r*Math.cos(90/n*a*(Math.PI/180))),
                    'top' : (-r*Math.sin(90/n*a*(Math.PI/180)))
                });
            }
        }else{
            li.removeAttr('style');
            $('.nilai').hide();
            $('.bungkus').css('background', 'white');
            $('.garis-bawah').css('opacity', '1');
            $('.iklan').css('opacity', '1');
            $('footer').css('background', '#f4f4f4');
            $('.isi-footer img').css('z-index', '1');
        }
    });
</script>
<script type="text/javascript">
    window.onscroll = changePos;

    function changePos() {
        var header = document.getElementById("kepala");
        var berita = document.getElementById("testtest");
        var icon = document.getElementById("BS");
        var icon1 = document.getElementById("BS1");
        if (window.pageYOffset > 199) {
            header.style.position = "fixed";
            header.style.background = "url('assets/amanahKecil.png') center center no-repeat white";
            header.style.width = "100%";
            header.style.height = "57px";
            header.style.top = 0;
            icon.style.color = "black";
            icon1.style.color = "black";
            berita.style.position = "fixed";
            berita.style.width = "100%";
            berita.style.top = "56px";
        } else {
            header.style.position = "";
            header.style.background = "transparent";
            header.style.height = "";
            header.style.top = "";
            icon.style.color= "white";
            icon1.style.color= "white";
            berita.style.position = "";
            berita.style.width = ""
            berita.style.top = "";
        }
    }
</script>