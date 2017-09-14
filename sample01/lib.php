<?php
	//jashlib.php
	function Printf_n($string)//單純文字輸出換行
	{
		echo 'php out:'.$string."\n";
	}
	function SWAP(&$a,&$b)//透過位址方式交換兩數
	{
		$c=$a;
		$a=$b;
		$b=$c;
	}
	$fp;
	function OpenLogFile($FileName)
	{
		global $fp;
		$fp=fopen($FileName,"w");//$fp=fopen($FileName,"a+");
	}
	function WriteLog($FileName,$Position,$Message)
	{
		//WriteLog(__FILE__,__LINE__,"Message");
		global $fp;
		fprintf($fp,"%s,%d-%s\n",$FileName,$Position,$Message);
	}
	function CloseLogFile()
	{
		global $fp;
		fclose($fp);
	}
?>