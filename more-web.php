<?php
include 'config/koneksi.php';
include 'config/fungsi_indotgl.php';
error_reporting(0);

$x=1;
$terkini=mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori AND b.id_berita < '$_GET[urut]' ORDER BY b.id_berita DESC LIMIT 40");
while($t=mysql_fetch_array($terkini)){
  $tgl = tgl_indo($t['tanggal']);
	$jam = trans_jam($t['jam']);
	if($x%11 == 0):
		$inilah = mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE username = 'alifahmi' AND id_berita < '$_GET[urut_foto]' ORDER BY b.id_berita DESC LIMIT 1");
		while($foto=mysql_fetch_array($inilah)):
		echo "<li style='color:white;background:#252831' data-berita='$foto[id_berita]'>
						<div class='deskripsi-judul home reda'>
							<h6 ><a style='color:#fff;font-size:30px;' href='foto-$foto[judul_seo]' title='$foto[judul]'>$foto[judul]</a></h6>
							<p class='rubrik-tanggal'><a href='kategori-$foto[id_kategori]-$foto[kategori_seo]'>".strtoupper($foto['nama_kategori'])."</a>&nbsp;$foto[hari], $tgl - $jam</p>
						</div>
						<a href='foto-$foto[judul_seo]'>
							<img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$foto[gambar]' alt='$foto[judul]' style='object-fit:cover;width:100%;height:400px;'>
						</a>
					</li>";
					$_GET['urut_foto'] = $foto['id_berita'];
		endwhile;
	else:
		echo "<li style='color:white;' data-berita='$t[id_berita]'>
		<a href='berita-$t[judul_seo].html'>
			<img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]' style='width:230px;height:140px;object-fit:cover;vertical-align:top;'>
		</a>
		<div class='deskripsi-judul home'>
			<p style='margin-left:7px;' class='rubrik-tanggal'><a href='kategori-$t[id_kategori]-$t[kategori_seo].html'>".strtoupper($t['nama_kategori'])."</a>&nbsp;$t[hari], $tgl - $jam</p>
			<h6><a href='berita-$t[judul_seo].html' title='$t[judul]'>$t[judul]</a></h6>
		</div>
	</li>";
	endif; 
	$x++;
 }
?>