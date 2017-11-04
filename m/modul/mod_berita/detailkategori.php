	<!-- Foto Kategori -->
	<!-- div class="foto-Kategori">
		<img src="assets/muslimStar.png" class="img-responsive" alt="Muslim Star">
	</div>
 -->
	<!-- Content -->
  <section class="container-fluid" style="background-color:white;">
		<section class="headline row">
    <span id="id" style="display:none;"><?php echo $_GET['id']?></span>
    <?php
        $terkini=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori WHERE berita.headline='Y' AND berita.id_kategori = '$_GET[id]' ORDER BY id_berita DESC LIMIT 1");
				while($t=mysql_fetch_array($terkini)){
          $tgl = tgl_indo($t['tanggal']);
          $jam = trans_jam($t['jam']);
					$id1 = $t['id_berita'];
			 echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img src='http://harianamanah.com/foto_berita/$t[gambar]' alt='Header-$t[judul]'>
            <span class='judul-berita-utama'>
              <div class='caption-dt-jd'>
                <h3><a href='berita-$t[judul_seo]' title='$t[judul]'>$t[judul]</a></h3>
                <span class='tanggal-release home'> $t[hari], $tgl - $jam</span>
              </div>
            </span>
			  	</div>
        </div>"; }?>
    </section>
		<section class="daftar-artikel">
			<?php
			$_digit = 10;
			$artikel=mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori WHERE berita.id_berita < '$id1' AND berita.id_kategori = '$_GET[id]' ORDER BY id_berita DESC LIMIT $_digit");
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
							<img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
						</a>
					</div>
					<div class='artikle-text' data-target='update' kode='$q[id_berita]'>
            <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$hasil</a>
            <a class='link-kategori'>$q[nama_kategori]</a>
            <p class='waktu-berita'>  $q[hari], $tgl - $jam </p>
					</div>
				</article>
				";} ?>
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
    var nearbottom = 150;
    if($(window).scrollTop()+nearbottom >= $(document).height() - $(window).height() && loadMore)
    {
      loadMore = false;
      $.ajax({
        method: 'GET',
        url: 'more.php',
        data: {
          kategori: 'detail',
          urut: $('.artikle-text:last').attr('kode'),
          id: $('#id').text()
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
						$('.lazy').lazy();
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
			// 		url: 'more.php?kategori=kajian&urut='+$('.artikle-text:last').attr('kode'),
			// 		success: function(html)
			// 		{
			// 			if(html)
			// 			{
			// 				$('#daftar-artikel').append(html);
			// 				$('#more')('<div class="more">MUAT LAINNYA</div>');
			// 				// $('.iklan')('<a href="https://abutours.com/" target="_blank" title="AbuTours.com"><img class="img-responsive" src="../foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan"></a>');

			// 			}
			// 		}
			// 	});
			// });
		});
</script>