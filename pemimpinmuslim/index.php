<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- TITLE -->
	<meta name="title" content="Bersatu Memilih Pemimpin Muslim">
	<meta name="descriptions" content="Mari Bersatu Pilih Pemimpin Muslim dengan Mengubah Foto Profil Anda dengan Aplikasi Harian Amanah">
	<meta name="image" content="http://harianamanah.id/pemimpinmuslim/asset/gambar.jpg">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body>
<?php include_once("http://harianamanah.id/layout/amanah/analyticstracking.php") ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-69395813-2', 'auto');
    ga('send', 'pageview');

</script>
	<div class="header">
		<h4>Muslim Bersatu Pilih Pemimpin Muslim</h4>
		<h1>ANIES - SANDI UNTUK DKI 1</h1>
	</div>

	<div class="gambar">
		<img src="asset/gambar.jpg">
	</div>

	<div class="form-gambar">
		<div class="kotak-1">
			<p>Pilih Foto Anda</p>
			<img class="bulat-1" src="asset/bulat.png">
		</div>
		<div class="kotak-1">
			<p>Mohon Bersabar</p>
			<img class="bulat-2" src="asset/bulat2.png">
		</div>
		<div class="kotak-1">
			<p>Selesai</p>
			<img class="bulat-3" src="asset/bulat3.png">
		</div>
	</div>

	<div class="form-tombol">
		<div class="kotak-2">
			<button type="file" for="uploadgambar" id="btn-gambar">
				<i class="fa fa-upload" aria-hidden="true"></i>Pilih File
			</button>
			<form action="" id="upload-form" method="post" enctype="multipart/form-data">
			<input type="file" id="uploadgambar" style="display:none;" name="image_file" onchange="form.submit()" />
			</form>
		</div>
		<div class="kotak-2">
			<button id="btn-proses" onclick="muncul()">
				<i aria-hidden="true"></i>Klik Untuk Proses
			</button>
			<div class="gambarbaru">
				<img src="#" id="holder" style="display:none;">
			</div>
		</div>
		<div class="kotak-2">
			<button type="button" id="btn-download" onclick="document.getElementById('download').click()">
				<i class="fa fa-download" aria-hidden="true"></i>Download
				<a id="download" style="display:none" href="#" download="#">Download</a>
			</button>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$('#btn-gambar').click(function(){
		$('input[type=file]').click();
			    	return false;
	});

</script>

<?php

if(isset($_FILES['image_file']))
{
	$max_size = 800; //max image size in Pixels
	//$destination_folder = 'D:/Websites/watermark/images';
	$destination_folder = 'C:/xampp/htdocs/watermark/';
	$watermark_png_file = 'anies_sandi.png'; //watermark png file
	
	$image_name = $_FILES['image_file']['name']; //file name
	$image_size = $_FILES['image_file']['size']; //file size
	$image_temp = $_FILES['image_file']['tmp_name']; //file temp
	$image_type = $_FILES['image_file']['type']; //file type

	switch(strtolower($image_type)){ //determine uploaded image type 
			//Create new image from file
			case 'image/png': 
				$image_resource =  imagecreatefrompng($image_temp);
				break;
			case 'image/gif':
				$image_resource =  imagecreatefromgif($image_temp);
				break;          
			case 'image/jpeg': case 'image/pjpeg':
				$image_resource = imagecreatefromjpeg($image_temp);
				break;
			default:
				$image_resource = false;
		}
	
	if($image_resource){
		//Copy and resize part of an image with resampling
		list($img_width, $img_height) = getimagesize($image_temp);
		
	    //Construct a proportional size of new image
		$image_scale        = min($max_size / $img_width, $max_size / $img_height); 
		$new_image_width    = ceil($image_scale * $img_width);
		$new_image_height   = ceil($image_scale * $img_height);
		$new_canvas         = imagecreatetruecolor($new_image_width , $new_image_height);

		if(imagecopyresampled($new_canvas, $image_resource , 0, 0, 0, 0, $new_image_width, $new_image_height, $img_width, $img_height))
		{
			
			if(!is_dir($destination_folder)){ 
				mkdir($destination_folder);//create dir if it doesn't exist
			}
			
			//center watermark
			// $watermark_left = ($new_image_width/2)-(300/2); //watermark left
			// $watermark_bottom = ($new_image_height)-(100); //watermark bottom
			$watermark_left = ($new_image_width-300);
			$watermark_bottom = ($new_image_height) - (310);

			$watermark = imagecreatefrompng($watermark_png_file);//watermark image
			imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 0, 0, 300, 310); //merge image
			// imagecopy(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h)
			// imagecopy($new_canvas, $watermark, $watermark_left, $watermark_bottom, 200, 200, 300, 310);

			$filename = 'Hasil/'.$image_name;
			// $filename = 'D:/Coba/cpba.jpg';
			imagejpeg($new_canvas, $filename);
			imagedestroy($new_canvas); 
			imagedestroy($image_resource);
			echo "
				<script type='text/javascript'>
				
				function muncul() {
				    // var reader = new FileReader();

				    // reader.onload = function (e) {
				        // get loaded data and render thumbnail.
				        var image = document.getElementById('holder');
				        image.src = '$filename';
				        image.style.display = 'inline-flex';
				        document.getElementById('download').download = '$filename';
				        document.getElementById('download').href = '$filename';
				        document.getElementById('btn-proses').style.display = 'none';
				    };
				
//				document.getElementById('uploadgambar').onchange = function () {
//				    var reader = new FileReader();
//
//				    reader.onload = function (e) {
//				        // get loaded data and render thumbnail.
//				        var image = document.getElementById('holder');
//				        image.src = '$filename';
//				        image.style.display = 'inline-flex';
//				        document.getElementById('download').download = '$filename';
//				        document.getElementById('download').href = '$filename';
//				    };
//
//				    // read the image file as a data URL.
//				    reader.readAsDataURL(this.files[0]);
//				};

			</script>
			";
			
			die();
		}
	}
}
