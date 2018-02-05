<?php
  $terkini=mysql_query("SELECT * FROM menu WHERE link = '$_GET[menu]'");
  $nama_menu = mysql_fetch_array($terkini);
?>
<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container" style="background-color:#ececec;">
  <!-- <h1 style="color:<?php echo $nama_menu['color']?>;border-bottom:1px solid <?php echo $nama_menu['color']?>"><?php echo $nama_menu['nama_menu']?></h1> -->
    <div id="sidebar" style="padding:0;background:#ECECEC;">
      <div class="col-xs-12" style="padding:0;float:none;margin-bottom:25px;margin-top:25px">
        <div class='flex-container'>
        <?php
        $rubrik=mysql_query("SELECT u.username, judul, judul_seo, id_berita, tanggal, jam, kategori_seo, k.id_kategori, nama_kategori, hari, gambar FROM users u JOIN (berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori) ON b.username = u.ID WHERE m.id_parent = '$nama_menu[id_menu]' ORDER BY id_berita DESC LIMIT 5");
        $i=0;
        while($row = mysql_fetch_array($rubrik)){
          $tgl = tgl_indo_short($row['tanggal']);
          $jam = trans_jam($row['jam']);
          $id_berita = $row['id_berita'];
          echo "<div class='item-flex grid-$i'>
          <span class='kategori-grid' style='background:$nama_menu[background]'><a style='color:#fff;' href='".SITE_URL."kategori-$row[id_kategori]-$row[kategori_seo]'>$row[nama_kategori]</a></span>
          <a href='".SITE_URL."berita-$row[judul_seo]' title='$row[judul]'><h2 class='grid-flex-foto'>$row[judul]</h2></a>
          <span class='info-uploader' style='margin-left:5px;'>Oleh&nbsp;".ucfirst($row[username])."&nbsp;|&nbsp;$row[hari], $tgl - $jam</span>
          <div class='black_layer'></div>
          <img class='lazy' src='".SITE_URL."foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$row[gambar]' alt='$row[judul]'>
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
      <div class="col-xs-12" style="padding:0;float:none;margin-bottom:10px;">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Billboard Category -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4290882175389422"
            data-ad-slot="6347211346"
            data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <div class="col-xs-12" style="padding:0;float:none;">
      <div class="col-xs-3" style="padding-left:0;">
        <div style="padding:10px;background:#fff;border-radius:5px;" >
          <ul>
          <h1 style="color:<?php echo $nama_menu['color']?>;border-bottom:3px solid #F44336;margin:0 0 15px 0;font-weight:bold !important;display:inline-block;"><?php echo $nama_menu['nama_menu']?></h1>
          <?php
            $submenu = mysql_query("SELECT * FROM menu WHERE id_parent='$nama_menu[id_menu]'");
            while($row = mysql_fetch_array($submenu)){
              echo "<li style='padding-bottom:10px;'><a style='color:$nama_menu[color];' href='".SITE_URL."$row[link]'>$row[nama_menu]</a></li>";
            }
          ?>
          </ul>
        </div>
        <br>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- B_Square Ads -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:250px;height:250px"
             data-ad-client="ca-pub-4290882175389422"
             data-ad-slot="4401462448"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <div class="col-xs-9 news-category" style="background:#fff;padding:0;padding-left:10px;">
          <!-- <h1 style="color:#06375E;border-bottom:1px solid #06375E"><?php echo $nama_menu['nama_menu']?></h1> -->
          <?php
          $terkini=mysql_query("SELECT * FROM berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori WHERE  m.id_parent = '$nama_menu[id_menu]' AND b.id_berita < $id_berita ORDER BY id_berita DESC LIMIT 27");
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
                <span style='background:$nama_menu[color]'><a style='color:#fff;' href='".SITE_URL."kategori-$t[id_kategori]-$t[kategori_seo]'>$t[nama_kategori]</a></span>
              </div>
              <a href='".SITE_URL."berita-$t[judul_seo]'>
                <img class='lazy' src='".SITE_URL."foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$t[gambar]' alt='$t[judul]'>
              </a>
              <span style='font-size:10px;'>".$tgl." | ".$jam."</span>
              <a href='".SITE_URL."berita-$t[judul_seo]' class='captions'>$hasil</a>
            </article>"; }
          ?>
          <div class="clearfix"></div>
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
  <!-- /////////////////////////////////////////Content -->
  <!-- <script>
			var loadMore = true;
		$(window).scroll(function(){
			var nearbottom = 100;

			if(($(window).scrollTop()+nearbottom >= $(document).height()-$(window).height()) && loadMore)
			{
				loadMore = false;
				$.ajax({
					url: 'more-web.php?kategori=news&urut_1='+$('li[data-kategori=politik]:last').attr('kode')+'&urut_2='+$('li[data-kategori=jazirah]:last').attr('kode')+'&urut_3='+$('li[data-kategori=ekobis]:last').attr('kode'),
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
</script> -->