<?php 

include "../config/koneksi.php";
include "../config/fungsi_indotgl.php";
include "../config/class_paging.php";

?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- TITLE -->
	<title>amanahRamadan</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/new.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav id="menu" class="navbar">
			<div class="bgh">
				<img src="assets/bismillah.png" class="gsatu img-responsive">
				<!-- <img src="assets/camel.png" class="gdua img-responsive"> -->
			</div>
			<div class="container">		
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				    </button>
					<a class="navbar-brand" href="http://harianamanah.id">
						<div class="logo">
							<img src="assets/amanahram.png" class="img-responsive">
						</div>
					</a>
				</div>
				
				<div class="menu-header collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">		
						<li>
							<a href="../">
								<span>Home</span>
							</a>						
						</li>											
						<li>
							<a href="http://harianamanah.id/kategori-88-ramadhan.html">
								<span>Ragam</span>
							</a>						
						</li>
						<li>
							<a href="#">
								<span>Jadwal Imsyak</span>
							</a>						
						</li>
						<li>
							<a href="http://harianamanah.id/kategori-76-kuliner.html">
								<span>Kuliner</span>
							</a>						
						</li>									
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div class="container-fluid">
			<div class="row">
				<!-- SLIDE FOTO -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">

				    <?php

				    $sql = mysql_query("SELECT * FROM berita WHERE id_kategori ='88' ORDER BY id_berita DESC LIMIT 0, 1");
 					while($row=mysql_fetch_array($sql)){
				    echo"
				      <div class='item active'>  
				        <img src='../foto_berita/$row[gambar]' alt='' style='width:100%;'>
						<div class='item-detail'>
					      	<a href='#'>Ramadhan</a>
					        <a href='http://harianamanah.id/berita-$row[judul_seo].html'>
					        <h1>$row[judul]</h1>
					        </a>
						</div>
						
				      </div>";}
					?>

					<?php 
				    $sql = mysql_query("SELECT * FROM berita WHERE id_kategori ='88' ORDER BY id_berita DESC LIMIT 1, 2");
 					while($row=mysql_fetch_array($sql)){
				    echo"
				      <div class='item'>
				     
				        <img src='../foto_berita/$row[gambar]' alt='' style='width:100%;'>
						<div class='item-detail'>
					      	<a href='#'>Ramadhan</a>
					     <a href='http://harianamanah.id/berita-$row[judul_seo].html'>
					        <h1>$row[judul]</h1>
					     </a>
						</div>
					  
				      </div>";}
					?>


				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicons glyphicons-circle-arrow-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicons glyphicons-circle-arrow-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>

			</div>
		</div>

		<div class="container">
			<div class="row">
				<!-- MENU ATAS -->
				<div class="judul">
					<h4>RESEP HIDANGAN</h4>
					<h2><b>RAMADHAN</b></h2>
					<h4>HARI INI</h4>
				</div>

<?php
	

	$hasil = mysql_query("SELECT * FROM berita WHERE id_kategori ='76' ORDER BY id_berita DESC LIMIT 4");
 	while($r=mysql_fetch_array($hasil)){
			echo"
				<div class='col-md-3'>
				<a href='http://harianamanah.id/berita-$r[judul_seo]'>
					<div class='mn'>
						<a href='http://harianamanah.id/berita-$r[judul_seo].html'>
							<img src='../foto_berita/$r[gambar]' class='kul'>
							<p>$r[judul]</p>
						</a>
					</div>
				</a>
				</div>
				";
			}
?>			
				<!-- MENU BAWAH -->
				<div class="col-md-4">
					<div>
						<h3>Quote <b>Ramadhan</b></h3>
						<div class="qt">
							<img src="assets/empat.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="wim">
						<h3>Waktu <b>Imsyak</b></h3>
						<ul>
						    <li style="background: #e3bb88;">
								<p class="tim">04:26</p>
								<span style="font-size: 25px; color:white;">|</span>
						    	<b>IMSYAK</b>
						    </li>
						    <li style="background: #db9864;">
						    	<p class="tim">04:36</p>
						    	<span style="font-size: 25px; color:white;">|</span>
						    	<b>SUBUH</b>
						    </li>
						    <li style="background: #b1695a;">
						    	<p class="tim">11:53</p>
						    	<span style="font-size: 25px; color:white;">|</span>
						    	<b>DZUHUR</b>
						    </li>
						    <li style="background: #a25747;">
						    	<p class="tim">15:14</p>
						    	<span style="font-size: 25px; color:white;">|</span>
						    	<b>ASHAR</b>
						    </li>
						    <li style="background: #644749;">
						    	<p class="tim">17:47</p>
						    	<span style="font-size: 25px; color:white;">|</span>
						    	<b>MAGRIB</b>
						    </li>
						    <li style="background: #543b3d;">
						    	<p class="tim">19:00</p>
						    	<span style="font-size: 25px; color:white;">|</span>
						    	<b>ISYA</b>
						    </li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<h3>Berita <b style="">Ramadhan</b></h3>
					<?php

                    $p      = new Paging;
                    $batas  = 10;
                    $posisi = $p->cariPosisi($batas);

                    $kata = 'ramadhan';
                    $cari = mysql_query("SELECT * FROM berita where judul  LIKE '%$kata%'
    ORDER BY case
    when judul like '$kata' then 1
    when judul like '% $kata %' then 2
    when judul like '$kata %' then 3
    when judul like '% $kata' then 4
    else CONCAT(5,judul) end
    , id_berita DESC LIMIT $posisi,$batas") ;

 	while($r1=mysql_fetch_array($cari)){

 		$tanggal = tgl_indo($r1[tanggal]);
        $isi = cut($r1[isi_berita]);


 		echo"
					<div class='bt'>
						<a href='http://harianamanah.id/berita-$r1[judul_seo].html'.>
							<img src='../foto_berita/$r1[gambar]' alt=''>
							<div class='bt-teks'>
								<h4>$r1[judul]</h4>
								<p>$tanggal, $r1[jam] WITA</p>
								
								
							</div>
						</a>
					</div>
			";}

    $cari1 = mysql_query("SELECT * FROM berita where judul  LIKE '%$kata%'
    ORDER BY case
    when judul like '$kata' then 1
    when judul like '% $kata %' then 2
    when judul like '$kata %' then 3
    when judul like '% $kata' then 4
    else CONCAT(5,judul) end
    , id_berita DESC");

                    $jmldata     = mysql_num_rows($cari1);
                    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
                    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

                    echo "

  <div class='halaman'> $linkHalaman</div>
  ";
                    ?>
				

					
				</div>
			</div>
		</div>
	</section>
	<footer>
		
	</footer>

	<script>
		
	</script>
</body>
</html>