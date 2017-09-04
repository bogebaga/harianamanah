<br>
<br>


<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
		

			<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h5>Ensiklopedi Muslim</h5></br>
                			<ul class="featured_nav">
                  			
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '60' ORDER BY id_berita DESC limit 4 ");
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
							<li kode='$t[id_berita]' data-target='kajian'>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
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
                			<h4> Mozaik</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '61' ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "
							<li kode='$t[id_berita]' data-target='kajian'>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
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
                		<h4>Hikmah</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '62' ORDER BY id_berita DESC limit 4 ");
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
							<li kode='$t[id_berita]' data-target='kajian'>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
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
	<div id="page-content" class="index-page container" style="margin-top:0;">
		

			<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4>Tafsir</h4></br>
                			<ul class="featured_nav">
                  			
                  			
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '63' ORDER BY id_berita DESC limit 4 ");
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
							<li kode='$t[id_berita]' data-target='kajian'>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
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
                			<h4> Haji & Umrah</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '64' ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "
							<li kode='$t[id_berita]' data-target='kajian'>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		<div class='featured_title1'>
                      		
							<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
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
                		<h4> Terkini</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC limit 4 ");
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
							<li>
							
							<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
                    		
							<div class='featured_title'>
                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
                    		</div>
                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t[tanggal]." | ".$t[jam]."</p>
							</li>
							";
							}
							?>
                			</ul>
                		</div>
                	</div>
				</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-12">
						<h6 class="text-center">ADVERTISEMENT</h6>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='2' ORDER BY id_iklantengah DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='foto_iklantengah/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
				</div></br> -->
			</div>
		</div>

		<div id="daftar-artikel"></div>
		<div id="more" style="display: none;">
			<center><img src="images/loading.gif" width="170px"></center>
		</div>		
	</div>

	<!-- /////////////////////////////////////////Content -->
	
		<br>
	<script>
			var loadMore = true;
		$(window).scroll(function(){
			var nearbottom = 100;
			if(($(window).scrollTop()+nearbottom >= $(document).height()-$(window).height()) && loadMore)
			{
				loadMore = false;
				$.ajax({
					url: 'more-web.php?kategori=kajian&urut='+$('li[data-target=kajian]:last').attr('kode'),
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
						if(result)
						{
							$('#daftar-artikel').append(result);
							loadMore = true;
						}
					}
				});
			}
		});
				// $('#more-3').click(function(){
				// 	$(this).html('<center><img src="images/loading.gif" width="170px"></center>');
				// 	$.ajax({
				// 		url: 'more-web.php?kategori=kajian&urut='+$('li[data-target=kajian]:last').attr('kode'),
				// 		success: function(html)
				// 		{
				// 			if(html)
				// 			{
				// 				$('#all-news-2').append(html);
				// 				$('#more-3').html('<div class="more-green-toska">MUAT LAINNYA</div>');
				// 				// $('.iklan').html('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

				// 			}
				// 		}
				// 	})
				// });
	</script>	