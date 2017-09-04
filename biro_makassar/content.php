 <?php
 include "../config/koneksi.php";
  if ($_GET['module']=='home'){?>
	
	<div class="featured container">
		<div class="row">
			<div class="col-sm-12">
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
							<img src='../foto_berita/base.jpg' alt='First slide'>
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
					<?php
					 $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' AND id_berita != '$id1' ORDER BY id_berita DESC LIMIT 5");
					 while($t=mysql_fetch_array($terkini)){      
					 echo"
					 <div class='item'>
							<img src='../foto_berita/base.jpg' alt='First slide'>
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
						
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- /carousel -->
				<?php 
					 $terkini=mysql_query("SELECT * FROM berita WHERE headline='Y' ORDER BY id_berita DESC LIMIT 1");
					 while($t=mysql_fetch_array($terkini)){     
						$id1 = $t['id_berita'];
					 echo"
					 <div class='hidden_header'>
									
									<br>
									<br>
							<img width='100%' src='../foto_berita/base.jpg' alt='First slide'>
							<!-- Static Header -->
							<div class='header-text '>
								<div class='col-md-12 text-center'>
									<br>
									<br>
									<br>
									<br>
								<div class='wrap_title'>
									<p id='title1'><a href='berita-$t[judul_seo].html'>$t[judul]</a></p>
								</div>
								</div>
								
							</div><!-- /header-text -->
							
						
									<br>
									<br>
									
									
						</div>			
						
					 ";
					 }
					?>	
			</div>
			
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Content -->
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
			echo "<a href='kategori-57-muslimah.html'><p class='kat-text bag-orange3'>MUSLIMAH</p></a>";
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
	<div id="page-content" class="index-page container">
		<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4 class="blue"><span class="fa fa-newspaper-o"></span> News</h4></br>
                			<ul class="featured_nav">
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '21' ORDER BY id_berita DESC limit 2 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 
							echo "<li>";
							kategori($t[id_kategori]);
							echo "
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '22' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 
							echo "<li>";
							kategori($t[id_kategori]);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '56' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 
							echo "<li>";
							kategori($t[id_kategori])							;
							echo "
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                			<h4 class="orange"><span class="fa fa-compass"></span> Lifestyle</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '70' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							
								$idb1= $t['id_berita'];
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "<li>";
							kategori($t[id_kategori]);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil </a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '70' AND id_berita !='$idb1' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							
								$idb2= $t['id_berita'];
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "<li>";
							kategori($t[id_kategori]);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil </a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '55' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
								$idb3= $t['id_berita'];
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}
							echo "<li>";
							kategori($t[id_kategori]);
							echo "
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                		<div class="sembunyi" >
                		<h4 class="red"><span class="fa fa-rocket"></span> Terkini</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
                			</ul>
                		</div>
                	</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					<div class="mid">
						<font color="#ccc">ADVERTISEMENT</font>
					</div>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='1' ORDER BY id_iklantengah DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='foto_iklantengah/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
				</div></br>		
			</div>
		</div>

		<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4 class="green"><span class="fa fa-book"></span> Kajian</h4></br>
                			<ul class="featured_nav">
                  			
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '60' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '61' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
                    			
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '62' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '64' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
								$idb4= $t['id_berita'];
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                			<h4 class="green1"><span class="fa fa-plane"></span> Haji dan Umrah</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '64' AND id_berita != '$idb4' ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                		<div class="sembunyi" >
                		<h4 class="blue"><span class="fa fa-bolt"></span> Populer</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita ORDER BY dibaca DESC limit 4 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							
                			</ul>
                		</div>
                	</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mid">
						<font color="#ccc">ADVERTISEMENT</font>
					</div>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='2' ORDER BY id_iklantengah DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='foto_iklantengah/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
				</div></br>
			</div>
		</div>

		<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4 class="blue"><span class="fa fa-futbol-o"></span> Bola+</h4></br>
                			<ul class="featured_nav">
                  			
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '55' AND id_berita != '$idb3' ORDER BY id_berita DESC limit 4 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                			<h4 class="green"><span class="fa fa-star"></span> Muslim Star</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '70' AND (id_berita != $idb1 AND id_berita != $idb2) ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
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
                		<div class="sembunyi" >
                		<h4 class="yellow"><span class="fa fa-users"></span> Komunitas</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '57' ORDER BY id_berita DESC limit 2 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '58' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '59' ORDER BY id_berita DESC limit 1 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 75) 
							{
								$hasil = substr($t[judul], 0, 75)."&hellip;";
							} 
							else 
							{
								$hasil = $t[judul];
							} 	
							echo "
							<li>";
							kategori($t[id_kategori]);
							echo"
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
							</li>
							";
							}
							?>
                			</ul>
                		</div>
                	</div>
				</div>
			 </div>
		 </div>
		<div class="content-a">
			<div id="more-1" style="margin-bottom:40px;">
		 		<div class="more-green-toska">
			 		MUAT LAINNYA
			 	</div>
		 	</div>			
		</div>		
		
		<div id="all-news">
					<h3 data-style="und-bdr" style="margin-bottom:30px;">SEMUA BERITA</h3>
					<div id="sidebar">
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="row">
				                		<div class="single_blog_sidebar wow fadeInUp">
				                			<ul class="featured_nav">
											<?php 
											$terkini=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC limit 4");
											while($t=mysql_fetch_array($terkini)){
											$id_berita_col_1 = $t[id_berita];
											if (strlen($t[judul]) > 75) 
											{
												$hasil = substr($t[judul], 0, 75)."&hellip;";
											} 
											else 
											{
												$hasil = $t[judul];
											} 
											echo "
											<li kode='$t[id_berita]'>";
											kategori($t[id_kategori]);
											echo "
											
											<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
				                    		
											<div class='featured_title'>
				                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
				                    		</div>
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
												$id_berita_col_2 = $t[id_berita];
											if (strlen($t[judul]) > 56) 
											{
												$hasil = substr($t[judul], 0, 56)."&hellip;";
											} else {
												$hasil = $t[judul];
											}
											echo "
											<li kode='$t[id_berita]'>";
											kategori($t[id_kategori]);
											echo "
											
											<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
				                    		<div class='featured_title1'>
				                      		
											<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
				                    		</div>
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
				                		<div class="sembunyi" >
				             			<ul class="featured_nav2">
				                  			<?php 
											$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $id_berita_col_2 ORDER BY id_berita DESC limit 4");
											while($t=mysql_fetch_array($terkini)){
											if (strlen($t[judul]) > 75) 
											{
												$hasil = substr($t[judul], 0, 75)."&hellip;";
											} 
											else 
											{
												$hasil = $t[judul];
											} 	
											echo "
											<li kode='$t[id_berita]'>";
											kategori($t[id_kategori]);
											echo "
											
											<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
				                    		
											<div class='featured_title'>
				                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
				                    		</div>
											</li>
											";
											}
											?>
				              			</ul>
				                		</div>
				                	</div>
								</div>
							 </div>	
					</div>
		</div>

		<div id="all-news-2"></div>
		<div class="content-a">
			<div id="more-2" style="margin-bottom:40px;">
				<div class="more-green-toska">
			 		MUAT LAINNYA
			 	</div>
			</div>	
		</div>
		<div class="clearfix">
			<div class="row">
					<div class="col-md-12">
						<div class="mid" style="margin-top:13px;">
						<font color="#ccc">ADVERTISEMENT</font>
					</div>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='3' ORDER BY id_iklantengah DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='foto_iklantengah/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
			</div></br>
		</div>
	</div>
	<script>
		$('#more-1').click(function () 
		{
			$(this).fadeOut('fast');
			$('#all-news').fadeIn('slow');
			$('#more-2').fadeIn('slow').css('display', 'inline-block');
		});
	</script>
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
	<script>
			$(document).ready(function(){
				$('#more-2').click(function(){
					$(this).html('<center><img src="images/loading.gif" width="170px"></center>');
					$.ajax({
						url: 'more-web.php?kategori=&urut='+$('li:last').attr('kode'),
						success: function(html)
						{
							if(html)
							{
								$('#all-news-2').append(html);
								$('#more-2').html('<div class="more-green-toska">MUAT LAINNYA</div>');
								// $('.iklan').html('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

							}
						}
					})
					
					
				});
			});
	</script>
  <?php 
  }
   // tes////////////////////////////////////////////
  elseif ($_GET['module']=='tes'){
  include "$f[folder]/modul/mod_berita/tesji.php";}
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
  elseif ($_GET['module']=='detailberita'){
  include "$f[folder]/modul/mod_berita/detailberita.php";}
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