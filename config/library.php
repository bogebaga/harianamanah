<?php
function site_URL(){
  $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainname = $_SERVER['HTTP_HOST']."/";
  
  return $protocol.$domainname."harianamanah/";
}

date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
?>
