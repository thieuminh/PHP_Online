<?php
	$n=100;
	$sum=0;
	for($i=1;$i<=$n;$i++)
	{
		$tmp=1;
		for($j=1;$j<=$i;$j++)
			$tmp*=$j;
		$sum+=($i/$tmp);
	}
	echo $sum;
?>