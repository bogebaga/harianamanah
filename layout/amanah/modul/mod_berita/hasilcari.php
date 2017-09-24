<div class="wraplist">
  <div id="listberita">
    <section class="container cf" style="margin-bottom:0px;padding:0;"><!--konten start-->
      <!-- right konten start -->
      <div class="left-konten trend"><!-- left konten start -->
        <div class="art-social-bar">
        <span class="fl art-count">
        <?php
        $kata = $_GET['query-search'];
        // $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);

        $cari = "SELECT * FROM berita b JOIN menu m ON b.id_kategori = m.id_menu where judul LIKE '%$kata%'
          ORDER BY case
          when judul like '$kata' then 1
          when judul like '% $kata %' then 2
          when judul like '$kata %' then 3
          when judul like '% $kata' then 4
          else CONCAT(5,judul) end
          , id_berita DESC LIMIT 50" ;
        $hasil  = mysql_query($cari);
        $ketemu = mysql_num_rows($hasil);

        echo $ketemu." ARTICLES";
        echo "</span></div>";

        if ($ketemu > 0){
          while($r=mysql_fetch_array($hasil)){
          $tgl = tgl_indo($r['tanggal']);

          echo "
          <div class='trend-left-inner'>
            <div class='trend-left-list cf'>
              <span class='img-circle trend-bullet'></span>
              <figure>
                <div class='left-trending-fix'><a href='berita-$r[judul_seo].html' title='$r[judul]'>
                  <img src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]'></a>
                </div>
              </figure>
              <div class='trend-left-info'>
                <a href='berita-$r[judul_seo].html' title='$r[judul]' style='margin-top:0;'>$r[judul]</a>
                <div class='publish-info cf'>".substr(strip_tags($r['isi_berita']), 0, 160)." - <a style='display:inline-block;margin:0;color:#19A2AC;line-height:1;' href='$r[link]'>$r[nama_menu]</a></div>
              </div>
            </div>
          </div>";}
      } ?>
      </div>
      </section><!--konten end-->
      <div class="clr"></div>
    <section class="big-ads" id="remove-fixed23"></section>
  </div>
</div>