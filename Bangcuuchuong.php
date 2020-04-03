<?php
	for($i=1;$i<=10;$i++)
	{
		for($j=2;$j<=9;$j++)
		{
			$tmp=$i*$j;
			echo $j;
			echo ' x '.$i;
			echo ' = '.$tmp;
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
			echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
			if($i!=10)
				echo "&nbsp;&nbsp;";
			if($i!=10&&$tmp<10)
				echo "&nbsp;&nbsp;";
		}
		echo "<br/>";
	}
		
?>