 
  <div class='main-column-wrapper'>
  <div class='main-column-left'>
 
  <?php
  
  echo "
  <div class='blog-style-1'>
  <div class='post-title'>
  <b>Hubungi Kami</b>
  </div>";       
  
  echo "Tuliskan pesan, kesan, kritik maupun saran anda pada form di bawah ini:<br/><br/>
  <div id='container'>
  
  <form name='form' action='hubungi-aksi.html' method=POST onSubmit=\"return validasi(this)\">
  
  <input type=hidden name=id value=$d[id_berita]>			   
  
  <h3 class='tag_title'>Nama</h3>
  <input type='text' class='tag_form' name='nama'/><br/><br/>
			
  <h3 class='tag_title'>Email</h3>
  <input type='text' class='tag_form' name='email' /><br/><br/>
  
  
  <h3 class='tag_title'>Subjek</h3>
  <input type='text' class='tag_form' name='subjek' /><br/><br/>
		
  <h3 class='tag_title'>Pesan</h3>
  <textarea class='tag_form' name='pesan'></textarea>
			
  <br/><img src='captcha.php'><br>
  Masukkan 6 kode diatas)<br><input type=text name='kode' size=6 maxlength=6 class='tag_form2'>

  </div>
		
  <input type='submit' name='submit' value='Kirim Pesan' class='tag_button'/>
  </form></div>";  
  
  echo "</div>";  
	
  ?>


  <div class="sidebar">
  
 <!------------- TABS BERITA -------------------->
  <div class="sidebar-item">
  <div class="latest-activity">
								
  <!-- TAB JUDUL -->
  <div class="tabs-1">
  <table><tr>
  
  <td><a href="#" class="tab-1 kernel_triple_btn active" id="kernel_triple_popular_btn_kernel_3">
  <span>Terpopuler</span></a></td>
  
  <td><a href="#" class="tab-1 tab-1-disabled kernel_triple_btn" id="kernel_triple_recent_btn_kernel_3">
  <span>Terkini</span></a></td>
  
  <td><a href="#" class="tab-1 tab-1-disabled kernel_triple_btn" id="kernel_triple_comments_btn_kernel_3">
  <span>Komentar</span></a></td>
  
  </tr></table>
  </div>
  <!-- AKHIR TAB JUDUL -->	
									
   <!-- BAGIAN POPULER -->								
 
  <div id="kernel_triple_popular_kernel_3">
  <div class="list">
  <?php    

  $sql=mysql_query("SELECT * FROM berita ORDER BY dibaca DESC LIMIT 5"); 
  
  while($p=mysql_fetch_array($sql)){
  
  echo "
  <div class='item'>
  <div class='image'>
  <a href=berita-$t[judul_seo].html>
  <img src='foto_berita/small_$p[gambar]' width=60 height=50 border=0></a>
  </div>";
  
  echo "<div class='text'>
  <a href=berita-$p[judul_seo].html><span class='judulberita1'>$p[judul]</span></a>
  <p><span class='tanggal01'><span> dibaca : $p[dibaca] pembaca</span></p></div>
  </div>";
  }
  ?>
  </div>
  </div>	
  <!-- AKHIR BAGIAN POPULER -->								
								

  <!-- BAGIAN TERKINI -->	
   <div id="kernel_triple_recent_kernel_3" style="display: none;">
  <div class="list">
  <?php    
  $terkini=mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
  while($t=mysql_fetch_array($terkini)){
  $tgl = tgl_indo($t['tanggal']);
  $isi_berita = strip_tags($t['isi_berita']); 
  $isi = substr($isi_berita,0,150); 
  $isi = substr($isi_berita,0,strrpos($isi," ")); 
  
  echo "
  <div class='item'>
  <div class='image'>
  <a href=berita-$t[judul_seo].html>
  <img src='foto_berita/small_base.jpg' width=60 height=50 border=0></a>
  </div>";
  
  echo "<div class='text'>
  <a href=berita-$t[judul_seo].html><span class='judulberita1'>$t[judul]</span></a>
  <p><span class='tanggal01'><span> $t[hari], $tgl</span></p></div>
  </div>";
  }
  ?>
  </div>
  </div>	
  <!-- AKHIR BAGIAN TERKINI -->	

  <!-- BAGIAN KOMENTAR -->	
  <div id="kernel_triple_comments_kernel_3" style="display: none;">
  <div class="list">
  <?php    
  $komentar=mysql_query("SELECT * FROM berita,komentar 
  WHERE komentar.id_berita=berita.id_berita  
  ORDER BY id_komentar DESC LIMIT 6");
  while($k=mysql_fetch_array($komentar)){
  $isi_komentar = strip_tags($k['isi_komentar']); 
  $isi = substr($isi_komentar,0,100); 
  $isi = substr($isi_komentar,0,strrpos($isi," ")); 
  echo "
  <div class='item'>
  <div class='image'>
  </div>";
  echo "<div class='text2'>
  <span class='judulberita1'><a href='http://$k[url]' target='_blank'>$k[nama_komentar]</span></a>
  <p><class style=\"color:#EA1C1C;font-size:12px\">pada 
  <a href='berita-$k[judul_seo].html#$k[id_komentar]' class='tooltip' title='$isi ...'><b>$k[judul]</b></a></div>
  </div>";}
  ?>
  </div>
  </div>	
  <!-- AKHIR BAGIAN KOMENTAR -->	
  </div>
  </div>	
  <!------------- AKHIR TABS BERITA -------------------->

        
  <!----------- PARIWARA ------------------------>
  <div class="sidebar-item">
  <div class="photo-gallery-widget">
  <div class="sidebar-title"><b>PARIWARA</b></div>
  <div class="photos">
  <?php
  $pasangiklan=mysql_query("SELECT * FROM pasangiklan ORDER BY rand() LIMIT 2");

  while($b=mysql_fetch_array($pasangiklan)){
  echo "<a href='$b[url]' 'target='_blank' title='$b[judul]'>
  <img width=250 src='foto_pasangiklan/$b[gambar]' border=0></a>";}
  ?>
  </div>
  </div>
  </div>
  <!----------- AKHIR PARIWARA ------------------------>    
  

  </div>
  <div class="clear">&nbsp;</div>
  </div>
  </div><br />
