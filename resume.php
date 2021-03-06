<!DOCTYPE html>
	<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Резюме</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-theme.css" rel="stylesheet" media="screen">
	</head>
	<body>	
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<h3>Мое резюме</h3>
		</div>
			<div class="col-md-6">
				<img  src="img/avatar.png">
			</div>
			<div class="col-md-6">
				<form name="form1" action="action.php" method="post">
					<div id="name">
						<p>Введите Имя:</p>
							<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<div id="surname">
						<p>Введите Фамилию:</p>
						<input type="text" class="form-control" name="surname"  placeholder="Surname">
					</div>
							<p>Дата рождения:</p>
						<div id="dateID">
							<select class="form-control" name="date">
							  <option id="num1">1</option>
							  <option id="num2">2</option>
							  <option id="num3">3</option>
							  <option id="num4">4</option>
							  <option id="num5">5</option>
							  <option id="num6">6</option>
							  <option id="num7">7</option>
							  <option id="num8">8</option>
							  <option id="num9">9</option>
							  <option id="num10">10</option>
							  <option id="num11">11</option>
							  <option id="num12">12</option>
							  <option id="num13">13</option>
							  <option id="num14">14</option>
							  <option id="num15">15</option>
							  <option id="num16">16</option>
							  <option id="num17">17</option>
							  <option id="num18">18</option>
							  <option id="num19">19</option>
							  <option id="num20">20</option>
							  <option id="num21">21</option>
							  <option id="num22">22</option>
							  <option id="num23">23</option>
							  <option id="num24">24</option>
							  <option id="num25">25</option>
							  <option id="num26">26</option>
							  <option id="num27">27</option>
							  <option id="num28">28</option>
							  <option id="num29">29</option>
							  <option id="num30">30</option>
							  <option id="num31">31</option>
							</select>
						</div>
						<p>Месяц рождения:</p>
						<div id="month">
							<select class="form-control">
							  <option id="January">Январь</option>
							  <option id="February">Февраль</option>
							  <option id="March">Март</option>
							  <option id="April">Апрель</option>
							  <option id="May">Май</option>
							  <option id="June">Июнь</option>
							  <option id="July">Июль</option>
							  <option id="August">Август</option>
							  <option id="September">Сентябрь</option>
							  <option id="October">Октябрь</option>
							  <option id="November">Ноябрь</option>
							  <option id="December">Декабрь</option>
							</select>
						</div>
						<p>Год рождения:</p>
						<div id="year">
							<input type="text" class="form-control" name="$year" placeholder="">
						</div>
					Место жительства: г.Харьков<br>
					Моб.телефон:+38(099)207-21-00<br>
					E-mail:djes131@yandex.ua</p>
			</div>
		</div>
		<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-1" data-toggle="tab">Образование</a></li>
					<li><a href="#tab-2" data-toggle="tab">Компания 1</a></li>
					<li><a href="#tab-3" data-toggle="tab">Компания 2</a></li>
					<li><a href="#tab-4" data-toggle="tab">Общая информация</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab-1">
						<dl class="d1-horizontal">
						<dt>1999-2002гг</dt>
						<dd>«Харьковский индустриально-педагогический техникум», 
						специализация – монтаж и обслуживание внутренних 
						санитарно-технических систем и вентиляции;</dd>
						<dt>2002-2006гг</dt>
						<dd>«Харьковская национальная академия городского хозяйства», 
						специальность – водные ресурсы. Водоснабжение и водоотведение, 
						специализация – очистка природных и сточных вод и водоотведение</dd>
						<dt>2013-2014гг</dt>
						<dd>"Харьковский национальный университет радиоэлектронники",
						факультет-Компьютерных наук, кафедра программной инженерии</dd>
						</dl>
					</div>
					<div class="tab-pane fade" id="tab-2">
						<p>ООО «Харьковский проектный институт Промсервис»</p>
						<p><strong>Перечень работ:</strong><br>
						<ul>
							<li>ЗАО "Лихачевский КХП" Харьковской обл., г. Первомайский, ул. Мира, 36.
							 Рабочий проект пересечения существующего газопровода
							 с/д ф76х3,5 с железнодорожным путем. (марка «ГСН»)</li>
							 <li>Суданский сельский совет Первомайского района Харьковской обл. 
							 Рабочий проект газификации села Петровка (марка «ГСН»)</li>
							 <li>ООО « ТЭЯ» Жилой дом со встроенными торговыми и офисными помещениями по ул. 
								Механизаторской в Московском районе г. Харькова (марка «ТМ»)</li>
						</ul>
						</p>
					</div>
					<div class="tab-pane fade" id="tab-3">
						<p>ГП «Государственный  научно-исследовательский и проектный институт основной химии»</p>
						<p><strong>Перечень работ:</strong><br>
						<ul>
							<li>Рабочая документация газоснабжения сушильных установок в цехе по производству 
							осажденного кремнезема в составе Асбестовского магниевого завода ОАО «Русский магний». 
							(марка «ГСН», «ГСВ»)</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="tab-4">
						<h4>Вакансия или учебный проект на который я подаю заявку</h4>
						<div id="select">
						<select class="form-control">
							<option id="JuniorPHP">Junior PHP</option>
							<option id="InternPHP">Intern PHP</option>
							<option id="InternPHP_developer">Intern PHP developer</option>
							<option id="JuniorPHP_developer">Junior PHP developer</option>
						</select>
						</div>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1">Опыт работы отсутствует
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2">Есть опыт работы в IT
						</label>
							<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox3" value="option3">Есть опыт работы в других сферах
						</label>
					</div>
				</div>
			</div>
			<button type="button" name="send" class="btn btn-primary">Отправить</button>
			<button type="reset" name="delete" class="btn btn-primary">Очистить</button>
			</form>
	</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<?php
$user=array(
	"fio"=>"Буряк Евгения Анатольевна",
	"age"=>"31.10.1981",
	"adress"=>"г.Харьков",
	"email"=>"djes131@yandex.ua",
	"phone"=>"80992072100");
echo "<b>Данные пользователя:</b>"."<br>";
foreach ($user as $key => $value) {
	echo "$key=>$value<br>\n";
}
$name='Yevgeniya';
$letterArray=array('A','E', 'I', 'O', 'U','Y');
if (in_array($name[0], $letterArray)) {
	echo "Гласная";
} else {
	echo "Согласная";
}
if('year'=='1981')
	echo "Доступ открыт для пользователя";
?>
	</body>
	</html>