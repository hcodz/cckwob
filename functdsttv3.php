function randommau () {
$rand =  rand (1, 231);
if ($rand <= 7 ) {
$mau = "\033[1;3" . rand(1, 7) . "m";
}
else
if ($rand >= 8 and $rand <= 231 )
{
    $rand = rand(1, 231);
    $mau = "\033[38;5;".$rand."m";
}
return $mau;
}
unlink ('TDS.txt');
error_reporting(0);
function nhanxutdstiktok ($token, $loai, $id) {
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://traodoisub.com/api/coin/?type='.$loai.'&id='.$id.'&access_token='.$token,
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
return $response;
}
function guiduyetnvtds  ($token ,  $loai, $id)
{
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://traodoisub.com/api/coin/?type='.$loai.'&id='.$id.'&access_token='.$token,
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
return $response;
}
function getjobstiktok ($token , $loai)
{
    $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://traodoisub.com/api/?fields='.$loai.'&access_token='.$token,
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
return $response;
}
function cauhinhnicktiktok  ($token , $idtiktok) {
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://traodoisub.com/api/?fields=tiktok_run&id='.$idtiktok.'&access_token='.$token,
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
return $response;
}
function getidtiktok1($muck1)  {
    $use3d3 = explode(
      'tiktok.com',$muck1
    )[1];
    if  ($use3d3 == '')
    {
    $username = explode(
        '@',$muck1
      )[1];
    if ($username == '')
    {$username = $muck1;
    $muck = 'https://www.tiktok.com/@'.$username;}
    else {$muck = 'https://www.tiktok.com/'.$muck1;}
    }
    else {
      $username = explode(
        '@',$muck1
      )[1];
      $muck = $muck1;
    }
    $host = $muck;
    $html = "htmlspecialchars_decode";
    $a1 = "Host: www.tiktok.com/";
    $a2 =
        "user-agent: Mozilla/5.0 (Linux;Android 12;SM-A025F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36";
    $a4 = "origin: https://www.tiktok.com/";
    $tsm = [$a1, $a2, $a3, $a4, $a5];
     $mr = curl_init();
    curl_setopt_array($mr, [
        CURLOPT_PORT => "443",
        CURLOPT_URL => "$host",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $tsm,
        CURLOPT_FOLLOWLOCATION => true,
    ]);
    $mr2 = curl_exec($mr);
    curl_close($mr);
    $ch =$mr2;
    file_put_contents ('1.txt' , $ch);
    $check = '{"userInfo":{"user":{"id":"';
    $link = explode($check,$ch)[1];
    $link = explode('"',$link)[0];
    $name = explode('"nickname":"',$ch)[1];
    $name = explode('",',$name)[0];
return '|'.$name.'|'.$username.'|'.$link.'|'.'|'.'|'.'|'.'|';
          }
function gettokentds ($tk, $mk) {
$data = "username=" . $tk . "&password=" . $mk;
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
$dangnhap = json_decode($access, true);
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
    $gettoken = $access;
$tokentds = $gettoken["tokentds"];
        return $tokentds;
}