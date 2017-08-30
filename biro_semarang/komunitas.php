<br>
<br>


<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
		

			<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4> Muslimah</h4></br>
                			<ul class="featured_nav">
                  			
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '57' ORDER BY id_berita DESC limit 4 ");
							while($t=mysql_fetch_array($terkini)){
								
							echo "
							<li>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$t[judul]</a>
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
                			<h4>Gen M</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '58' ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
								
							echo "
							<li>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$t[judul]</a>
                    		</div>
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
                		<div class="sembunyi" >
                		<h4>Ormas</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '59' ORDER BY id_berita DESC limit 4 ");
							while($t=mysql_fetch_array($terkini)){
								
							echo "
							<li>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='../foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$t[judul]</a>
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
				<div class="row">
					<div class="col-md-12">
						<h6 class="text-center">ADVERTISEMENT</h6>
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


		

		
		
	</div>

	<!-- /////////////////////////////////////////Content -->
	