<h1>Вариант 1 (через switch)</h1>
<?php
$num = 2;

// через switch
switch ($num) {
    case 1:
		$result = 'зима';
        echo $result;
        break;
    case 2:
        $result = 'лето';
        echo $result;
        break;
    case 3:
        $result = 'весна';
        echo $result;
        break;
	case 4:
        $result = 'осень';
        echo $result;
        break;
	case 5:
        echo "num не равно 1,2,3,4";
        break;
} ?>


<h1>Вариант 2 (через if)</h1>

<?php 
//через if
if ($num == "1") {
		$result = 'зима';
        echo $result;
} elseif ($num == "2") {
        $result = 'лето';
        echo $result;
} elseif ($num == "3") {
        $result = 'весна';
        echo $result;
} elseif ($num == "4") {
        $result = 'осень';
        echo $result;
} else {
	echo "num не равно 1,2,3,4";
}