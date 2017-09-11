<?php
include '../config/koneksi.php';
include '../config/fungsi_indotgl.php';
include 'server.php';

if ($_GET['kategori']=='news')
{
		$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND berita.id_berita < ".$_GET['urut']." AND menu.id_parent = '8'  ORDER BY berita.id_berita DESC LIMIT 0, 8");
					while ($q = mysql_fetch_array($artikel))
					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}

						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='komunitas')

{

	$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '14' AND berita.id_berita < ".$_GET['urut']." ORDER BY berita.id_berita DESC LIMIT 0, 8");



					while ($q = mysql_fetch_array($artikel))

					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='lifestyle')

{

			$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '13' AND berita.id_berita < ".$_GET['urut']." ORDER BY berita.id_berita DESC LIMIT 0, 8");



					while ($q = mysql_fetch_array($artikel))

					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='kalam')

{

	$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '20' AND berita.id_berita < ".$_GET['urut']." ORDER BY berita.id_berita DESC LIMIT 0, 8");



					while ($q = mysql_fetch_array($artikel))

					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='kajian')

{

			$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '18' AND berita.id_berita < ".$_GET['urut']." ORDER BY berita.id_berita DESC LIMIT 0, 8");



					while ($q = mysql_fetch_array($artikel))

					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='sosok')

{

		$artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = '19' AND berita.id_berita < ".$_GET['urut']." ORDER BY berita.id_berita DESC LIMIT 0, 8");



					while ($q = mysql_fetch_array($artikel))

					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}elseif ($_GET['kategori']=='detail')
{
		$artikel = mysql_query("SELECT * FROM  berita WHERE id_kategori = ".$_GET['id']." AND id_berita < ".$_GET['urut']." ORDER BY id_berita DESC LIMIT 0, 8");
					while ($q = mysql_fetch_array($artikel))
					{
            $tgl = tgl_indo($q['tanggal']);
            $jam = trans_jam($q['jam']);
						if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
						echo "<article class= 'artikle' >

								<div class='list-picture'>

									<a href='berita-$q[judul_seo].html'>

									<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

									</a>

								</div>

								<div class='artikle-text' kode='$q[id_berita]'>


                <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
                <a href='#' class='link-kategori'>$q[nama_kategori]</a>

										<p class='waktu-berita' idk='$q[id_kategori]'> $q[hari], $tgl - $jam </p>

								</div>

								</article>

					";

					}

}
else{

	$artikel=mysql_query("SELECT * FROM berita, kategori WHERE kategori.id_kategori = berita.id_kategori AND berita.id_berita < ".$_GET['urut']." ORDER BY id_berita DESC LIMIT 0, 8");

	while($q=mysql_fetch_array($artikel))

	{
    $tgl = tgl_indo($q['tanggal']);
    $jam = trans_jam($q['jam']);
		if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
		echo "<article class= 'artikle' >

			<div class='list-picture'>

				<a href='berita-$q[judul_seo].html'>

					<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />

				</a>

			</div>

			<div class='artikle-text' data-target='update' kode='$q[id_berita]'>


      <a href='berita-$q[judul_seo].html' class='berita' title='$q[judul]'>$hasil</a>
      <a href='#' class='link-kategori'>$q[nama_kategori]</a>

					<p class='waktu-berita'> $q[hari], $tgl - $jam </p>

			</div>

		</article>

		";

	}

}

?>
<?php
$num_rows = mysql_num_rows($artikel);

if($num_rows !== 0){

?>
	<section class="daftar-artikel">
				<a href='downloadabu.html'  title="AbuTours.com">
		<article class= 'artikle' >
				<div class='list-picture'>
						<img class='picture' src='assets/abutours.png' />
				</div>
				<div class='artikle-text-1'>
						<p class='link-kategori'>Abutours.com</p>
						<div class="berita"  style="margin-bottom: 10px;">
							<p>Aplikasi Abutours menawarkan kemudahan bagi calon haji dalam melakukan pemesanan kursi</p>
						</div>
						<p class="tag-sponsored">Sponsored</p>
						<p class="instal">INSTALL</p>
				</div>
		</article>
		</section>

		<section class="daftar-artikel">
					<a href='https://play.google.com/store/apps/details?id=com.koran.harian.amanah'  title="Harian Amanah">
			<article class= 'artikle' >
					<div class='list-picture'>
							<img class='picture' src='assets/ic_launcher.png' />
					</div>
					<div class='artikle-text-1'>
							<p class='link-kategori'>Aplikasi Harian Amanah</p>
							<div class="berita"  style="margin-bottom: 10px;">
								<p>Download Aplikasi Harian Amanah</p>
							</div>
							<p class="tag-sponsored"></p>
							<p class="instal">INSTALL</p>
					</div>
			</article>
			</section>
<?php } ?>