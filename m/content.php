<?php
 if ($_GET['module']=='home'){?>
  <ul class="navbar sub-rubrik">
    <li class='active'><a href='./'>Terkini</a></li>
    <li><a href='popular'>Popular</a></li>
    <li><a href='rekomendasi'>Rekomendasi</a></li>
  </ul>
 	<section class="container-fluid" style="background-color:white;padding:0 10px;">
		<section class="headline row">
      <?php
				$terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 1");
				while($t=mysql_fetch_array($terkini)){
          $tgl = tgl_indo($t["tanggal"]);
          $jam = trans_jam($t["jam"]);
          $id = $t['id_berita'];
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item' style='position:relative;'>
			  		<img class='lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='height:285px;object-fit:cover;'>
            <span class='judul-berita-utama'>
              <div class='caption-dt-jd'>
                <h3><a href='berita-$t[judul_seo]' title='$t[judul]'>$t[judul]</a></h3>
                <span class='tanggal-release home'>$t[hari], $tgl - $jam</span>
              </div>
            </span>
			  	</div>
        </div>"; }?>
		</section>
		<section>
			<h4 style="color:#00a0a5;">TOPIK KHUSUS</h4>
			<?php
				$topik = mysql_query("SELECT topik, sub_judul FROM berita WHERE topik != '' GROUP BY topik");
				while ($tp = mysql_fetch_array($topik))
				{
					echo "<i class='fa fa-hashtag' style='color:#00a0a5;'></i>&nbsp;<a style='text-transform:uppercase;' href='topik-$tp[topik]'>$tp[sub_judul]</a>";
				}
			?>
		</section>
		<hr>
		<section>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Mobile Banner -->
			<ins class="adsbygoogle"
					style="display:inline-block;width:320px;height:50px"
					data-ad-client="ca-pub-4290882175389422"
					data-ad-slot="6679890438"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</section>
		<section class="daftar-artikel">
			<?php
			$x = 1;
			$artikel=mysql_query("SELECT * FROM berita, kategori WHERE kategori.id_kategori = berita.id_kategori AND id_berita != $id ORDER BY id_berita DESC LIMIT 10");
			while($q=mysql_fetch_array($artikel))
			{
				$tgl = tgl_indo($q['tanggal']);
				$jam = trans_jam($q['jam']);
				if (strlen($q['judul']) > 60)
				{
					$hasil = substr($q['judul'], 0, 60)."&hellip;";
				}
				else
				{
					$hasil = $q['judul'];
				}
				
				if($q['jenis_berita'] == 'foto'):
					echo "<article class= 'artikle' >
									<div class='list-picture'>
										<a href='berita-$q[judul_seo]'>
											<img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$q[gambar1]' alt='$q[judul]' style='width:100%;height:auto;object-fit:cover;'>
										</a>
									</div>
									<div class='artikle-text' data-target='update' kode='$q[id_berita]' style='width:100%;padding:0;margin-top:10px;'>
										<a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
										<!-- <a href='#' class='link-kategori'>$q[nama_kategori]</a> -->
										<br>
										<p class='waktu-berita'> $q[hari], $tgl - $jam </p> 
									</div>
								</article>";
				else:
					echo "<article class= 'artikle' >
									<div class='list-picture'>
										<a href='berita-$q[judul_seo]'>
											<img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
										</a>
									</div>
									<div class='artikle-text' data-target='update' kode='$q[id_berita]'>
										<a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
										<!-- <a href='#' class='link-kategori'>$q[nama_kategori]</a> -->
										<br>
										<p class='waktu-berita'> $q[hari], $tgl - $jam </p> 
									</div>
								</article>";
				endif;
				$x++;
			}
		?>
		</section>
		<h5 style="color:#00a0a5">BERITA REKOMENDASI</h5>
		<section style="white-space:nowrap;overflow:auto;">
			<?php
				$topik = mysql_query("SELECT * FROM berita WHERE aktif = 'Y' ORDER BY id_berita DESC LIMIT 5");
				while ($tp = mysql_fetch_array($topik))
				{
					echo "<article class= 'artikle' style='border:0;width:200px;display:inline-block;padding-right:15px;white-space:normal;vertical-align:top;'>
									<div class='list-picture'>
										<a href='berita-$tp[judul_seo]'>
											<img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$tp[gambar1]' alt='$tp[judul]' style='width:100%;object-fit:cover;height:115px;'>
										</a>
									</div>
									<div class='artikle-text' data-target='update' kode='$tp[id_berita]' style='width:100%;padding:0;margin-top:10px;'>
										<a href='berita-$tp[judul_seo]' class='berita' title='$tp[judul]' style='font-weight:500;font-size:12px;'>$tp[judul]</a>
										<br>
									</div>
								</article>";
				}
			?>
		</section>
		<!-- <div class="iklan">
      <a href="abutours" title="AbuTours.com">
        <img class="img-responsive" src="assets/abujie.jpg" alt="iklan banner bawah harianamanah.com - kiblat berita islami">
      </a>
    </div> -->

		<section id="daftar-artikel"></section>
		<div id="more" style="display: none;">
			<center><img src="assets/loading.gif" width="100px"></center>
		</div>
		</section>
<script>
		$(document).ready(function(){
			var loadMore = true;
			$(window).scroll(function(){
				var nearbottom = 110;
				if($(window).scrollTop()+nearbottom >= $(document).height() - $(window).height() && loadMore)
				{
					loadMore = false;
					$.ajax({
						url: 'more.php?kategori=&urut='+$('.artikle-text[data-target=update]:last').attr('kode'),
						beforeSend: function()
						{
							$('#more').show();
						},
						complete: function()
						{
							$('#more').hide().delay(1000);
						},
						success: function(result)
						{
							if(result)
							{	
								$('#daftar-artikel').append(result);
								$('.lazy').lazy();
								loadMore = true;
							}
						}
					});
				}
			});
		});
	</script>
<?php }
  elseif ($_GET['module']=='popular'){
    include "modul/mod_berita/popular.php";}
  elseif ($_GET['module']=='rekomendasi'){
    include "modul/mod_berita/rekomendasi.php";}
  elseif ($_GET['module']=='detailkategori'){
    include "modul/mod_berita/detailkategori.php";}
  elseif ($_GET['module']=='detailberita'){
    include "modul/mod_berita/detailberita.php";}
  elseif ($_GET['module']=='detailvideo'){
    include "modul/mod_berita/detailvideo.php";}
	elseif ($_GET['module']=='hasilcari'){
  	include "modul/mod_berita/hasilcari.php";}
	elseif ($_GET['module']=='hasiltag'){
  	include "modul/mod_berita/hasiltag.php";}
  elseif ($_GET['module']=='rubrik')
    include "modul/mod_berita/detailrubrik.php";
	elseif ($_GET['module']=='video')
		include 'modul/mod_berita/video.php';
	elseif ($_GET['module']=='foto')
		include 'modul/mod_berita/foto.php';
	elseif ($_GET['module']=='detailfoto')
		include 'modul/mod_berita/detailfoto.php';
	elseif ($_GET['module']=='halaman-statis')
		include 'modul/mod_berita/halaman-statis.php';
?>