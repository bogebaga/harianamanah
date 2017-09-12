  <section class="container-fluid">
			<section class="daftar-artikel">
                <span class="fl art-count">
				<?php
  $kata = trim($_POST['kata']);
  $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);
  $pisah_kata = explode(" ",$kata);
  $jml_katakan = (integer)count($pisah_kata);
  $jml_kata = $jml_katakan-1;

  $cari = "SELECT * FROM berita where judul LIKE '%$kata%'
    ORDER BY case
    when judul like '$kata' then 1
    when judul like '% $kata %' then 2
    when judul like '$kata %' then 3
    when judul like '% $kata' then 4
    else CONCAT(5,judul) end
    , id_berita DESC LIMIT 20" ;

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
                <article class= 'artikle' >
								<div class='list-picture'>
									<a href='berita-$r[judul_seo].html'>
									<img class='picture' src='http://harianamanah.com/foto_small/$r[gambar1]' />
									</a>
								</div>
								<div class='artikle-text' kode='$r[id_berita]'>
										<a href='#' class='link-kategori'>$q[nama_kategori]</a>
										<a href='berita-$r[judul_seo].html' class='berita'><p>$r[judul]</p></a>
										<p class='waktu-berita'> $r[hari], $tgl - $jam </p>
								</div>
				</article>




  ";
  }

  }



 ?>


</section>
  </section>

