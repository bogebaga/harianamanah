
  <?php
  include_once('config_fb.php');
  ?>
  
	<div class="featured container">
		
	</div>

	<div id="fb-root"></div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '168067490271817',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>	

	<div class="container">
			
			</div>
		</div>
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
	<div id="sidebar">
				<div class="col-md-12">
				<?php 
				$detail=mysql_query("SELECT * FROM berita,users,kategori    
                      WHERE users.username=berita.username 
                      AND kategori.id_kategori=berita.id_kategori 
                      AND judul_seo='$_GET[judul]'");
				$d   = mysql_fetch_array($detail);
				$tgl = tgl_indo($d['tanggal']);
				$baca = $d['dibaca']+1;
				
				?>
				<div class="user-panel">
				
				<div class="judul">
				<?php echo"<h1>$d[judul]</h1></br>";?>
				</div>
			        <div class="image">
					<?php 
				
					echo "<img src='../foto_user/$d[foto]' class='img-circle' alt='User Image'>";
					?>
			          	
			        </div>
					
			        <div class="sosial">
		        		<ul class="list-inline pull-right ">
							<li>
							<a class="btn btn-social-icon btn-dibaca" ><?php echo$d[dibaca]?></a>
							</li>
							<li><a class="btn btn-social-icon btn-facebook" onclick="
  window.open(
    'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
    'facebook-share-dialog', 
    'width=626,height=436'); 
    return false;"><i class="fa fa-facebook fa-2x"></i>Share</a></li>
							<li><!-- <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a> -->
							<a class="btn btn-social-icon btn-twitter " onclick="window.open('https://twitter.com/share','width=336','height=206');return false;" ><i class="fa fa-twitter fa-2x"></i> Tweet</a></li>
							
						</ul>
					</div>

		        	<div class="info">
					
		          		<span class="info-name"> <?php echo"$d[nama_lengkap]";?></span>
		          		<p class="daftar-redaksi"><?php echo"$d[hari], $tgl "; ?></p>
		        	</div>

				<!-- <div class="user-panel" >
					
        			<div class="image">
          				<img src="images/1.jpg" class="img-circle" alt="User Image">
        			</div>

        			<div class="autor" style="text-align:left" >
          				<span class="hidden-xs">Alexander Pierce</span>
        			</div> -->
        			
				

      			</div><hr>


				<div class="dua-atas">
					<div class="col-md-8">
						<div class="row">
							<div class="single_blog_sidebar wow fadeInUp">
							<?php
							if($d['sub_judul']!='')
							{
                			echo "<h4 style='text-align:left'>$d[sub_judul]</h4></br>";
							}
							
							echo"<img src='../foto_berita/$d[gambar]' alt='img'>";
							echo"<p class='caption-pic'>$d[keterangan_gambar]</p>";
							
							echo"<br><br><p>$d[isi_berita]</p>";
							$acak           = rand(44,77);
							mysql_query("UPDATE berita SET dibaca=$d[dibaca]+$acak WHERE judul_seo='$_GET[judul]'");
							
                			?>

                			<div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
							<div class="fb-like"
							data-share="true"
							data-width="450"
							data-show-faces="true">
							</div>
							<br>
							<br>
							<br>
							
							<div class="related-news">
							<div class='kotak'>
							<br>
							<h5 class="blue">Berita Terkait</h5>
							<ul class="featured_nav0">
							
							<?php
							$detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = $d[id_kategori] AND id_berita != $d[id_berita] order by id_berita DESC limit 4");
  
							while($p1=mysql_fetch_array($detail1)){
							echo"
							
							<li>
                    			<a class='featured_img' href='berita-$p1[judul_seo].html'><img src='../foto_berita/$p1[gambar]' alt='img'></a>
                    			<div class='featured_title'>
                      			<a class='' href='berita-$p1[judul_seo].html'>$p1[judul]</a>
                    			</div>
                  			</li>
							
							";
							}
							?>
							</ul>
							</div>
							
							<div class='kotak'>
							<br>
							<h5 class="orange">Berita Lainnya</h5>
							<ul class="featured_nav0">
							
							<?php
							$detail2=mysql_query("SELECT * FROM berita WHERE id_berita != $d[id_berita] order by id_berita DESC limit 4");
  
							while($p2=mysql_fetch_array($detail2)){
							echo"
							
							<li>
                    			<a class='featured_img' href='berita-$p2[judul_seo].html'><img src='../foto_berita/$p2[gambar]' alt='img'></a>
                    			<div class='featured_title'>
                      			<a class='' href='berita-$p2[judul_seo].html'>$p2[judul]</a>
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
							
					<div class="col-md-4">
						<div class="row">
							<div class="single_blog_sidebar wow fadeInUp">
                			
                			<ul class="featured_nav0">
							<div class="mid">
							<font color="#ccc" >ADVERTISEMENT</font>
							</div>
							<?php
							$iklantengah=mysql_query("SELECT * FROM pasangiklan  ORDER BY id_pasangiklan DESC LIMIT 1");
							while($c=mysql_fetch_array($iklantengah)){
								$idc1 = $c['id_pasangiklan'];
							echo "
							<li>
							<a class='featured_img' href='$c[url]' >
							<img src='../foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
							</li>
							";}
							?>
							<h6>POPULER</h6>
							<br>
							<?php
							$sql=mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 7");  
  
							while($p=mysql_fetch_array($sql)){
							echo"
							<li>
                    			<a class='featured_img' href='berita-$p[judul_seo].html'><img src='../foto_berita/$p[gambar]' alt='img'></a>
                    			<div class='featured_title'>
                      			<a class='' href='berita-$p[judul_seo].html'>$p[judul]</a>
                    			</div>
                  			</li>
							";
							
							}
							?>
                  			
                  			<div class="mid">
							<font color="#ccc" >ADVERTISEMENT</font>
							</div>
							
							<?php
							$iklantengah=mysql_query("SELECT * FROM pasangiklan WHERE id_pasangiklan != '$idc1'  ORDER BY id_pasangiklan DESC LIMIT 1");
							while($c=mysql_fetch_array($iklantengah)){
								$idc2 = $c['id_pasangiklan'];
							echo "
							<li>
							<a class='featured_img' href='$c[url]' >
							<img src='../foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
							</li>
							";}
							?>
                  			
                			</ul>
                		</div>
						</div>
					</div>				
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h6 class="text-center">ADVERTISEMENT</h6>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklanatas  ORDER BY id_iklanatas DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
						$id1 = $b['id_iklanatas'];
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='../foto_iklanatas/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
				</div></br>
			
		
	</div>
   <?php
	
  ?>
 

  
  <div class="clear">&nbsp;</div>
  </div>
  </div><br />
 
 
 
 
 
 