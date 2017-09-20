<?php
include_once('config_fb.php');
?>
<div id="fb-root"></div>
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
  $detail=mysql_query("SELECT * FROM berita,users,kategori,menu
            WHERE users.username=berita.username
            AND kategori.id_kategori=berita.id_kategori
            AND kategori.id_kategori=menu.id_menu
            AND judul_seo='$_GET[judul]'");
  $d   = mysql_fetch_array($detail);
  $tgl = tgl_indo($d['tanggal']);
  $jam = trans_jam($d['jam']);
  $baca = $d['dibaca']+1;

  $menu = mysql_query("SELECT DISTINCT id_parent FROM menu WHERE id_parent != 0 AND id_parent != 39");
  $param = [];
  while($row=mysql_fetch_assoc($menu))
  {
    $param[]= $row['id_parent'];
  }
  // var_export(array_flip($param));
  $menu = [
    8 => 'News',
    13 => 'Lifestyle',
    14 => 'Ummatizen',
    18 => 'Kajian',
    19 => 'Sosok',
    20 => 'Kalam'
  ];
?>
<div id="page-content" style="background-color: #ECECEC;margin-bottom:10px;margin-top:60px;" class="index-page container">
<div class="col-md-9" style="background:#fff;">
<div id="sidebar">
        <div class="user-panel">
        <div class="info">
            <p class="daftar-redaksi"><?php echo "<a href='/'>Home</a>&nbsp;&#8883;&nbsp;<a href=".lcfirst($menu[$d[id_parent]]).".html>".$menu[$d[id_parent]]."</a>&nbsp;&#8883;&nbsp;<a href='$d[link]'>$d[nama_kategori]</a>"; ?></p>
          </div>
          <div class="judul">
              <?php echo"<h1>$d[judul]</h1>";?>
          </div>
          <div class="sosial" style="float:right">
            <ul class="list-inline" style="text-align:left;margin:0;">
              <!-- <li>
                  <a class="btn btn-social-icon btn-dibaca" ><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;<?php $dibaca = round($d[dibaca]/56); echo"$dibaca";?></a>
              </li> -->
              <li><a class="btn btn-social-icon btn-facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog','width=626,height=436'); return false;"><i class="fa fa-facebook fa-fw"></i></a>
              </li>
              <li>
                <a class="btn btn-social-icon btn-twitter" onclick="window.open('https://twitter.com/share','width=336','height=206');return false;" ><i class="fa fa-twitter fa-fw"></i></a>
              </li>
              <li>
                <a class="btn btn-social-icon btn-google" onclick="window.open('','width=336','height=206');return false;"><i class="fa fa-google-plus fa-fw"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="info">
          <span class="info-name"> <?php echo"$d[username]";?></span>
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
            if($d[youtube]!='')
            {
              echo "<div class='wrap-vid'>
                      <iframe width='100%' tabindex='0' style='background:#000; min-height: 480px;' allowfullscreen='1' src='$d[youtube]' frameborder='0' height='480' allowfullscreen></iframe>
                    </div>";
            }
            $acak           = rand(44,77);
            mysql_query("UPDATE berita SET dibaca='$d[dibaca]'+$acak WHERE judul_seo='$_GET[judul]'");
            ?>
            <div class="sosial">
              <ul class="list-inline" style="text-align:right;margin:0;">
                <!-- <li>
                    <a class="btn btn-social-icon btn-dibaca" ><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;<?php $dibaca = round($d[dibaca]/56); echo"$dibaca";?></a>
                </li> -->
                <li><a class="btn btn-social-icon btn-facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog','width=626,height=436'); return false;"><i class="fa fa-facebook fa-fw"></i></a>
                </li>
                <li>
                  <a class="btn btn-social-icon btn-twitter" onclick="window.open('https://twitter.com/share','width=336','height=206');return false;" ><i class="fa fa-twitter fa-fw"></i></a>
                </li>
                <li>
                  <a class="btn btn-social-icon btn-google" onclick="window.open('','width=336','height=206');return false;" ><i class="fa fa-google-plus fa-fw"></i></a>
                </li>
              </ul>
            </div>
            <hr>
            <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
            <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
            <div class="related-news">
              <div class='kotak' style="width:100%;float:none">
              <br>
              <div class="row">
                <h5 style="padding:15px;text-align:left;background:#262932;color:#fff;">Berita Terkait</h5>
              </div>
                <ul class="featured_nav0 berita-terkait">
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = '$d[id_kategori]' AND id_berita != '$d[id_berita]' order by id_berita DESC limit 10");
                while($p1=mysql_fetch_array($detail1))
                {
                  $idarray = $p1['id_berita'];
                  echo "
                        <li style='width:47%;text-align:left;margin-bottom:0;'>
                            <div class='featured_title berita-terkait'>
                            <a href='berita-$p1[judul_seo].html' style='text-align:left;padding-left:0;font-weight:normal;'>$p1[judul]</a>
                            </div>
                          </li>
                        ";
                    }
                ?>
                </ul>
                <div class='clearfix'></div>
              </div>
              <div class='kotak' style="width:100%;margin-bottom:30px;float:none">
              <br>
              <div class='row'>
                <h5 style="padding:15px;text-align:left;background:#262932;color:#fff;margin-bottom:25px;">Berita Lainnya</h5>
              </div>
                <ul class="featured_nav0 berita-lainnya">
                <?php
                $detail2=mysql_query("SELECT * FROM berita WHERE id_kategori != '$d[id_kategori]' AND id_berita != '$d[id_berita]'  order by id_berita DESC limit 8");
                while($p2=mysql_fetch_array($detail2))
                {
                  echo"
                        <li style='width:190px;margin:0 0 10px;padding-right:7px;'>
                          <a class='featured_img' href='berita-$p2[judul_seo].html'><img src='http://harianamanah.com/foto_berita/$p2[gambar]' alt='$p2[judul]'></a>
                          <div class='featured_title berita-lainnya' style='font-size:14px;'>
                            <a class='' href='berita-$p2[judul_seo].html' style='margin-top:0;padding-top:5px;text-align:left;width:auto '>$p2[judul]</a>
                          </div>
                        </li>
                      ";
                }?>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class='kotak' style="width:100%;float:none;">
              <div class="row">
                <h5 style="padding:15px;text-align:left; background-color: #1c9fa7;background-image: -webkit-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: -moz-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: -o-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);color:#fff;margin-bottom:20px">Berita Terkini</h5>
              </div>
                <ul class="featured_nav0">
                <?php
                $detail1=mysql_query("SELECT * FROM berita, kategori WHERE berita.id_kategori = kategori.id_kategori AND berita.id_kategori = '$d[id_kategori]' AND berita.id_berita != '$d[id_berita]' ORDER BY berita.id_berita DESC LIMIT 30");
                while($p1=mysql_fetch_array($detail1))
                {
                  $tgl = tgl_indo($p1['tanggal']);
                  $jam = trans_jam($p1['jam']);

                  $idarray = $p1['id_berita'];
                  echo "
                    <li style='text-align:left;float:none;'>
                        <a class='featured_img berita-terkini'><img src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='$p1[judul]'></a>
                        <div class='deskripsi-judul'>
                          <h6 class='featured_title berita-terkini'>
                          <a href='berita-$p1[judul_seo].html' style='text-align:left;padding-left:0;font-weight:bold;'>$p1[judul]</a>
                          </h6>
                          <p class='rubrik-tanggal'><a style='color:#052844;pointer:cursor;' href='kategori-$p1[id_kategori]-$p1[kategori_seo].html'>".ucfirst($p1[nama_kategori])."</a> | $p1[hari], $tgl - $jam </p>
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
          <?php
          $iklantengah=mysql_query("SELECT * FROM pasangiklan  ORDER BY id_pasangiklan DESC LIMIT 2");
          while($c=mysql_fetch_array($iklantengah))
          {
            $idc1 = $c['id_pasangiklan'];
            echo "
                  <li>
                  <a class='featured_img' href='$c[url]' >
                  <img src='foto_pasangiklan/$c[gambar]' alt='iklan harianamanah.com atas' width='100%'></a>
                  </li>
                  ";
          } ?>
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
          <li>
            <div id="fixed-baca" data-spy="affix" class="single_blog_sidebar wow fadeInUp" style="background-color:#fff;box-shadow:0 0 4px 0 rgba(0, 0, 0, 0.44);">
              <div class="title berita-foto" style="color:#fff;padding:15px;background-color: #1c9fa7;background-image: -moz-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: -o-linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);background-image: linear-gradient(255deg, #1c9fa7 25%, #11747c 100%);">BERITA POPULAR</div>
              <ul class="list-berita-popular">
              <?php
              $berita_popular = mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 8");
              while($row = mysql_fetch_array($berita_popular)){
                echo "<li style='padding:0 10px 10px 10px;font-size:15px;font-weight:600;'><a href='berita-$row[judul_seo].html'>$row[judul]</a><div class='clearfix'></div></li>";
              }
              ?>
              </ul>
            </div>
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