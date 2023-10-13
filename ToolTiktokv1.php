
echo "Loading...\r";
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
echo "Đang Check ip internet \r";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
$file_luu_ip = "/sdcard/Android/datas/active/keytool/makeytool/ip.txt";
$banner = "\033[1;33m╔══════════════════════════════════════════════════════════════════════╗\n║   \033[38;5;225m╔╗ ╔═╗   ╔╗ ╔═╗    \033[38;5;196m【】                                           \033[1;33m ║\n║\033[1;33m   \033[38;5;189m║║ ║ ╝   ║║ ║ ╝    \033[38;5;197m【】 \033[38;5;119m 『 —————————————————————————————————————— \033[1;33m║\n\033[1;33m║\033[38;5;153m   ║║ ║║    ║║ ║║     \033[38;5;198m【】 \033[3;37m\033[38;5;087m    Made by: \033[3;37mKhang x Khôi     \033[0m             \033[1;33m║\n\033[1;33m║ \033[38;5;117m  ║║══╝    ║║══╝     \033[38;5;199m【】     \033[3;37m\033[38;5;039mNhóm zalo: \033[1;37mhttps://zalo.me/g/zvzsrw324 \033[0m\033[1;33m║\n\033[1;33m║ \033[38;5;081m  ║║══╗    ║║══╗     \033[38;5;200m【】     \033[3;37m\033[38;5;45mMua key vip: \033[1;37m0377205462 \033[0m               \033[1;33m║\n\033[1;33m║\033[38;5;045m   ║║ ║║    ║║ ║║     \033[38;5;201m【】  \033[3;37m\033[38;5;051m   Phiên bản:\033[1;37m V5.2  \033[0m                      \033[1;33m║\n\033[1;33m║ \033[38;5;51m  ║║ ║ ╗   ║║ ║ ╗    \033[38;5;206m【】\033[38;5;119m   ————————————————————————————————————— 』 \033[1;33m║\n\033[1;33m║  \033[38;5;123m ╚╝ ╚═╝   ╚╝ ╚═╝    \033[38;5;207m【】					       \033[1;33m║\n\033[1;33m╚══════════════════════════════════════════════════════════════════════╝\n\033[1;37m$greenb                     Ip của bạn là $ip \n";
function delay($delay)
{
    $a = "91000";
    $b = "142000";
    if ($delay == 0) {
        $a = "0";
        $b = "0";
    }
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;93mDKhoi\033[1;96m●           \033[1;95mL         \033[1;91m[\033[1;93m $time\033[1;91m ] ";
        usleep($a);
        echo "\r\033[1;91mDKhoi\033[0;93m ●          \033[0;96mLO        \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;92mDKhoi\033[0;91m  ●         \033[0;93mLOA       \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;93mDKhoi\033[0;92m   ●        \033[0;91mLOAD      \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;94mDKhoi\033[0;93m    ●       \033[0;92mLOADI     \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m     ●      \033[0;93mLOADIN    \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;91mDKhoi\033[0;95m      ●     \033[0;96mLOADING   \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($b);
        echo "\r\033[1;94mDKhoi\033[0;93m       ●    \033[0;92mLOADIN    \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m        ●   \033[0;93mLOADI     \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;94mDKhoi\033[0;93m        ●   \033[0;92mLOAD      \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m         ●  \033[0;93mLOA       \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m          ● \033[0;93mLO        \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m          ● \033[0;93mL         \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m           ●\033[0;93m          \033[0;91m[\033[0;93m $time\033[0;91m ] ";
        usleep($a);
    }
       echo "\r\033[1;93mDKhoi\033[0;92m  ⊙﹏⊙  033[0;91m Chờ Xíu Nha             \r";
usleep(10000);
	
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$nau= "\e[38;5;94m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 200;
} else {
	$_SESSION['load'] = 0;
}
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1500;
	$_SESSION['delay'] = 2000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 1000;
}
$k = "0";
$vt = "0";
function post1($url, $tsm, $data)
{
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $mr2;
}

function get_job1($type)
{

    $url = "https://traodoisub.com/ex/" . $type . "/load.php";
    $tsm = array(
        "Host:traodoisub.com",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "accept:*/*",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",

    );

    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm,
        CURLOPT_ENCODING => true));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);

    return $json;
}

function nhan_1($id, $type, $loai)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:55",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",

    );
    $url = "https://traodoisub.com/ex/" . $type . "/cache.php";
    $data = "id=" . $id . "&type=" . $loai . "";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}
function nhan_2($type)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:18",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/" . $type . "/",
    );
    $url = "https://traodoisub.com/ex/" . $type . "/nhantien.php";
    $data = "key=0257272C744254";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}

function nhan_3($id)
{
    $tsm = array(
        "Host:traodoisub.com",
        "content-length:53",
        "accept:*/*",
        "x-requested-with:XMLHttpRequest",
        "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
        "content-type:application/x-www-form-urlencoded; charset=UTF-8",
        "sec-fetch-site:same-origin",
        "sec-fetch-mode:cors",
        "sec-fetch-dest:empty",
        "referer:https://traodoisub.com/ex/tiktok_like/",
    );
    $url = "https://traodoisub.com/ex/tiktok_like/cache.php";
    $data = "id=$id&type=love";
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $json;
}
function get_xu1()
{
    $url = "https://traodoisub.com/scr/user.php";
    $head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/home/");
    $ch = curl_init();
    curl_setopt_array($ch,
        array(CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_COOKIEFILE => "cookietdstt.txt",
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_ENCODING => true));
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    $sodu = $json["xu"];
    return $sodu;
}
function get_link1($url, $tsm)
{
    $mr = curl_init();
    curl_setopt_array($mr, array(
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $tsm,
        CURLOPT_ENCODING => true));
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $json = json_decode($mr2, true);
    return $mr2;
}



function line($sleep)
{
    echo "\r";
}
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
cc ($banner);
if (file_exists('AccTDS.txt')) {
    $_SESSION["checktk"] = file_get_contents('AccTDS.txt');
echo "Bạn có muốn dùng lại tài khoản TDS cũ? (Y/N) : ";
    $choice = trim(fgets(STDIN));

    if ($choice == 'n' or $choice == 'N') {
     
        @system('rm AccTDS.txt');

        
        logo(0);
        line(0);
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mTài Khoản TDS: \033[93m";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mMật Khẩu  TDS: \033[93m";
        $_SESSION['password'] = trim(fgets(STDIN));

        //goi ham nhap tk mk
    } else {
	$file_accluu = "AccTDS.txt" ;
	$file_tikuu = fread(fopen($file_accluu, "r"), filesize($file_accluu));
    $nameacc = explode("|", $file_tikuu)[0];
    $passwork = explode("|", $file_tikuu)[1];
        $_SESSION["username"] = $nameacc;
        $_SESSION['password'] = $passwork;
    }

} else {
	echo $lightblueb;
	echo $icon1."Tên tài khoản TDS : ";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo $icon1. "Mật khẩu tài khoản TDS : ";
        $_SESSION['password'] = trim(fgets(STDIN));
    
}



do {
    if ($source == "1" || $_SESSION["username"] == "" || $_SESSION['password'] == "") {
  
        echo $icon1. "Tài khoản hoặc mật khẩu không đúng \n";
        line(0);
        echo $icon1."Tên tài khoản TDS : ";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo $icon1. "Mật khẩu tài khoản TDS : ";
        $_SESSION['password'] = trim(fgets(STDIN));
    }
    echo $redb."Đang Login    \r";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookietdstt.txt");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
    $login = array('username' => $_SESSION['username'], 'password' => $_SESSION['password'], 'submit' => ' Đăng Nhập');
    curl_setopt($ch, CURLOPT_POST, count($login));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookietdstt.txt");
    $source = curl_exec($ch);
    curl_close($ch);
} while ($source == "1" || $_SESSION["username"] == "" || $_SESSION['password'] == "");
fwrite(fopen("AccTDS.txt", "w"), $_SESSION["username"]."|".$_SESSION['password']);
$url = "https://traodoisub.com/scr/user.php";
$head = array("Host: traodoisub.com", "accept: application/json, text/javascript, */*; q=0.01", "x-requested-with: XMLHttpRequest", "save-data: on", "user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36", "sec-fetch-site: same-origin", "sec-fetch-mode: cors", "sec-fetch-dest: empty", "referer: https://traodoisub.com/home/");
$ch = curl_init();
curl_setopt_array($ch,
    array(CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "cookietdstt.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => true));
$data = curl_exec($ch);
curl_close($ch);
echo $yellowb."Login Thành Công";
$json = json_decode($data, true);
$sodu = $json["xu"];
@system('clear');
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
cc ($banner);
$tktt = $json["idtt"];
echo $icon1."Tên tài khoản : $greenb". $_SESSION["username"] . " \n";
echo $icon1."Số Xu hiện có  :$greenb $sodu\n";


/// url
$url_1 = "https://traodoisub.com/view/chtiktok/";
$url_2 = "https://traodoisub.com/scr/tiktok_datnick.php";

$tsm_1 = array(
    "Host:traodoisub.com",
    "upgrade-insecure-requests:1",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
    "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "referer:https://traodoisub.com/view/setting/",

);
$tsm_2 = array(
    "Host:traodoisub.com",
    "content-length:25",
    "x-requested-with:XMLHttpRequest",
    "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1912 Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/97.0.4692.70 Mobile Safari/537.36",
    "content-type:application/x-www-form-urlencoded; charset=UTF-8",
    "sec-fetch-site:same-origin",
    "sec-fetch-mode:cors",
    "sec-fetch-dest:empty",
    "referer:https://traodoisub.com/view/chtiktok/",

);
$listtt = array();
$file_tiktokluu = "Taikhoantiktok.txt";
        if (file_exists($file_tiktokluu))
 {echo "Tài khoản đã nhập\n" ;   
 
for ($time = 0; $time <= 99999999999; $time++) {
 $file_tiktok = fread(fopen($file_tiktokluu, "r"), filesize($file_tiktokluu));
 $nhap1 = explode("|",$file_tiktok)[$time];
 echo $cam."  ". $nhap1   ;
 array_push($listtt,$nhap1);
 if ($nhap1 == " ") {break;}
}
}

echo "\n";
echo $icon1."Nhập ID tiktok tài khoản cần chạy (Ví dụ dkhoi) \n$icon2";
    $numch = trim(fgets(STDIN));
    
    {fwrite(fopen("Taikhoantiktok.txt", "w"),$numch."| ");}

    
    
    echo "Đang Kiểm Tra acc";
    while (true) {
        
        $k++;
        $t = $t + 1;
        $ch = get_link1($url_1, $tsm_1);
        $link = explode('"', explode('<th class="align-middle text-center white-space-nowrap id"><a href="', $ch)[$k])[0];
        if ($link == "") {
            break;
        } else {
            $tk = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];

            $id = explode('"', explode('class="align-middle text-center fs-0 white-space-nowrap action" id="', $ch)[$k])[0];

        }
        


        if ($numch == $tk) {
            $data_1 = explode('"', explode('class="align-middle text-center fs-0 white-space-nowrap action" id="', $ch)[$k])[0];
            $tkprin = explode(' ', explode('https://www.tiktok.com/@', $link)[1])[0];
            
        
	
        }
    }
echo "\rAcc tồn tại \r";
echo $yellowb."Tool Tim + Follow\n";
echo $icon1."Nhận Xu Sau Bao Nhiêu Nhiệm Vụ \033[97m(\033[93mNhập 8 Trở Lên\033[97m)".$luc.":\033[93m ";
do {
    $nxu = trim(fgets(STDIN));
    if (!is_numeric($nxu) || $nxu < 9 || $nxu > 40) {
        echo "$do Nhập Sai! Nhập Lại: $vang";
    }
} while (!is_numeric($nxu) || $nxu < 8 || $nxu > 40);

echo $icon1."Vui Lòng Nhập Delay:\033[93m";
$dl = trim(fgets(STDIN));



$data_2 = "iddat=" . $data_1;

$chtt = post1($url_2, $tsm_2, $data_2);
if ($chtt == "1") {
 system ('clear'); 
 echo $banner;
    echo  " Đang chạy ID:\033[93m $tkprin \n";
  
} else {
    echo "$do $data_1 Thất Bại, Nhập Sai id Tiktok \033[92mHoặc id \033[93m$numch \033[92mChưa Được Thêm Vào Cấu Hình \033[93m{$_SESSION["username"]}\n";
    exit;
}
while (true) {
        $get = get_job1("tiktok_follow");
        $linksub = $get["data"][0]["link"];
        $idsub = $get["data"][0]["id"];

        $link = explode(' ', explode('https://www.tiktok.com/@', $linksub)[1])[0];
        if ($link == "") {
            echo "\r" .  "Hết Job Follow Rồi                  ";
        }
        else {
            $vt++;
            $Giojob = date("h:i:s");
$tongjobs++ ;         echo "\r$yellowb"."Follow |"."$lightblueb $link |". $cam." $Giojob           \n";
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                echo   $whiteb."Đang Chuyển Hướng Tới Tiktok      ";
                @system('xdg-open https://www.tiktok.com/@' . $link);
            } else {
                echo   $whiteb."Đang Chuyển Hướng Tới Tiktok";
                @system('cmd /c start https://www.tiktok.com/@' . $link);
            }

            $idnhan = nhan_1($idsub, "tiktok_follow", "follow");
            if ($vt % $nxu == 0) {
                for ($m = 2; $m > -1; $m--) {
                    sleep(1);
                }
                $nhan = nhan_2("tiktok_follow");
                $xong = $nhan["msg"];
                $xu = get_xu1();

                if (explode('thành công ', $xong)[0] == 'Nhận ') {
                    echo "\r";
                    
                    $xujob = $xu - $sodu;
                    $getxu = explode(' xu', explode('Nhận thành công ', $xong)[1])[0];
               $tongxu = $tongxu + $getxu;         echo $whiteb ." ══════════════════════════════════════════════════════════════\n";     
                    echo "\r".$whiteb."| $tongjobs |".$lightblueb."Nhận $getxu Xu |"."$greenb Tổng Xu đã nhận $tongxu |".$whiteb." Số xu có trong acc $xu |"."$cam $tgan\n";
                    echo $whiteb." ══════════════════════════════════════════════════════════════\n";
                    if ($xong == "Nhận thành công 0 xu\n Tool đã dừng, enter để tiếp tục") {
  $jsuwusbb = trim(fgets(STDIN));
                    }
                }
        }
        delay ($dl);
    }

}
