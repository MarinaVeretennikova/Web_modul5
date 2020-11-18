<?
echo'
<Html>
<head>  <LINK href="style.css" 
type=text/css rel=stylesheet><title></title></head>
<body bgcolor="#FFEFD5">
<form id="FormName" action=http://localhost/file/zapdobvak.php3 method="get" name="FormName">
<H4 align="center"> Добавление вакансии </H4>

 <br>
   <table width="70%" border="0">
<tr>	<td>Пароль предприятия</td>
	<td><input type="password" name="pass" size="16" value=""></td></tr>

<tr>	<td>Заработная плата</td>
	<td><input type="text" name="p2" size="16" value="2000"></td></tr>

<tr>	<td>Условия труда</td>
	<td width="250"><select name="p3" size="1">
			<option value="0">Безопасные усл труда</option>
			<option value="1">Опасный производственный фактор</option>
			<option value="2">Вредный производственный фактор</option>
		            </select></td></tr>

<tr>	<td>Город</td>
	<td><select name="p5" size="1">
			<option value="0">Белгород</option>
			<option value="1">Воронеж</option>
			<option value="2">Орел</option>
			<option value="3">Курск</option>
			</select></td></tr>

<tr>	<td>Режим работы</td>
	<td width="250"><select name="p6"size="1">
			<option value="0">Нормированный рабочий день</option>
			<option value="1">Ненормированный рабочий день</option>
			<option value="2">Гибкий график</option>
			<option value="3">Сменная работа</option>
			</select></td></tr>

<tr>	<td>Возможность карьерного роста</td>
	<td><select name="p7" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>
<tr>	<td>Предоставление жилья</td>
	<td><select name="p8" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Соц. пакет</td>
	<td><select name="p9" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Научная работа</td>
	<td><select name="p10" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Командировки</td>
	<td><select name="p11" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>
<tr> <td>
<p>		
<input type=submit value="Добавить"> </input>
</p> </td> </tr>
<tr><td colspan="3" align="right">
Наш адрес, телефон, e-mail и схема проезда  - 
<a href="coord.php3" target="main">
 
<b>как нас найти</b> </a><br>
Для внесения сведений о себе в базу данных необходима <a href="registr.php3" target="main"><b>регистрация</b> </a><br>
Посмотреть или изменить данные о себе - 
<a href="folder.php3" target="main"><b>личная папка</b> </a></td> </tr>
</table>
</form></body>
</html>';

?>