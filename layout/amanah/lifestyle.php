<?php
  $terkini=mysql_query("SELECT * FROM menu WHERE id_menu='13'");
  $nama_menu = mysql_fetch_array($terkini);
?>
<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="index-page container" style="background-color:#ececec;">
<h1 style="color:#009688;border-bottom:1px solid #009688"><?php echo $nama_menu['nama_menu']?></h1>
    <div id="sidebar" style="padding:0;background:#ECECEC;">
      <div class="col-xs-12" style="padding:0;float:none;margin-bottom:25px">
        <div class='flex-container'>
        <?php
        $rubrik=mysql_query("SELECT * FROM berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori WHERE  m.id_parent = '13' ORDER BY id_berita DESC LIMIT 5");
        $i=0;
        while($row = mysql_fetch_array($rubrik)){
          $id_berita = $row['id_berita'];
          $tgl = tgl_indo($row['tanggal']);
          $jam = trans_jam($row['jam']);
          echo "<div class='item-flex grid-$i'>
          <span class='kategori-grid' style='background:rgba(0, 150, 136, 0.8)'><a style='color:#fff;' href='kategori-$row[id_kategori]-$row[kategori_seo]'>$row[nama_kategori]</a></span>
          <a href='berita-$row[judul_seo]' title='$row[judul]'><h2 class='grid-flex-foto'>$row[judul]</h2></a>
          <span class='info-uploader'>Oleh&nbsp;$row[username]&nbsp;|&nbsp;$row[hari], $tgl - $jam</span>
          <div class='black_layer'></div>
          <img src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'>
        </div>";
        $i++;
        }
      ?>
        </div>
				<!-- <div class="row">
					<div class="col-md-12">
						<h6 class="text-center">ADVERTISEMENT</h6>
					<?php
					$iklantengah=mysql_query("SELECT * FROM iklantengah  WHERE id_iklantengah ='1' ORDER BY id_iklantengah DESC LIMIT 1");
					while($b=mysql_fetch_array($iklantengah)){
					echo "<div class='iklan' width='100%'>
					<a href='$b[url]'' target='_blank' title='$b[judul]'>
					<img src='foto_iklantengah/$b[gambar]' alt='img'></a>
					</div>";}
					?>
					</div>
				</div></br> -->
      </div>
      <div class="col-xs-12" style="padding:0;float:none;">
      <div class="col-xs-3" style="padding-left:0;">
        <div style="padding:10px;background-color: #009688;background-image: -webkit-linear-gradient(85deg, #009688 0%, #1c7e76 100%);background-image: -moz-linear-gradient(85deg, #009688 0%, #1c7e76 100%);background-image: -o-linear-gradient(85deg, #009688 0%, #1c7e76 100%);background-image: linear-gradient(85deg, #009688 0%, #1c7e76 100%);">
          <ul>
          <h1 style="color:#fff;border-bottom:1px solid #fff;margin:0 0 15px 0;"><?php echo $nama_menu['nama_menu']?></h1>
          <?php
            $submenu = mysql_query("SELECT * FROM menu WHERE id_parent='13'");
            while($row = mysql_fetch_array($submenu)){
              echo "<li style='padding-bottom:10px;'><a style='color:#fff;' href='$row[link]'>$row[nama_menu]</a></li>";
            }
          ?>
          </ul>
        </div>
        <div id="fixed-right" class="single_blog_sidebar wow fadeInUp" style="background-color: #fff;height:auto;margin-top:10px;margin-bottom:3px;">
        </div>
            <!-- <blockquote class="twitter-tweet" data-lang="en"><p lang="und" dir="ltr"><a href="https://t.co/FUB6zzRiUG">https://t.co/FUB6zzRiUG</a> <a href="https://twitter.com/hashtag/harianamanah?src=hash">#harianamanah</a> <a href="https://twitter.com/hashtag/koranamanah?src=hash">#koranamanah</a> <a href="https://twitter.com/hashtag/abucorp?src=hash">#abucorp</a> <a href="https://twitter.com/hashtag/dailyquotes?src=hash">#dailyquotes</a> <a href="https://twitter.com/hashtag/quoteoftheday?src=hash">#quoteoftheday</a> <a href="https://twitter.com/hashtag/muslimquotes?src=hash">#muslimquotes</a> <a href="https://twitter.com/hashtag/muslim?src=hash">#muslim</a> <a href="https://twitter.com/hashtag/tausiyah?src=hash">#tausiyah</a> <a href="https://twitter.com/hashtag/teladanrasul?src=hash">#teladanrasul</a> <a href="https://t.co/NF6lNauPIZ">pic.twitter.com/NF6lNauPIZ</a></p>&mdash; Harian Amanah (@HarianAmanah) <a href="https://twitter.com/HarianAmanah/status/900991240035983360">August 25, 2017</a></blockquote> -->
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BYFQehmFUC6/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Harian Amanah (@harian_amanah)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-08-22T04:09:53+00:00">Aug 21, 2017 at 9:09pm PDT</time></p></div></blockquote>
            <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>

            <!-- <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fharianamanah%2Fposts%2F824693491022428%3A0&width=500" width="100%" height="385px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
      </div>
      <div class="col-xs-9 news-category" style="background:#fff;">
          <!-- <h1 style="color:#009688;border-bottom:1px solid #009688"><?php echo $nama_menu['nama_menu']?></h1> -->
          <?php
          $terkini=mysql_query("SELECT * FROM berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori WHERE  m.id_parent = '13' AND b.id_berita < $id_berita ORDER BY id_berita DESC LIMIT 33");
					while($t=mysql_fetch_array($terkini)){
            $tgl = tgl_indo_short($t['tanggal']);
            $jam = trans_jam($t['jam']);
            if (strlen($t['judul']) > 75)
            {
              $hasil = substr($t['judul'], 0, 75)."&hellip;";
            }
            else
            {
              $hasil = $t['judul'];
            }
            echo "
            <article>
              <div class='badges-cate'>
                <span style='background:#009688'><a style='color:#fff;' href='kategori-$t[id_kategori]-$t[kategori_seo]'>$t[nama_kategori]</a></span>
              </div>
                <a href='berita-$t[judul_seo]'>
                <img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]'>
                </a>
                <span style='font-size:10px;'>".$tgl." | ".$jam."</span>
                <a href='berita-$t[judul_seo]' class='captions'>$hasil</a>
            </article>"; }
          ?>
        </div>
        <!-- <div class="col-xs-3">
          <h1 style="color:#06375E;">Indeks&nbsp;<b>News</b></h1>
          <br>
          <div></div>
        </div> -->
      <div class="clearfix"></div>
      </div>
    </div>
		<div id="daftar-artikel"></div>
		<div id="more" style="display: none;">
			<center><img src="images/loading.gif" width="170px"></center>
		</div>
	</div>

<!-- <script>
		var loadMore = true;
	$(window).scroll(function(){
		var nearbottom = 100;

		if(($(window).scrollTop()+nearbottom >= $(document).height()-$(window).height()) && loadMore)
		{
			loadMore = false;
			$.ajax({
				url: 'more-web.php?kategori=lifestyle&urut_1='+$('li[data-kategori=muslim]:last').attr('kode')+'&urut_2='+$('li[data-kategori=bola]:last').attr('kode')+'&urut_3='+$('li[data-kategori=kuliner]:last').attr('kode'),
				beforeSend: function()
				{
					$('#more').show();
				},
				complete: function()
				{
					$('#more').hide();
				},
				success: function(result)
				{
					if(result)
					{
						$('#daftar-artikel').append(result);
					}
					loadMore = true;
				}
			});
		}
	});
			// $('#more-3').click(function(){
			// 	$(this).html('<center><img src="images/loading.gif" width="170px"></center>');
			// 	$.ajax({
			// 		url: 'more-web.php?kategori=lifestyle&urut_1='+$('li[data-kategori=muslim]:last').attr('kode')+'&urut_2='+$('li[data-kategori=bola]:last').attr('kode')+'&urut_3='+$('li[data-kategori=kuliner]:last').attr('kode'),
			// 		success: function(html)
			// 		{
			// 			if(html)
			// 			{
			// 				$('#all-news-2').append(html);
			// 				$('#more-3').html('<div class="more-green-toska">MUAT LAINNYA</div>');
			// 				// $('.iklan').html('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

			// 			}
			// 		}
			// 	})


			// });
</script> -->