<?php
$name = "Не известно";
$surname = "Не известно";
if(isset($_POST['myname'])) $name = $_POST['myname'];
if (isset($_POST['surname'])) $surname = $_POST['surname'];
 
echo "Ваше имя: $name  <br> Ваша фамилия: $surname";
echo '<p>Дата рождения: </p>';
foreach ($_POST['day_m'] as $keys=>$values) echo "<b>$values</b>";
echo '<p>Месяц рождения: </p>';
foreach ($_POST['month_m'] as $keys=>$values) echo "<b>$values</b>";
$year=$_POST['year'];
echo "<p>Год рождения: <b>".$year."</b></p><br>";
$num1=$year/1000%10;
$num2=$year/100%10;
$num3=$year/10%10;
$num4=$year%10;
$sum=$num1+$num2+$num3+$num4;
echo $sum." - ";
if ($sum%2==0) {
	echo "Число четное";
} else {
	echo "Число нечетное<br>";
}
echo "<br>Вы претендуете на должность:<br>";
foreach ($_POST['job'] as $keys=>$values) echo "<b>$values</b>";



/*$name = $_POST['myname'];
$letterArray = array('А', 'Е', 'Ё', 'И', 'О', 'У', 'Ы', 'Э', 'Ю', 'Я');
if (in_array($name[0], $letterArray)) {
echo "Имя с гласной";
} else {
    echo "<br>Имя с согласной";
}*/
?>