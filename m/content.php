<?php
 if ($_GET['module']=='home'){?>
  <ul class="navbar sub-rubrik">
    <li><a href='terkini'>Terkini</a></li>
    <li><a href='popular'>Popular</a></li>
    <li><a href='rekomendasi'>Rekomendasi</a></li>
  </ul>
 	<section class="container-fluid" style="background-color:white;">
		<section class="headline row">
      <?php
				$terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 1");
				while($t=mysql_fetch_array($terkini)){
          $tgl = tgl_indo($t["tanggal"]);
          $jam = trans_jam($t["jam"]);
					$id1 = $t["id_berita"];
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='Header'>
            <span class='judul-berita-utama'>
              <div class='caption-dt-jd'>
                <h3><a href='berita-$t[judul_seo]' title='$t[judul]'>$t[judul]</a></h3>
                <span class='tanggal-release home'>$t[hari], $tgl - $jam</span>
              </div>
            </span>
			  	</div>
        </div>"; }?>
		</section>
		<section class="daftar-artikel">
			<?php
			$_digit = 10;
			$artikel=mysql_query("SELECT * FROM berita, kategori WHERE kategori.id_kategori = berita.id_kategori AND id_berita < '$id1' ORDER BY id_berita DESC LIMIT $_digit");
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
				echo "<article class= 'artikle' >
					<div class='list-picture'>
						<a href='berita-$q[judul_seo]'>
							<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />
						</a>
					</div>
					<div class='artikle-text' data-target='update' kode='$q[id_berita]'>
            <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$hasil</a>
            <a href='#' class='link-kategori'>$q[nama_kategori]</a>
            <p class='waktu-berita'> $q[hari], $tgl - $jam </p>
					</div>
				</article>
				";
			}
		?>
		</section>
		<div class="iklan">
      <a href="abutours" title="AbuTours.com">
        <img class="img-responsive" src="assets/abujie.jpg" alt="iklan">
      </a>
    </div>

		<section id="daftar-artikel"></section>
		<div id="more" style="display: none;">
			<center><img src="assets/loading.gif" width="100px"></center>
		</div>
		</section>
<script>
		$(document).ready(function(){
			var loadMore = true;
			$(window).scroll(function(){
				var nearbottom = 100;
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
								loadMore = true;
							}
						}
					});
				}
			});
		});
	</script>
<?php }
  elseif ($_GET['module']=='detailkategori'){
    include "modul/mod_berita/detailkategori.php";}
  elseif ($_GET['module']=='detailberita'){
    include "modul/mod_berita/detailberita.php";}
  elseif ($_GET['module']=='detailvideo'){
    include "modul/mod_berita/detailvideo.php";}
	elseif ($_GET['module']=='hasilcari'){
  	include "modul/mod_berita/hasilcari.php";}
  elseif ($_GET['module']=='rubrik')
    include "modul/mod_berita/detailrubrik.php";
	elseif ($_GET['module']=='video')
		include 'modul/mod_berita/video.php';
	elseif ($_GET['module']=='foto')
		include 'modul/mod_berita/foto.php';
	elseif ($_GET['module']=='detailfoto')
		include 'modul/mod_berita/detailfoto.php';
?>