
if (file_exists("CookieLuuTam.txt")){unlink("CookieLuuTam.txt");}
error_reporting(0);
system('clear');
$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m";
system ('clear');
$loiii = 0;
echo "Loading (4)   \n";
function cc($vanban)
{$str = strlen($vanban); for($i=0;$i <= $str ; $i++){echo $vanban[$i] ; usleep(800) ; }
return 0;}
$icon1= "\033[1;37m•[✩]➭ \033[1;37m";
$icon2= "\033[1;33m•[۞] ➭ : \033[1;37m";
echo "Đang Check ip internet           \r";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
$banner = "\033[1;33m╔══════════════════════════════════════════════════════════════════════╗\n║   \033[38;5;225m╔╗ ╔═╗   ╔╗ ╔═╗    \033[38;5;196m【】                                           \033[1;33m ║\n║\033[1;33m   \033[38;5;189m║║ ║ ╝   ║║ ║ ╝    \033[38;5;197m【】 \033[38;5;119m 『 —————————————————————————————————————— \033[1;33m║\n\033[1;33m║\033[38;5;153m   ║║ ║║    ║║ ║║     \033[38;5;198m【】 \033[3;37m\033[38;5;087m    Made by: \033[3;37mKhang x Khôi     \033[0m             \033[1;33m║\n\033[1;33m║ \033[38;5;117m  ║║══╝    ║║══╝     \033[38;5;199m【】     \033[3;37m\033[38;5;039mNhóm zalo: \033[1;37mhttps://zalo.me/g/zvzsrw324 \033[0m\033[1;33m║\n\033[1;33m║ \033[38;5;081m  ║║══╗    ║║══╗     \033[38;5;200m【】     \033[3;37m\033[38;5;45mMua key vip: \033[1;37m0377205462 \033[0m               \033[1;33m║\n\033[1;33m║\033[38;5;045m   ║║ ║║    ║║ ║║     \033[38;5;201m【】  \033[3;37m\033[38;5;051m   Phiên bản:\033[1;37m V5.2  \033[0m                      \033[1;33m║\n\033[1;33m║ \033[38;5;51m  ║║ ║ ╗   ║║ ║ ╗    \033[38;5;206m【】\033[38;5;119m   ————————————————————————————————————— 』 \033[1;33m║\n\033[1;33m║  \033[38;5;123m ╚╝ ╚═╝   ╚╝ ╚═╝    \033[38;5;207m【】					       \033[1;33m║\n\033[1;33m╚══════════════════════════════════════════════════════════════════════╝\n\033[1;37m$greenb                     Ip của bạn là $ip \n";
function delay($delay)
{
    $a = "81000";
    $b = "122000";
    if ($delay == 0) {
        $a = "0";
        $b = "0";
    }
    for ($time = $delay; $time > -1; $time--) {
        echo "          \r\033[1;93mDKhoi\033[1;96m●           \033[1;95mL         \033[1;91m[\033[1;93m $time\033[1;91m ] ";
        usleep($a);
        echo "          \r\033[1;91mDKhoi\033[0;93m ●          \033[0;96mLO        \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;92mDKhoi\033[0;91m  ●         \033[0;93mLOA       \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;93mDKhoi\033[0;92m   ●        \033[0;91mLOAD      \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;94mDKhoi\033[0;93m    ●       \033[0;92mLOADI     \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m     ●      \033[0;93mLOADIN    \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;91mDKhoi\033[0;95m      ●     \033[0;96mLOADING   \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($b);
        echo "          \r\033[1;94mDKhoi\033[0;93m       ●    \033[0;92mLOADIN    \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m        ●   \033[0;93mLOADI     \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;94mDKhoi\033[0;93m        ●   \033[0;92mLOAD      \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m         ●  \033[0;93mLOA       \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m          ● \033[0;93mLO        \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m          ● \033[0;93mL         \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "          \r\033[1;95mDKhoi\033[0;94m           ●\033[0;93m          \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
    }
       echo "          \r\033[1;93mDKhoi\033[0;92m  ⊙﹏⊙  \033[0;91m Chờ Xíu Nha                       \r";
usleep(30000);
	
}
$activeb = 0 ; $codeactive1 = 0;
$ah = fopen('activestatus.txt' , "w");
fwrite ($ah, "0");
fclose ($ah);
echo $green."Đang vô tool vui lòng đợi "; 
system ('clear');
$loiii = 0;
$tongjobs=0;
$icon1= "\033[1;37m•[✩]➭ \033[1;37m";
$icon2= "\033[1;33m•[۞] ➭ :\033[1;37m";
echo $green."Đang vô tool vui lòng đợi ";
system('clear');
$loiii = 0;
date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;
function like($id,$cookie,$csrftoken){
	$url = "https://www.instagram.com/api/v1/web/likes/".$id."/like/";
	$header = array(
	"Host:www.instagram.com",
	 "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/111.0.5563.57 Mobile Safari/537.36",
	 "viewport-width:360",
	 "content-type:application/x-www-form-urlencoded",
	"accept:*/*",
	"x-requested-with:XMLHttpRequest",
	"x-asbd-id:198387",
	"x-csrftoken:".$csrftoken,
	"sec-ch-prefers-color-scheme:light",
	"x-ig-app-id:1217981644879628",
	"x-asbd-id:198387",
	"cookie:".$cookie,
	
	);
	$text = post_type3($url, $header);

	if ( $text["status"] == "ok" ){
		echo " LIKE Thành Công               \r";
		return "ok";
	}else if ( $text["spam"] ){
		return "die";
	}else{
		 print_r($text);
		return "ko";
		
	}
}

function follow($id,$cookie,$csrftoken){
	$url = "https://www.instagram.com/api/v1/friendships/create/".$id."/";
	$tsm = array (
	"Host:www.instagram.com",
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 Mobile Safari/537.36",
	"viewport-width:360",
	"content-type:application/x-www-form-urlencoded",
	"accept:*/*",
	"x-requested-with:XMLHttpRequest",
	"x-asbd-id:129477",
	"x-csrftoken:".$csrftoken,
	"sec-ch-prefers-color-scheme:light",
	"x-ig-app-id:1217981644879628",
	"origin:https://www.instagram.com",
	"cookie:".$cookie,
	);
	$data = "container_module=profile&nav_chain=PolarisProfileRoot%3AprofilePage%3A1%3Avia_cold_start&user_id=".$id;
	$text = post_type2($url, $tsm, $data);
	if ( $text["status"] == "ok" ){
		echo " FOLLOW Thành Công              \r";
		return "ok";
	}else if ( $text["spam"] ){
		return "die";
	}else{
		return "ko";
	}
}

function get_info_ig($cookie){
  if (!strpos($cookie, 'ds_user_id') || !strpos($cookie, 'csrftoken')){
   return "cookie_err";
  }
  $idig = trim(explode(';',explode('ds_user_id=', $cookie)[1])[0]);
  $csrftoken = trim(explode(';',explode('csrftoken=', $cookie)[1])[0]);
  #End_xu_ly
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://i.instagram.com/api/v1/users/'.$idig.'/info/');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
  $headers = array();
  $headers[] = 'Authority: i.instagram.com';
  $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"93\", \" Not;A Brand\";v=\"99\", \"Chromium\";v=\"93\"';
  $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
  $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36';
  $headers[] = 'Accept: */*';
  $headers[] = 'X-Asbd-Id: 198387';
  $headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
  $headers[] = 'X-Ig-App-Id: 936619743392459';
  $headers[] = 'Origin: https://www.instagram.com';
  $headers[] = 'Sec-Fetch-Site: same-site';
  $headers[] = 'Sec-Fetch-Mode: cors';
  $headers[] = 'Sec-Fetch-Dest: empty';
  $headers[] = 'Referer: https://www.instagram.com/';
  $headers[] = 'Accept-Language: en-US,en;q=0.9';
  $headers[] = 'Cookie: '.$cookie;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  if (curl_errno($ch)) {
  echo 'unknown\n';
  }
  curl_close($ch);

  if (!strpos($result, '"status":"ok"')){
 return "cookie_err";
  }
  $data = json_decode($result, true)['user'];
  $idig = $data['pk'];
  $username = $data['username'];
  $namefull = $data['full_name'];
  echo "\033[1;33mĐăng nhập thành công \033[1;32m $namefull \033[1;33mUsername:\033[1;32m $username\n".$whiteb;
  
 return $idig.'|'.$username.'|'.$cookie.'|'.$csrftoken;
 
}


function nhan_job($authorization,$id,$id_job){
	$data = '{"instagram_users_advertising_id":'.$id_job.',"instagram_account_id":'.$id.',"async":true,"data":null}';
	$url = "https://dev.golike.net/api/advertising/publishers/instagram/complete-jobs";
	$head = array(
	"Host:dev.golike.net",
	"content-length:96",
	"accept:application/json, text/plain, */*",
	"t:VFZSWk5FOVVVWGROUkUxNVQwRTlQUT09",
	"authorization:".$authorization,
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 Mobile Safari/537.36",
	"content-type:application/json;charset=UTF-8",
	"origin:https://app.golike.net",
	);
	$tt = post_type2($url, $head, $data);
	
	return $tt;
}
function get_job($authorization,$id){
	$url = "https://dev.golike.net/api/advertising/publishers/instagram/jobs?instagram_account_id=".$id."&data=null";
	$head = array (
	"Host:dev.golike.net",
	"accept:application/json, text/plain, */*",
	"t:VFZSWk5FOVVVWGROUkVsM1RtYzlQUT09",
	"authorization:".$authorization,
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 Mobile Safari/537.36",
	"content-type:application/json;charset=utf-8",
	"origin:https://app.golike.net",
	);
	$tt = post_type($url, $head);
	return $tt;
}
function get_id($authorization){
	$_SESSION['id'] = [] ;
	$_SESSION['ig'] = [] ;
	$url = "https://sv5.golike.net/api/instagram-account";
	$header = array(
	"Host:sv5.golike.net",
	"accept:application/json, text/plain, */*",
	"t:VFZSWk5FOVVVWGROUkVsM1RtYzlQUT09",
	"authorization:".$authorization,
	"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.196 Mobile Safari/537.36",
	"content-type:application/json;charset=utf-8",
	"origin:https://app.golike.net",
	);
	$tt = post_type($url, $header);
	if ($tt["success"]== 200 ){
		$sl = count($tt["data"]);
		for ($so = 0; $so < $sl ; $so++) {
		$id = $tt["data"][$so]["id"];
		$instagram_username = $tt["data"][$so]["instagram_username"];
		
		
		array_push($_SESSION['ig'], $instagram_username);
		array_push($_SESSION['id'], $id);
		
		}
		
	}else{
		echo " GET THÔNG TIN CẤU HÌNH THẤT BẠI           \r";
	}
	
}
function post_type2($url, $tsm, $data){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $js;
}
function post_type($url, $tsm){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $js;
}

function post_type3($url, $tsm){
	##$ip = explode(':',$ipp);
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  ##CURLOPT_PROXY => $ip[0],
  ##CURLOPT_PROXYPORT => $ip[1],
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $tsm));
$mr2 = curl_exec($mr); curl_close($mr);
$js = json_decode($mr2,true);
return $js;
}
$van = $icon2;
cc ($banner);
If (file_exists("authorizations.txt")){
echo $icon1. "Bạn có muốn dùng lại Authorization ? ". $trang . "(Enter để dùng lại, N để thay)\n$van ";
$trl = trim(fgets(STDIN)); 
if ($trl == "N" or $trl == "n") {echo $van." Authorization : ";
$authorization = trim(fgets(STDIN));} else {
  $myfile = fopen("authorizations.txt", "r");
 $line = fgets($myfile);
 $authorization = $line;
fclose($myfile);}}
else {
echo $van." Authorization : ";

$authorization = trim(fgets(STDIN));}
echo $icon1.$lightblueb."Đang Login          \r";
$url = "https://sv5.golike.net/api/users/me";
$tsm = array(
"Host:sv5.golike.net",
"accept:application/json, text/plain, */*",
"authorization:".$authorization,
"user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.5735.130 Mobile Safari/537.36",
"content-type:application/json;charset=utf-8",
"origin:https://app.golike.net",
);
$home = post_type($url, $tsm);

if ($home["success"]== 200 ){
	echo $icon1.$greenb."ĐĂNG NHẬP THÀNH CÔNG \n";
	$username = $home["data"]["username"];
	$coin = $home["data"]["coin"];
	$myfile = fopen("authorizations.txt", "w");
  $txt = $authorization;
 fwrite($myfile, $txt);
 fclose($myfile);
}else{
	echo $icon1.$redb."ĐĂNG NHẬP THẤT BẠI \n";
	exit;
}

$gop_data = [];
system('clear');
cc ($banner);
echo $van." Account : ".$trang.$username." \n";
echo $van." SỐ DƯ : ".$trang.$coin." \n";
echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
$file = 'SettingIgGolikeByKhoi.txt';
if (file_exists($file)) {$caidatdelay = fread(fopen($file, "r"), filesize($file));
    $delaytimjobs1 = explode("|", $caidatdelay)[0];
    $delaya1 = explode("|", $caidatdelay)[1];
    $delayb1 = explode("|", $caidatdelay)[2];
    $doi1 =  explode("|", $caidatdelay)[3];
  echo $yellowb."Enter Để Sử Dụng Lại Setting Cũ\n"
;}
else {$delaytimjobs1 = '10'; $delaya1 = '10'; $delayb1 = '20' ; $doi1 = '5' ;}
$ah = fopen($file , "w");
echo $van." Nhập Delay Tìm Jobs (\033[1;32m".$delaytimjobs1.$whiteb."): ".$trang;
$delaytimjobs = trim(fgets(STDIN));
if ($delaytimjobs == "") {$delaytimjobs = $delaytimjobs1;}
fwrite ($ah, $delaytimjobs."|");
echo $van." Nhập Delay Min (\033[1;32m".$delaya1.$whiteb."): ".$trang;
$delaya = trim(fgets(STDIN));
if ($delaya == "") {$delaya = $delaya1;}
fwrite ($ah, $delaya."|");
echo $van." Nhập Delay Max (\033[1;32m".$delayb1.$whiteb."): ".$trang;
$delayb = trim(fgets(STDIN));
if ($delayb == "") {$delayb = $delayb1;}
fwrite ($ah, $delayb."|");
echo $van." Bao Nhiêu Job Thì Đổi Acc (\033[1;32m".$doi1.$whiteb."): ".$trang;
$doi = trim(fgets(STDIN));
if ($doi == "") {$doi = $doi1;}
fwrite ($ah, $doi."|");
fclose ($ah);
$file_luu_ck = 'CookieGolikeIG.txt';
if (file_exists($file_luu_ck))
{echo $icon2." Bạn có muốn dùng lại cookie cũ? (Y/N):\n".$icon1; 
$cookiecu11 = trim(fgets(STDIN)); }
else { $cookiecu11 = "n";};
if ($cookiecu11 == "y" or $file_luu_ck == "Y") {
for ($time = 0; $time <= 99999999999; $time++) {
  $file_ck = fread(fopen($file_luu_ck, "r"), filesize($file_luu_ck));
 $nhap1 = explode("| ",$file_ck)[$time];
 if ($nhap1 == "") {break;}
 echo $lightblueb. "Cookie Thứ $time";
				$ck = get_info_ig($nhap1);
				$giainen = explode('|', $ck);
				if (!$giainen){
					echo $van." Cookie Không Hợp Lệ \n";
				}else{
					$id_instagram = $giainen[1];
					$r = get_id($authorization);
					$tk_so = array_search($id_instagram, $_SESSION['ig']);
					fwrite(fopen("CookieLuuTam.txt", "a"), $nhap1."| ");
				
					$id = $_SESSION['id'][$tk_so];
					$tong = $ck.'|'.$id;
					array_push($gop_data, $tong);
				}
				
  }
  $cktam = file_get_contents('CookieLuuTam.txt');
fwrite(fopen($file_luu_ck, "w"), $cktam);
  echo $icon1."Đã xoá nhưng cookie Die\n";
 echo "Bạn Có muốn thêm Cookie? (Y/N) \n $icon2"; 
 $themcookie = trim(fgets(STDIN));
 if ($themcookie == "y" or $themcookie == "Y") {
   while(true){
	$s= $s+1 ;
	echo $van." Cookie Instagram Thứ $s : ".$vang;
	$nhap = trim(fgets(STDIN));
	if ( $nhap == ""){
	  fwrite(fopen($file_luu_ck, "a"), " ");
	 	break;
	}else{
### echo cookie 
		$ck = get_info_ig($nhap);
		$giainen = explode('|', $ck);
		if (!$giainen){
			echo $van." Cookie Không Hợp Lệ \n";
			continue ;
		}else{
			$id_instagram = $giainen[1];
			$r = get_id($authorization);
			$tk_so = array_search($id_instagram, $_SESSION['ig']);
			$id = $_SESSION['id'][$tk_so];
			if (!$id){
				echo $van." TÀI KHOẢN CHƯA ĐƯỢC CẤU HÌNH VÀO GOLIKE \n";
				continue;
			}
			 fwrite(fopen($file_luu_ck, "a"), $nhap."|");
			$tong = $ck.'|'.$id;
			array_push($gop_data, $tong);
			
		}
	}
 }
 }
 
				system ('clear');cc ($banner);
	  echo $greenb."\n| STT |". $cam."Thời gian|".$yellow." Loại |". $trang. " Id Jobs |".$red. "Trạng thái |".$lightblueb." Tên tài khoản | \n";
			}
if ($cookiecu11== "N" or $cookiecu11 == 'n') {
  unlink($file_luu_ck);
while(true){
	$s= $s+1 ;
	echo $van." Cookie Instagram Thứ $s : ".$vang;
	$nhap = trim(fgets(STDIN));
	if ( $nhap == ""){
	  fwrite(fopen($file_luu_ck, "a"), " ");
	 	break;
	}else{
### echo cookie 
		$ck = get_info_ig($nhap);
		$giainen = explode('|', $ck);
		if (!$giainen){
			echo $van." Cookie Không Hợp Lệ \n";
			continue ;
		}else{
			$id_instagram = $giainen[1];
			$r = get_id($authorization);
			$tk_so = array_search($id_instagram, $_SESSION['ig']);
			$id = $_SESSION['id'][$tk_so];
			if (!$id){
				echo $van." TÀI KHOẢN CHƯA ĐƯỢC CẤU HÌNH VÀO GOLIKE \n";
				continue;
			}
			 fwrite(fopen($file_luu_ck, "a"), $nhap."|");
			$tong = $ck.'|'.$id;
			array_push($gop_data, $tong);
			
		}
	}
}system ('clear');cc ($banner);
	  echo $greenb."\n| STT |". $cam."Thời gian|".$yellow." Loại |". $trang. " Id Jobs |".$red. "Trạng thái |".$lightblueb." Tên tài khoản | \n";
}

 while(true) {
	foreach ($gop_data as $haha) {
		if (!$haha){
			break;
		}
		$giainen = explode('|', $haha);
		$idig = $giainen[0];
		$id_instagram = $giainen[1];
		$cookie = $giainen[2];
		$csrftoken = $giainen[3];
		$id_gl = $giainen[4];
		####tìm job
		while(true){
			$list = get_job($authorization,$id_gl);
			
			if ($list["status"] == 200 ){
				$id_nhan = $list["data"]["id"];
				$object_id = $list["data"]["object_id"];
				$type = $list["data"]["type"];
				if ( $type == "follow"){
					$fl = follow($object_id,$cookie,$csrftoken);
					if ($fl = "ok"){
						echo $van." FOLLOW Thành Công               \r";
						sleep(1);
					}else if($fl == 'die'){
						echo $van." Tài Khoản Bị Block              \r";
						$tk_so = array_search($haha, $gop_data);
						unset($data_ig[$tk_so]);
						break;
					}else{
						echo $van." LỖI                   \r";
						
						
					}
				}else if( $type == "like"){
					$id_like = $list["data"]["object_data"];
					$js = json_decode($id_like,true);
					$id_l = $js["id"];
					
					$like = like($id_l,$cookie,$csrftoken);
					
					if ($like == 'die'){
						echo $van." Tài Khoản Bị Block                  \r";
						$tk_so = array_search($haha, $gop_data);
						unset($data_ig[$tk_so]);
						break;
					}
					
				}else{
					echo $van." KHÔNG THỂ LÀM NHIỆM VỤ $type              \r";
					continue;
				}
				$nhan_coin = nhan_job($authorization,$id_gl,$id_nhan);
				if ($nhan_coin["status"]== 200 ){
					$type_2 = $nhan_coin["data"]["type"];
					$gio = date("H:i");
					$tt = $tt+1;
					$p= $greenb."| $tt |". $cam."$gio|".$yellow." $type_2 |". $trang. "$object_id|".$red. "Hoàn thành|".$lightblueb." $id_instagram | \n";cc($p);
					if ($tt % $doi == 0){
						break;
					}
					$delay = rand($delaya,$delayb);
 echo delay($delay);
				}else{
					echo $van." NHẬN THẤT BẠI,Đang nhận lại            \r";
					
 echo "Làm lại nhiêhm vụ \n";
 echo delay(15);
					continue;
				}
				
			}else{
for ($time = $delaytimjobs; $time > -1; $time--) {
  echo "          \r\033[1;93m Hết nhiệm vụ,lấy nhiện vụ mới sau : \033[1;93m $time           \r";
   sleep(1);}
				break;
			}
			
		}
		
	}
 }