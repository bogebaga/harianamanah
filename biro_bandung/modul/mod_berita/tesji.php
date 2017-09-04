<div class="featured container">
		
	</div>
				<?php 
				 $video = mysql_query("SELECT * FROM video WHERE video_seo ='$_GET[judul]'");
   				 $r    = mysql_fetch_array($video);
				?>
<div id="page-content" class="index-page container">
		<div id="sidebar">
			<div  class="col-md-12">
				<div class="box">
				
				<div class="user-panel">
				
				<div class="judul">
				<h2><?php echo"$r[jdl_video]"; ?></h1></br>
				</div>
				<hr>
			        <div class="image">
					
				
					<img src='././foto_user/90tess.jpg' class='img-circle' alt='User Image'>
				
			          	
			        </div>
					
			        <div class="sosial">
		        		<ul class="list-inline pull-right ">
							<li><a class="btn btn-social-icon btn-facebook" href="#"><i class="fa fa-facebook fa-2x"></i> Share</a></li>
							<li><a class="btn btn-social-icon btn-twitter" href="#"><i class="fa fa-twitter fa-2x"></i> Tweet</a></li>
						</ul>
					</div>
					
		        	<div class="info">
					
		          		<span class="info-name">Risman Ganteng</span><br>
		          		<p>10 Juli 2016</p>
		        	</div>

      			</div><hr>
				
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
					?>
					</p>
					
					<div class="line"></div>
					<div class="comment">
						<h3>Leave A Comment</h3>
						<form name="form1" method="post" action="">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>						
									<button type="submit" class="btn btn-4 btn-block" name="btnBooking" id="btnBbooking">
								Book Now</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
				<div class="box">
					<div class="box-header header-natural">
						<h2>RELATED VIDEOS</h2>
					</div>
					<div class="box-content">
						<div class="row">
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
											<a href="single.html">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>Video's Name</p>
										</div>
										<img src="images/2.jpg" />
									</div>
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
											<a href="single.html">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>Video's Name</p>
										</div>
										<img src="images/2.jpg" />
									</div>
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
											<a href="single.html">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>Video's Name</p>
										</div>
										<img src="images/2.jpg" />
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
