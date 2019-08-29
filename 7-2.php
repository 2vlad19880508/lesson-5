<h1>Вариант 1 (через switch)</h1>
<?php
$day = 12;

// через switch
switch ($day) {
    case ($day <= 10):
		$result = 'первая декада';
        echo $result;
        break;
    case ($day <= 20):
        $result = 'вторая декада';
        echo $result;
        break;
    case ($day <= 31):
        $result = 'третья декада';
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
if ($day <= 10) {
		$result = 'первая декада';
        echo $result;
} elseif ($day <= 20) {
        $result = 'вторая декада';
        echo $result;
} elseif ($day <= 31) {
        $result = 'третья декада';
        echo $result;
} else {
	echo "введено неверное значение";
}