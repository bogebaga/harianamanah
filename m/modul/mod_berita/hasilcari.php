  <section class="container-fluid">
			<section class="daftar-artikel">
                <span class="fl art-count">
				<?php
  $kata = $_GET['query-search'];
  // $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

  $cari = "SELECT * FROM berita where judul LIKE '%$kata%'
    ORDER BY case
    when judul like '$kata' then 1
    when judul like '% $kata %' then 2
    when judul like '$kata %' then 3
    when judul like '% $kata' then 4
    else CONCAT(5,judul) end
    , id_berita DESC LIMIT 50" ;

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

  }



 ?>


</section>
  </section>

