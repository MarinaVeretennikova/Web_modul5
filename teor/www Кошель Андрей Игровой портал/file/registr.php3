<?
echo'
<html>
<head> <meta http-equiv="content-type" content="text/html;charset=windows-1251"></head>
<LINK href="style.css" 
type=text/css rel=stylesheet>
<body bgcolor="#e7e7e7">
<form id="FormName" action="http://localhost/file/dobavl.php3" method="get" name="FormName">
          <table width="70%" border="0" cellspacing="2" cellpadding="0">
<tr>
	<td colspan="2">
	<p align="center"><b>Для регистрации заполните поля </b></p>	</td></tr>
<tr>	<td>ФИО</td>
	<td><input type="text" name="p1" size="24" value=""></td></tr>
<tr>	<td>Ник</td>
	<td><input type="text" name="p2" size="24" value=""></td></tr>
<tr>	<td>Год рождения</td>
	<td><input type="text" name="p3" size="24" value=""></td></tr>
<tr>	<td>Имя команды</td>
<td><input type="text" name="p4" size="24" value=""></td> </tr>
<tr>	<td>Пароль</td>
<td><input type="password" name="p5" size="24" value=""></td>
</tr>

<td>
<p><input type=submit value="Готово"> </input></p> 
</td></tr>	
<tr><td colspan="3" align="right">
Наш адрес, телефон, e-mail и схема проезда  - 
<a href="coord.php3" target="main">
 
<b>как нас найти</b> </a><br>
Для внесения сведений о себе в базу данных необходима <a href="registr.php3" target="main"><b>регистрация</b> </a><br>
Посмотреть или изменить данные о себе - 
<a href="kontrol.php3" target="main"><b>личная папка</b> </a></td> </tr>
</table>

</form>
</body>

</html>';
?>

