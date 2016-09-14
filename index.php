<!DOCTYPE html>
<html>
<head>
	<title>Основы php</title>
</head>
<body>

<?php
if (isset($_GET[submit])) {//если данные переданы
	$number= $_GET["number"];//пишем данные в переменную из текстового поля формы
	$compDice= $_GET["compDice"];// пишем в переменную данные из скрытого поля формы
	

if ($number > $_GET["compDice"]) {//проверяем первое условие
	echo " Введенное число '$number' больше загаданного числа ";
}elseif ($number < $compDice) {
	echo "Введенное число '$number' меньше загаданного числа ";
}elseif ($number === $compDice) {
	echo "Вы победили! Введенное число равно загаданному!";
	$compDice = mt_rand(0, 100);// компьютер загадывает новое число
}
}else {//если не переданы данные
	$number= 0; // начальное значение текстового поля формы
	$compDice = mt_rand(0, 100);// число загадывает компьютер
}
?>

<form method= "get">
Введите число: <input type="text" name="number" value="<?=$number?>" /><br />
<input type="submit" name="submit" value="Ввод" />
<input type="hidden" name="compDice" value="<?=$compDice?>">
</form>
</body>
</html>