<section class="container-fluid" style="background-color:white;">
  <?php
    $query = mysql_query("SELECT * FROM halamanstatis WHERE judul_seo = '$_GET[judulseo]'");
    $row = mysql_fetch_array($query);
  ?>

  <h1><?php echo $row['judul']?></h1>
  <div class="isi-halaman">
    <?php echo $row['isi_halaman'] ; ?>
  </div>
  <!-- <div class="iklan">
    <a href="abutours" title="AbuTours.com">
      <img class="img-responsive" src="assets/abujie.jpg" alt="iklan">
    </a>
  </div> -->
</section>