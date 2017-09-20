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
<?php
$terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori AND b.id_berita < $_GET[urut] ORDER BY b.id_berita DESC LIMIT 50");
while($t=mysql_fetch_array($terkini)){
  $tgl = tgl_indo($t['tanggal']);
  $jam = trans_jam($t['jam']);
  echo "<li style='color:white;' data-berita='$t[id_berita]'>
          <a href='berita-$t[judul_seo].html'><img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='width:140px;height:140px;object-fit:cover;vertical-align:top;'></a>
          <div class='deskripsi-judul home'>
            <h6><a href='berita-$t[judul_seo].html'>$t[judul]</a></h6>
            <p class='rubrik-tanggal'><a href='kategori-$t[id_kategori]-$t[kategori_seo].html'>".strtoupper($t['nama_kategori'])."</a> | $t[hari], $tgl - $jam</p>
            <p style='color:white;'>".substr(strip_tags($t['isi_berita']), 0, 160)."&nbsp;<a href='berita-$t[judul_seo].html'><b style='color:yellow;'>&hellip;</b></a></p>
          </div>
        </li>"; }?>
<?php endif; ?>