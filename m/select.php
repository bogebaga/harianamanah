<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Berita.css">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans" rel="stylesheet">

    <!-- JS -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Berita</title>
</head>

<?php

include "../config/koneksi.php";
$judul = $_POST["jud"];
$sql = mysql_query("SELECT * FROM ip_user WHERE emo = 'like'  AND judul_berita = '$judul' ");
$result = mysql_num_rows($sql);
?>


<ul id="navs" data-open="x" data-close="+" style="font-size:28px;">

    <li>
        <img src="assets/Whatsapp-emoji/Like.png" class='satu'>
        <div class="nilai" style="color:white; right:120px; margin-top:-10px; font-weight:bold; font-size:16px;"><?php echo $result; ?></div>
    </li>
    <?php
    $sql = mysql_query("SELECT * FROM ip_user WHERE emo = 'love' AND judul_berita = '$judul' ");
    $result = mysql_num_rows($sql);
    ?>
    <li>
        <img src="assets/Whatsapp-emoji/Love.png" class='dua'>
        <div class="nilai" style="color:white; right:120px; margin-top:-10px; font-weight:bold; font-size:16px;"><?php echo $result; ?></div>
    </li>
    <?php
    $sql = mysql_query("SELECT * FROM ip_user WHERE emo = 'senang' AND judul_berita = '$judul' ");
    $result = mysql_num_rows($sql);
    ?>
    <li>
        <img src="assets/Whatsapp-emoji/senang.png" class='enam'>
        <div class="nilai" style="color:white; right:110.866px; margin-top:-10px; font-weight:bold; font-size:16px;"><?php echo $result; ?></div>
    </li>
    <?php
    $sql = mysql_query("SELECT * FROM ip_user WHERE emo = 'marah' AND judul_berita = '$judul' ");
    $result = mysql_num_rows($sql);
    ?>
    <li>
        <img src="assets/Whatsapp-emoji/marah.png" class='empat'>
        <div class="nilai" style="color:white; right:84.8528px; margin-top:-10px; font-weight:bold; font-size:16px;"><?php echo $result; ?></div>
    </li>
    <?php
    $sql = mysql_query("SELECT * FROM ip_user WHERE emo = 'sedih'  AND judul_berita = '$judul'");
    $result = mysql_num_rows($sql);
    ?>
    <li>
        <img src="assets/Whatsapp-emoji/sedih.png" class='lima'>
        <div class="nilai" style="color:white; right:45.922px; margin-top:-10px; font-weight:bold; font-size:16px;"><?php echo $result; ?> </div>
    </li>
</ul>


<script>
    var ul = $("#navs");
    var li = $("#navs li");
    var i = li.length;
    var n = i - 1;
    var r = 200;

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

    $(".satu").click(function(){

        var emo = ("like");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');

    });

    $(".dua").click(function(){

        var emo = ("love");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');


    });

    $(".tiga").click(function(){

        var emo = ("kaget");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');


    });

    $(".empat").click(function(){

        var emo = ("marah");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');


    });

    $(".lima").click(function(){

        var emo = ("sedih");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');


    });

    $(".enam").click(function(){

        var emo = ("senang");
        var ip = $(".ip").val();
        var judul =  $(".jud").val();

        $.post("tes_emo.php", {emo_type: emo, ipu:ip ,jud: judul }, function(result){
            $("#hasil").html(result);
        });
        $("#emo").off('click');


    });



</script>

