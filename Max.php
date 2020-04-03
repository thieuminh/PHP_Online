<?php
	$a=array(1,4,2,6,9,100,45,8,20);
	$max=$a[0];
	for($i=1;$i<=8;$i++)
		if($a[$i]>$max)
			$max=$a[$i];
	echo $max;
?>