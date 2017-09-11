<?php if ($_GET['module']=='home'){ ?>
	<div class="featured container">
		<div class="row">
			<div class="col-xs-9" style='padding-left:0;padding-right:7px;'>
          <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade hl-slider" data-ride="carousel" style="background-color:#000;height:675px;/* background-image: linear-gradient(90deg, #052844 1%, #073e69 100%); */">
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
                      <h1 id='title'><a href='berita-$t[judul_seo].html'>$t[judul]</a></h1>
                    </div><!-- /header-text -->
                    <img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='First slide' style='display:inline-block;vertical-align:top;'>
                    <div class='desc-home' style='display:inline-block;width:155px;'>
                      <a href='kategori-$t[id_kategori]-$t[kategori_seo].html' style='background-color:#EFCB17;padding:5px 8px;display:inline-block;color:#000;margin:0 3px'>".strtoupper($t['nama_kategori'])."</a>
                      <p style='font-size:14px;color:#ddd;line-height:1.5;margin:10px 3px 0;word-wrap:break-word;'>".substr(strip_tags($t['isi_berita']), 0, 160).".&nbsp;<a href='berita-$t[judul_seo].html'><b style='color:yellow;'>Selanjutnya</b></a></p>
                    </div>
                  </div>
                  <!-- Static Header -->
                  <div class='slider-berita-terkait' style='position:absolute;margin-top:-45px;right:13px;width:170px;'>
                    <div style='color:#efcb17;font-size:15px;display:inline-block;padding: 7px;border:1px solid #efcb17;'>Berita Terkait</div>
                    <ul style='line-height:.8;margin-top:10px'>";
                      $terkait=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3");
                      while($u=mysql_fetch_array($terkait)){
                        echo "<li><a href='berita-$u[judul_seo].html' style='font-size:12px;color:white;'>$u[judul]</a></li>";
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
                      <img src='http://harianamanah.com/foto_berita/$indicator[gambar]' alt='berita gambar HL harianamanah'>
                      <p style=margin:0;padding:7px;font-size:12px;color:white;display:inline-block;'>$indicator[judul]</p>
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
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
            </div> -->
            <div id="fixed-left" data-spy="affix" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:720px;margin-bottom:10px;">
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
            </div>
          </div>
          <div class="col-md-8" style="padding:0;">
            <div class="single_blog_sidebar1 berita-terkini wow fadeInUp" style="background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);padding:0">
              <div class="title berita-terkini" style="padding:10px 15px;border-bottom:1px solid #EFCB03;color:white;">BERITA TERKINI</div>
              <ul>
              <?php
                $detail1=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori ORDER BY b.id_berita DESC LIMIT 25");
                while($p1=mysql_fetch_array($detail1))
                {
                  // $idarray = $p1['id_berita'];
                  $tgl = tgl_indo($p1['tanggal']);
                  $jam = trans_jam($p1['jam']);

                  echo "<li style='color:white;'>
                  <a href='berita-$p1[judul_seo].html'><img src='http://harianamanah.com/foto_berita/$p1[gambar]' alt='gambar utama home' style='width:140px;height:140px;object-fit:cover;vertical-align:top;'></a>
                  <div class='deskripsi-judul home'>
                    <h6 style='margin-left:15px;color:#E8BF0A;text-align:left;'><a href='berita-$p1[judul_seo].html' style='color:#E8BF0A;text-align:left;padding-left:0;font-weight:normal;'>$p1[judul]</a></h6>
                    <p class='rubrik-tanggal'><a href='kategori-$p1[id_kategori]-$p1[kategori_seo].html'>".strtoupper($p1['nama_kategori'])."</a> | $p1[hari], $tgl - $jam</p>
                    <p style='color:white;'>".substr(strip_tags($p1['isi_berita']), 0, 160)."&nbsp;<a href='berita-$p1[judul_seo].html'><b style='color:yellow;'>&hellip;</b></a></p>
                  </div>
                </li>";
                } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- break -->
      <div class="col-xs-3" style="padding:0">
      <div class="single_blog_sidebar wow fadeInUp">
        <ul class="featured_nav2">
          <li>
            <div id="radio">
              <img src="images/radio.jpg" alt="">
              <audio src="http://s3.vinhostmedia.com:9324/;" autobuffer autoloop loop controls ></audio>
            </div>
          </li>
          <div class="clearfix"></div>
          <li>
            <div id="radio"><img src="foto_iklanatas/box_abu.gif"></div>
          </li>
          <div class="clearfix"></div>
          <!-- <li>
            <div id="box-trending">
              <h4>Liputan <strong>Khusus</strong></h4>
              <ul>
              <?php
              $query=mysql_query("SELECT * FROM berita WHERE aktif = 'Y' ORDER BY id_berita DESC LIMIT 0, 1");
              $row = mysql_fetch_array($query);
              echo "<li class='gambar-pertama'><a href='berita-$row[judul_seo].html'><img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='' class='img-responsive' witdh='auto'><figcaption><span>1</span><h3>$row[judul]</h3></figcaption></a></li>";
              ?>
              <?php
              $sql=mysql_query("SELECT * FROM berita WHERE aktif = 'Y' ORDER BY id_berita DESC LIMIT 1, 3");
              $i = 2;
              while($p=mysql_fetch_array($sql)){
              echo "<li><a href='berita-$p[judul_seo].html'><span>$i</span><div class='waktu-berikut'><p>$p[judul]</p></div></a></li>";
              $i++;
              }?>
              </ul>
            </div>
          </li> -->
        </ul>
      </div>
      <div class="single_blog_sidebar wow fadeInUp" style="background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);height:250px margin-bottom:10px;"></div>
      <div id="fixed-right" data-spy="affix" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:400px;">
        <div class="title liputan-khusus" style="background-color: #ff9d25;background-image: linear-gradient(62deg, #ff9d25 0%, #ffca00 100%);padding:10px 15px;color:white;">LIPUTAN KHUSUS</div>
      </div>
      <!-- <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:620px;margin-bottom:10px;">
        <div class="title liputan-khusus" style="background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);padding:10px 15px;color:white;">BERITA FOTO</div>
      </div> -->
    </div>
    <!-- break -->
    </div>
    <div class="row">
      <div id="iklan-footer" style="padding-bottom:10px;">
        <div class="iklan">
          <img src="foto_pasangiklan/adhomebanner.jpg" width="100%">
        </div>
      </div>
    </div>
  </div>

  <!-- /////////////////////////////////////////Content -->
  <!-- <script>
		var loadMore = true;
		var page = 1;
		$(window).scroll(function(){
			var nearbottom = 100;
			// if(($(window).scrollTop()+$(window).height()) > ($(document).height()-nearbottom))
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
      bottom: $('#iklan-footer').outerHeight(true) + 514
    }
  });

  $("#fixed-left").affix({
    offset : {
      top: $('#fixed-left').offset().top,
      bottom: $('#iklan-footer').outerHeight(true) + 514
    }
  });

  </script>
  <?php  }
// tes////////////////////////////////////////////
  elseif ($_GET['module']=='tes'){
  include "$f[folder]/modul/mod_berita/tesji.php";}
  ////////////////////////////////////////////////////////////

// Berita Video////////////////////////////////////////////
  elseif ($_GET['module']=='video'){
  include "$f[folder]/modul/mod_berita/fotomo.php";}
  ////////////////////////////////////////////////////////////

   // NEWS////////////////////////////////////////////
  elseif ($_GET['module']=='news'){
  include "$f[folder]/news.php";}
  ////////////////////////////////////////////////////////////

    // LIFESTYLE////////////////////////////////////////////
  elseif ($_GET['module']=='lifestyle'){
  include "$f[folder]/lifestyle.php";}
  ////////////////////////////////////////////////////////////

    // KOMUNITAS////////////////////////////////////////////
  elseif ($_GET['module']=='komunitas'){
  include "$f[folder]/ummatizen.php";}
  ////////////////////////////////////////////////////////////

    // KAJIAN////////////////////////////////////////////
  elseif ($_GET['module']=='kajian'){
  include "$f[folder]/kajian.php";}
  ////////////////////////////////////////////////////////////

    // SOSOK////////////////////////////////////////////
  elseif ($_GET['module']=='sosok'){
  include "$f[folder]/sosok.php";}
  ////////////////////////////////////////////////////////////

    // KALAM////////////////////////////////////////////
  elseif ($_GET['module']=='kalam'){
  include "$f[folder]/kalam.php";}
  ////////////////////////////////////////////////////////////


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
