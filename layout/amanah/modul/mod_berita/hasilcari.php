<div class="wraplist">
  <div id="listberita">
    <section class="container cf" style="margin-bottom:0px;padding:0;"><!--konten start-->
      <!-- right konten start -->
      <div class="left-konten trend"><!-- left konten start -->
        <div class="art-social-bar">
        <span class="fl art-count">
        <?php
        $kata = $_GET['query-search'];

        echo "<div style='font-size:17px;font-weight:100;line-height:1.5;'>Hasil Pencarian <b>\"$kata\"</b></div>";
        echo "</span></div>";
        
        // call pagination
        $hasilcari_page = new Paging_hasilcari;
        $batas = 15;
        $cariposisi = $hasilcari_page->cariPosisi($batas);
        // end

        $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%' OR isi_berita LIKE '%$kata%' ORDER BY id_berita DESC LIMIT $cariposisi, $batas";
        $hasil_cari  = mysql_query($cari);
        $ketemu = mysql_num_rows($hasil_cari);

        if ($ketemu > 0){
          while($r=mysql_fetch_array($hasil_cari)){
          $tgl = tgl_indo($r['tanggal']);
          echo "
          <div class='trend-left-inner'>
            <div class='trend-left-list cf'>
              <figure>
                <div class='left-trending-fix'>
                <a href='berita-$r[judul_seo]' title='$r[judul]'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]'>
                </a>
                </div>
              </figure>
              <div class='trend-left-info'>
                <a href='berita-$r[judul_seo]' title='$r[judul]' style='margin-top:0;font-size:25px;font-weight:300;'>$r[judul]</a>
              </div>
            </div>
          </div>";}
      } 
      $jumlah_halaman = $hasilcari_page -> jumlahHalaman($data_artikel, $batas);
      $link_halaman = $hasilcari_page -> navHalaman($_GET['halaman'], $jumlah_halaman); ?>
      <div class="clearfix"></div>
      <div class="halaman">
        <?php echo $link_halaman;?>
      </div>
      </div>
      <div style="float:left;width:25%;">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Banner Side -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:300px;height:1050px"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="9517721043"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
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