<?php function ulangi(){ 
		static $digit=0;
		global $alamat;
		$digit = $digit + 5;
		?>	
<?php 
				
	$terkini1 = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '14' ORDER BY berita.id_berita DESC LIMIT $digit, 1");
	while($a=mysql_fetch_array($terkini1)){     
	$id1 = $a['id_berita'];
			
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img src='http://harianamanah.com/foto_berita/$a[gambar]' alt='Header'>
			  			
			  			<span class='judul-berita-utama'>
			  			<h3>
			  				<a href='berita-$a[judul_seo].html'>$a[judul]</a>

			  			</h3>
			  		    </span>
			  	</div>
			  	</div>
			  	";
			  }
			?>
	<!-- Content -->
	<section class="container-fluid">
	
			<section class="daftar-artikel">
				<?php 
					$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '14' AND id_berita != '$id1' ORDER BY berita.id_berita DESC LIMIT $digit, 5");

					while ($q = mysql_fetch_array($artikel)) 
					{
						echo "<article class= 'artikle' >
								<div class='list-picture'>
									<a href='berita-$q[judul_seo].html'>
									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />
									</a>
								</div>
								<div class='artikle-text' kode='$q[id_berita]'>
										<a href='#' class='link-kategori'>$q[nama_kategori]</a>
										<a href='berita-$q[judul_seo].html' class='berita'><p>$q[judul]</p></a>
										<p class='waktu-berita'> $q[tanggal] | $q[jam] </p>
								</div>
								</article> 
					";
					}
				?>
			</section>	

			<!-- Iklan -->
			<div class="iklan">
				<a href="https://abutours.com/" target="_blank" title="AbuTours.com">
					<img class="img-responsive" src="http://harianamanah.com/foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan">
				</a>
			</div>

		<?php }
		echo ulangi();
		echo ulangi();
		// echo ulangi();
		// echo ulangi();
		?>

		<section id="daftar-artikel" class="daftar-artikel">
		
		</section>
<br>
		<div id="more" style="display: none;">
			<center><img src="assets/loading.gif" width="100px"></center>
		</div>
		<!-- <div id="more">
			<div class="more">
				MUAT LAINNYA
			</div>
		</div> -->
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
						url: 'more.php?kategori=komunitas&urut='+$('.artikle-text:last').attr('kode'),
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
								// $('#more').html('<div class="more">MUAT LAINNYA</div>');
								// $('.iklan').html('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

							}
						}
					});
				}
			});
			// $('#more').click(function(){
			// 	$(this).html('<center><img src="assets/loading.gif" width="100px"></center>');
			// 	$.ajax({
			// 		url: 'more.php?kategori=komunitas&urut='+$('.artikle-text:last').attr('kode'),
			// 		success: function(html)
			// 		{
			// 			if(html)
			// 			{
			// 				$('#daftar-artikel').append(html);
			// 				$('#more').html('<div class="more">MUAT LAINNYA</div>');
			// 				// $('.iklan').html('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

			// 			}
			// 		}
			// 	})
				
				
			// });
		});
	</script>