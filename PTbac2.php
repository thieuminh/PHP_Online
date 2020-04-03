<?php
	$a=1;
	$b=-3;
	$c=1;
	if($a==0)
	{
		if($b==0)
			if($c==0)
				echo "Phương trình có vố số nghiệm";
			else
				echo "Phương trình vô nghiệm";
		else
		{
			$tmp=(-$c)/$b;
			echo "Phương trình có 1 nghiệm là: ".$tmp;
		}
	}
	else
	{
		$denta=($b*$b)-(4*$a*$c);
		if($denta<0)
			echo "Phương trình vô nghiệm";
		else
			if($denta==0)
			{
				$tmp=(-$b)/(2*$a);
				echo "Phương trình có nghiệm kép là: ".$tmp;
			}
			else
			{
				$x1=((-$b)+sqrt($denta))/(2*$a);
				$x2=((-$b)-sqrt($denta))/(2*$a);
				echo "-Phương trình có hai nghiệm phân biêt:<br/>";
				echo "+Nghiệm thứ nhất là: ".$x2;
				echo "<br/> +Nghiệm thứ hai là: ".$x1;
			}
	}
?>