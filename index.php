﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
-=[Topperkabap&trade; ]=-</title>

        <link rel="stylesheet" type="text/css" href="bot.css" media="all,handheld"/>
       
<?php
 error_reporting(0);
$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $Tokenx[]=$b.'='.$c;
}
$true='?'.implode('&',$Tokenx);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Ali',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('Tokenx')){
        mkdir('Tokenx');
}
if($bb){
$blue=fopen('Tokenx/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';
}else{
        if($z){
if(file_exists('Tokenx/'.$id)){
$file=file_get_contents('Tokenx/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('Tokenx/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('Tokenx/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('Tokenx/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('Tokenx/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('Tokenx/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}
}

public function lOgbot($d){
        unlink('Tokenx/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('Tokenx/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<br>
<ul>
<font color="white">Welcome :  '.$nm.'</font>
<br>
<br>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a>
<br>
 <font color="white">Your Bot has been Activated '.$nm.'</font>
<br>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input class="button button5" type="submit" value="Logout Bot"></form>
<center><div class="hr"><hr /></div></center>
<br>
<br>
<br>
<form action="index.php" method="post">
<center>
<font color="black" size="3">Select Menu Robot</font></center>
<select class="button button5">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'

<select  class="button button5" name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'

<select  class="button button5" name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'
';
        if($empat=='on'){
        echo'
<select class="button button5" name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select  class="button button5" name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda

<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'

</ul></div>

<ul><div id="top-content">
<div id="search-form">
<input class="button button5" type="submit" value="SAVE"></form>
</div></div></div></ul></center>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">

</h1>

<h2 class="description"><h1><center><script src="ali.js"></script><h1>

</h2></div></div>';
}

public function home(){
echo'

<br>
<center><a href="http://facebook.com/100014233187537"><img src="https://graph.facebook.com/100014233187537/picture?type=large" alt="Profile" style="height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px lime;box-shadow:0px 0px 20px 0px red"></a>
<br>
</span>
</div>
<div class="post-meta2">
<iframe src="https://www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FSherbano08&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></div></div></div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">

<font face="Orbitron" size="50" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em blue;"><b> <em><strong> Welcom To My BoT </em></strong>  </b></font><audio src="https://e.top4top.net/m_630n93us1.mp3" autoplay="" loop=""></audio><center><p style="font-size:20;color:yellow">Get Working Token Here</p>
<center>
<a href="https://mrtokens.herokuapp.com/" target="_blank">
<input class="button button5" type="button" value="Get Token 1"> </a>
<a href="https://fbsub.pro/andlogin.php" target="_blank">
<input class="button button5" type="button" value="Get Token 2"> </a>
<a href="" target="_blank">
<input class="button button5" type="button" value="LiFE tIME BOT"> </a>
</center>
<h4><font size="26" color="red"></font><font face="Orbitron" size="6" style="background: url(&quot;<a target="_top"</font></h4> 
<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" placeholder="EAAAAAYsX7TsBAFFRduKzXivqITZC1wS7xZB9C7V6bBxdksABL2TLS1diOzYXZCof4LZBgfXa5NIpap27yEmRPZAIq9KZC7Df7POMWHwwZBqpl0ZBA8ZCIn92duFbTU78FSZCwzaD111a2E889NyjXfsrn6EwWZBrBelzFvzvSuZAYVu3t0XvMSWK87qdTzGEB7vjeRNrDikxOgzq28rTCtCP8AJ8" st name="token"> <br>
<input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('Tokenx')){
        mkdir('Tokenx');
}
$up=opendir('Tokenx');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<center>
<p style="font-size:20;color:Yellow"><strong><em>Active Fan</strong></em> : '.count($user).'</p></ul>
<br>
 
</center>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('Tokenx/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('Tokenx/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>