<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">	
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="epaper.css" type="text/css">
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<title>Harian Amanah | E-Media</title>
	
	<link rel="icon" href="amn.ico">
</head>
<body>
	<header>
		<div class="container">
			<div class="brand-bar">
				<img src="amanah.png" alt="amanah logo" class="logo">
				<div class="cap-epaper">E-MEDIA</div>	
			</div>
			<div class="social-bar">
				<a href="https://www.facebook.com/harianamanah" data-style="social-btn">
					<div class="fa fa-facebook-square"></div>
				</a>
				<a href="https://twitter.com/harianamanah" data-style="social-btn">
					<div class="fa fa-twitter-square"></div>
				</a>
			</div>
		</div>
	</header>
	<div class="news-cover"></div>
	<div class="fluid-container bg-epaper fill-content center" style="height:inherit;">
		<div class="container">
			<div class="col-xs-12"> 
				<div class="edisi-label">
					E-PAPER
				</div>
			</div>
			<div class="col-xs-12 center">
			<?php 
				$epaper_array = [
									// ["kota"=>"Jakarta", "link"=>"epaper-daerah/?kota=", "cover" => ""]
									["kota"=>"Makassar", "link"=>"amanah/?kota=", "cover" => ""]
									// ["kota"=>"Kendari", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Balikpapan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Palembang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Medan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Surabaya", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Semarang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Bandung", "link"=>"epaper-daerah/?kota=", "cover"=>""]
								] ;
				foreach ($epaper_array as $nilai) {
					echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-bottom:30px;\">
						<a href=\"$nilai[link]$nilai[kota]\"  data-style=\"select-epaper\">
							<img src=\"front-cover/epaper.jpg\" alt=\"cover-epaper\" class=\"img-responsive\"  style=\"margin-bottom:10px;\">
							<span class=\"date-font\">Harian Amanah</span>
						</a>
					</div>";
				}
			?>
			</div>
			
		</div>
	</div>
	<div class="fluid-container bg-islami fill-content center" style="height:inherit;">
		<div class="container">
			<div class="col-xs-12"> 
				<div class="edisi-label">
					E-TABLOID
				</div>
			</div>
			<div class="col-xs-12 center">
			<?php 
				$epaper_array = [
									// ["kota"=>"Jakarta", "link"=>"epaper-daerah/?kota=", "cover" => ""]
									["kota"=>"Makassar", "link"=>"islami", "cover" => "islami/cover/cover.png"]
									// ["kota"=>"Kendari", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Balikpapan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Palembang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Medan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Surabaya", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Semarang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Bandung", "link"=>"epaper-daerah/?kota=", "cover"=>""]
								] ;
				foreach ($epaper_array as $nilai) {
					echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-bottom:30px;\">
						<a href=\"$nilai[link]\"  data-style=\"select-epaper\">
							<img src=\"$nilai[cover]\" alt=\"cover-islami\" class=\"img-responsive\"  style=\"margin-bottom:10px;\">
							<span class=\"date-font\">Tabloid Islami</span>
						</a>
					</div>";
				}
			?>
			</div>
		</div>
	</div>
		<div class="fluid-container bg-alharam fill-content center" style="height:inherit;">
		<div class="container">
			<div class="col-xs-12"> 
				<div class="edisi-label">
					E-MAGAZINE
				</div>
			</div>
			<div class="col-xs-12 center">
			<?php 
				$epaper_array = [
									// ["kota"=>"Jakarta", "link"=>"epaper-daerah/?kota=", "cover" => ""]
									["kota"=>"Makassar", "link"=>"alharam/", "cover" => "alharam/cover/cover.png"]
									// ["kota"=>"Kendari", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Balikpapan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Palembang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Medan", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Surabaya", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Semarang", "link"=>"epaper-daerah/?kota=", "cover"=>""],
									// ["kota"=>"Bandung", "link"=>"epaper-daerah/?kota=", "cover"=>""]
								] ;
				foreach ($epaper_array as $nilai) {
					echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\" style=\"margin-bottom:30px;\">
						<a href=\"$nilai[link]\"  data-style=\"select-epaper\">
							<img src=\"$nilai[cover]\" alt=\"cover-alharam\" class=\"img-responsive\"  style=\"margin-bottom:10px;\">
							<span class=\"date-font\">Majalah Info Alharam</span>
						</a>
					</div>";
				}
			?>
			</div>
		</div>
	</div>
</body>
</html>