<style>
.hide-bullets{
			list-style: none;
		}

		.foto-mini{
			padding: 0;
			margin: 10px 3px;
			transition: .2s ease-in-out;
			opacity: 0.5;
		}

		.foto-mini:hover{
			opacity: 1;
		}

		.foto-mini:hover{
			transform: scale(1.4, 1.4);
		}

		.slide{
			margin-bottom: 50px;
			margin-top : -50px
		}

		.carousel-control{
			height: fit-content;
			width: 10%;
			top: 33%;
		}

		.thumbnail{
			margin-bottom: 0;
			width: 90px;
		}

		#slider-thumbs{
			margin: 0;
			background: #3e3e3e;
			padding:15px;
		}
</style>
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
				$detail=mysql_query("SELECT * FROM gallery,users,album
                      WHERE users.username=album.username
                      AND album.id_album=gallery.id_album
                      AND album_seo='$_GET[judul]'");
				$d   = mysql_fetch_array($detail);
				$tgl = tgl_indo($d['tanggal']);
				$baca = $d['dibaca']+1;

				?>
				<div class="user-panel">

				<div class="judul">
				<?php echo"<h1>$d[jdl_album]</h1></br>";?>
				</div>
			        <div class="image">
					<?php

					echo "<img src='././foto_user/$d[foto]' class='img-circle' alt='User Image'>";
					?>

			        </div>

			        <div class="sosial">
		        		<ul class="list-inline pull-right ">

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

		          		<span class="info-name"> <?php echo $d["nama_lengkap"];?></span>
		          		<p class="daftar-redaksi"><?php echo $d["tgl_posting"];?></p>
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
						<div id='myCarousel' class='carousel slide' data-ride='carousel'>
							<div class='carousel-inner' >
						<?php
				$detail1=mysql_query("SELECT * FROM gallery,users,album
                      WHERE users.username=album.username
                      AND album.id_album=gallery.id_album
                      AND album_seo='$_GET[judul]' ORDER BY id_gallery DESC LIMIT 1");

				while($d1  = mysql_fetch_array($detail1)){

					$id1 = $d1["id_gallery"];
				echo"


		      	<div class='item active'>
		          <img src='img_galeri/$d1[gbr_gallery]'>
		        </div>

				";
				}

				$detail2=mysql_query("SELECT * FROM gallery,users,album
                      WHERE users.username=album.username
                      AND album.id_album=gallery.id_album
                      AND album_seo='$_GET[judul]' AND id_gallery !='$id1' ORDER BY id_gallery DESC ");

				while($d2  = mysql_fetch_array($detail2)){

				echo"

		      	<div class='item'>
		          <img src='img_galeri/$d2[gbr_gallery]'>
		        </div>

				";
				}
				?>
							</div>
		    <div class='row hidden-xs' id='slider-thumbs'>
		        <ul class='hide-bullets'>

				  <?php
				  $detail3=mysql_query("SELECT * FROM gallery,users,album
                      WHERE users.username=album.username
                      AND album.id_album=gallery.id_album
                      AND album_seo='$_GET[judul]' ORDER BY id_gallery DESC ");
				$no=0;
				while($d3  = mysql_fetch_array($detail3)){

				echo"

		      	<li class='col-sm-2 foto-mini'>
		                <img class='thumbnail' id='carousel-selector-$no' src='img_galeri/$d3[gbr_gallery]'>
		        </li>
				";
					$no++;
				}


				  ?>


	        	</ul>
	   		</div>
			<?php
				$detail4=mysql_query("SELECT * FROM gallery,users,album
                      WHERE users.username=album.username
                      AND album.id_album=gallery.id_album
                      AND album_seo='$_GET[judul]' ORDER BY id_gallery DESC ");

					$d4 = mysql_fetch_array($detail4);

				echo "<br><p>$d4[keterangan]</p>";
			?>
     		<a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
        		<i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i>
        		<span class='sr-only'>Previous</span>
      		</a>
      		<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
        		<i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i>
        		<span class='sr-only'>Next</span>
      		</a>
    	</div>




                			<div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
							<div class="fb-like"
							data-share="true"
							data-width="450"
							data-show-faces="true">
							</div>
							<br>
							<br>
							<br>



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
							<img src='foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
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
                    			<a class='featured_img' href='berita-$p[judul_seo]'><img src='foto_berita/$p[gambar]' alt='img'></a>
                    			<div class='featured_title'>
                      			<a class='' href='berita-$p[judul_seo]'>$p[judul]</a>
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
							<img src='foto_pasangiklan/$c[gambar]' alt='img' width='100%'></a>
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
					<img src='foto_iklanatas/$b[gambar]' alt='img'></a>
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

<script type="text/javascript">
  	     $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);

            $('#myCarousel').carousel(id);
        });


	$("#myCarousel").carousel({interval: false});
  </script>



