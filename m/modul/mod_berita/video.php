<!-- Foto Kategori -->
<!-- div class="foto-Kategori">
    <img src="assets/muslimStar.png" class="img-responsive" alt="Muslim Star">
</div>
-->
<!-- Content -->
<?php function ulangi(){
static $digit=0;
global $alamat;
$digit = $digit + 5;
?>
<?php

$terkini1 = mysql_query("SELECT * FROM video ORDER BY id_video DESC LIMIT 0, 1");
while($a=mysql_fetch_array($terkini1)){
    $id1 = $a['id_berita'];

    echo"
			 <div id='owl-demo' class='owl-carousel owl-theme'>
			  	<div class='item'>
			  		<img src='http://harianamanah.id/img_video/$a[gbr_video]' alt='Header'>

			  			<span class='judul-berita-utama'>
			  			<h3>
			  				<a href='video-$a[video_seo]'>$a[jdl_video]</a>

			  			</h3>
			  		    </span>
			  	</div>
			  	</div>
			  	";
}
?>
<section class="container-fluid">

    <section class="daftar-artikel">
        <?php
        $artikel = mysql_query("SELECT * FROM video ORDER BY id_video DESC LIMIT 1, 5");

        while ($q = mysql_fetch_array($artikel))
        {
            echo "<article class= 'artikle' >
								<div class='list-picture1'>
									<a href='video-$q[video_seo]'>
									<img class='picture' width='50%' src='http://harianamanah.id/img_video/$q[gbr_video]' />
									</a>
								</div>
								<div class='artikle-text1' kode='$q[id_video]'>
										<a href='video-$q[video_seo]' class='berita'><p>$q[jdl_video]</p></a>
										<p class='waktu-berita'> $q[tanggal] | $q[jam] </p>
								</div>
								</article>
					";
        }
        ?>
    </section>

    <!-- Iklan -->
    <div class="iklan">
        <a href="https://abutours.com/" target="_blank" title="AbuTours.com">
            <img class="img-responsive" src="http://harianamanah.id/foto_iklantengah/917737Iklan-Web-Amanah-2.gif" alt="iklan">
        </a>
    </div>

    <section class="daftar-artikel">
        <?php
        $artikel = mysql_query("SELECT * FROM video ORDER BY id_video DESC LIMIT 6, 5");

        while ($q = mysql_fetch_array($artikel))
        {
            echo "<article class= 'artikle' >
								<div class='list-picture1'>
									<a href='video-$q[video_seo]'>
									<img class='picture' width='50%' src='http://harianamanah.id/img_video/$q[gbr_video]' />
									</a>
								</div>
								<div class='artikle-text1' kode='$q[id_video]'>
										<a href='video-$q[video_seo]' class='berita'><p>$q[jdl_video]</p></a>
										<p class='waktu-berita'> $q[tanggal] | $q[jam] </p>
								</div>
								</article>
					";
        }
        ?>
    </section>

    <?php }
    echo ulangi();

    // echo ulangi();
    // echo ulangi();
    ?>

    <div id="daftar-artikel" class="daftar-artikel"></div>
    <br>
    <div id="more" style="display: none;">
        <center><img src="assets/loading.gif" width="100px"></center>
    </div>
    <!-- <div id="more">
        <div class="more">
            MUAT LAINNYA
        </div>
    </div> -->
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
                    url: 'more.php?kategori=kajian&urut='+$('.artikle-text:last').attr('kode'),
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