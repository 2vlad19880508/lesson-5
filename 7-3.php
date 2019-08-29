<h1>Вариант 1 (через switch)</h1>
<?php
$month = 12;

// через switch
switch ($month) {
    case ($month <= 2):
		$result = 'зима';
        echo $result;
        break;
    case ($month <= 5):
        $result = 'весна';
        echo $result;
        break;
    case ($month <= 8):
        $result = 'лето';
        echo $result;
        break;	
	case ($month <= 11):
        $result = 'осень';
        echo $result;
        break;	
	case ($month == 12):
        $result = 'зима';
        echo $result;
        break;	
	default:
		$result = "введено неверное значение";
        echo $result;
        break;	
} ?>


<h1>Вариант 2 (через if)</h1>

<?php 
//через if
if ($month <= 2) {
        $result = 'зима';
        echo $result;
} elseif ($month <= 5) {
        $result = 'весна';
        echo $result;
} elseif ($month <= 8) {
        $result = 'лето';
        echo $result;
} elseif ($month <= 11) {
        $result = 'осень';
        echo $result;
} elseif ($month == 12) {
        $result = 'зима';
        echo $result;
} else {
	echo "введено неверное значение";
}