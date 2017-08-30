<br>
	<!-- Foto Kategori -->
	<div class="foto-Kategori">
		<img src="assets/muslimStar.png" class="img-responsive" alt="Muslim Star">
	</div>

	<!-- Content -->
	<section class="container-fluid">
	<?php function ulangi(){ 
		static $digit=0;
		$digit = $digit + 5;
		?>	
			<section class="daftar-artikel">
				<?php 
					$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '20' ORDER BY berita.id_berita DESC LIMIT $digit, 5");

					while ($q = mysql_fetch_array($artikel)) 
					{
						echo "<article class= 'artikle' >
								<div class='list-picture'>
									<a href='berita-$q[judul_seo].html'>
									<img class='picture' src='assets/gambar_3.jpg' />
									</a>
								</div>
								<div class='artikle-text' kode='$q[id_berita]'>
										<a href='#' class='link-kategori'>$q[nama_kategori]</a>
										<a href='berita-$q[judul_seo].html' class='berita'><p>$q[judul]</p></a>
								</div>
								</article> 
					";
					}
				?>
			</section>	

			<!-- Iklan -->
			<div class="iklan">
				<a href="https://abutours.com/" target="_blank" title="AbuTours.com">
					<img class="img-responsive" src="http://harianamanah.id/foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan">
				</a>
			</div>

		<?php }
		echo ulangi();
		echo ulangi();
		echo ulangi();
		echo ulangi();
		?>

<br>
		<div class="more">
			<a href="#">MORE</a>
		</div>
	</section>