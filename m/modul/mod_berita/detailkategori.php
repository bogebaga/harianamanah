	<!-- Content -->
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
  <section class="container-fluid" style="background-color:white;padding:0 10px;">
		<section class="headline row">
    <span id="id" style="display:none;"><?php echo $_GET['id']?></span>
    <?php
        $terkini=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori WHERE berita.headline='Y' AND berita.id_kategori = '$_GET[id]' ORDER BY id_berita DESC LIMIT 1");
				while($t=mysql_fetch_array($terkini)){
          $tgl = tgl_indo($t['tanggal']);
          $jam = trans_jam($t['jam']);
					$id1 = $t['id_berita'];
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img class='lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='Header-$t[judul]'>
            <span class='judul-berita-utama'>
              <div class='caption-dt-jd'>
                <h3><a href='berita-$t[judul_seo]' title='$t[judul]'>$t[judul]</a></h3>
                <span class='tanggal-release home'> $t[hari], $tgl - $jam</span>
              </div>
            </span>
			  	</div>
        </div>"; }?>
    </section>
		<section class="daftar-artikel">
			<?php
			$_digit = 10;
			$x=1;
			$artikel=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori WHERE berita.id_berita != '$id1' AND berita.id_kategori = '$_GET[id]' ORDER BY id_berita DESC LIMIT $_digit");
			while($q=mysql_fetch_array($artikel))
			{
        $tgl = tgl_indo($q['tanggal']);
        $jam = trans_jam($q['jam']);
				if($x%5 == 0):
					if($state):
						$add_q = "AND id_berita < '$test'";
					else:
						$add_q = ''; 
					endif;
					$inilah = mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE username = 'alifahmi' $add_q ORDER BY b.id_berita DESC LIMIT 1");
					while($foto=mysql_fetch_array($inilah)):
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
					$state = true;
					$test = $foto['id_berita'];
					endwhile;
			elseif($x == 9):
				echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
							style="display:block"
							data-ad-format="autorelaxed"
							data-ad-client="ca-pub-4290882175389422"
							data-ad-slot="9556530284"></ins>
				<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
				</script>';
				else:
					echo "<article class= 'artikle' >
						<div class='list-picture'>
							<a href='berita-$q[judul_seo]'>
								<img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
							</a>
						</div>
						<div class='artikle-text' data-target='update' kode='$q[id_berita]'>
							<a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
							<!-- <a class='link-kategori'>$q[nama_kategori]</a> -->
							<br>
							<p class='waktu-berita'>  $q[hari], $tgl - $jam </p>
						</div>
					</article>";
				endif;
				$x++;
				} ?>
		</section>
		<section id="daftar-artikel"></section>
		<div id="more" style="display: none;">
			<center><i class="fa fa-4x fa-spin fa-circle-o-notch" style="color:#1c9fa7;"></i></center>
		</div>
		</section>
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
<script>
$(document).ready(function(){
  var loadMore = true;
  $(window).scroll(function(){
    var nearbottom = 150;
    if($(window).scrollTop()+nearbottom >= $(document).height() - $(window).height() && loadMore)
    {
      loadMore = false;
      $.ajax({
        method: 'GET',
        url: 'more.php',
        data: {
          kategori: 'detail',
          urut: $('.artikle-text:last').attr('kode'),
          id: $('#id').text()
        },
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
            // $('#more')('<div class="more">MUAT LAINNYA</div>');
            // $('.iklan')('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');
          }
        }
      });
    }
  });
		});
</script>