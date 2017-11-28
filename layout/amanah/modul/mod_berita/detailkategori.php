<?php
  $sq = mysql_query("SELECT * from kategori where id_kategori='$_GET[id]'");
  $n = mysql_fetch_array($sq);
?>
<div class="wraplist" style="margin-top:100px;">
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
          <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYFQehmFUC6/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Harian Amanah (@harian_amanah)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-08-22T04:09:53+00:00">Aug 21, 2017 at 9:09pm PDT</time></p></div></blockquote>
          <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
          
          <a class="twitter-timeline" data-lang="id" data-height="500" data-dnt="true" href="https://twitter.com/HarianAmanah?ref_src=twsrc%5Etfw">Tweets by HarianAmanah</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          <div style="margin-bottom:10px;"></div>
          <div class="fb-page" data-href="https://www.facebook.com/harianamanah/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/harianamanah/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/harianamanah/">Harian Amanah</a></blockquote></div>
        </div>
        <!-- right konten start -->
        <div class="left-konten trend"><!-- left konten start -->
            <div class="art-social-bar">
                <!-- <span class="fl art-count">
				<?php
				$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kategori='$_GET[id]'"));
				echo $jmldata." ARTIKEL";
				?>
				</span> -->
        </div>
			<?php
      $p      = new Paging_kategori;
      $batas  = 15;
      $posisi = $p->cariPosisi($batas);
      $sql   = "SELECT * FROM berita,users WHERE users.username=berita.username AND id_kategori='$_GET[id]' ORDER BY id_berita DESC LIMIT $posisi,$batas";
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
            <span class='img-circle trend-bullet'></span>
            <figure>
                <div class='left-trending-fix'><a href='berita-$r[judul_seo]'>
                  <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$r[gambar]' border='0' alt='$r[judul]' style='height:auto;'>
                </div>
            </figure>
            <div class='trend-left-info'>
              <a href='berita-$r[judul_seo]' style='margin-top:0;'>$r[judul]</a>
              <p style='margin-left:10px;margin-top:3px;'>$r[hari], $tgl - $jam</p>
              <div class='publish-info cf'>".substr(strip_tags($r['isi_berita']), 0, 160)."</div>
              </div>
          </div>
        </div>";
      }
    }
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kategori='$_GET[id]'"));
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