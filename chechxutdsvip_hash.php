  
    
$banner = logotool();
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$blud="\033[1;34m";
$res="\033[1;35m";
$nau="\033[1;36m";
$trang="\033[1;37m";
$cam= "\e[38;5;208m";
$icon1 = "\033[1;37m•[✩]➭ \033[1;37m";
$icon2 = "\033[1;33m•[۞] ➭ :\033[1;37m";$white = "\033[1;37m";
$whiteb = "\033[1;37m";
$redb = "\033[1;31m";
$green = "\033[0;32m";
$greenb = "\033[1;32m";
$yellow = "\033[0;33m";
$yellowb = "\033[1;33m";
$blue = "\033[0;34m";
$blueb = "\033[1;34m";
$lightblue = "\033[0;36m";
$lightblueb = "\033[1;36m";
$red = "\033[1;31m";
$green = "\033[1;32m";
$yellow = "\033[1;33m";
$trang = "\033[1;37m";
$cam = "\e[38;5;208m";
$loiii = 0;
$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m"; 
    function login_j($user, $pass)
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
function tds2_w()
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
    system ('clear');
    echo $banner;
    echo "\n$icon1 Tool Check Xu TDS \n";
    if(file_exists('tokentds.txt')) {
echo "Bạn có muốn dùng lại token cũ ? (y/n) : ";
$dus = trim(fgets(STDIN));}
else {$dus = 'n';}
if ($dus == 'n' or $dus == 'N') {
    $myfile = fopen("tokentds.txt", "w");
    fwrite($myfile, "");
    fclose($myfile);
    echo "Bạn muốn Login bằng Mật khẩu hay Nhập Token (LOGIN/TOKEN) : ";
    $login = trim(fgets(STDIN));
    if ($login == 'login' or $login == 'LOGIN') {
        for ($dem = 0; $dem <=99999999; $dem++) {
echo "Nhập Tên tài khoản thứ $dem : ";
$tk = trim(fgets(STDIN));
if ($tk == '' or $tk == ' ' or   $tk == '  ') {break;}
echo "Nhập Mật khẩu tài khoản thứ $dem : ";
$mk = trim(fgets(STDIN));
 $dangnhap = login_j($tk, $mk);
$gettoken = tds2_w();
$tokentds = $gettoken["tokentds"];
        echo "Get thành công token : $tokentds \n" ;
        $myfile = fopen("tokentds.txt", "a+");
        fwrite($myfile, $tokentds."|");
        fclose($myfile);
    }
}
    else {
    for ($dem = 0; $dem <=99999999; $dem++) {
 echo "Nhập token thứ $dem : ";
 $tokentds = trim(fgets(STDIN));
 if ($tokentds == '' )
 {break;}
 $myfile = fopen("tokentds.txt", "a+");
 fwrite($myfile, $tokentds."|");
 fclose($myfile);
}
}
}
$tokentt = file_get_contents("tokentds.txt");
$tokentt = explode ('|', $tokentt);
for ($dem = 0; $dem <=99999999; $dem++) {
    $tokentds = $tokentt[$dem];
    if ($tokentds == '' or $tokentds == ' ' or   $tokentds == '  ') {break;}
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://traodoisub.com/api/?fields=profile&access_token='.$tokentds,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $name = explode (' "user": "', $response)[1];
    $name = explode ('"', $name)[0];
    $xu = explode ('"xu": "', $response)[1];
    $xu = explode ('"', $xu)[0];
    $xudie = explode (' "xudie": "', $response)[1];
    $xudie = explode ('"', $xudie)[0];
echo $whiteb.'Tên : '.$yellowb.$name.$whiteb.' | Xu : '.$greenb.$xu.$whiteb.' | Xu die : '.$redb.$xudie.$whiteb.' | Token : '.$yellowb.$tokentds."\n";
 }
continue;
