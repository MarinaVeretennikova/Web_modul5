<?
echo'
<Html>
<head>  <LINK href="style.css" 
type=text/css rel=stylesheet><title></title></head>
<body bgcolor="#FFEFD5">
<form id="FormName" action=http://localhost/file/find.php3 method="get" name="FormName">
<H4 align="center"> Подбор вакансий </H4>
<p>
Для корректного подбора сведений укажите свои требования по каждому из критериев поиска и их значимость. <br>
Значимость критерия - принимает значения от 1 до 9. На первом месте стоит самый важный  критерий.   Если вы не хотите использовать критерий при поиске его значимость равна 0.<br>
</p>
 <br>
   <table width="70%" border="0">
     <tr>
	<td width="370"> <b>Наименование критерия</b></td>
	<td width="152"> <b> Значимость</b></td>
	<td width="250"><b>Требуемое значение</b></td>
    </tr>
<tr>	<td>Заработная плата</td>
	<td><input type="text" name="zn1" value="1" size="8"></td>
	<td><input type="text" name="tr1" size="16" value="2000"></td></tr>

<tr>	<td>Условия труда</td>
	<td><input type="text" name="zn2" value="2" size="8" ></td>
	<td width="250"><select name="tr2" size="1">
			<option value="0">Безопасные усл труда</option>
			<option value="1">Опасный производственный фактор</option>
			<option value="2">Вредный производственный фактор</option>
		            </select></td></tr>


<tr>	<td>Шифр вашей специальности</td>
	<td></td>
	<td><input type="text" name="spec" value="1111" size="8"></td></tr>



<tr>	<td>Степень соответствия специальности*</td>
	<td><input type="text" name="zn3" value="3" size="8"></td>
	<td><input type="text" name="tr3" size="16" value="48" ></td></tr>

<tr>	<td>Город</td>
	<td><input type="text" name="zn4" value="4" size="8"></td>
	<td><select name="tr4" size="1">
			<option value="0">Белгород</option>
			<option value="1">Воронеж</option>
			<option value="2">Орел</option>
			<option value="3">Курск</option>
			</select></td></tr>

<tr>	<td>Режим работы</td>
	<td><input type="text" name="zn5" value="5" size="8"></td>
	<td width="250"><select name="tr5"size="1">
			<option value="0">Нормированный рабочий день</option>
			<option value="1">Ненормированный рабочий день</option>
			<option value="2">Гибкий график</option>
			<option value="3">Сменная работа</option>
			</select></td></tr>

<tr>	<td>Возможность карьерного роста</td>
	<td><input type="text" name="zn6" value="6" size="8"></td>
	<td><select name="tr6" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>
<tr>	<td>Предоставление жилья</td>
	<td><input type="text" name="zn7" value="7" size="8" ></td>
	<td><select name="tr7" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Соц. пакет</td>
	<td><input type="text" name="zn8" value="8" size="8"></td>
	<td><select name="tr8" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Научная работа</td>
	<td><input type="text" name="zn9" value="9" size="8"></td>
	<td><select name="tr9" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>

<tr>	<td>Командировки</td>
	<td><input type="text" name="zn10" value="10" size="8"></td>
	<td><select name="tr10" size="1">
			<option value="0">нет</option>
			<option value="1">да</option>
			</select></td></tr>
</table>
<p>		
<input type=submit value="Поиск"> </input>
</p>
<p> <font size="1">
* Степень соответствия специальности рабочему месту  - принимает значения от 1 до 100 (%). Чем выше степень соответствия, тем больше специальность подходит для вакансии. </font> </p>
</form></body>
</html>';

?>