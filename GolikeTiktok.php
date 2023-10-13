$red="\033[1;31m"; $end="\033[0m";$black="\033[0;30m";$blackb="\033[1;30m";$white="\033[1;37m";$whiteb="\033[1;37m";$redb="\033[1;31m";$green="\033[0;32m";$greenb="\033[1;32m";$yellow="\033[0;33m";$yellowb="\033[1;33m";$syan="\033[1;36m";$blue="\033[0;34m";$blueb="\033[1;34m";$purple="\033[0;35m";$purpleb="\033[1;35m";$lightblue="\033[0;36m";$lightblue="\033[1;35m";$lightblueb="\033[1;36m";$red="\033[1;31m";$green="\033[1;32m";$yellow="\033[1;33m";$blud="\033[1;34m";$res="\033[1;35m";$nau="\033[1;36m";$trang="\033[1;37m";$cam= "\e[38;5;208m";$lavender="\033[1;95m";$peach="\033[1;96m";$coral="\033[1;97m";$charcoal="\033[1;98m";$maroon="\033[1;99m";$gold="\033[1;100m";
$teal="\033[1;101m";
$indigo="\033[1;102m";
$rose="\033[1;103m";
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
    $a = "30000";
    $b = "30000";
    if ($delay == 0) {
        $a = "0";
        $b = "0";
    }
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;93mDKhoi\033[1;96m●             \033[1;95m G              \033[1;91m[\033[1;93m $time \033[1;91m] ";  usleep($a);
        echo "\r\033[1;91mDKhoi\033[0;93m ●            \033[0;96m GO             \033[0;91m[\033[0;93m $time \033[0;91m] ";    usleep($a);
        echo "\r\033[1;92mDKhoi\033[0;91m  ●           \033[0;93m GOL            \033[0;91m[\033[0;93m $time \033[0;91m] ";       usleep($a);
        echo "\r\033[1;93mDKhoi\033[0;92m   ●          \033[0;91m GOLI           \033[0;91m[\033[0;93m $time \033[0;91m] ";       usleep($a); 
        echo "\r\033[1;94mDKhoi\033[0;93m    ●         \033[0;92m GOLIK          \033[0;91m[\033[0;93m $time \033[0;91m] ";    usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m     ●        \033[0;93m GOLIKE         \033[0;91m[\033[0;93m $time \033[0;91m] ";        usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m      ●       \033[0;93m GOLIKE©        \033[0;91m[\033[0;93m $time \033[0;91m] ";  usleep($a);
        echo "\r\033[1;91mDKhoi\033[0;95m       ●      \033[0;96m GOLIKE©T       \033[0;91m[\033[0;93m $time \033[0;96m] ";      usleep($a);
        echo "\r\033[1;94mDKhoi\033[0;97m        ●     \033[0;95m GOLIKE©TI      \033[0;98m[\033[0;93m $time \033[0;91m] ";      usleep($a); 
        echo "\r\033[1;95mDKhoi\033[0;94m         ●    \033[0;93m GOLIKE©TIK     \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m          ●   \033[0;99m GOLIKE©TIK®    \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;94mDKhoi\033[0;93m           ●  \033[0;92m GOLIKE©TIK®T   \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m            ● \033[0;92m GOLIKE©TIK®TO  \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m             ●\033[0;94m GOLIKE©TIK®TOK \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        //
        echo "\r\033[1;95mDKhoi\033[0;94m            ● \033[0;92m GOLIKE©TIK®TO  \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;94mDKhoi\033[0;93m           ●  \033[0;92m GOLIKE©TIK®T   \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
        echo "\r\033[1;95mDKhoi\033[0;94m          ●   \033[0;99m GOLIKE©TIK®    \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
         echo "\r\033[1;95mDKhoi\033[0;94m         ●    \033[0;93m GOLIKE©TIK     \033[0;91m[\033[0;93m $time \033[0;91m] ";usleep($a);
    echo "\r\033[1;94mDKhoi\033[0;97m        ●     \033[0;95m GOLIKE©TI      \033[0;98m[\033[0;93m $time \033[0;91m] ";      usleep($a); 
   echo "\r\033[1;91mDKhoi\033[0;95m       ●      \033[0;96m GOLIKE©T       \033[0;91m[\033[0;93m $time \033[0;96m] ";      usleep($a);
      echo "\r\033[1;95mDKhoi\033[0;94m      ●       \033[0;93m GOLIKE©        \033[0;91m[\033[0;93m $time \033[0;91m] ";  usleep($a);
       echo "\r\033[1;95mDKhoi\033[0;94m     ●        \033[0;93m GOLIKE         \033[0;91m[\033[0;93m $time \033[0;91m] ";        usleep($a);
          echo "\r\033[1;94mDKhoi\033[0;93m    ●         \033[0;92m GOLIK          \033[0;91m[\033[0;93m $time \033[0;91m] ";    usleep($a);
       echo "\r\033[1;93mDKhoi\033[0;92m   ●          \033[0;91m GOLI           \033[0;91m[\033[0;93m $time \033[0;91m] ";       usleep($a); 
          echo "\r\033[1;92mDKhoi\033[0;91m  ●           \033[0;93m GOL            \033[0;91m[\033[0;93m $time \033[0;91m] ";       usleep($a);
     echo "\r\033[1;91mDKhoi\033[0;93m ●            \033[0;96m GO             \033[0;91m[\033[0;93m $time \033[0;91m] ";    usleep($a);
          echo "\r\033[1;93mDKhoi\033[1;96m●             \033[1;95m G              \033[1;91m[\033[1;93m $time \033[1;91m] ";  usleep($a);
      
}
       echo "\r\033[1;93mDKhoi\033[0;92m  ⊙﹏⊙  033[0;91m Chờ Xíu Nha             \r";
usleep(10000);
}
$activeb = file_get_contents('activestatus.txt');
 	echo $green."Đang vô tool vui lòng đợi "; 
system ('clear');
$loiii = 0;
$tongjobs=0; 
	echo $green."Đang vô tool vui lòng đợi "; 
system ('clear');
$loiii = 0;
$tongjobs=0;
$icon1= "\033[1;37m•[✩]➭ \033[1;37m";
$icon2= "\033[1;33m•[۞] ➭ :\033[1;37m";
  $p= $banner;cc($p);
if (file_exists('authorizations.txt')){
echo($whiteb. "\nBᴀ̣ɴ ᴄᴏ́ ᴍᴜᴏ̂́ɴ sᴜ̛̉ ᴅᴜ̣ɴɢ ʟᴀ̣ɪ Aᴜᴛʜᴏʀɪᴢᴀᴛɪᴏɴs ᴋʜᴏ̂ɴɢ ? (N để thay ,Enter sử dụng lại)\n$icon2");
$check = trim(fgets(STDIN));
}
else {$check = 'n';}

If ($check== "n" or $check == "N"){
  echo "authorization: ";

$authu = trim(fgets(STDIN));
$myfile = fopen("authorizations.txt", "w");
 $txt = $authu;
 fwrite($myfile, $txt);
 fclose($myfile);
 }
 else{
$myfile = fopen("authorizations.txt", "r");
 $line = fgets($myfile);
 $authu = $line;
fclose($myfile);
}
if (file_exists('setting.txt')){
  if ($activeb == '1' or $activeb1 == '1'){
echo ("Bạn có muốn dùng lại Setting cũ? (Enter để dùng lại, N để thay)\n$icon2");
$setting= trim(fgets(STDIN));}
else {$setting = "n"; echo "Key thường không thể dùng lưu Setting\n"; sleep(1);}
}
else {$setting = "n";}
if ($setting == "n" or $setting == "N")
{system('clear');
 echo $banner;
echo $icon1.$whiteb."Nhập [1] để chạy chế độ chỉ Follow\n$icon1"."Nhập [2] Để chạy Follow + Like\n".$icon1."Nhập [3] Để chạy Mỗi Like\n$icon2";
$mode = trim(fgets(STDIN));
echo $trang."\n ══════════════════════════════════════════════════════════════\n";

echo $whiteb."*Nhập Delay bấm hoàn thành ＮＨＩệＭ Ｖụ\n$icon2";
$delay = trim(fgets(STDIN));
echo  "* Nhập số lần bấm hoàn thành ＮＨＩệＭ Ｖụ (giá trị phải lớn hơn hoặc bằng 1)\n$icon2";
$delay2 = trim(fgets(STDIN));
echo "Làm được bao nhiêu Jobs thì dừng Tool đổi acc (0 để bỏ qua) \n$icon2";
$adv = trim(fgets(STDIN));
echo "Tìm không có jobs sau bao lâu thì dừng tool (0 để bỏ qua) \n$icon2";
$dungtooltudong = trim(fgets(STDIN));
if ($dungtooltudong != 0 )
 {echo "Dừng Tool trong bao nhiêu (Phút) \n$icon2";
   $tgdungtl = trim(fgets(STDIN));
 }
echo "Làm sau bao nhiêu phút thì dừng tool đổi acc? (0 để bỏ qua) \n$icon2";
$tgdungtool = trim(fgets(STDIN));
echo $redb."Báo lỗi bao nhiêu lần thì đổi acc❌ (0 để bỏ qua)\n$icon2";
$baoloi = trim(fgets(STDIN));
$fp = fopen('setting.txt', 'w');
fwrite($fp, "$mode\n$delay\n$delay2\n$adv\n$tgdungtool\n$baoloi\n$dungtooltudong\n$tgdungtl");
fclose($fp);}
else
{
$fp = fopen('setting.txt', 'r');
$mode=fgets($fp);
$delay=fgets($fp);
$delay2=fgets($fp);
$adv=fgets($fp);
$tgdungtool = fgets($fp);
$baoloi=fgets($fp);
$dungtooltudong = fgets($fp);
$tgdungtl = fgets($fp);
fclose($fp);} 
echo $lightblueb."*Nhập Y để làm  Tiktok Now, Enter để làm tiktok thường\n$icon2 ";
$nowtik = trim(fgets(STDIN));
if ($nowtik == "y" or $nowtik == "Y") {$mode = 1;}
$loijob=[];
$tong=0;
$a=0;
$b=0;
$c=0;
$delay2 = $delay2 +0;
$adv = $adv + 0;
$mode = $mode + 0;
$baoloi = $baoloi +0;
$delay = $delay +0;
$tgdungtl = $tgdungtl + 0;
$dungtooltudong = $dungtooltudong + 0;
$tgdungtool = $tgdungtool + 0;
$green="\033[1;32m";
if ($adv == 0 ) {$adv = '99999999999999';}
if ($baoloi == 0) {$baoloi = '999999999999';}
if  ($mode == 1) {$b= "like" ;}
if ($mode == 3) {$b = 'follow' ;}
$loijob=[]; 
$loitk=[]; 
system('clear');

function GET($host,$tsm){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $tsm,
  CURLOPT_FOLLOWLOCATION => true,));
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}
  
  function HEAD($host,$tsm,$data){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "HEAD",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,
  CURLOPT_HEADER => true));
  $mr2 = curl_exec($mr); curl_close($mr);
 return $mr2;}

function POST($host,$tsm,$data){
  $mr = curl_init();
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,
  //CURLOPT_HEADER => true
  ));
$mr2 = curl_exec($mr); curl_close($mr); 
 return $mr2;}
 
 while(true){
	if ($activeb1 == 0 or $activeb == 0) {$dunglai ++;}
$p= $banner;cc($p);
$html="htmlspecialchars_decode";
$a1="Host: gateway.golike.net";
$a2="user-agent: Mozilla/5.0 (Linux; Android 12; SM-A025F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36";
$a3="authorization: $authu";
$a4="origin: https://app.golike.net";
$a5 ="t: VFZSWk5FOVVXVFJPVkdzd1RsRTlQUT09";
$b1 ="Host: gateway.golike.net";
$tsm = array($a1,$a2,$a3,$a4,$a5);
$tsm1 = array($b1,$a2,$a3,$a4,$a5);
$go = get("https://gateway.golike.net/api/tiktok-account",$tsm);
$go = json_decode($go,true);
$ff =0;
echo $icon2.$yellowb."Nếu không có tài khoản có thể Auth của bạn bị sai \n\n";
echo $reb ."══════════════════════════════════════════════════════════════\n";
while(true){
$id = $go['data'][$ff]['id'];
$ten = $go['data'][$ff]['nickname'];
if($ten == true){
echo $icon1.$lightblueb."[$ff] ". $redb."=> ".$whiteb."Tài Khoản┊".$greenb."㊪ : $ten | " .$yellowb ."ID : $id   \n";
$ff++;continue;}else{break;}
}
echo $reb ."══════════════════════════════════════════════════════════════\n";
echo $greenb. "$maroon Nhập Tài Khoản Chạy\n$icon2"; 
$co = trim(fgets(STDIN)); 
$id = $go['data'][$co]['id']; 
$ten = $go['data'][$co]['nickname']; 
system('clear');
$p = $banner ; cc($p);
 echo $icon1.$lightblueb."❤ $ten ❤ \n";
echo $reb." ══════════════════════════════════════════════════════════════\n";
 if ($tgdungtool == 0) {
   $ngaydungtool = '30-12-2999 23:59';
 } else {
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngaydungtool = date('d-m-y H:i');
  $ngaydungtool = date('d-m-y H:i',strtotime('+ '.$tgdungtool.' minutes'));
  echo "Dừng tool sau $tgdungtool phút\nBạn Sẽ dừng tool vào$greenb $ngaydungtool \n";
  echo $reb." ══════════════════════════════════════════════════════════════\n";
}
 echo "\033[1;37m| ".$blue."STT \033[1;37m|". $cam." Thời gian \033[1;37m|".$yellow." Loại \033[1;37m|". $trang. " Id Jobs \033[1;37m|".$lightblueb. " Nhận \033[1;37m|". $greenb." Tổng nhận \033[1;37m|". $redb. " Tổng Lỗi \033[1;37m| \n";
 date_default_timezone_set('Asia/Ho_Chi_Minh');
    $tg3 = date('H:i',strtotime('+ '.$dungtooltudong.' minutes'));
while(true){
$golike = get("https://sv4.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$id."&data=null",$tsm1); 
$golike = json_decode($golike,true);
$link = $golike['data']['link']; 
$uid = $golike['data']['id']; 
$st = $golike['status']; 
$ty = $golike['data']['package_name'];
$coin = $golike['data']['price_per_after_cost'];
$linknow = explode(' ',explode('com/',$link)[1])[0];
$now = 'https://now.tiktok.com/'.$linknow;
$loi_id = $golike['data']['object_id'];
if($ty =="comment" or $ty == "$b" or $ty == "favorites" or $ty == "combo_like_sub"){
echo $redb."Job $ty đã chặn                           \r";
$loiii = $loiii + 1 ;
$data =
'{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';
$tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/"); 
$loi = post("https://sv4.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);
$p = $red."Báo cáo lỗi                                  \r"; 
 cc($p);
continue;}else{} 
date_default_timezone_set('Asia/Ho_Chi_Minh');;
$checkngaytool = date('d-m-y H:i');
if ($checkngaytool >= $ngaydungtool) {echo $lightblueb."Đạt Thời gian dừng to đã set \n";break;}
date_default_timezone_set('Asia/Ho_Chi_Minh');
        $tg1 = date("H:i");
if ($dungtooltudong != 0 ) { if ( $tg1 >= $tg3 ) {
  date_default_timezone_set('Asia/Ho_Chi_Minh');
      $tg4 = date('H:i',strtotime('+ '.$tgdungtl.' minutes'));
  echo "Tool đã dừng đẽ nghĩ ngơi [ $tg4 ]                  \n";
      while (true) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    $tg2 = date("H:i");
     if ($tg2 >= $tg4 ) {
       date_default_timezone_set('Asia/Ho_Chi_Minh');
    $tg3 = date('H:i',strtotime('+ '.$dungtooltudong.' minutes'));
    break ;}
      delay(1);
    }
}
 }
if($st=="400"){echo $whiteb."Đαиɢ тìм инιệм νụ мớι                     \r";
  if ($dungtooltudong != 0 )
  { 
    sleep(1);
  
    echo "Nếu không có job, tool dừng vào $tg3              \r";
  }

continue;}else{
  date_default_timezone_set('Asia/Ho_Chi_Minh');
    $tg3 = date('H:i',strtotime('+ '.$dungtooltudong.' minutes'));
  echo $whiteb."Đang Làm Nhiệm ᐯụ   ".$yellowb."$ty            \r";}
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
   echo $whiteb."Đang Chuyển Hướng Tới Tiktok                \r";
  if ($nowtik == "y" or $nowtik == "Y"){
 @exec("xdg-open $now");}
 else {
 @exec("xdg-open $link");
   }
   } else {
  echo $whiteb."Đang Chuyển Hướng Tới Tiktok               \r";
  if ($nowtik == "y" or $nowtik == "Y"){
 @system("cmd /c start $now");}
 else {  @system("cmd /c start $link");}
   } 
  
echo delay($delay);
$ngay1 = date('d-m-Y H:i:s');
for($time= 1;$delay2;$time++){
Echo "Bấm hoàn thành lần $time            \r";
$data = '{"ads_id":'.$uid.',"account_id":'.$id.',"async":true,"data":null}'; 
$tsm2 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/",);
$nhan = post("https://sv4.golike.net/api/advertising/publishers/tiktok/complete-jobs",$tsm2,$data);
$nhan = json_decode($nhan,true);
$se = $nhan['success'];
if($se == "1"){ date_default_timezone_set('Asia/Ho_Chi_Minh');;
$checkngaytool = date('d-m-y H:i');
$tong=$coin + $tong;
$tongjobs= $tongjobs+1;
$ngay=date("H:i");$noe++; 
cc("\033[1;37m|".$blue." $noe "."ᥫᩣ\033[1;37m|".$cam." $ngay \033[1;37m|".$yellow." $ty \033[1;37m|". $trang." $uid \033[1;37m|".$lightblueb. " +$coin \033[1;37m|". $greenb." $tong vɴᴅ \033[1;37m|".$redb. " $loiii \033[1;37m| \n"); 
$fp = fopen('DataaOutputTiktok.txt', 'a');
fwrite($fp, "$ten | $noe"."ᥫᩣ| $ngay1 | $ty | $uid | +$coin | $tong vɴᴅ | $loiii | $linknow | THÀNH CÔNG | $ip\n");
fclose($fp);
break;}
if ($time == $delay2) {break; }
}
if($se == "1"){$c = 0;}
else 
{$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}'; 
 $tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");
$loi = post("https://sv4.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);
$p = $red."ʙáo cáo ʟỗι                      \r"; 
$fp = fopen('DataaOutputTiktok.txt', 'a');
fwrite($fp, "|$ten"."ᥫᩣ| $ngay1 | $ty | $uid | $linknow | THẤT BẠI | $ip\n");
fclose($fp);
$c=$c+1;
$loiii= $loiii+ 1;
if ($c>=$baoloi) {break;}
cc($p);
date_default_timezone_set('Asia/Ho_Chi_Minh');;
$checkngaytool = date('d-m-y H:i');
if ($checkngaytool >= $ngaydungtool) {echo $lightblueb."Đạt Thời gian dừng to đã set \n";break;}
}if ($adv<=$tongjobs){
  break;}
}
if ($dunglai >= 2) {echo ("Đạt giới hạn chạy tool vui lòng mua vip để không bị giới hạn\n");
exit("Exit do tool");
}
echo $icon2."Enter để đổi acc           \r";
$adv = $adv + $tongjobs;
$coueidii = trim(fgets(STDIN));
echo "\nGiới hạn jobs của bạn vừa được set lên ".$greenb."$adv   \n";
if ($tgdungtool == 0) {
   $ngaydungtool = '30-12-2999 23:59';
 } else {
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngaydungtool = date('d-m-y H:i');
  $ngaydungtool = date('d-m-y H:i',strtotime('+ '.$tgdungtool.' minutes'));
  sleep(1);
}
sleep(1);
system('clear');
$c = 0;
$tongjobs = 0;
}
