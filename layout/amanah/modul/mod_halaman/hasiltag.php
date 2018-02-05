<div class="wraplist">
  <div id="listberita">
    <section class="container cf" style="margin-bottom:0px;padding:0;"><!--konten start-->
      <!-- right konten start -->
      <div class="left-konten trend"><!-- left konten start -->
        <div class="art-social-bar">
        <span class="fl art-count">
        <?php
        $kata = $_GET['tag'];

        echo "<h1 style='margin-bottom:0;font-weight:bolder;text-transform:uppercase;'>TAG: ".str_replace('-', ' ', $kata)."</h1>";
        echo "</span></div>";
        
        // call pagination
        $hasilcari_page = new Paging_hasiltag;
        $batas = 15;
        $cariposisi = $hasilcari_page->cariPosisi($batas);
        // end

        $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' ORDER BY id_berita DESC LIMIT $cariposisi, $batas";
        $hasil_cari  = mysql_query($cari);
        $ketemu = mysql_num_rows($hasil_cari);

        if ($ketemu > 0){
          while($r=mysql_fetch_array($hasil_cari)){
          $tgl = tgl_indo($r['tanggal']);
          echo "
          <div class='trend-left-inner'>
            <div class='trend-left-list cf'>
              <span class='img-circle trend-bullet'></span>
              <figure>
                <div class='left-trending-fix'>
                <a href='berita-$r[judul_seo]' title='$r[judul]'>
                  <img class='lazy' src='".SITE_URL."foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]'>
                </a>
                </div>
              </figure>
              <div class='trend-left-info'>
                <a href='".SITE_URL."berita-$r[judul_seo]' title='$r[judul]' style='margin-top:0;'>$r[judul]</a>
                <div class='publish-info cf'>".substr(strip_tags($r['isi_berita']), 0, 160)." - <a style='display:inline-block;margin:0;color:#19A2AC;line-height:1;' href='$r[link]'>$r[nama_menu]</a></div>
              </div>
            </div>
          </div>";}
      } 

      $data_kata = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%'";
      $hasil  = mysql_query($data_kata);
      $data_artikel = mysql_num_rows($hasil);

      $jumlah_halaman = $hasilcari_page -> jumlahHalaman($data_artikel, $batas);
      $link_halaman = $hasilcari_page -> navHalaman($_GET['halaman'], $jumlah_halaman); ?>
      <div class="clearfix"></div>
      <div class="halaman">
        <?php echo $link_halaman;?>
      </div>
      </div>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Banner Side -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:300px;height:1050px"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="9517721043"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section><!--konten end-->
      <div class="clr"></div>
      <section class="big-ads" id="remove-fixed23">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Banner Bottom -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:728px;height:90px"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="4948221961"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </section>
  </div>
</div>