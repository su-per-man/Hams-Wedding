<?php
if(isset($_POST["w"]))
{
	$to = "hams.bis@gmail.com, jinia.tupai@gmail.com";
	//$to = "rockz.suman.kumar@gmail.com";
	$subject = "MAIL FROM WEDDING SITE";
	$txt= "
<html>
<head>
<title>MAIL FROM WEDDING SITE</title>
</head>
<body>
".$_POST["n"].", ".$_POST["m"].", ".$_POST["p"]."\n : \n
".$_POST["w"]."
</body>
</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	if(mail($to,$subject,$txt,$headers)==true)
		echo "Sent";
	else
		echo "Failed";
}
?>