<HTML>
<HEAD>
<H4> Выберите параметры сортировки данных<H4>
</HEAD>
<BODY>
 <form >
<select name="sel" id="sort" size="1">
			<option value="asc"> по возрастанию </option>
			<option value="desc"> по убыванию </option>
</select> <br>
<input type="hidden" name="pole" id="p1" > <br>
<input type=submit value="Дисциплина" onclick="p1.value='order by namedis'"> </input>
<input type=submit value="Количество часов" onclick="p1.value='order by kolch'"> </input>
<input type=submit value="Семестр" onclick="p1.value='order by semestr'"> </input>
</form>
</BODY>
</HTML>

<?
Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Не могу соединиться с базой ".DBName."!<br>"; exit; }

$Q=$_REQUEST['pole'];
$F=$_REQUEST['sel'];
$S="SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis ".$Q." ".$F;

$r=mysql(DBName,$S);

echo '<table  border="1" cellspacing="2" cellpadding="0" > 
    	<tr>	<td><B>Дисциплина</td> 	<td><B>Семестр</td> <td><B>Количество часов</td>';



for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);

echo "<tr>	<td>$f[namedis]</td> 	<td>$f[semestr] </td> <td>$f[kolch] </td>";
}

 //$r=mysql(DBName,"SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis order by semestr desc");
//$r=mysql(DBName,"SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis order by namedis");

?>