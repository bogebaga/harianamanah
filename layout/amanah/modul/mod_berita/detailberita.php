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
  $detail=mysql_query("SELECT * FROM berita,users,kategori    
            WHERE users.username=berita.username 
            AND kategori.id_kategori=berita.id_kategori 
            AND judul_seo='$_GET[judul]'");
  $d   = mysql_fetch_array($detail);
  $tgl = tgl_indo($d['tanggal']);
  $baca = $d['dibaca']+1;
?>
<div id="page-content" style="background-color: #fff;padding-bottom:40px;margin-bottom:10px;" class="index-page container">
  <div id="sidebar">
    <div class="col-md-9">
      <div class="user-panel">
        <div class="info">
          <p class="daftar-redaksi"><?php echo"$d[hari], $tgl "; ?></p>
        </div>
        <div class="judul">
            <?php echo"<h1>$d[judul]</h1>";?>
        </div>
        <div class="info">
          <span class="info-name"> <?php echo"$d[reporter]";?></span>
        </div>
        <br>
        <br>
        <div class="sosial">
          <ul class="list-inline" style="text-align:left;margin:0;">
            <!-- <li>
                <a class="btn btn-social-icon btn-dibaca" ><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;<?php $dibaca = round($d[dibaca]/56); echo"$dibaca";?></a>
            </li> -->
            <li><a class="btn btn-social-icon btn-facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog','width=626,height=436'); return false;"><i class="fa fa-facebook fa-2x"></i></a>
            </li>
            <li>
              <a class="btn btn-social-icon btn-twitter" onclick="window.open('https://twitter.com/share','width=336','height=206');return false;" ><i class="fa fa-twitter fa-2x"></i></a>
            </li>
            <li>
              <a class="btn btn-social-icon btn-google" onclick="window.open('','width=336','height=206');return false;" ><i class="fa fa-google-plus fa-2x"></i></a>
            </li>
          </ul>
        </div>
      </div><hr>
      <div class="dua-atas">
        <div class="col-md-12">
          <div class="row">
            <div class="single_blog_sidebar wow fadeInUp">
            <?php
            if($d['sub_judul']!='')
            {
                echo "<h4 style='text-align:left'>$d[sub_judul]</h4></br>";
            }
            echo "<img src='foto_berita/base.jpg' alt='img'>";
            echo "<p class='caption-pic'>$d[keterangan_gambar]</p>";
            echo '<img src="foto_Iklan_isiberita/ems web.png" style="float:left;width:160px;">';
            echo '<div class="isi-berita" style="width:78%;float:right">';
            echo "$d[isi_berita]";
            echo '</div>';

            if($d[youtube]!='')
            {
              echo "<div class='wrap-vid'>
                      <iframe width='100%' tabindex='0' style='background:#000; min-height: 480px;' allowfullscreen='1' src='$d[youtube]' frameborder='0' height='480' allowfullscreen></iframe>
                    </div>";
            }
            $acak           = rand(44,77);
            mysql_query("UPDATE berita SET dibaca=$d[dibaca]+$acak WHERE judul_seo='$_GET[judul]'");
            ?>
            <div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
            <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
            <br>
            <div class="related-news">
              <div class='kotak' style="width:100%">
              <br>
              <h5 style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);text-align:left">Berita Terkait</h5>
              <br>
                <ul class="featured_nav0 berita-terkait">
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = $d[id_kategori] AND id_berita != $d[id_berita] order by id_berita DESC limit 10");
                while($p1=mysql_fetch_array($detail1))
                {
                  $idarray = $p1[id_berita];
                  echo "
                        <li style='width:47%;text-align:left'>
                            <div class='featured_title berita-terkait'>
                            <a href='berita-$p1[judul_seo].html' style='text-align:left;padding-left:0;font-weight:normal;'>$p1[judul]</a>
                            </div>
                          </li>
                        ";
                    }
                ?>
                </ul>
              </div>
              <div class='kotak' style="width:100%;margin-bottom:50px;">
              <br>
              <h5 style="text-align:left;color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">Berita Lainnya</h5>
              <br>
                <ul class="featured_nav0 berita-lainnya">
                <?php
                $detail2=mysql_query("SELECT * FROM berita WHERE id_kategori != $d[id_kategori] AND id_berita != $d[id_berita]  order by id_berita DESC limit 8");
                while($p2=mysql_fetch_array($detail2))
                {
                  echo "
                        <li style='width:24%;margin:0 7px 10px 0'>
                          <a class='featured_img' href='berita-$p2[judul_seo].html'><img src='foto_berita/base.jpg' alt='img'></a>
                          <div class='featured_title berita-lainnya' style='font-size:14px;'>
                            <a class='' href='berita-$p2[judul_seo].html' style='margin-top:0;padding-top:5px;text-align:left;width:auto '>$p2[judul]</a>
                          </div>
                        </li>
                      ";
                }?>
                </ul>
              </div>
              <div class='kotak' style="width:100%">
              <h5 style="text-align:left;color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);margin-bottom:20px">Berita Terkini</h5>
                <ul class="featured_nav0 berita-terkini">
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = $d[id_kategori] AND id_berita != $d[id_berita] order by id_berita DESC limit 50");
                while($p1=mysql_fetch_array($detail1))
                {
                  $idarray = $p1[id_berita];
                  // echo "
                  //       <li>
                  //           <a class='featured_img' href='berita-$p1[judul_seo].html'><img src='foto_berita/base.jpg' alt='img'></a>
                  //           <div class='featured_title'>
                  //           <a class='' href='berita-$p1[judul_seo].html'>$p1[judul]</a>
                  //           </div>
                  //         </li>
                  //       ";
                  echo "
                        <li style='text-align:left;float:none;'>
                            <a class='featured_img berita-terkini'><img src='foto_berita/base.png'></a>
                            <div class='deskripsi-judul'>
                              <h6 class='featured_title berita-terkini'>
                              <a href='berita-$p1[judul_seo].html' style='text-align:left;padding-left:0;font-weight:normal;'>$p1[judul]</a>
                              </h6>
                              <p class='rubrik-tanggal'>Amanah News | $p1[hari], $p1[tanggal] - $p1[jam] </p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil nostrum eum enim dolor impedit vero aut, expedita architecto explicabo quos aliquid quisquam illum, itaque libero veritatis alias, eligendi ea quae.</p>
                            </div>
                          </li>
                        ";} ?>
                </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="single_blog_sidebar wow fadeInUp">
          <ul class="featured_nav0">
          <?php
          $iklantengah=mysql_query("SELECT * FROM pasangiklan  ORDER BY id_pasangiklan DESC LIMIT 1");
          while($c=mysql_fetch_array($iklantengah))
          {
            $idc1 = $c['id_pasangiklan'];
            echo "
                  <li>
                  <a class='featured_img' href='$c[url]' >
                  <img src='foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
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
                    <img src='foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
                  </li>";
          }?>
           <?php
          $iklantengah=mysql_query("SELECT * FROM pasangiklan WHERE id_pasangiklan != '$idc1'  ORDER BY id_pasangiklan DESC LIMIT 1");
          while($c=mysql_fetch_array($iklantengah))
          {
            $idc2 = $c['id_pasangiklan'];
            echo "
                  <li>
                    <a class='featured_img' href='$c[url]' >
                    <img src='foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
                  </li>";
          }?>
          </ul>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="border:1px solid #052845;border-top:0;background-color: #fff;height:500px;margin-bottom:10px">
          <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="border:1px solid #052845;border-top:0;background-color: #fff;height:500px;">
          <div class="title berita-foto" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA FOTO</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h6 class="text-center">ADVERTISEMENT</h6>
      <?php
      $iklantengah=mysql_query("SELECT * FROM iklanatas  ORDER BY id_iklanatas DESC LIMIT 1");
      while($b=mysql_fetch_array($iklantengah))
      {
        $id1 = $b['id_iklanatas'];
        echo "<div class='iklan' width='100%'>
              <a href='$b[url]'' target='_blank' title='$b[judul]'>
              <img src='foto_iklanatas/$b[gambar]' alt='img'></a>
              </div>";
      }?>
    </div>
  </div>
</div>
<!-- <div class="clear">&nbsp;</div> -->