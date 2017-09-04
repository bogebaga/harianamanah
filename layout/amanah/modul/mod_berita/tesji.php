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
<div class="featured container">
		
	</div>
				<?php 
				 $video = mysql_query("SELECT * FROM video,users WHERE users.username=video.username  AND video_seo ='$_GET[judul]'");
   				 $r    = mysql_fetch_array($video);
				 $tgl = tgl_indo($r['tanggal']);
				?>
<div id="page-content" class="index-page container">
		<div id="sidebar">
			<div  class="col-md-12">
				<div class="box">
				
				<div class="user-panel">
				
				<div class="judul">
				<br>
				<br>
				<h2><?php echo"$r[jdl_video]"; ?></h1></br>
				</div>
				<hr>
			        
					
			        <div class="sosial">
		        		<ul class="list-inline pull-right ">
						<li>
							<a class="btn btn-social-icon btn-dibaca" ><?php echo$r[dilihat]?></a>
							</li>
							<li><a class="btn btn-social-icon btn-facebook" onclick="
  window.open(
    'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
    'facebook-share-dialog',
    'width=626,height=436');
    return false;"><i class="fa fa-facebook fa-2x"></i> Share</a></li>
							<li><a class="btn btn-social-icon btn-twitter" onclick="window.open('https://twitter.com/share','width=336','height=206');return false;"><i class="fa fa-twitter fa-2x"></i> Tweet</a></li>
						</ul>
					</div>
					
		        	<div class="info">
					
		          		
		          		<p class="daftar-redaksi"><?php echo"$r[hari], $tgl "; ?></p>
		        	</div>

      			</div>
				<br>
					<div class="wrap-vid">
						<?php echo"
						<iframe width='100%' tabindex='0' style='background:#000; min-height: 480px;' allowfullscreen='1' src='$r[youtube]' frameborder='0' height='480' allowfullscreen></iframe>
						";
						?>

					</div>
				
					<div class="line"></div>
					
					<p style="margin-top: 20px">
					<?php 
					echo "$r[keterangan]";
					$acak           = rand(22,33);
							mysql_query("UPDATE video SET dilihat=$r[dilihat]+$acak WHERE video_seo='$_GET[judul]'");
					?>
					</p>
					
					<div class="line"></div>
					<div class="comment">
						<div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
							<div class="fb-like"
							data-share="true"
							data-width="450"
							data-show-faces="true">
							</div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<div class="box">
					<div class="box-header header-natural">
						<h2>Video Lainnya</h2>	<br>
					</div>
					<div class="box-content">
						<div class="row">
						<?php
							$detail2=mysql_query("SELECT * FROM video WHERE id_video != $r[id_video] order by id_video DESC limit 3");
  
							while($p2=mysql_fetch_array($detail2)){
							echo"
							<div class='col-md-4'>
								<div class='wrap-vid'>
									<div class='zoom-container'>
										<div class='zoom-caption'>
											<span>Youtube</span>
											<a href='video-$p2[video_seo].html'>
												<i class='fa fa-play-circle-o fa-5x' style='color: #fff'></i>
											</a>
											<p>$p2[jdl_video]</p>
										</div>
										<img src='img_video/$p2[gbr_video]' />
									</div>
									
								</div>
							</div>
							";
							}
							?>
							
							
						</div>
					</div>
				</div>	<br>	<br>
			</div>
			
		</div>
	</div>
