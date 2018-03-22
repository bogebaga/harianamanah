<ul class="navbar sub-rubrik">
    <li><a href='./'>Terkini</a></li>
    <li><a href='popular'>Popular</a></li>
    <li><a href='rekomendasi'>Rekomendasi</a></li>
    <li class='active'><a href='epaper'>ePaper</a></li>
  </ul>
  <!-- <a href="lombamewarnaiislami">
    <img src="img_lomba/Proposal Lomba Mewarnai.jpg" alt="Lomba Mewarnai Islami - harianamanah.com" style="width:100%;margin-bottom:5px;">
  </a> -->
 	<section class="container-fluid" style="background-color:white;padding:0 10px;">
		<section>
			<h4 style="color:#00a0a5;">ePAPER</h4>
			<?php
				$epaper = mysql_query("SELECT judul, judul_seo, gambar FROM berita WHERE username = 28");
				while ($tp = mysql_fetch_array($epaper))
				{
					echo "<article class= 'artikle' >
					<div class='list-picture'>
						<a href='".SITE_URL."amanahpaper/$tp[judul_seo]'>
							<img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$tp[gambar1]' alt='$tp[judul]' style='width:100%;height:auto;object-fit:cover;'>
						</a>
					</div>
					<div class='artikle-text' data-target='update-foto' kode='$tp[id_berita]' style='width:100%;padding:0;margin-top:10px;'>
						<a href='".SITE_URL."amanahpaper/$tp[judul_seo]' class='berita' title='$tp[judul]'>$tp[judul]</a>
						<!-- <a href='#' class='link-kategori'>$tp[nama_kategori]</a> -->
						<br>
					</div>
				</article>";
				}
			?>
		</section>
		<hr>
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
		<section id="daftar-artikel"></section>
		<div id="more" style="display: none;">
			<center><i class="fa fa-4x fa-spin fa-circle-o-notch" style="color:#1c9fa7;margin:10px 0;"></i></center>
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
						method: 'GET',
						url: 'more.php',
						data: {
							kategori: '',
							urut: $('.artikle-text[data-target=update]:last').attr('kode')
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
							}
						}
					});
				}
			});
		});
	</script>