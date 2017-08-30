<?php 
	function kategori($a)
	{
		if ($a == 21) :
			echo "<a href='kategori-21-ekonomi.html'><p class='kat-text bag-orange'>EKOBIS</p></a>";
		elseif ($a == 22 ) :
			echo "<a href='kategori-22-politik.html'><p class='kat-text bag-purple1'>POLITIK</p></a>";
		elseif ($a == 56 ) :
			echo "<a href='kategori-56-jazirah.html'><p class='kat-text bag-orange2'>JAZIRAH</p></a>";
		elseif ($a == 39 ) :
			echo "<a href='kategori-39-internasional.html'><p class='kat-text bag-blue1'>INTERNASIONAL</p></a>";
		elseif ($a == 70 ) :
			echo "<a href='kategori-70-muslim-star.html'><p class='kat-text bag-red1'>MUSLIM STAR</p></a>";
		elseif ($a == 55 ) :
			echo "<a href='kategori-55-bola.html'><p class='kat-text bag-blue2'>BOLA+</p></a>";
		elseif ($a == 76 ) :
			echo "<a href='kategori-76-kuliner.html'><p class='kat-text bag-green1'>KULINER</p></a>";
		elseif ($a == 57 ) :
			echo "<a href='kategori-57-muslimah.html'><p class='kat-text bag-purple3'>MUSLIMAH</p></a>";
		elseif ($a == 58 ) :
			echo "<a href='kategori-58-gen-m.html'><p class='kat-text bag-blue2'>GEN M</p></a>";
		elseif ($a == 59 ) :
			echo "<a href='kategori-59-ormas.html'><p class='kat-text bag-red2'>ORMAS</p></a>";
		elseif ($a == 74 ) :
			echo "<a href='kategori-74-pendidikan.html'><p class='kat-text bag-green2'>PENDIDIKAN</p></a>";
		elseif ($a == 60 ) :
			echo "<a href='kategori-60-ensiklopedi-muslim.html'><p class='kat-text bag-purple2'>ENSIKLOPEDI MUSLIM</p></a>";
		elseif ($a == 61 ) :
			echo "<a href='kategori-61-mozaik.html'><p class='kat-text bag-red3'>MOZAIK</p></a>";
		elseif ($a == 62 ) :
			echo "<a href='kategori-62-hikmah.html'><p class='kat-text bag-green3'>HIKMAH</p></a>";
		elseif ($a == 63 ) :
			echo "<a href='kategori-63-tafsir.html'><p class='kat-text bag-orange3'>TAFSIR</p></a>";
		elseif ($a == 64 ) :
			echo "<a href='kategori-64-haji-umrah.html'><p class='kat-text bag-gray'>HAJI UMRAH</p></a>";
		elseif ($a == 73 ) :
			echo "<a href='kategori-73-siyasah.html'><p class='kat-text bag-red4'>SIYASAH</p></a>";
		elseif ($a == 72 ) :
			echo "<a href='kategori-72-muamalah.html'><p class='kat-text bag-green4'>MUAMALAH</p></a>";
		elseif ($a == 66 ) :
			echo "<a href='kategori-66-legenda.html'><p class='kat-text bag-blue1'>LEGENDA</p></a>";
		elseif ($a == 65 ) :
			echo "<a href='kategori-65-khazanah.html'><p class='kat-text bag-green1'>KHAZANAH</p></a>";
		elseif ($a == 67 ) :
			echo "<a href='kategori-67-islamic-view.html'><p class='kat-text bag-blue1'>ISLAMIC VIEW</p></a>";
		elseif ($a == 68 ) :
			echo "<a href='kategori-68-opini.html'><p class='kat-text bag-gray1'>OPINI</p></a>";
		elseif ($a == 69 ) :
			echo "<a href='kategori-69-perspektif.html'><p class='kat-text bag-purple3'>PERSPEKTIF</p></a>";
		elseif ($a == 71 ) :
			echo "<a href='kategori-71-taushiyah.html'><p class='kat-text bag-green2'>TAUSHIYAH</p></a>";
		endif;
	}
	?>
<?php
  if ($_GET['module']=='home'){?>
	<div class="featured container">
		<div class="row">
			<div class="col-xs-9">
          <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            <?php 
            $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 1");
            while($t=mysql_fetch_array($terkini)){     
              $id1 = $t['id_berita'];
            echo"
            <div class='item active'>
                <img src='foto_berita/base.jpg' alt='First slide'>
                <!-- Static Header -->
                <div class='header-text'>
                  <div class='col-md-12 text-center'>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 id='title'><a href='berita-$t[judul_seo].html'>$t[judul]</a></h3>
                  </div>
                </div><!-- /header-text -->
              </div>
            ";}
            ?>
            <?php
            $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' AND id_berita != '$id1' ORDER BY id_berita DESC LIMIT 5");
            while($t=mysql_fetch_array($terkini)){      
            echo"
            <div class='item'>
                <img src='foto_berita/base.jpg' alt='First slide'>
                <!-- Static Header -->
                <div class='header-text'>
                  <div class='col-md-12 text-center'>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 id='title'><a href='berita-$t[judul_seo].html'>$t[judul]</a></h3>
                  </div>
                </div><!-- /header-text -->
              </div>
            ";
            }
            ?>
            </div>
          </div><!-- /carousel -->
        <div class="col-md-12" style="margin-top:10px;padding:0;">
          <div class="col-md-4" style="padding-left:0;">
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:500px;margin-bottom:10px;">
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
            </div>
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:500px;margin-bottom:10px;">
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
            </div>
            <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:500px;">
              <div class="title berita-popular" style="color:#EFCB03;padding:10px 15px;background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);">BERITA POPULAR</div>
            </div>
          </div>
          <div class="col-md-8" style="padding:0;">
            <div class="single_blog_sidebar1 berita-terkini wow fadeInUp" style="background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);padding:0">
              <div class="title berita-terkini" style="padding:10px 15px;border-bottom:1px solid #EFCB03;color:white;">BERITA TERKINI</div>
              <ul>
              <?php
                $detail1=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 50");
                while($p1=mysql_fetch_array($detail1))
                {
                  $idarray = $p1[id_berita];
                  echo "<li style='color:white;'>
                  <a href='berita-$p1[judul_seo].html'><img src='foto_berita/base.png' alt='gambar utama home' style='width:140px;height:140px;'></a>
                  <div class='deskripsi-judul home'>
                    <h6 style='margin-left:15px;color:#E8BF0A;text-align:left;'><a href='berita-$p1[judul_seo].html' style='color:#E8BF0A;text-align:left;padding-left:0;font-weight:normal;'>$p1[judul]</a></h6>
                    <p class='rubrik-tanggal'>AmanahNews | $p1[hari], $p1[tanggal] - $p1[jam]</p>
                    <p style='color:white;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, eaque et, animi laborum perspiciatis repudiandae expedita, consectetur ipsa voluptatem tenetur aspernatur? Expedita quia ex animi facere, ipsa odit itaque consequatur.</p>
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
        <div class="sembunyi_iklan" >
          <ul class="featured_nav2">
            <li style="margin-top:0;">
              <div id="radio"><img src="foto_iklanatas/box_abu.gif"></div>
            </li>
            <li>
              <div id="radio">
                <img src="images/radio.jpg" alt="">
                <audio src="http://s3.vinhostmedia.com:9324/;" autobuffer autoloop loop controls ></audio>
              </div>
            </li>
            <!-- <li>
              <div id="box-trending">
                <h4>Liputan <strong>Khusus</strong></h4>
                <ul>
                <?php
                $query=mysql_query("SELECT * FROM berita WHERE aktif = 'Y' ORDER BY id_berita DESC LIMIT 0, 1");
                $row = mysql_fetch_array($query);
                echo "<li class='gambar-pertama'><a href='berita-$row[judul_seo].html'><img src='foto_berita/base.jpg' alt='' class='img-responsive' witdh='auto'><figcaption><span>1</span><h3>$row[judul]</h3></figcaption></a></li>";
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

        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #052844;background-image: linear-gradient(90deg, #052844 1%, #073e69 100%);height:250px;margin-bottom:10px;">
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:400px;margin-bottom:10px">
          <div class="title liputan-khusus" style="background-color: #ff9d25;background-image: linear-gradient(62deg, #ff9d25 0%, #ffca00 100%);padding:10px 15px;color:white;">LIPUTAN KHUSUS</div>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:400px;margin-bottom:10px;">
          <div class="title liputan-khusus" style="background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);padding:10px 15px;color:white;">BERITA FOTO</div>
        </div>
        <div class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:400px;">
          <div class="title liputan-khusus" style="background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);padding:10px 15px;color:white;">BERITA FOTO</div>
        </div>
      </div>
    <!-- break -->
    </div>
    <div class="row">
      <div id="sidebar">
        <div class="iklan">
          <img src="foto_pasangiklan/adhomebanner.jpg" width="100%">
        </div>
      </div>
    </div>
  </div>
  <!-- /////////////////////////////////////////Content -->
	<script>
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
	</script>
  <?php 
  }   
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
  include "$f[folder]/komunitas.php";}
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
