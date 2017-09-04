<style>
	.navbar,.navbar-default{
		display:none;
	}
	
	#main{
		background:none;
	}
	</style>
<?php 
include_once "../config/koneksi.php";

$teslagi = $_POST['ipu'];
$emo = $_POST["emo_type"];
$judul = $_POST["jud"];

if (isset($judul)){
?>
<input type="hidden" class="jud1" value="<?php echo $judul; ?>">
<?php
if(mysql_query("INSERT into ip_user (ip,emo,judul_berita) values('$teslagi','$emo','$judul')"))
{
	?>
	<script>
	$(document).ready(function(){

     var judul =  $(".jud1").val(); 

    	$.post("select1.php", { jud: judul }, function(result){
        	$("#hasil").html(result);
    	});
    	$("#emo").off('click');
    		
	});
	</script>
	<?php
	include"select1.php";
	}else{
	echo"failed";
	}
}
?>