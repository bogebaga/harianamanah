  <ul class="navbar sub-rubrik">
  <?php
  $kalam = mysql_query("SELECT nama_menu, link FROM menu WHERE id_parent = (SELECT id_menu FROM menu WHERE nama_menu = '$_GET[jn]')");
  while($row = mysql_fetch_array($kalam)){
    echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
  }
  ?>
</ul>
  <section class="container-fluid" style="background-color:white;">
		<section class="headline row">
			<?php
				$terkini=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = (SELECT id_menu FROM menu WHERE nama_menu = '$_GET[jn]') ORDER BY berita.id_berita DESC LIMIT 1");
				while($t=mysql_fetch_array($terkini)){
          $id_berita = $t['id_berita'];
          $tgl = tgl_indo($t['tanggal']);
          $jam = trans_jam($t['jam']);
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='Header'>
            <span class='judul-berita-utama'>
              <div class='caption-dt-jd'>
                <h3><a href='berita-$t[judul_seo]' title='$t[judul]'>$t[judul]</a></h3>
                <span class='tanggal-release home'>$t[hari], $tgl - $jam</span>
              </div>
            </span>
			  	</div>
        </div>"; }?>
		</section>
		<section class="daftar-artikel">
      <?php
			$artikel=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND menu.id_parent = (SELECT id_menu FROM menu WHERE nama_menu = '$_GET[jn]') AND berita.id_berita < $id_berita ORDER BY berita.id_berita DESC LIMIT 10");
			while($q=mysql_fetch_array($artikel))
			{
        $tgl = tgl_indo($q['tanggal']);
        $jam = trans_jam($q['jam']);
				if (strlen($q['judul']) > 60)
							{
								$hasil = substr($q['judul'], 0, 60)."&hellip;";
							}
							else
							{
								$hasil = $q['judul'];
							}
				echo "<article class= 'artikle' >
					<div class='list-picture'>
						<a href='berita-$q[judul_seo]'>
							<img class='picture' src='http://harianamanah.com/foto_small/$q[gambar1]' />
						</a>
					</div>
					<div class='artikle-text' data-target='update' kode='$q[id_berita]'>
            <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$hasil</a>
            <a href='$q[link]'class='link-kategori'>$q[nama_kategori]</a>
            <p class='waktu-berita'>$q[hari], $tgl - $jam </p>
					</div>
				</article>
				";}	?>
		</section>
		<div class="iklan">
            <a href="abutours" title="AbuTours.com">
                <img class="img-responsive" src="assets/abujie.jpg" alt="iklan">
            </a>
        </div>
		<section id="daftar-artikel"></section>
		<div id="more" style="display: none;">
			<center><img src="assets/loading.gif" width="100px"></center>
		</div>
		</section>
    <script>
$(document).ready(function(){
  var loadMore = true;
  $(window).scroll(function(){
    var nearbottom = 100;
    if($(window).scrollTop()+nearbottom >= $(document).height() - $(window).height() && loadMore)
    {
      loadMore = false;
      $.ajax({
        method: 'GET',
        url: 'more.php',
        data: {
          kategori: '<?php echo $_GET['jn']?>',
          urut: $('.artikle-text:last').attr('kode')
        },
        beforeSend: function()
        {
          $('#more').show();
        },
        complete: function()
        {
          $('#more').hide().delay(1000);
        },
        success: function(result)
        {
          if(result)
          {
            $('#daftar-artikel').append(result);
            loadMore = true;
            // $('#more')('<div class="more">MUAT LAINNYA</div>');
            // $('.iklan')('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');
          }
        }
      });
    }
  });
			// $('#more').click(function(){
			// 	$(this)('<center><img src="assets/loading.gif" width="100px"></center>');
			// 	$.ajax({
			// 		url: 'more.php?kategori=news&urut='+$('.artikle-text:last').attr('kode'),
			// 		success: function(html)
			// 		{
			// 			if(html)
			// 			{
			// 				$('#daftar-artikel').append(html);
			// 				$('#more')('<div class="more">MUAT LAINNYA</div>');
			// 				// $('.iklan')('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

			// 			}
			// 		}
			// 	})


			// });
});
</script>