<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="index-page container" style="background-color:#fff;">
<div id="sidebar" style="padding:0;">
  <div class="col-xs-12" style="padding:0;float:none;">
    <div class='flex-container'>
    <?php
    $rubrik=mysql_query("SELECT * FROM berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori WHERE  m.id_parent = '20' ORDER BY id_berita DESC LIMIT 5");
    while($row = mysql_fetch_array($rubrik)){
      $tgl = tgl_indo($row['tanggal']);
      $jam = trans_jam($row['jam']);

      $i=0;
      echo "<div class='item-flex grid-$i'>
      <span class='kategori-grid' style='background:rgba(103, 58, 183, 0.8)'><a style='color:#fff;' href='kategori-$row[id_kategori]-$row[kategori_seo].html'>$row[nama_kategori]</a></span>
      <a href='berita-$row[judul_seo].html' title='$row[judul]'><h2 class='grid-flex-foto'>$row[judul]</h2></a>
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
  <div class="col-xs-12" style="padding:0;float:none;margin-top:25px">
    <div class="col-xs-12 news-category">
      <h1>Kalam</h1>
      <br>
      <?php
      $terkini=mysql_query("SELECT * FROM berita b JOIN (kategori k JOIN menu m ON k.id_kategori = m.id_menu ) ON b.id_kategori = k.id_kategori WHERE  m.id_parent = '20' ORDER BY id_berita DESC LIMIT 30");
      while($t=mysql_fetch_array($terkini)){
        $tgl = tgl_indo($t['tanggal']);
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
          <a href='berita-$t[judul_seo].html'>
            <img src='http://harianamanah.com/foto_berita/$t[gambar]' alt=''>
          </a>
          <div class='badges-cate'>
            <span style='background:#673ab7;'><a style='color:#fff;' href='kategori-$t[id_kategori]-$t[kategori_seo].html'>$t[nama_kategori]</a></span>
            <span>".$tgl." | ".$jam."</span>
          </div>
          <a href='berita-$t[judul_seo].html' class='captions'>$hasil</a>
        </article>"; }
      ?>
    </div>
    <!-- <div class="col-xs-3">
      <h1 style="color:#673ab7;">Indeks&nbsp;<b>Kalam</b></h1>
      <br>
      <div></div>
    </div> -->
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
					url: 'more-web.php?kategori=kalam&urut_1='+$('li[data-kategori=islam_view]:last').attr('kode')+'&urut_2='+$('li[data-kategori=opini]:last').attr('kode')+'&urut_3='+$('li[data-kategori=esai]:last').attr('kode'),
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
				// 		url: 'more-web.php?kategori=kalam&urut_1='+$('li[data-kategori=islam_view]:last').attr('kode')+'&urut_2='+$('li[data-kategori=opini]:last').attr('kode')+'&urut_3='+$('li[data-kategori=esai]:last').attr('kode'),
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