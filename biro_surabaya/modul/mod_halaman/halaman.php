	<div class="featured container">
		
	</div>
	
	<div class="container">
			
			</div>
		</div>
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
	<div id="row">
				<div class="col-md-12">
				<?php 
  $detail=mysql_query("SELECT * FROM halamanstatis,users WHERE judul_seo='$_GET[judul]'");
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
 
 
 
 
 
 