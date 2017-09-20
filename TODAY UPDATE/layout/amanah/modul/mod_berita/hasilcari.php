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
                <a href='berita-$r[judul_seo].html' title='$r[judul]'>".substr($r[judul], 0, 80)."&#8230;</a>
                <div class='publish-info cf'></div>
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