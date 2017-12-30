<?php
include '../config/koneksi.php';
include '../config/fungsi_indotgl.php';
include 'server.php';


if ($_GET['kategori']=='detail')
{
	$artikel = mysql_query("SELECT * FROM berita, kategori WHERE berita.id_kategori = kategori.id_kategori AND berita.id_kategori = '$_GET[id]' AND berita.id_berita < '$_GET[urut]' ORDER BY id_berita DESC LIMIT 15");
  while ($q = mysql_fetch_array($artikel))
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
  echo"
  <article class= 'artikle' >
    <div class='list-picture'>
      <a href='berita-$q[judul_seo]'>
        <img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
      </a>
    </div>
    <div class='artikle-text' kode='$q[id_berita]'>
    <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
    <!-- <a class='link-kategori'>$q[nama_kategori]</a> -->
    <br>
    <p class='waktu-berita' idk='$q[id_kategori]'> $q[hari], $tgl - $jam </p>
    </div>
  </article>
  ";}
}
elseif ($_GET['kategori']=='popular')
{
	$artikel = mysql_query("SELECT * FROM berita, kategori WHERE tanggal BETWEEN DATE_SUB('2017-11-28', INTERVAL 7 DAY) AND '2017-11-28' AND kategori.id_kategori = berita.id_kategori AND dibaca < '$_GET[urut]' ORDER BY dibaca DESC LIMIT 10");
  while ($q = mysql_fetch_array($artikel))
  {
    $tgl = tgl_indo($q['tanggal']);
    $jam = trans_jam($q['jam']);
  echo"
  <article class= 'artikle' >
    <div class='list-picture'>
      <a href='berita-$q[judul_seo]'>
        <img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]' />
      </a>
    </div>
    <div class='artikle-text' data-target='popular' kode='$q[dibaca]'>
    <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
    <a class='link-kategori'>$q[nama_kategori]</a>
    <br>
    <p class='waktu-berita' idk='$q[id_kategori]'> $q[hari], $tgl - $jam </p>
    </div>
  </article>";
  }
}
elseif ($_GET['kategori']=='rekomendasi')
{
	$artikel = mysql_query("SELECT * FROM berita, kategori WHERE berita.id_kategori = kategori.id_kategori AND id_berita < '$_GET[urut]' AND berita.aktif = 'Y' ORDER BY id_berita DESC LIMIT 15");
  while ($q = mysql_fetch_array($artikel))
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
  echo"
  <article class= 'artikle' >
    <div class='list-picture'>
      <a href='berita-$q[judul_seo]'>
        <img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
      </a>
    </div>
    <div class='artikle-text' data-target='rekomendasi' kode='$q[id_berita]'>
    <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
    <a class='link-kategori'>$q[nama_kategori]</a>
    <br>
    <p class='waktu-berita' idk='$q[id_kategori]'> $q[hari], $tgl - $jam </p>
    </div>
  </article>
  ";}
}
elseif ($_GET['kategori'])
{
  $artikel = mysql_query("SELECT * FROM menu JOIN (kategori JOIN berita ON kategori.id_kategori = berita.id_kategori) ON menu.nama_menu = kategori.nama_kategori AND berita.id_berita < '$_GET[urut]' AND menu.id_parent = (SELECT id_menu FROM menu WHERE nama_menu = '$_GET[kategori]')  ORDER BY berita.id_berita DESC LIMIT 15");
  while ($q = mysql_fetch_array($artikel))
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
    echo "
    <article class= 'artikle' >
      <div class='list-picture'>
        <a href='berita-$q[judul_seo]'>
          <img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt=$q[judul]/>
        </a>
      </div>
      <div class='artikle-text' kode='$q[id_berita]'>
      <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$hasil</a>
      <a href='$q[link]' class='link-kategori'>$q[nama_kategori]</a>
          <p class='waktu-berita'> $q[hari], $tgl - $jam </p>
      </div>
    </article>
  ";}
}
else
{
  $x = 1;
	$artikel=mysql_query("SELECT * FROM berita, kategori WHERE kategori.id_kategori = berita.id_kategori AND berita.id_berita < '$_GET[urut]' ORDER BY id_berita DESC LIMIT 15");
	while($q=mysql_fetch_array($artikel))
	{
    $tgl = tgl_indo($q['tanggal']);
    $jam = trans_jam($q['jam']);
    if($x%5 == 0):
      $inilah = mysql_query("SELECT * FROM berita b JOIN kategori k ON b.id_kategori = k.id_kategori WHERE username = 'alifahmi' AND id_berita < '$_GET[urut_foto]' ORDER BY b.id_berita DESC LIMIT 1");
      while($foto=mysql_fetch_array($inilah)):
      echo "<li style='color:white;background:#252831' data-berita='$foto[id_berita]'>
              <div class='deskripsi-judul home reda'>
                <h6 ><a style='color:#fff;font-size:30px;' href='foto-$foto[judul_seo]' title='$foto[judul]'>$foto[judul]</a></h6>
                <p class='rubrik-tanggal'><a href='kategori-$foto[id_kategori]-$foto[kategori_seo]'>".strtoupper($foto['nama_kategori'])."</a>&nbsp;$foto[hari], $tgl - $jam</p>
              </div>
              <a href='foto-$foto[judul_seo]'>
                <img class='lazy' src='foto_statis/base.jpg' data-src='http://harianamanah.com/foto_berita/$foto[gambar]' alt='$foto[judul]' style='object-fit:cover;width:100%;height:400px;'>
              </a>
            </li>";
            // $_GET['urut_foto'] = $foto['id_berita'];
      endwhile;
    // elseif($x%5 == 0):
    //   echo "<article class= 'artikle' >
    //   <div class='list-picture'>
    //     <a href='berita-$q[judul_seo]'>
    //       <img class='picture lazy' src='assets/base.jpg' data-src='http://harianamanah.com/foto_berita/$q[gambar1]' alt='$q[judul]' style='width:100%;height:220px;object-fit:cover;'>
    //     </a>
    //   </div>
    //   <div class='artikle-text' data-target='update' kode='$q[id_berita]' style='width:100%;padding:0;margin-top:10px;'>
    //     <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
    //     <!-- <a href='#' class='link-kategori'>$q[nama_kategori]</a> -->
    //     <br>
    //     <p class='waktu-berita'> $q[hari], $tgl - $jam </p> 
    //   </div>
    // </article>";
    else:
      echo "
      <article class= 'artikle' >
        <div class='list-picture'>
          <a href='berita-$q[judul_seo]'>
            <img class='picture lazy' src='assets/base_n.jpg' data-src='http://harianamanah.com/foto_small/$q[gambar1]' alt='$q[judul]'/>
          </a>
        </div>
        <div class='artikle-text' data-target='update' kode='$q[id_berita]'>
          <a href='berita-$q[judul_seo]' class='berita' title='$q[judul]'>$q[judul]</a>
          <!-- <a href='#' class='link-kategori'>$q[nama_kategori]</a> -->
          <br>
          <p class='waktu-berita'> $q[hari], $tgl - $jam </p>
        </div>
      </article>";   
    endif;
  }
}
$num_rows = mysql_num_rows($artikel);
if($num_rows !== 0){
?>
<section class="daftar-artikel">
<a href='https://play.google.com/store/apps/details?id=com.abugroup.abutours&hl=in'  title="AbuTours.com">
  <article class= 'artikle' >
    <div class='list-picture'>
      <img class='picture' src='assets/abutours.png' />
    </div>
    <div class='artikle-text-1'>
      <p class='link-kategori'>Abutours.com</p>
      <div class="berita"  style="margin-bottom: 15px;">
        <p>Aplikasi Abutours menawarkan kemudahan bagi calon haji dalam melakukan pemesanan kursi</p>
      </div>
      <p class="tag-sponsored">Sponsored</p>
      <p class="instal">INSTALL</p>
    </div>
  </article>
</a>
</section>
<section class="daftar-artikel">
  <a href='https://play.google.com/store/apps/details?id=com.koran.harian.amanah'  title="Harian Amanah">
    <article class= 'artikle' >
      <div class='list-picture'>
        <img class='picture' src='assets/ic_launcher.png' />
      </div>
      <div class='artikle-text-1'>
      <p class='link-kategori'>Aplikasi Harian Amanah</p>
      <div class="berita"  style="margin-bottom: 15px;">
        <p>Download Aplikasi Harian Amanah</p>
      </div>
      <p class="tag-sponsored"></p>
      <p class="instal">INSTALL</p>
      </div>
    </article>
  </a>
</section>
<?php } ?>