<br>
<br>


<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
			<div id="sidebar">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="row">
                		<div class="single_blog_sidebar wow fadeInUp">
                		<h4>Ekobis</h4></br>
                			<ul class="featured_nav">
							<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '21' ORDER BY id_berita DESC limit 4 ");
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
							<li kode='$t[id_berita]' data-kategori='ekobis'>
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
                			<h4>Politik</h4></br>
                				<ul class="featured_nav1">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '22' ORDER BY id_berita DESC limit 3 ");
							while($t=mysql_fetch_array($terkini)){
							if (strlen($t[judul]) > 56) 
							{
								$hasil = substr($t[judul], 0, 56)."&hellip;";
							} else {
								$hasil = $t[judul];
							}	
							echo "
							<li kode='$t[id_berita]' data-kategori='politik'>
							
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
                		<h4> Jazirah</h4></br>  
                			<ul class="featured_nav2">
                  			<?php 
							$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '56' ORDER BY id_berita DESC limit 4 ");
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
							<li kode='$t[id_berita]' data-kategori='jazirah'>
							
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
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='1' ORDER BY id_iklantengah DESC LIMIT 1");
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
		
	</div><br>
	<!-- /////////////////////////////////////////Content --><script>
			var loadMore = true;
		$(window).scroll(function(){
			var nearbottom = 100;

			if(($(window).scrollTop()+nearbottom >= $(document).height()-$(window).height()) && loadMore)
			{
				loadMore = false;
				$.ajax({
					url: 'more-web.php?kategori=news&urut_1='+$('li[data-kategori=politik]:last').attr('kode')+'&urut_2='+$('li[data-kategori=jazirah]:last').attr('kode')+'&urut_3='+$('li[data-kategori=ekobis]:last').attr('kode'),
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
						}
						loadMore = true;
					}
				});
			}
		});
			// $('#more-3').click(function(){
			// 	$(this).html('<center><img src="images/loading.gif" width="170px"></center>');
			// 	$.ajax({
			// 		url: 'more-web.php?kategori=news&urut_1='+$('li[data-kategori=politik]:last').attr('kode')+'&urut_2='+$('li[data-kategori=jazirah]:last').attr('kode')+'&urut_3='+$('li[data-kategori=ekobis]:last').attr('kode'),
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