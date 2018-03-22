<?php
  $sq = mysql_query("SELECT * from kategori where id_kategori='$_GET[id]'");
  $n = mysql_fetch_array($sq);
?>
<div class="wraplist">
<div id="listberita">
    <section class="container cf" style="margin-bottom:0px;padding:0;margin-top:0;"><!--konten start-->
        <div class="right-konten" style="border: 0px solid red;"><!-- right konten start -->
            <div class="penulis"><!-- penulis start -->
              <!-- <div class="mt20 small-logo"><img src="logo/assets/pp_ff.png" width="120px" height="auto" alt="logo bulat harianamanah.com"></div> -->
								<?php
								echo"<h2 style=\"text-transform:uppercase;font-weight:bold !important;\">$n[nama_kategori]</h2>";
								?>
				<div class="ket">
					<p>Portal Harian Amanah hadir dengan wajah baru, sejak 25 Juli 2016. Meskipun sebelumnya portal berita sudah ada. Namun dengan wajah dan tampilan baru ini, dirasakan lebih kompetitif dengan media sejenis lainnya. Portal Berita Amanah menjadi media yang mendampingi Harian Amanah.</p>
				</div>
        </div>

        <div id="fixed-right" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-top:10px;margin-bottom:3px;"></div>
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
        <!-- right konten start -->
        <div class="left-konten trend" style="float:right;margin:0;"><!-- left konten start -->
          <div class="art-social-bar">
          </div>
			<?php
      $p      = new Paging_kategori;
      $batas  = 15;
      $posisi = $p->cariPosisi($batas);
      $sql   = "SELECT * FROM berita,users WHERE users.id=berita.username AND id_kategori='$_GET[id]' ORDER BY id_berita DESC LIMIT $posisi,$batas";
      $hasil = mysql_query($sql);
      $jumlah = mysql_num_rows($hasil);
      if ($jumlah > 0){
      while($r=mysql_fetch_array($hasil))
      {
        $tgl = tgl_indo($r['tanggal']);
        $jam = trans_jam($r['jam']);
        echo"
        <div class='trend-left-inner'>
          <div class='trend-left-list cf'>
            <figure>
                <div class='left-trending-fix'><a href='berita-$r[judul_seo]'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]'>
                </div>
            </figure>
            <div class='trend-left-info'>
              <a href='berita-$r[judul_seo]' style='font-size:25px;font-weight:300;margin-top:0;'>$r[judul]</a>
              </div>
          </div>
        </div>";
      }
    }
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET['halkategori'], $jmlhalaman);?>
      <div class="clearfix"></div>
      <div class="halaman"> <?php echo $linkHalaman?></div>
     </div>
    </section><!--konten end-->
    <div class="clr"></div>
    <section class="big-ads" id="remove-fixed23"></section>
</div>
</div>