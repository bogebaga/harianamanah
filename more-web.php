<?php
include 'config/koneksi.php';
include 'config/fungsi_indotgl.php';
error_reporting(0);
?>
<?php if ($_GET['kategori']=='news'): ?>
		<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">

								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '21' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='ekobis'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '22' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='politik'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '56' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='jazirah'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
					</br>
				</div>
			</div>
<?php elseif($_GET['kategori']=='lifestyle'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">

								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '70' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='muslim'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '55' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='bola'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='kuliner'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='komunitas'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">


								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '57' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='muslimah'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE id_kategori = '58' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='gen'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '59' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='ormas'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='sosok'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">


								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '65'  AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='khazanah'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '66' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='legenda'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='terkini'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='kalam'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">


								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '67' AND id_berita < $_GET[urut_1] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='islam_view'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '68' AND id_berita < $_GET[urut_2] ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='opini'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE  id_kategori = '69' AND id_berita < $_GET[urut_3] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-kategori='esai'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
	                			</ul>
	                		</div>
	                	</div>
					</div>
					</div>
<?php elseif($_GET['kategori']=='kajian'): ?>
				<div id="sidebar">
				<div class="col-md-12">
					<div class="col-md-3">
						<div class="row">
	                		<div class="single_blog_sidebar wow fadeInUp">
	                			<ul class="featured_nav">


								<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $_GET[urut] ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								$id_berita_col_1=$t['id_berita'];
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}

								echo "
								<li kode='$t[id_berita]' data-target='kajian'>

								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>

								<div class='featured_title'>
	                      		<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $id_berita_col_1 ORDER BY id_berita DESC limit 3 ");
								while($t=mysql_fetch_array($terkini)){
								$id_berita_col_2 = $t['id_berita'];
								if (strlen($t['judul']) > 56)
								{
									$hasil = substr($t['judul'], 0, 56)."&hellip;";
								} else {
									$hasil = $t['judul'];
								}
								echo "<li kode='$t[id_berita]' data-target='kajian'>
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
	                    		<div class='featured_title1'>

								<a class='judul_atas' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
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
	                		<div class="sembunyi_iklan" >
	                		<h4></h4>
	                		</br>
	                			<ul class="featured_nav2">
	                  			<?php
								$terkini=mysql_query("SELECT * FROM berita WHERE (id_kategori = '60' OR id_kategori = '61' OR id_kategori = '62' OR id_kategori = '63' OR id_kategori = '64' OR id_kategori = '65') AND id_berita < $id_berita_col_2 ORDER BY id_berita DESC limit 4 ");
								while($t=mysql_fetch_array($terkini)){
								if (strlen($t['judul']) > 75)
								{
									$hasil = substr($t['judul'], 0, 75)."&hellip;";
								}
								else
								{
									$hasil = $t['judul'];
								}
								echo "
								<li kode='$t[id_berita]' data-target='kajian'>
								<a class='featured_img' href='berita-$t[judul_seo].html'><img src='foto_berita/base.jpg'></a>
								<div class='featured_title'>
	                      		<a class='' href='berita-$t[judul_seo].html'>$hasil</a>
	                    		</div>
	                    		<p style='font-size:14px;float:right;color:#b1afaf;margin: 0 15px;position:absolute;bottom:0;right:0;'>".$t['tanggal']." | ".$t['jam']."</p>
								</li>
								";
								}
								?>
                </ul>
              </div>
            </div>
					</div>
					</div>
<?php else: ?>
<style>
  li p[data-opacity='true']{
  opacity:0;
  }
  li:hover p[data-opacity='true']{
  opacity: 1;
  }
</style>
<?php
$x=1;
$terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori AND b.id_berita < $_GET[urut] ORDER BY b.id_berita DESC LIMIT 50");
while($t=mysql_fetch_array($terkini)){
  $tgl = tgl_indo($t['tanggal']);
	$jam = trans_jam($t['jam']);
	if($x%10 == 0)
		echo '<li style="color:white;">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle"
							style="display:block"
							data-ad-format="fluid"
							data-ad-layout-key="-fl+5i+7o-fb+k"
							data-ad-client="ca-pub-4290882175389422"
							data-ad-slot="9217631936"></ins>
					<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</li>';
	elseif($x%25 == 0)
		echo "<li style='color:white;background:#1F2126;' data-berita='$t[id_berita]'>
		<div class='deskripsi-judul home reda' style='min-width:275px;width:275px;'>
			<h6><a href='berita-$t[judul_seo]' title='$t[judul]'>".substr($t['judul'], 0, 60)."&hellip;</a></h6>
			<p class='rubrik-tanggal'><a href='kategori-$t[id_kategori]-$t[kategori_seo]'>".strtoupper($t['nama_kategori'])."</a> | $t[hari], $tgl - $jam</p>
			<p style='color:#fff;margin-bottom:0;'>".substr(strip_tags($t['isi_berita']), 0, 180)."&nbsp;<a href='berita-$t[judul_seo]'><b style='color:yellow;'>&hellip;</b></a></p>
			<p data-opacity='true' style='margin-bottom:0;'>
				<a class='btn btn-social-icon' href='https://www.facebook.com/sharer.php?u=http://harianamanah.com/berita-$t[judul_seo]' target='_blank'><i class='fa fa-facebook fa-fw'></i></a>
				<a class='btn btn-social-icon' href='https://twitter.com/intent/tweet?url=http://harianamanah.com/berita-$t[judul_seo]&text=$t[judul]&via=harianamanah' target='_blank'><i class='fa fa-twitter fa-fw'></i></a>
				<a class='btn btn-social-icon' href='https://plus.google.com/share?url=http://harianamanah.com/berita-$t[judul_seo]' target='_blank' ><i class='fa fa-google-plus fa-fw'></i></a>
			</p>
		</div>
		<a href='berita-$t[judul_seo]'>
		<img class='lazy' src='foto_berita/base_n.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='width:230px;height:195px;object-fit:cover;vertical-align:top;'>
		</a>
	</li>";
	else
		echo "<li style='color:white;' data-berita='$t[id_berita]'>
		<a href='berita-$t[judul_seo].html'>
			<img class='lazy' src='foto_berita/base_n.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='width:140px;height:140px;object-fit:cover;vertical-align:top;'>
		</a>
		<div class='deskripsi-judul home'>
			<h6><a href='berita-$t[judul_seo].html' title='$t[judul]'>".substr($t['judul'], 0, 60)."&hellip;</a></h6>
			<p class='rubrik-tanggal'><a href='kategori-$t[id_kategori]-$t[kategori_seo].html'>".strtoupper($t['nama_kategori'])."</a> | $t[hari], $tgl - $jam</p>
			<p style='color:#fff;margin-bottom:0;'>".substr(strip_tags($t['isi_berita']), 0, 130)."&nbsp;<a href='berita-$t[judul_seo].html'><b style='color:yellow;'>&hellip;</b></a></p>
			<p data-opacity='true' style='margin:0 0 0 12px;'>
			<a class='btn btn-social-icon' href='https://www.facebook.com/sharer.php?u=http://harianamanah.com/berita-$t[judul_seo].html' target='_blank'><i class='fa fa-facebook fa-fw'></i></a>
			<a class='btn btn-social-icon' href='https://twitter.com/intent/tweet?url=http://harianamanah.com/berita-$t[judul_seo].html&text=$t[judul]&via=harianamanah' target='_blank'><i class='fa fa-twitter fa-fw'></i></a>
			<a class='btn btn-social-icon' href='https://plus.google.com/share?url=http://harianamanah.com/berita-$t[judul_seo].html' target='_blank' ><i class='fa fa-google-plus fa-fw'></i></a>
		</p>
		</div>
	</li>";
	$x++;
 } ?>
<?php endif; ?>