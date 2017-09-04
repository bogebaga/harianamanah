<div class="wraplist">
		
	
<div id="listberita">
    <section class="konten cf" style="margin-bottom:0px;"><!--konten start-->
        <div class="right-konten" style="border: 0px solid red;"><!-- right konten start -->
            <div class="penulis"><!-- penulis start -->
                                <div class="mt20 small-logo"><img src="../images/amn.jpg" width="125px"></div>
								<h2>Pencarian</h2><br><br><br>
                                <p>Portal Harian Amanah hadir dengan wajah baru, sejak 25 Juli 2016. Meskipun sebelumnya portal berita sudah ada. Namun dengan wajah dan tampilan baru ini, dirasakan lebih kompetitif dengan media sejenis lainnya. Portal Berita Amanah menjadi media yang mendampingi Harian Amanah.</p>
            </div><!-- penulis end -->
        </div><!-- right konten start -->
        <div class="left-konten trend"><!-- left konten start -->
            <div class="art-social-bar">
                <span class="fl art-count">
				<?php
  $kata = trim($_POST['kata']);
  $kata = htmlentities(htmlspecialchars($kata), ENT_QUOTES);
  $pisah_kata = explode(" ",$kata);
  $jml_katakan = (integer)count($pisah_kata);
  $jml_kata = $jml_katakan-1;

  $cari = "SELECT * FROM berita WHERE " ;
  for ($i=0; $i<=$jml_kata; $i++){
  $cari .= " judul = '%$pisah_kata[$i]%' or judul LIKE '%$pisah_kata[$i]%' ";
  if ($i < $jml_kata ){
  $cari .= " OR "; } }
  
  $cari .= " ORDER BY id_berita DESC LIMIT 10";
  $hasil  = mysql_query($cari);
  $ketemu = mysql_num_rows($hasil);
  
  echo $ketemu." ARTICLES";
				?>
				</span>

            </div>
<?php 
 

  
  if ($ketemu > 0){
  while($r=mysql_fetch_array($hasil)){
  $tgl = tgl_indo($r['tanggal']);
  
  echo"
  <div class='trend-left-inner'>
                                        
                        <div class='trend-left-list cf'>
                            <span class='img-circle trend-bullet'></span>
                            <figure>
							
							                                  
                                <div class='left-trending-fix'>	<a href='berita-$r[judul_seo].html' title=''>
								<img src='../foto_berita/$r[gambar]' border='0' alt=''></a> 
								</div>
								
                            </figure>
                            <div class='trend-left-info'>
                                <a href='berita-$r[judul_seo].html'>$r[judul]</a>
                                <div class='publish-info cf'>
                                   
                                    <span class='date fr'>$tgl</span>
                                </div>
                            </div>
                        </div>
                        
                                            
            </div>
			
  ";
  }
  
  }
 
  
  echo "

  
  ";
  
 ?>
			
           
     </div>
    </section><!--konten end-->
    <div class="clr"></div>
    <section class="big-ads" id="remove-fixed23">
      
    </section>    
</div>
</div>