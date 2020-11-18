<?
echo'
<html>
<head> <meta http-equiv="content-type" content="text/html;charset=windows-1251"></head>
<LINK href="style.css" 
type=text/css rel=stylesheet>
<body bgcolor="#FFEFD5">
<form id="FormName" action="http://localhost/file/dobavl.php3" method="get" name="FormName">
          <table width="70%" border="0" cellspacing="2" cellpadding="0">
<tr>
	<td colspan="2">
	<p align="center"><b>Для регистрации заполните поля </b></p>	</td></tr>
<tr>	<td>Название фирмы</td>
	<td><input type="text" name="p1" size="24" value="Popov"></td></tr>
<tr>	<td>Город</td>
	<td><input type="text" name="p2" size="24" value="Petr"></td></tr>
<tr>	<td>Адрес</td>
	<td><input type="text" name="p3" size="24" value="Petrovich"></td></tr>
<tr>	<td>Профиль</td>
	<td><input type="text" name="p4" size="24" value="Orel"></td></tr>
<tr>	<td>Номер телефона</td>
	<td><input type="text" name="p5" size="24" value="timiraz 45"></td></tr>
<tr>	<td>ФИО руководителя</td>
	<td><input type="text" name="p6" size="24" value="12-89-54"></td></tr>
<tr>	<td>Номер телефона рук-ля</td>
	<td><input type="text" name="p7" size="24" value="1980"></td></tr>
<tr>	<td>e-mail</td>
	<td><input type="text" name="p8" size="24" value="1980"></td></tr>
<tr><td>
<p><input type=submit value="Готово"> </input></p> 
</td></tr>	
<tr><td colspan="3" align="right">
Наш адрес, телефон, e-mail и схема проезда  - 
<a href="coord.php3" target="main">
 
<b>как нас найти</b> </a><br>
Для внесения сведений о себе в базу данных необходима <a href="registr.php3" target="main"><b>регистрация</b> </a><br>
Посмотреть или изменить данные о себе - 
<a href="folder.php3" target="main"><b>личная папка</b> </a></td> </tr>
</table>

</form>
</body>

</html>';
?>

