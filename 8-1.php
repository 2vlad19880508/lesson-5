<?php
$arr = [2, -5, -9, 15, 11, -4, 7, 1, -10];

// берем все значения со знаокм "-"
foreach ($arr as $elem) {
		if ($elem < 0) {		
			$arr2[] = $elem;
		}
	}

$result = array_sum ($arr2);
print_r($result);

echo "<br>";
  
// берем все значения со знаокм "+"
foreach ($arr as $elem) {
		if ($elem > 0) {		
			$arr3[] = $elem;
		}
	}

$result2 = array_sum ($arr3);
print_r($result2);
  