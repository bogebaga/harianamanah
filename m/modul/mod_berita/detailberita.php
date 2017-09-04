<style>
   .left{
       text-align: left;
   }
   .box{
       text-align: left;
       padding:5px;
   }
    #navs{
        position: fixed;
        right: 15px;
        bottom: 100px;
        width: 45px;
        height: 45px;
        line-height: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: left;
        color: #fff;
        z-index: 1
    }

    #navs>li, #navs:after{
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #e74c3c;
    }

    #navs>li{
        transition: all .6s;
        background:transparent;
    }

    #navs:after{
        content: attr(data-close);
        z-index: 1;
        border-radius: 50%;
    }

    #navs.active:after{
        content: attr(data-open);
    }

    #navs a{
        display: inline-block;
        text-decoration: none;
        font-size: 0.8em;
    }

    #navs li img{
        width: 38px;
        height: 38px;
        border-radius: 50%;
    }
    #navs li .vote{
        position: absolute;
        padding: 3px 9px 3px 11px;
        background: white;
        display: inline-block;
        font-size: 12px;
        color: black;
        border: 1px solid #808080;
        border-radius: 0 45px 45px 0;
        left: 15px;
        z-index: -1;
    }
    .bungkus{
        padding-top:0;
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 10px;
    }
</style>

<?php
$ip = "";

if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
    // Check for the Proxy User
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
    $ip = $_SERVER["REMOTE_ADDR"];
}

?>
<style>
    .navbar,.navbar-default{
        display:none;
    }

    #main{
        background:none;
        z-index:-2;
    }
</style>
<div id="fb-root"></div>
<?php include_once("analyticstracking.php") ?>
<?php include_once("../../analyticstracking.php") ?>
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

<div id="kepala">
    <div class="back">
        <a class="tombol fa fa-angle-left" id="BS" aria-hidden="true" href="./"></a>
    </div>
    <div class="share-sosmed">
        <a class="share fa fa-share-alt" id="BS1" aria-hidden="true" data-toggle="modal" data-target="#share-modals"></a>
    </div>
    <div class="modal fade" id="share-modals">
        <div class="box-modal">
            <div class="header-modal">
                <h4>Bagikan Ke :</h4>
            </div>
            <div class="body-mo">
                <a href="#" onclick="
  window.open(
    'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
    'facebook-share-dialog',
    'width=626,height=436');
    return false;" >
                    <img src="assets/FB.png" alt="">
                    Facebook
                </a>
                <a href="#" onclick="window.open('https://twitter.com/share','width=336','height=206');return false;" >
                    <img src="assets/twitter.jpg" alt="">
                    Twitter
                </a>
                <a href="#">
                    <div class="line-it-button" data-lang="en" data-type="share-d" data-url="http://harianamanah.com/berita-.html" style="display: none;">
                    <img src="assets/line.png" alt="">
                    Line
                    </div>
                </a>
                <a href="#">
                    <img src="assets/INSTAGRAM.jpg" alt="">
                    Instagram
                </a>
            </div>
        </div>
    </div>
</div>
<section class="container-flui bungkus" id="test">
    <div class="box-header row">

        <?php
        $detail=mysql_query("SELECT * FROM berita,users,kategori    
                      WHERE users.username=berita.username 
                      AND kategori.id_kategori=berita.id_kategori 
                      AND judul_seo='$_GET[judul]'");
        $d   = mysql_fetch_array($detail);
        $tgl = tgl_indo($d['tanggal']);
        $baca = $d['dibaca']+1;
        ?>
        <div class="gambar-berita">
            <?php echo"<img src='http://harianamanah.com/foto_berita/$d[gambar]' class='img-responsive' alt='img'>";
            echo"<p id='testtest'>$d[judul]</p>";
            ?>
        </div>
    </div>
    <div class="box left">
        <div id="hasil"></div>
        <input type="hidden" class="ip" value="<?php echo $ip; ?>" >
        <input type="hidden" class="jud" value="<?php echo $_GET[judul]; ?>" >
        <span class="berita">
            <?php
            if(!empty($d[youtube])) {
                echo "
						<iframe width='100%' tabindex='0' style='background:#000; min-height: 480px;' allowfullscreen='1' src='$d[youtube]' frameborder='0' height='480' allowfullscreen></iframe>
						";
            }
            ?>
				<?php
                if (strpos($d[isi_berita], "src='http://harianamanah.com/redaktur/") !== false) {
                    echo(str_replace('http://harianamanah.com/redaktur/','http://harianamanah.com/redaktur/',$d[isi_berita]));
                }else  {
                    echo(str_replace('src="/redaktur/','src="http://harianamanah.com/redaktur/',$d[isi_berita]));
                }
                $acak           = rand(44,77);
                mysql_query("UPDATE berita SET dibaca=$d[dibaca]+$acak WHERE judul_seo='$_GET[judul]'");
                ?>
			</span>
        <div class="fb-comments" data-href="" data-width="686" data-numposts="5"></div>
        <br>
        <div class="baca-juga">
            <div class="garis-bawah">
                <br>
                <h4>Berita Terkait</h4>
            </div>
            <ul style="list-style-type: none;">
                <?php
                $detail1=mysql_query("SELECT * FROM berita WHERE id_kategori = $d[id_kategori] AND id_berita != $d[id_berita] order by id_berita DESC limit 5");
                while($p1=mysql_fetch_array($detail1)){
                    echo"
					<li><a href='berita-$p1[judul_seo].html' title='artikel-lain'>
						<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
						$p1[judul]
					</a></li>
					<br>";
                }
                ?>
            </ul>
        </div>
        <div class="iklan">
            <a href="https://abutours.com/" target="_blank" title="AbuTours.com">
                <img class="img-responsive" src="http://harianamanah.com/m/assets/abujie.jpg" alt="iklan">
            </a>
        </div> 
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        var judul =  $(".jud").val();
        setTimeout(function(){
            $.post("select.php", {jud: judul }, function(result){
                $("#hasil").html(result);
            });
        }, 500);

    });
    $('.nilai').hide();
    ul.click(function(event) {
        $(this).toggleClass('active');
        $('.nilai').show();
        $('.bungkus').css('background', 'rgba(0, 0, 0, 0.4)');
        $('.garis-bawah').css('opacity', '0.7');
        $('.iklan').css('opacity', '0.7');
        $('footer').css('background', 'rgba(0, 0, 0, 0.4)');
        $('.isi-footer img').css('z-index', '-1');
        if ($(this).hasClass('active')) {
            for(var a = 0; a < i; a++){
                li.eq(a).css({
                    'transition-delay' : ""+(50*a)+"ms",
                    'right' :(r*Math.cos(90/n*a*(Math.PI/180))),
                    'top' : (-r*Math.sin(90/n*a*(Math.PI/180)))
                });
            }
        }else{
            li.removeAttr('style');
            $('.nilai').hide();
            $('.bungkus').css('background', 'white');
            $('.garis-bawah').css('opacity', '1');
            $('.iklan').css('opacity', '1');
            $('footer').css('background', '#f4f4f4');
            $('.isi-footer img').css('z-index', '1');
        }
    });
</script>
<script type="text/javascript">
    window.onscroll = changePos;

    function changePos() {
        var header = document.getElementById("kepala");
        var berita = document.getElementById("testtest");
        var icon = document.getElementById("BS");
        var icon1 = document.getElementById("BS1");
        if (window.pageYOffset > 199) {
            header.style.position = "fixed";
            header.style.background = "url('assets/amanahKecil.png') center center no-repeat white";
            header.style.width = "100%";
            header.style.height = "57px";
            header.style.top = 0;
            icon.style.color = "black";
            icon1.style.color = "black";
            berita.style.position = "fixed";
            berita.style.width = "100%";
            berita.style.top = "56px";
        } else {
            header.style.position = "";
            header.style.background = "transparent";
            header.style.height = "";
            header.style.top = "";
            icon.style.color= "white";
            icon1.style.color= "white";
            berita.style.position = "";
            berita.style.width = ""
            berita.style.top = "";
        }
    }
</script>