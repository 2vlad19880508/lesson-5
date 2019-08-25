<?php
$num = 30;
$f = range(1,$num,1); 

// 
foreach ($f as $elem) {
		if ($num % $elem == 0) {		
			$arr2[] = $elem;
		}
	}

print_r($arr2);


  