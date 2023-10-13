
system('clear');
echo "Loading...\r";
$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m";
system ('clear');
$loiii = 0;
echo "Loading (4)   \n";
function ccc($vanban)
{$str = strlen($vanban); for($i=0;$i <= $str ; $i++){echo $vanban[$i] ; usleep(800) ; }
return 0;}
$icon1= "\033[1;37m•[✩]➭ \033[1;37m";
$icon2= "\033[1;33m•[۞] ➭ : \033[1;37m";
echo "Đang Check ip internet \r";
$ip = file_get_contents('http://kiemtraip.com/raw.php');
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

$xnhac = "\033[1;96m";
$luc = "\033[1;92m";
$hong = "\033[1;95m";
$do = "\033[1;91m";
$vang = "\033[1;93m";
$trang = "\033[1;97m";
function info_jasbcbajhsbjcbakjbckjasw($user)

{   


    $header = array(
        "Host: www.tiktok.com",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.129 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "dnt: 1",
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PORT, "443");
    curl_setopt($ch, CURLOPT_URL, "https://www.tiktok.com/@" . $user);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_COOKIE, "tt_csrf_token=HoFmgjQy-RjMDo2PK2fWg_QCZinol2UuAgZI;__tea_cache_tokens_1988={%22_type_%22:%22default%22%2C%22user_unique_id%22:%227131701870360397314%22%2C%22timestamp%22:1660478760852};passport_csrf_token=83ec83716cbfd6e61b0544d31ac0c419;passport_csrf_token_default=83ec83716cbfd6e61b0544d31ac0c419;s_v_web_id=verify_e3dadc9afdf5432cae6e87ec600dbee5;cmpl_token=AgQQAPOFF-RO0o-2hg5lJJ04-Jl8I31NP4AOYMXQ4w;sid_guard=bb939380b1f1e5c0f14f66afaac4730e%7C1660478852%7C5184000%7CThu%2C+13-Oct-2022+12%3A07%3A32+GMT;uid_tt=65820634c0a5dbcb8d49d63722a8b43edcbb93f37b9b29f5e517b38227e704ee;uid_tt_ss=65820634c0a5dbcb8d49d63722a8b43edcbb93f37b9b29f5e517b38227e704ee;sid_tt=bb939380b1f1e5c0f14f66afaac4730e;sessionid=bb939380b1f1e5c0f14f66afaac4730e;sessionid_ss=bb939380b1f1e5c0f14f66afaac4730e;sid_ucp_v1=1.0.0-KGEyNzk2MmFiOWMxY2FjOTYxNmFhYTYzMGMxYjQxMTAxMTg5Y2Q3NzIKIAiBiNnonpWaxF8QhMvjlwYYswsgDDC_0qH8BTgCQO8HEAMaBm1hbGl2YSIgYmI5MzkzODBiMWYxZTVjMGYxNGY2NmFmYWFjNDczMGU;ssid_ucp_v1=1.0.0-KGEyNzk2MmFiOWMxY2FjOTYxNmFhYTYzMGMxYjQxMTAxMTg5Y2Q3NzIKIAiBiNnonpWaxF8QhMvjlwYYswsgDDC_0qH8BTgCQO8HEAMaBm1hbGl2YSIgYmI5MzkzODBiMWYxZTVjMGYxNGY2NmFmYWFjNDczMGU;store-idc=useast2a;store-country-code=vn;tt-target-idc=alisg;csrf_session_id=7711fc29cf589d1b5c37cf82f7db814a;_gcl_au=1.1.1885955064.1660610702;_abck=15FD8660BB6DAC8140BC0497B464BDDA~-1~YAAQJFBNG3rOJmWCAQAA4cVjpQgVtL3u8Gz5hkV+ZywQWQmDhWekQO0dXObY4QRUhBgL4PTI3dROVx/jit/55qw0fu8tRx5bZu3ooo3Vo7j6fu0AItEaj+fw8BlLg4VZxBBoZgmBBLN0EqfOmzj3hw1KI7IuBXY1YgvL6j6zgUtSv99VbAzeKLlwSxYLsg2iIHpfUkZxVww1GB2BC+Axaju1uoanr+s4FgPnVPuriCsNRX76zCPa3fg0fRomFYK9cMB4AOnnIPs1pxyZ5QMNyMoNVM4yWKygC5Z/uP1cSthV4sgakxqPv/IVFxwqSmq/0luaumuZ1l5e5ztIRVSVsZZWHp/kDrV09rHFSyhA4XI18+GATClw2tjVd8ruKplXbQ5RxYFVTPJpcec=~-1~-1~-1;ttwid=1%7CFHagLBy8jQdo66qtC6nW2BiQqx4zH6DpW1x0qvjvbNo%7C1660635174%7C1e0185ab0d6e550ca1adb6dcd4095a986a17b65856d736869282602da0f67012;odin_tt=b262c5feb6db6db1e87b03587699a6658034720bb4bf0c4e2fcc5f35f480933e1762d003826511cad2d243de9e2d044f38f3d5ab3de97ac4af253a1dada5cf7bc74baf3925303b8aec1f8662bf44df22;msToken=JsPCH2_f5vuokX13Go6C1YXJLovV27L6n2Qhc3TZ7KduhCcEhVoDQhE71kXN9CrpAB7FdjFQ4LnbImyFjsbUWsrTgq3FDsdbaHkemezCTmNOrT_0IvNqJz_XBx9HJy3ufP_RgysS067y;msToken=JsPCH2_f5vuokX13Go6C1YXJLovV27L6n2Qhc3TZ7KduhCcEhVoDQhE71kXN9CrpAB7FdjFQ4LnbImyFjsbUWsrTgq3FDsdbaHkemezCTmNOrT_0IvNqJz_XBx9HJy3ufP_RgysS067y");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $get = curl_exec($ch);
    return $get;
}


function api_jasbcbajhsbjcbakjbckjasw($url)
{
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.70 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    return json_decode($get, true);
}
function login_jasbcbajhsbjcbakjbckjasw($user, $pass)
{
    $data = "username=" . $user . "&password=" . $pass;
    $head = array(
        "Host: traodoisub.com",
        "accept: application/json, text/javascript, */*; q=0.01",
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.70 Mobile Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://traodoisub.com",
        "referer: https://traodoisub.com/",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://traodoisub.com/scr/login.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEJAR => "tds.txt",
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "TDS.txt",
        CURLOPT_COOKIEFILE => "tds.txt",

        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $access = curl_exec($ch);
    return json_decode($access, true);
}

function tds2_jasbcbajhsbjcbakjbckjasw()
{
    $url  = "https://traodoisub.com/view/setting/load.php";
    $head = array(
        "Host: traodoisub.com",
        "user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.70 Mobile Safari/537.36",
        "referer: https://traodoisub.com/view/setting/",
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $access = json_decode(curl_exec($ch), true);
    return $access;
}
function cachelike_jasbcbajhsbjcbakjbckjasw($id)
{
    $cachelike = file_get_contents("https://traodoisub.com/api/coin/?type=TIKTOK_LIKE_CACHE&id=" . $id . "&access_token=" . $_SESSION['token']);
    return json_decode($cachelike, true);
}
function nhanlike_jasbcbajhsbjcbakjbckjasw()
{
    $nhanlike = file_get_contents("https://traodoisub.com/api/coin/?type=TIKTOK_LIKE&id=TIKTOK_LIKE_API&access_token=" . $_SESSION['token']);
    return json_decode($nhanlike, true);
}

function cachefollow_jasbcbajhsbjcbakjbckjasw($id)
{
    $cachefollow = file_get_contents("https://traodoisub.com/api/coin/?type=TIKTOK_FOLLOW_CACHE&id=" . $id . "&access_token=" . $_SESSION['token']);
    return json_decode($cachefollow, true);
}
function nhansub_jasbcbajhsbjcbakjbckjasw()
{
    $nhansub = file_get_contents("https://traodoisub.com/api/coin/?type=TIKTOK_FOLLOW&id=TIKTOK_FOLLOW_API&access_token=" . $_SESSION['token']);
    return json_decode($nhansub, true);
}

function get_link_jbahbdhcbhasbvhbadhbvh($url)
{
    //$url  = "https://traodoisub.com/view/setting/load.php";
    $head = array(
        "Host: traodoisub.com",
        "user-agent: Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/103.0.5060.70 Mobile Safari/537.36",
        "referer: https://traodoisub.com/view/setting/",
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => $_SESSION['user'] . "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $ccc = curl_exec($ch);
    file_put_contents("Data_ch_tt.html",$ccc);
    $access = json_decode($ccc, true);
    return $ccc;
}

function LOGIN_bahsbchbashbcbsa($TK, $MK) {
    $DATA = http_build_query(
        array(
            "username"=>$TK,
            "password"=>$MK,
        )
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/scr/login.php",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_COOKIEJAR => "TDS.txt",
        CURLOPT_HTTPHEADER => array("Host:traodoisub.com","content-length:".strlen($DATA),"accept:application/json, text/javascript, */*; q=0.01","x-requested-with:XMLHttpRequest","user-agent:Mozilla/5.0 (Linux; Android 10; SM-A750GN Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36","content-type:application/x-www-form-urlencoded; charset=UTF-8",),
        CURLOPT_POSTFIELDS => $DATA,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HEADER => true,
        CURLOPT_ENCODING => TRUE
    ));
    curl_exec($ch);
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://traodoisub.com/view/setting/load.php",
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => array("Host:traodoisub.com","user-agent:Mozilla/5.0 (Linux; Android 10; SM-A750GN Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/96.0.4664.104 Mobile Safari/537.36","accept:application/json, text/javascript, */*; q=0.01","x-requested-with:XMLHttpRequest","referer:https://traodoisub.com/view/setting/",),
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_ENCODING => TRUE
    ));
    $MR2 = curl_exec($ch);
    if ($MR2 == true) {
        $INFO = json_decode($MR2, true);
        $_SESSION["xu"] =        $INFO["xu"];
        $_SESSION["user"] =      $INFO["user"];
        $tokentds = $INFO["tokentds"];
    } else {
        die("tài khoản & mật khẩu sai !\n");
    }
    return $tokentds; 
}


$thanhngang = $trang . "══════════════════════════════════════════════════════════════\n";

$sooo = rand(525, 537) . '.' . rand(0, 37);
$useragent = "Mozilla/5.0 (Linux; Android " . rand(7, 11) . "; SM-A750GN) AppleWebKit/" . $sooo . " (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/" . $sooo;
$_SESSION['useragent'] = $useragent;



while (true) {
    system('clear');
    echo $banner;

    $_SESSION['check'] = file_exists("caidattds.txt");
    $_SESSION['checkaccount'] = json_decode(file_get_contents("caidattds.txt"), true);
    $_SESSION['token'] = $_SESSION['checkaccount']["Access_Token"];
    $info = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=profile&access_token=" . $_SESSION['token']);
    $_SESSION['user'] = strtolower($info["data"]["user"]);
    if ($_SESSION['check'] == '1') {
        system('clear');
        echo $banner;
        echo $icon1 . "Nhập |Y| Giữ Lại Tài Khoản " . $vang . $_SESSION['user'] . "\n";
        echo $icon1 . "Nhập |N| Thêm Tài Khoản Mới\n";
        echo $icon1 . "Nhập Chế Số " . $vang . ":" . $trang . " ";
        $_SESSION['nhap'] = trim(fgets(STDIN));
        if ($_SESSION['nhap'] == 'n' or $_SESSION['nhap'] == 'N') {
            $my = fopen("caidattds.txt", "w+");
            system('clear');
            echo $banner;
            echo $icon1 . "Nhập Tài Khoản TDS " . $vang . ":" . $trang . " ";
            $username = trim(fgets(STDIN));
            echo $icon1 . "Nhập Mật Khẩu TDS " . $vang . ":" . $trang . " ";
            $password = trim(fgets(STDIN));
            $arr = array("username" => $username, "password" => $password);
            fwrite($my, json_encode($arr));
            $my = file("caidattds.txt");
            $bb = file_get_contents('caidattds.txt');
            $cc = json_decode($bb);
            $_SESSION['username'] = $cc->{"username"};
            $_SESSION['password'] = $cc->{"password"};
        }
        if ($_SESSION['nhap'] == 'y' or $_SESSION['nhap'] == 'Y') {
            $bb = file_get_contents("caidattds.txt");
            $cc = json_decode($bb);
            $_SESSION['username'] = $cc->{"username"};
            $_SESSION['password'] = $cc->{"password"};
        }
    } else {
        $my = fopen("caidattds.txt", "w+");
        system('clear');
        echo $banner;
        echo $icon1 . "Nhập Tài Khoản TDS " . $vang . ":" . $trang . " ";
        $_SESSION["username"] = trim(fgets(STDIN));
        echo $icon1 . "Nhập Mật Khẩu TDS " . $vang . ":" . $trang . " ";
        $_SESSION['password'] = trim(fgets(STDIN));
        $arr = array("username" => $_SESSION["username"], "password" => $_SESSION['password']);
        fwrite($my, json_encode($arr));
    }
    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];
    $dangnhap = login_jasbcbajhsbjcbakjbckjasw($user, $pass);

    if ($dangnhap["success"] == true) {
        unlink("caidattds.txt");
        $my = fopen("caidattds.txt", "w+");
        $gettoken = tds2_jasbcbajhsbjcbakjbckjasw();
        $_SESSION['token'] = $gettoken["tokentds"];
        $info = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=profile&access_token=" . $_SESSION['token']);
        $_SESSION['user'] = strtolower($info["data"]["user"]);
        $_SESSION['xu'] = $info["data"]["xu"];
        $_SESSION['xudie'] = $info["data"]["xudie"];
        $js = fopen($_SESSION['user'] . "TDS.txt", "w+");
        file_put_contents($_SESSION['user'] . "TDS.txt", file_get_contents("tds.txt"));
        unlink("tds.txt");
        $arr = array("username" => $_SESSION["username"], "password" => $_SESSION['password'], "Access_Token" => $_SESSION['token']);
        fwrite($my, json_encode($arr));
        
        break;
    } else {
        echo "Sai Tài khoản hoặc Mật khẩu\n";
        unlink("caidattds.txt");
        unlink("tds.txt");
        continue;
    }
}$st = 0;$xx = 0;$khouser = ["0",];
$icon1d = ["0",];
while (count($khouser) == 1) {
    $ch = get_link_jbahbdhcbhasbvhbadhbvh("https://traodoisub.com/view/chtiktok/");
    while (true) {
        $st = $st + 1;
        $xx = $xx + 1;
        $link = explode('</th>', explode('<th class="align-middle text-center white-space-nowrap id">', $ch)[$st])[0];
        if ($link == "") {
            break;
        } else {
            $USER_TT = explode('"', explode('https://www.tiktok.com/@', $link)[1])[0];
            $IDT = explode('<', explode('_blank">', $link)[1])[0];
            array_push($khouser, $USER_TT);
            array_push($icon1d, $IDT);
        }
    }
    
}

$khotiktok = [];
$khousertiktok = [];
system("clear");
echo $banner . "\n";
echo $greenb ."══════════════════════════════════════════════════════════════\n";
echo $icon1 . "Chọn Số Thứ tự của tài khoản làm việc\n";
for ($x = 1; $x < count($khouser); $x++) {
    $ccv = $x;
    if ($ccv < 10) {
        $ccv = "0" . $x;
    }
    echo $icon1 . "\033[1;91m[\033[1;93m" . $ccv . "\033[1;91m]\033[1;93m ID TikTOk: ".$lightblueb . $khouser[$x] . "\n"; usleep(30000);
}
CC_1:
	echo $greenb ."══════════════════════════════════════════════════════════════\n";
echo $icon2 . "Nhập số\033[1;97m:\033[1;93m ";
$nickcch = " " . trim(fgets(STDIN));
if(!strpos($nickcch,"0") and strlen($nickcch) < 3){
    echo "Phải có số 0 đứng trước số nhỏ hơn 10\n";
    goto CC_1;
}
for ($kkc = 0; $kkc < 50; $kkc++) {
    $clgt = $kkc;
    if ($clgt < 10) {
        $clgt = "0" . $kkc;
    }
    if (strpos($nickcch, $clgt)) {
        if (substr($clgt, 0, 1) == '0') {
            $clgt = $kkc;
        }

        $userdn = $khouser[$clgt];
        $iddn = $icon1d[$clgt];
        array_push($khousertiktok, $userdn);
        array_push($khotiktok, $iddn);
    }
}






$_SESSION['checkaccount'] = json_decode(file_get_contents("caidattds.txt"), true);
$_SESSION['token'] = $_SESSION['checkaccount']["Access_Token"];
$info = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=profile&access_token=" . $_SESSION['token']);
$_SESSION['user'] = strtolower($info["data"]["user"]);
$_SESSION['xu'] = $info["data"]["xu"];
$_SESSION['xudie'] = $info["data"]["xudie"];

system('clear');
echo $banner;

echo $icon1 . $xnhac . "Tài Khoản " . $vang . ": " . $vang . $_SESSION['user'] . "\n";
echo $icon1 .$xnhac . "Xu Hiện Tại " . $vang . ": " . $_SESSION['xu'] ." Xu\n";
$a = round(strlen($_SESSION['token']) / 2);
$an = substr($_SESSION['token'], 0, $a) . str_repeat("*", 5);
echo $greenb ."══════════════════════════════════════════════════════════════\n";
echo $icon1 . "Nhập Số " . $vang . "[" . $trang . "1" . $vang . "]" . $whiteb . " Làm Nhiệm Vụ Tim\n";
echo $icon1 . "Nhập Số " . $vang . "[" . $trang . "2" . $vang . "]" . $whiteb . " Làm Nhiệm Vụ Follow \n";
echo $icon1 . "Nhập Số " . $vang . "[" . $trang . "3" . $vang . "]" . $whiteb . " Làm Nhiệm Vụ Follow US \n";
echo "$icon2";
$tool = trim(fgets(STDIN));
    while (true) {

    $nhanxu = 10;
    if ($nhanxu < 10 || $nhanxu > 99999) {
        echo $do . "Vui Lòng Chọn Ít Nhất 10 Nhiệm Vụ\n";
        continue;
    } else {
        break;
    }
}
  
echo $icon1 . "Nhập Delay " . $vang . ":" . $trang . " ";
$delay = trim(fgets(STDIN));
while (true) {
    if (count($khotiktok) == 0) {

        $st = 0;
        $xx = 0;
        $khouser = ["0",];
        $icon1d = ["0",];

        while (count($khouser) == 1) {
            $ch = get_link_jbahbdhcbhasbvhbadhbvh("https://traodoisub.com/view/chtiktok/");
            while (true) {
                $st = $st + 1;
                $xx = $xx + 1;
                //    echo$GET;
                //    die();
                $link = explode('</th>', explode('<th class="align-middle text-center white-space-nowrap id">', $ch)[$st])[0];
                if ($link == "") {
                    break;
                } else {
                    $USER_TT = explode('"', explode('https://www.tiktok.com/@', $link)[1])[0];
                    $IDT = explode('<', explode('_blank">', $link)[1])[0];
                    array_push($khouser, $USER_TT);
                    array_push($icon1d, $IDT);
                }
            }
            
        }

        $khotiktok = [];
        $khousertiktok = [];
        echo $icon1 . "TikTok Đã Được Thêm - chọn số để thêm vào danh sách cấu hình acc\n";
        for ($x = 1; $x < count($khouser); $x++) {
            $ccv = $x;
            if ($ccv < 10) {
                $ccv = "0" . $x;
            }
usleep(30000);
            echo $icon1 . "\033[1;91m[\033[1;93m" . $ccv . "\033[1;91m]\033[1;93m ID TikTOk:\033[1;95m " . $khouser[$x] . "\n"; 
        }
        CC_2:
        echo $icon1 . "Nhập số\033[1;97m:\033[1;93m ";
        $nickcch = " " . trim(fgets(STDIN));
        if(!strpos($nickcch,"0") and strlen($nickcch) < 3){
            echo "Phải có số 0 đứng trước số nhỏ hơn 10\n";
            goto CC_2;
        }
        for ($kkc = 0; $kkc < 50; $kkc++) {
            $clgt = $kkc;
            if ($clgt < 10) {
                $clgt = "0" . $kkc;
            }
            if (strpos($nickcch, $clgt)) {
                if (substr($clgt, 0, 1) == '0') {
                    $clgt = $kkc;
                }

                $userdn = $khouser[$clgt];
                $iddn = $icon1d[$clgt];
                array_push($khousertiktok, $userdn);
                array_push($khotiktok, $iddn);
            }
        }
    }
    for ($xz = 0; $xz < count($khotiktok); $xz++) {
        $idtik = $khotiktok[$xz];
        $user = $khousertiktok[$xz];
        $ch_url = "https://traodoisub.com/api/?fields=tiktok_run&id=" . $idtik . "&access_token=" . $_SESSION['token'];
        $cauhinh = file_get_contents("https://traodoisub.com/api/?fields=tiktok_run&id=" . $idtik . "&access_token=" . $_SESSION['token']);
        echo $greenb ."══════════════════════════════════════════════════════════════\n";
        if (strpos($cauhinh,"success")) {
            echo $icon1 . "Cấu Hình ID TikTok " . $redb . ": @" . $trang . $user . "\n";
            
        } else {
            echo "\r" . $icon1 . $do . "Bạn Chưa Thêm TikTok Vào TDS\r";
            continue;
        }
       
      
        $spam = 0;
   

        while (true) {

            $demuser = $xz + 1;
            if ($spam == 1) {
                break;
            }
            if (strpos($tool, '1') !== false) {
                $tim = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=tiktok_like&access_token=" . $_SESSION['token']);
                if ($tim["error"] == "Vui lòng ấn NHẬN TẤT CẢ rồi sau đó tiếp tục làm nhiệm vụ để tránh lỗi!") {
                    $nhanlike = nhanlike_jasbcbajhsbjcbakjbckjasw();
                    if ($nhanlike["success"] == 200) {
                        $xu = $nhanlike["data"]["xu"];
                        $xujob = $nhanlike["data"]["msg"];
                                                        $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                    }
                } else if ($tim["error"] == "Thao tác quá nhanh vui lòng chậm lại") {
                    continue;
                }
                $like = $tim["data"];
                if (count($like) == 0) {
                    echo $khoi . $do . "Tạm Thời Hết Nhiệm Vụ Đại Kê Ơi\n";
                    $nhanlike = nhanlike_jasbcbajhsbjcbakjbckjasw();
                    if ($nhanlike["success"] == 200) {
                        $xu = $nhanlike["data"]["xu"];
                        $xujob = $nhanlike["data"]["msg"];
                                                                                        $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";

                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                        
                    }
                    $user = $khotiktok[$demuser];
                    $get = info_jasbcbajhsbjcbakjbckjasw($user);
                    $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                    $name = explode('",', explode('"nickname":"', $data)[1])[0];
                    echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                    echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                    echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                    $doi = trim(fgets(STDIN));
                    if ($doi == "y") {
                        $spam = 1;
                        break;
                    } else {
                        continue;
                    }
                } else {
                    echo $khoi . "Đã Tìm Thấy " . $trang . count($tim) . $luc . " Nhiệm Vụ Tim\r";
                    sleep(1);
                }
                for ($ad = 0; $ad < count($like); $ad++) {
                    $id = $like[$ad]["id"];
                    $link = $like[$ad]["link"];
                    $dem++;
                    $rd = rand(1, 7);
                    $rd2 = rand(5, 7);
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                        @system('xdg-open ' . $link);
                    } else {
                        @system('cmd /c start ' . $link);
                    }
                                $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                    for ($i = 0; $i < strlen($kl); $i++) {
                        echo $kl[$i];
                        usleep(1500);
                    }
                    delay($delay);
                    cachelike_jasbcbajhsbjcbakjbckjasw($id);
                    if ($dem % $nhanxu == 0) {
                        $nhanlike = nhanlike_jasbcbajhsbjcbakjbckjasw();
                        if ($nhanlike["success"] == 200) {
                            $xu = $nhanlike["data"]["xu"];
                            $xujob = $nhanlike["data"]["msg"];
                            if ($xujob == "+0 Xu") {
                                echo $khoi . $do . "TikTok " . $trang . $name . $do . " Đã Block Tim\n";
                                $user = $khotiktok[$demuser];
                                $get = info_jasbcbajhsbjcbakjbckjasw($user);
                                $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                                $name = explode('",', explode('"nickname":"', $data)[1])[0];
                                echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                                echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                                echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                                $doi = trim(fgets(STDIN));
                                if ($doi == "y") {
                                    $spam = 1;
                                    break;
                                } else {
                                    continue;
                                }
                            } else {
                                                                $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                                for ($i = 0; $i < strlen($kl); $i++) {
                                    echo $kl[$i];
                                    usleep(500);
                                }
                                delay(5);
                            }
                        }
                    }
                }
            }
            if (strpos($tool, '2') !== false) {
                $sub = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=tiktok_follow&access_token=" . $_SESSION['token']);
                if ($sub["error"] == "Vui lòng ấn NHẬN TẤT CẢ rồi sau đó tiếp tục làm nhiệm vụ để tránh lỗi!") {
                    $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                    if ($nhansub["success"] == 200) {
                        $xu = $nhansub["data"]["xu"];
                        $xujob = $nhansub["data"]["msg"];
                                                        $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                        delay(5);
                    }
                } else if ($sub["error"] == "Thao tác quá nhanh vui lòng chậm lại") {
                    continue;
                }
                $follow = $sub["data"];
                if (count($follow) == 0) {
                    echo $khoi . $do . "Tạm Thời Hết Nhiệm Vụ Đại Kê Ơi\n";
                    $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                    if ($nhansub["success"] == 200) {
                        $xu = $nhansub["data"]["xu"];
                        $xujob = $nhansub["data"]["msg"];
                                $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                        delay(5);
                    }
                    $user = $khotiktok[$demuser];
                    $get = info_jasbcbajhsbjcbakjbckjasw($user);
                    $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                    $name = explode('",', explode('"nickname":"', $data)[1])[0];
                    echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                    echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                    echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                    $doi = trim(fgets(STDIN));
                    if ($doi == "y") {
                        $spam = 1;
                        break;
                    } else {
                        continue;
                    }
                } else {
                    echo $khoi . "Đã Tìm Thấy " . $trang . count($follow) . $luc . " Nhiệm Vụ Follow\r";
                    sleep(1);
                }
                for ($ad = 0; $ad < count($follow); $ad++) {
                    $id = $follow[$ad]["id"];
                    $link = $follow[$ad]["link"];
                    $dem++;
                    $rd = rand(1, 7);
                    $rd2 = rand(5, 7);
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                        @system('xdg-open ' . $link);
                    } else {
                        @system('cmd /c start ' . $link);
                    }
                    $kl = "" . $do . "[" . $vang . $dem . $do . "]" . $trang . " | " . $xnhac . date("H:i:s") . $trang . " | " . $luc . "\033[1;3" . $rd . "mFOLLOW" . $trang . " | " . $luc . $id . "\n";
                    for ($i = 0; $i < strlen($kl); $i++) {
                        echo $kl[$i];
                        usleep(1500);
                    }
                    delay($delay);
                    cachefollow_jasbcbajhsbjcbakjbckjasw($id);
                    if ($dem % $nhanxu == 0) {
                        $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                        if ($nhansub["success"] == 200) {
                            $xu = $nhansub["data"]["xu"];
                            $xujob = $nhansub["data"]["msg"];
                            if ($xujob == "+0 Xu") {
                                echo $khoi . $do . "TikTok " . $trang . $name . $do . " Đã Block Follow\n";
                                $user = $khotiktok[$demuser];
                                $get = info_jasbcbajhsbjcbakjbckjasw($user);
                                $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                                $name = explode('",', explode('"nickname":"', $data)[1])[0];
                                echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                                echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                                echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                                $doi = trim(fgets(STDIN));
                                if ($doi == "y") {
                                    $spam = 1;
                                    break;
                                } else {
                                    continue;
                                }
                            } else {
                                delay(5);
                                                                $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                                for ($i = 0; $i < strlen($kl); $i++) {
                                    echo $kl[$i];
                                    usleep(500);
                                }
                            }
                        }
                    }
                }
            }
            if (strpos($tool, '3') !== false) {
                $sub = api_jasbcbajhsbjcbakjbckjasw("https://traodoisub.com/api/?fields=tiktok_follow&access_token=" . $_SESSION['token']);
                if ($sub["error"] == "Vui lòng ấn NHẬN TẤT CẢ rồi sau đó tiếp tục làm nhiệm vụ để tránh lỗi!") {
                    $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                    if ($nhansub["success"] == 200) {
                        $xu = $nhansub["data"]["xu"];
                        $xujob = $nhansub["data"]["msg"];
                        $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                        delay(5);
                    }
                } else if ($sub["error"] == "Thao tác quá nhanh vui lòng chậm lại") {
                    continue;
                }
                $follow = $sub["data"];
                if (count($follow) == 0) {
                    echo $khoi . $do . "Tạm Thời Hết Nhiệm Vụ Đại Kê Ơi\n";
                    $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                    if ($nhansub["success"] == 200) {
                        $xu = $nhansub["data"]["xu"];
                        $xujob = $nhansub["data"]["msg"];
                                                        $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                        for ($i = 0; $i < strlen($kl); $i++) {
                            echo $kl[$i];
                            usleep(500);
                        }
                        delay(5);
                    }
                    $user = $khotiktok[$demuser];
                    $get = info_jasbcbajhsbjcbakjbckjasw($user);
                    $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                    $name = explode('",', explode('"nickname":"', $data)[1])[0];
                    echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                    echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                    echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                    $doi = trim(fgets(STDIN));
                    if ($doi == "y") {
                        $spam = 1;
                        break;
                    } else {
                        continue;
                    }
                } else {
                    echo $khoi . "Đã Tìm Thấy " . $trang . count($follow) . $luc . " Nhiệm Vụ Follow\r";
                    sleep(1);
                }
                for ($ad = 0; $ad < count($follow); $ad++) {
                    $id = $follow[$ad]["id"];
                    $link = $follow[$ad]["link"];
                    $user = explode("@", $link)[1];
                    $dem++;
                    $rd = rand(1, 7);
                    $rd2 = rand(5, 7);
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
                        @system('xdg-open https://us.tiktok.com/@' . $user);
                    } else {
                        @system('cmd /c start https://us.tiktok.com/@' . $user);
                    }
                                                    $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                    for ($i = 0; $i < strlen($kl); $i++) {
                        echo $kl[$i];
                        usleep(1500);
                    }
                    delay($delay);
                    cachefollow_jasbcbajhsbjcbakjbckjasw($id);
                    if ($dem % $nhanxu == 0) {
                        $nhansub = nhansub_jasbcbajhsbjcbakjbckjasw();
                        if ($nhansub["success"] == 200) {
                            $xu = $nhansub["data"]["xu"];
                            $xujob = $nhansub["data"]["msg"];
                            if ($xujob == "+0 Xu") {
                                echo $khoi . $do . "TikTok " . $trang . $name . $do . " Đã Block Follow\n";
                                $user = $khotiktok[$demuser];
                                $get = info_jasbcbajhsbjcbakjbckjasw($user);
                                $data = explode(',"MobileItemModule', explode('id="SIGI_STATE" type="application/json">', $get)[1])[0];
                                $name = explode('",', explode('"nickname":"', $data)[1])[0];
                                echo $khoi . "TikTok Tiếp Theo " . $vang . ": " . $trang . $user . "\n";
                                echo $khoi . "Name " . $vang . ": " . $trang . $name . "\n";
                                echo $khoi . "Ấn " . $trang . "y" . $luc . " Để Đổi TikTok Làm Việc " . $vang . ":" . $trang . " ";
                                $doi = trim(fgets(STDIN));
                                if ($doi == "y") {
                                    $spam = 1;
                                    break;
                                } else {
                                    continue;
                                }
                            } else {
                                delay(5);
                                                                $kl = "" . $luc . " Đã làm " . $vang . ($xujob / 1300) . $luc . " Nhiệm Vụ " . $trang . "| " . $luc . $xujob . $trang . " | " . $luc . "Tổng " . $vang . $xu . " Xu\n";
                                for ($i = 0; $i < strlen($kl); $i++) {
                                    echo $kl[$i];
                                    usleep(500);
                                }
                                delay(5);
                            }
                        }
                    }
                }
            }
            
        }}
  }