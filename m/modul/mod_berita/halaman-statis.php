<section style="text-align:center;">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- M_Banner -->
  <ins class="adsbygoogle"
      style="display:inline-block;width:320px;height:50px"
      data-ad-client="ca-pub-4290882175389422"
      data-ad-slot="6679890438"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</section>
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
<section style='text-align:center;'>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- B_Square Ads -->
  <ins class="adsbygoogle"
      style="display:inline-block;width:250px;height:250px"
      data-ad-client="ca-pub-4290882175389422"
      data-ad-slot="4401462448"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</section>