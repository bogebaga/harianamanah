<?php include_once('config_fb.php');?>

<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '168067490271817',
            xfbml      : true,
            version    : 'v2.7'
        });
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<div id="page-content" style="background-color: #161616;border:5px solid #00B0B2;margin-bottom:10px;margin-top:130px;padding:20px 30px;" class="index-page container">
<h1 style="font-size:20px;">SITEMAP</h1>
<ul>
<?php
  $menu = mysql_query("SELECT * FROM menu WHERE id_parent='0' AND aktif='Ya'");
  while($row = mysql_fetch_array($menu)){
    echo "
    <li style='display:inline-block;vertical-align:top;margin-right:50px;'>
      <a style='color:#E8BF0A;font-weight:bold;font-size:40px;' href=\"$row[link]\">$row[nama_menu]</a>
      <ol style='list-style:disc;'>";
    $submenu = mysql_query("SELECT * FROM menu WHERE id_parent = '$row[id_menu]' AND aktif='YA'");
    while($rowsub = mysql_fetch_array($submenu)){
      echo " <li style='color:#fff;'><a style='color:#fff;' href=\"$rowsub[link]\">$rowsub[nama_menu]</a></li>";
    }
    echo "<br>";
    echo "</ol></li>";
  }
  ?>
</ul>
</div>
<div class="clear">&nbsp;</div>