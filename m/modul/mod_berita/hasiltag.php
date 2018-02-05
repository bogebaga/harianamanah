  <section class="container-fluid" style="padding:0;background:#fff;">
			<section class="daftar-artikel">
        <span class="fl art-count">
				<?php
          $kata = $_GET['tag'];
          // $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);
          echo "<h3 style='font-weight:bold;line-height:1;margin-bottom:0;text-transform:uppercase;'>TAG: ".str_replace('-', ' ', $kata)."</h3><br>";
          
          $hasilcari_page = new Paging_hasilcari_mobtag;
          $batas = 15;
          $cariposisi = $hasilcari_page->cariPosisi($batas);

          $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita DESC LIMIT $cariposisi, $batas";
          $hasil  = mysql_query($cari);
        ?>
        </span>
<?php
  while($r=mysql_fetch_array($hasil)){
  $tgl = tgl_indo($r['tanggal']);
  $jam = trans_jam($r['jam']);
  echo"<article class= 'artikle' style='padding:0;'>
								<div class='list-picture'>
									<a href='berita-$r[judul_seo]'>
									<img class='picture lazy' src='".SITE_URL."assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$r[gambar]' alt='$r[judul]'>
									</a>
								</div>
								<div class='artikle-text' kode='$r[id_berita]' style='padding-top:7px;'>
										<a class='link-kategori'>$r[nama_kategori]</a>
										<a href='".SITE_URL."berita-$r[judul_seo]' title='$r[judul]' class='berita'><p>".substr($r['judul'], 0, 60)."&nbsp;&hellip;</p></a>
										<p class='waktu-berita'> $r[hari], $tgl - $jam </p>
								</div>
				</article>
  ";}

  $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita DESC";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);

  $jumlah_halaman = $hasilcari_page -> jumlahHalaman($ketemu, $batas);
  $link_halaman = $hasilcari_page -> navHalaman($_GET['halaman'], $jumlah_halaman);
  ?>
  <div style="text-align:center;width:100%;">
    <ul class="pagination">
      <?php echo $link_halaman;?>
    </ul>
  </div>
  </section>
</section>
<section style="text-align:center;">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Mobile Banner -->
  <ins class="adsbygoogle"
      style="display:inline-block;width:320px;height:50px"
      data-ad-client="ca-pub-4290882175389422"
      data-ad-slot="6679890438"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</section>