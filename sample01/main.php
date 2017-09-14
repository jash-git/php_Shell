<?php
	header('content-type:text/html;charset=utf-8');
	//test.php
	include("lib.php");//引用函式庫
	OpenLogFile("logtest.txt");
	$a=10;$b=20;
	Printf_n("ouput message on UI");
	WriteLog(__FILE__,__LINE__,"未呼叫SWAP函數前a=".$a." b=".$b);
	WriteLog(__FILE__,__LINE__,"未呼叫SWAP函數前");
	SWAP($a,$b);
	WriteLog(__FILE__,__LINE__,"呼叫SWAP函數後");
	WriteLog(__FILE__,__LINE__,"呼叫SWAP函數後a=".$a." b=".$b);
?>	