
	<?php
	function Printf_n($string)//��¤�r��X����
	{
		echo $string."\n";
	}
	
	set_time_limit(0);//�L������
	Printf_n('jash-liao �s��-�ѻ��Y�ɧ�s�t��:'); 

	date_default_timezone_set("Asia/Taipei");
	Printf_n('��s�ɶ�:'. date ("Y- m - d / H : i : s")); 
	$time='&t='.date ("YmdHis");

	$fp = fopen("stock.csv", "r");
	while (($data = fgetcsv($fp, 1000, ",")) !== FALSE)
	{
		$id=$data[1];
		$name=$data[0];
		$text=file('https://tw.stock.yahoo.com/q/q?s='.$id.$time);
		foreach ($text as $line_num => $line) {
			if (preg_match("/><b>/i", $line))
			{
				$a='<td align="center" bgcolor="#FFFfff" nowrap><b>';
				$b='</b></td>';
				//str_replace (���N�e���r��,���N��r��,�n���N���r��);
				$line=str_replace ($b,'',str_replace ($a,'',$line));
				Printf_n($name.'['.$id.']'."\t".$line);
			} 
		}
	}
	fclose($fp);
	echo '��ƨӷ�:YAHOO�ѥ�';

	?>
