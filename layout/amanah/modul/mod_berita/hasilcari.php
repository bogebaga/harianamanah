<div class="wraplist">
  <div id="listberita">
    <section class="container cf" style="margin-bottom:0px;padding:0;"><!--konten start-->
      <!-- right konten start -->
      <div class="left-konten trend"><!-- left konten start -->
        <div class="art-social-bar">
        <span class="fl art-count">
        <?php
        $kata = $_GET['query-search'];

        $hasilcari_page = new Paging_hasilcari;
        $batas = 15;
        $cariposisi = $hasilcari_page->cariPosisi($batas);

        $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita, judul DESC";
        $hasil  = mysql_query($cari);
        $ketemu = mysql_num_rows($hasil);

        echo $ketemu." ARTICLES";
        echo "</span></div>";

        $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita, judul DESC LIMIT $cariposisi, $batas";
        $hasil  = mysql_query($cari);
        $ketemu = mysql_num_rows($hasil);

        if ($ketemu > 0){
          while($r=mysql_fetch_array($hasil)){
          $tgl = tgl_indo($r['tanggal']);
          echo "
          <div class='trend-left-inner'>
            <div class='trend-left-list cf'>
              <span class='img-circle trend-bullet'></span>
              <figure>
                <div class='left-trending-fix'><a href='berita-$r[judul_seo]' title='$r[judul]'>
                  <img class='lazy' data-src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]'></a>
                </div>
              </figure>
              <div class='trend-left-info'>
                <a href='berita-$r[judul_seo]' title='$r[judul]' style='margin-top:0;'>$r[judul]</a>
                <div class='publish-info cf'>".substr(strip_tags($r['isi_berita']), 0, 160)." - <a style='display:inline-block;margin:0;color:#19A2AC;line-height:1;' href='$r[link]'>$r[nama_menu]</a></div>
              </div>
            </div>
          </div>";}
      } 
      
      $jumlahdata = mysql_num_rows(mysql_query("SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita, judul DESC"));
      $jumlah_halaman = $hasilcari_page -> jumlahHalaman($jumlahdata,$batas);
      $link_halaman = $hasilcari_page -> navHalaman($_GET['halaman'], $jumlah_halaman); ?>
      <div class="clearfix"></div>
      <div class="halaman">
        <?php echo $link_halaman;?>
      </div>
      </div>
      </section><!--konten end-->
      <div class="clr"></div>
    <section class="big-ads" id="remove-fixed23"></section>
  </div>
</div>