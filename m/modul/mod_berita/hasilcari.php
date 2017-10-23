  <section class="container-fluid" style="padding:0;">
			<section class="daftar-artikel">
                <span class="fl art-count">
				<?php
  $kata = $_GET['query-search'];
  // $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

  $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita, judul DESC";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);

  echo "<b>".$ketemu." Artikel</b>";
				?>
				</span>
<?php
  if ($ketemu > 0){
  while($r=mysql_fetch_array($hasil)){
  $tgl = tgl_indo($r['tanggal']);
  $jam = trans_jam($r['jam']);
  echo"
                <article class= 'artikle' style='padding:0;'>
								<div class='list-picture'>
									<a href='berita-$r[judul_seo]'>
									<img class='picture' src='http://harianamanah.com/foto_small/$r[gambar1]' />
									</a>
								</div>
								<div class='artikle-text' kode='$r[id_berita]' style='padding-top:7px;'>
										<a href='#' class='link-kategori'>$r[nama_kategori]</a>
										<a href='berita-$r[judul_seo]' title='$r[judul]' class='berita'><p>".substr($r['judul'], 0, 60)."&nbsp;&hellip;</p></a>
										<p class='waktu-berita'> $r[hari], $tgl - $jam </p>
								</div>
				</article>
  ";
  }
  }?>
</section>
  </section>