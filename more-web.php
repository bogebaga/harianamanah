<?php include 'config/koneksi.php'; ?>
<?php 
	function kategori($a)
	{
	if ($a == 21) :
			echo "<a href='kategori-21-ekonomi.html'><p class='kat-text bag-orange'>EKONOMI</p></a>";
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
			echo "<a href='kategori-66-legenda.html'><p class='kat-text bag-blue3'>LEGENDA</p></a>";
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
<?php if ($_GET['kategori']=='news'): ?>
		<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '21' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='ekobis'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '22' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}	
								echo "
								<li kode='$t[id_berita]' data-kategori='politik'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                				</ul>
	                		</div>
	                	</div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '56' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='jazirah'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
					</br>
				</div>
			</div>
<?php elseif($_GET['kategori']=='lifestyle'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '70' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='muslim'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>

	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '55' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}	
								echo "
								<li kode='$t[id_berita]' data-kategori='bola'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                				</ul>
	                		</div>
	                	</div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='kuliner'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>			
<?php elseif($_GET['kategori']=='komunitas'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '57' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='muslimah'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>

	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '58' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}	
								echo "
								<li kode='$t[id_berita]' data-kategori='gen'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                				</ul>
	                		</div>
	                	</div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '59' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='ormas'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='sosok'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '65'  AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='khazanah'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                    			
	                  			

	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '66' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}	
								echo "
								<li kode='$t[id_berita]' data-kategori='legenda'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                				</ul>
	                		</div>
	                	</div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='terkini'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='kalam'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '67' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='islam_view'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                    			
	                  			

	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '68' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}	
								echo "
								<li kode='$t[id_berita]' data-kategori='opini'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                				</ul>
	                		</div>
	                	</div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '69' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-kategori='esai'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='kajian'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">
	                  			
	                  			
								<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $_GET[urut] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								$id_berita_col_1=$t['id_berita'];
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 

								echo "
								<li kode='$t[id_berita]' data-target='kajian'>
								
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		
								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                    			
	                  			

	                			</ul>
	                		</div>
	                	</div>
					</div>
					
					<div class="col-md-6">
						<div class="row">
	                		<div class="single_blog_sidebar1 wow fadeInUp">
	                				<ul class="featured_nav1">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $id_berita_col_1 ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								$id_berita_col_2 = $t['id_berita'];	
								if (strlen($t['judul']) > 56) 
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "<li kode='$t[id_berita]' data-target='kajian'>
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>
	                      		
								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
                  </ul>
              </div>
            </div>
					</div>
					
					<div id="" >
					<div class="col-md-3" >
						<div class="row">
	                		<div class="sembunyi_iklan" >
	                		<h4></h4>
	                		</br>  
	                			<ul class="featured_nav2">
	                  			<?php 
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $id_berita_col_2 ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75) 
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								} 
								else 
								{
									$hasil = $t['judul'];
								} 	
								echo "
								<li kode='$t[id_berita]' data-target='kajian'>
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
                </ul>
              </div>
            </div>
					</div>
					</div>
<?php else: ?>
		<?php 
		if($_GET['page'] >= 20)
		{
			echo "<center><div class='clearfix'></div><div class='block_end_berita'></div></div></center>";
		}
		else
		{
		?>
		<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
		        		<div class="single_blog_sidebar wow fadeInUp">
		        			<ul class="featured_nav">
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $_GET[urut] ORDER BY id_berita DESC limit 4");
							while($t=mysql_fetch_array($terkini)){
							$id_berita_col_1 = $t['id_berita'];
							if (strlen($t['judul']) > 75) 
							{
								$hasil = substr($t['judul'], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t['judul'];
							} 
							echo "<li kode='$t[id_berita]'>";
							kategori($t['id_kategori']);
							echo "
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
							<div class='featured_title'>
		              		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
		            		</div>
		            		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
							</li>
							";
							}
							?>
						 </ul>
		        		</div>
		        	</div>
				</div>
				<div class="col-md-6">
					<div class="row">
		        		<div class="single_blog_sidebar1 wow fadeInUp">
		   				<ul class="featured_nav1">
		          			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $id_berita_col_1 ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
								$id_berita_col_2 = $t['id_berita'];
							if (strlen($t['judul']) > 56) 
							{
								$hasil = substr($t['judul'], 0, 56)."&hellip;";
							} else {
								$hasil = $t['judul'];
							}
							echo "
							<li kode='$t[id_berita]'>";
							kategori($t['id_kategori']);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
		            		<div class='featured_title1'>
		              		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
		            		</div>
		            		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
							</li>
							";
							}
							?>
						</ul>
		        		</div>
		        	</div>
				</div>
				<div class="col-md-3" >
					<div class="row">
		        		<div class="sembunyi_iklan" >
		     			<ul class="featured_nav2">
		          			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $id_berita_col_2 ORDER BY id_berita DESC limit 4");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t['judul']) > 75) 
							{
								$hasil = substr($t['judul'], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t['judul'];
							} 	
							echo "
							<li kode='$t[id_berita]'>";
							kategori($t['id_kategori']);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
		            		
							<div class='featured_title'>
		              		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
		            		</div>
		            		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
							</li>
							";
							}
							?>
		      			</ul>
		        		</div>
		        	</div>
				</div>
	</div>
	<?php } ?>
<?php endif ?>
			