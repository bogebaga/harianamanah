<?php
$sq = mysql_query("SELECT * from kategori where id_kategori='$_GET[id]'");
$n = mysql_fetch_array($sq);
?>
<div class="wraplist">
<section>
<?php
if($n[photo] != ''){
echo"<img src='foto_kategori/$n[photo]'>";
}
?>
</section>		
	
<div id="listberita">
    <section class="konten cf" style="margin-bottom:0px;"><!--konten start-->
        <div class="right-konten" style="border: 0px solid red;"><!-- right konten start -->
            <div class="penulis"><!-- penulis start -->
                                <div class="mt20 small-logo"><img src="images/amanah.jpg" width="120px" height="auto"></div>
								<?php 
								echo"<h2>$n[nama_kategori]</h2>";
								?>	
				<div class="ket">
					<p>Portal Harian Amanah hadir dengan wajah baru, sejak 25 Juli 2016. Meskipun sebelumnya portal berita sudah ada. Namun dengan wajah dan tampilan baru ini, dirasakan lebih kompetitif dengan media sejenis lainnya. Portal Berita Amanah menjadi media yang mendampingi Harian Amanah.</p>
				</div>	
            </div>
			
			<!-- penulis end -->
        </div><!-- right konten start -->
        <div class="left-konten trend"><!-- left konten start -->
            <div class="art-social-bar">
                <span class="fl art-count">
				<?php
				$jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kategori='$_GET[id]'"));
				echo $jmldata." ARTIKEL";
				?>
				</span>

            </div>
			<?php 
  $p      = new Paging3;
  $batas  = 10;
  $posisi = $p->cariPosisi($batas);
  
  $sql   = "SELECT * FROM berita,users WHERE users.username=berita.username 
  AND id_kategori='$_GET[id]' 
  ORDER BY id_berita DESC LIMIT $posisi,$batas";		 
		 

  $hasil = mysql_query($sql);
  $jumlah = mysql_num_rows($hasil);
  
  if ($jumlah > 0){
  while($r=mysql_fetch_array($hasil)){
  $tgl = tgl_indo($r['tanggal']);
  
  echo"
  <div class='trend-left-inner'>
                                        
                        <div class='trend-left-list cf'>
                            <span class='img-circle trend-bullet'></span>
                            <figure>
							
							                                  
                                <div class='left-trending-fix'>	<a href='berita-$r[judul_seo].html' title=''>
								<img src='foto_berita/base.jpg' border='0' alt=''></a> 
								</div>
								
                            </figure>
                            <div class='trend-left-info'>
                                <a href='berita-$r[judul_seo].html'>$r[judul]</a>
                               
                            </div>
                        </div>
                        
                                            
            </div>
			
  ";
  }
  
  }
  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita WHERE id_kategori='$_GET[id]'"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET['halkategori'], $jmlhalaman);
  
  echo "

  <div class='halaman'> $linkHalaman</div>
  ";
  
 ?>
			
           
     </div>
    </section><!--konten end-->
    <div class="clr"></div>
    <section class="big-ads" id="remove-fixed23">
      
    </section>    
</div>
</div>