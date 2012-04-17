<?php
if(@$_REQUEST['act']=="1")
{
$arr[0]=@$_REQUEST['a0'];
$arr[1]=@$_REQUEST['a1'];
$arr[2]=@$_REQUEST['a2'];


$mailbody	=	 file_get_contents("mailer.html");

$mailbody	=	 str_replace("[NAME]",$arr[0],$mailbody);
$mailbody	=	 str_replace("[EMAIL]",$arr[1],$mailbody);
$mailbody	=	 str_replace("[COMM]",$arr[2],$mailbody);

$from			=	 $arr[1];
$headers   	 	=	 "MIME-Version: 1.0\r\n";
$headers		.=	 "Content-Type: text/html;\n\tcharset=\"iso-8859-1\"\n";
$headers		.=	 "From:".$from."\r\n";

$subject 	    =    "Trendwise Analytics Invite a friend";

$to1 	= "info@trendwiseanalytics.com";
@mail($to1,$subject,$mailbody,$headers);
echo "OK";
}

?>