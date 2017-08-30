<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="epaper.css" type="text/css">
	<script src="bower_components/jquery/dist/jquery.js"></script>

	<title>Epaper Harian Amanah</title>
	<link rel="icon" href="amn.ico">
</head>
<body>
	<div class="menu-down">
		<img src="amanah.png" alt="amanah logo" class="logo">
		<div class="caption-epaper">EPAPER</div>
	<?php if ($_GET['hal'] > 0 && $_GET['hal'] <= 24): ?>
		<select name="halaman_harian_amanah" class="pilih-halaman" onchange="pilih_halaman(this);">
			<?php for ($i=0; $i <= 23 ; $i++){?>
				<option <?php if ($_GET['hal'] == $i+1){echo "Selected";}?> value="?hal=<?php echo $i+1;?>">Halaman ke - <?php echo $i+1;?></option>
			<?php }?>
		</select>
 		<span class="edisi">
 			<?php echo date('l, d-F-Y'); ?>
 		</span>
	</div>
		<div class="container-gambar" align="center">
			<img id="epaper-gambar" src="e-paper/epaper-<?php echo $_GET['hal'];?>.jpg" width="1000" alt="epaper image">
		</div>
		<?php if ($_GET['hal']==1): ?>
			<div onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']+1; ?>'" class="navigasi right">
				<span class="right-pad fa fa-chevron-right"></span>
			</div>		
			<div style="display:none;" onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']-1; ?>'" class="navigasi left">
				<span class="left-pad pad fa fa-chevron-left"></span>
			</div>			
		<?php elseif ($_GET['hal']==24): ?>
			<div style="display:none;" onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']+1; ?>'" class="navigasi right">
				<span class="right-pad fa fa-chevron-right"></span>
			</div>		
			<div onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']-1; ?>'" class="navigasi left">
				<span class="left-pad pad fa fa-chevron-left"></span>
			</div>			
		<?php else: ?>
			<div onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']+1; ?>'" class="navigasi right">
				<span class="right-pad fa fa-chevron-right"></span>
			</div>		
			<div onClick="self.location='epaper.php?hal=<?php echo $_GET['hal']-1; ?>'" class="navigasi left">
				<span class="left-pad pad fa fa-chevron-left"></span>
			</div>			
		<?php endif ?>
	<?php else: ?>	
		<?php header('Location: epaper.php?hal=1'); ?>
	<?php endif ?>

	<div class="content-manify">
		<!-- <div id="reset" class="manify plus">
			<span class="man fa fa-search-plus"></span>
		</div> -->

		<div id="plus" class="manify plus">
			<span class="man fa fa-search-plus"></span>
		</div>

		<div id="minus" class="manify min" style="margin-top:4px;">
			<span class="man fa fa-search-minus"></span>
		</div>
	</div>
<!-- <script>
	$(window).load(function(){
		$("body").removeClass('preload');
	});
</script> -->
<script>
	$(window).scroll(function(){
		if($(this).scrollTop() > 100)
		{
			$('.menu-down').fadeOut();
		}
		else
		{
			$('.menu-down').fadeIn();
		}
	});

	var img_width = $('#epaper-gambar').width();
	/*
		$('#reset').click(function() {
			$('#epaper-gambar').width(1000);
		});
	*/

	$('#plus').click(function(){
		img_width = img_width + 50;
		$('#epaper-gambar').width(img_width);
	});

	$('#minus').click(function(){
		img_width = img_width - 50;
		$('#epaper-gambar').width(img_width);
	});

	function pilih_halaman(hal)
	{
		window.location = hal.value; 
	}
</script>
</body>
</html>
