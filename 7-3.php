<h1>Вариант 1 (через switch)</h1>
<?php
$month = 4;

// через switch
switch ($month) {
    case ($month <= 3):
		$result = 'зима';
        echo $result;
        break;
    case ($month <= 6):
        $result = 'весна';
        echo $result;
        break;
    case ($month <= 9):
        $result = 'лето';
        echo $result;
        break;	
	case ($month <= 12):
        $result = 'осень';
        echo $result;
        break;	
	case ($month):
		$result = "введено неверное значение";
        echo $result;
        break;	
} ?>


<h1>Вариант 2 (через if)</h1>

<?php 
//через if
if ($month <= 3) {
        $result = 'зима';
        echo $result;
} elseif ($month <= 6) {
        $result = 'весна';
        echo $result;
} elseif ($month <= 9) {
        $result = 'лето';
        echo $result;
} elseif ($month <= 12) {
        $result = 'осень';
        echo $result;
} else {
	echo "введено неверное значение";
}