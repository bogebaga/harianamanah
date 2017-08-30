<br>
<br>


<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="index-page container">


 <div id="sidebar">
  <div class="col-md-12">
   <div class="col-md-3">
    <div class="row">
     <div class="single_blog_sidebar wow fadeInUp">
      <br><br><h4>Terbaru</h4></br>
      <ul class="featured_nav">


          <?php
          $terkini=mysql_query("SELECT * FROM video  ORDER BY id_video DESC limit 4 ");
          while($t=mysql_fetch_array($terkini)){

              echo "
							<li>
							
							<a class='featured_img' href='video-$t[video_seo].html'><img width='100%' src='img_video/$t[gbr_video]'> 
							
							</a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='video-$t[video_seo].html'>$t[jdl_video]</a>
                    		</div>
							</li>
							";
          }
          ?>



      </ul>
     </div>
    </div>
   </div>

   <div class="col-md-6">
    <div class="row">
     <div class="single_blog_sidebar1 wow fadeInUp">
      <br><br><h4>Recommended</h4></br>
      <ul class="featured_nav1">
          <?php
          $terkini=mysql_query("SELECT * FROM video WHERE  rekomendasi = 'Y' ORDER BY id_video DESC limit 3 ");
          while($t=mysql_fetch_array($terkini)){

              echo "
							<li>
							
							<a class='featured_img' href='video-$t[video_seo].html'><img width='100%' src='img_video/$t[gbr_video]'> 
							
							</a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='video-$t[video_seo].html'>$t[jdl_video]</a>
                    		</div>
							</li>
							";
          }
          ?>
      </ul>
     </div>
    </div>
   </div>

   <div id="" >
    <div class="col-md-3" >
     <div class="row">
      <div class="sembunyi" >
       <br><br>
       <h4>Populer</h4></br>
       <ul class="featured_nav2">
           <?php
           $terkini=mysql_query("SELECT * FROM video ORDER BY dilihat DESC limit 4 ");
           while($t=mysql_fetch_array($terkini)){

               echo "
							<li>
							
							<a class='featured_img' href='video-$t[video_seo].html'><img width='100%' src='img_video/$t[gbr_video]'> 
							
							</a>
                    		
							<div class='featured_title'>
                      		<a class='judul_atas' href='video-$t[video_seo].html'>$t[jdl_video]</a>
                    		</div>
							</li>
							";
           }
           ?>
       </ul>
      </div>
     </div>
    </div>
   </div>
   <div class="row">
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
   </div></br>
  </div>
 </div>






</div>

<!-- /////////////////////////////////////////Content -->
