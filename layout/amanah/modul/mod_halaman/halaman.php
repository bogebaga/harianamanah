	<div class="featured container"></div>
	<div class="container"></div></div>
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" style="background-color: #fff;" class="index-page container">
	<div id="row">
				<div class="col-md-12">
				<?php
  $detail=mysql_query("SELECT * FROM halamanstatis,users WHERE judul_seo='$_GET[redaksi]'");
  $d   = mysql_fetch_array($detail);

				?>
				<div class="user-panel">
				<div class="judul">
				<?php echo"<h1>$d[judul]</h1>";?>
				</div>
      			</div><hr>
				<div class="dua-atas">
					<div class="col-md-12">
						<div class="row">
							<div class="single_blog_sidebar wow fadeInUp">
							<?php
							echo"<p>$d[isi_halaman]</p>";
							?>
                			</div>
						</div>
					</div>
					</div>
				</div>
	</div>
  <div class="clear">&nbsp;</div>
  </div>
  </div><br>





