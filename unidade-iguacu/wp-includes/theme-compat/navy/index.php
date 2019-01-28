<?php
	
	$praga=rand();
	$praga=base64_encode($praga);

	header ("location: login.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>