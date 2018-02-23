<?php
/**
 *  Meta Class
 * @method meta_title()
 * 
 */

class meta {
  function meta_title($menu, $id, $judul, $module = ''){
    if($menu):
      $title = mysql_fetch_array(mysql_query("SELECT nama_menu FROM menu WHERE link = '$menu'"));
      return ucfirst($title[0])." | Kiblat Berita Islami - harianamanah.com";
    elseif($judul):
      $title = mysql_fetch_array(mysql_query("SELECT judul FROM berita WHERE judul_seo = '$judul'"));
      return htmlentities($title[0]);
    elseif($id):
      $title = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori = '$id'"));
      return $title[0]." | Kiblat Berita Islami - harianamanah.com";
    elseif($module == 'hasilcari'):
      return "Pencarian | Kiblat Berita Islami - harianamanah.com";
    elseif($module == 'rekomendasi'):
      return "Rekomendasi Berita Islami - harianamanah.com";
    elseif($module == 'popular'):
      return "Berita Popular Islami - harianamanah.com";
    else:
      return "Kiblat Berita Islami - harianamanah.com";
    endif;
  }

  function meta_description($isi){
    if($isi != ''):
      return desc($isi);
    else:
      return "Indeks berita islam terkini dari Dunia islam, Olahraga, Tekno, Ekonomi, Jazirah, politik, halal destination, Islamic View, berita haji dan umroh dan international";
    endif;
  }

  function meta_image($gambar){
    if ($gambar != ''):
      # code...
      return "http://harianamanah.com/foto_berita/$gambar";
    else:
      return "http://harianamanah.com/images/amanah.jpg";
    endif;
  }

  function meta_seo_title($seo_title){
    if($seo_title != ''):
      return "http://harianamanah.com/berita-$seo_title";
    else:
      return "http://harianamanah.com";
    endif;
  }

  // function desc ($isi){
  //   return substr(preg_replace("/&?[a-z0-9]+;/i", "",strip_tags($isi)), 0, 160);
  // }
}