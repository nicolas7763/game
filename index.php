<!DOCTYPE html>
<html>
<head>
	<title>Основы php</title>
</head>
<body>
<h1>Угадай число от 1 до 100</h1>
<?php
if (isset($_POST["send"])) {//если данные переданы
	$number= $_POST["number"];//пишем данные в переменную из текстового поля формы
	$compDice= $_POST["compDice"];// пишем в переменную данные из скрытого поля формы
	

if ($number > $_POST["compDice"]) {//проверяем первое условие
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

<form  method= "post">
Введите число: <input type="text" name="number" value="<?=$number?>" /><br />
<input type="submit" name="send" value="Ввод" />
<input type="hidden" name="compDice" value="<?=$compDice?>">
</form>
</body>
</html>