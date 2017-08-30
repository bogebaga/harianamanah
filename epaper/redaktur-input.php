<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" type="text/css">
	<script src="bower_components/jquery/dist/jquery.js"></script>

	<title>Redaksi-Masukkan Gambar Epaper</title>
	<style>

		*
		{
			font-family: 'Roboto', sans-serif;
		}
		.gambar-epaper
		{
			display: block;
		}
		
		.gambar-epaper
		{
			width: 0.1px;
			height: 0.1px;	
			position: absolute;
			z-index: -1;
			opacity: 0;
			overflow: hidden;
		}
		
		.gambar-epaper + label 
		{
			border: 1px solid #14afb4;
			padding: 0;
			display: inline-block;
		}

		.gambar-epaper + label strong,
		.gambar-epaper + label span
		{
			padding: 10px 10px;
			background-color: white;
			font-size: 16pt;
			font-weight: 600;
		}

		.gambar-epaper + label span
		{
			min-width: 200px;
			display: inline-block;
			background-color: transparent;
			color: #14afb4;
		}
		.gambar-epaper + label strong
		{
			background-color: #14afb4;
			color: white;
			margin-left: -4px;
			display: inline-block;
		}

		.gambar-epaper + label:hover strong
		{
			background-color: #076063; 
		}
		.gambar-epaper + label:hover
		{
			cursor: pointer;
			border-color: #076063;
		}
	</style>
</head>
<body>
	<input id="epaper-1" class="gambar-epaper" type="file">
	<label for="epaper-1">
		<span data="e1"></span>
		<strong><i class="fa fa-upload" style="margin-right:10px;"></i>Choose a file...</strong>
	</label>
</body>
</html>