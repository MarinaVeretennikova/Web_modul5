<?

Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Не могу соединиться с базой ".DBName."!<br>"; exit; }

 echo '	 <table  border="1" cellspacing="2" cellpadding="0" > 
    	<tr>	<td><B>Номер студента</td> 	<td><B>ФИО</td> <td><B>Группа</td>
<td><B>Домашний адрес</td> <td> <B>Номер телефона</td> ';

echo '<B><br>Таблица Студенты: </B><br>';
$r=mysql(DBName,"select * from stud");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
 echo " <tr> <td>$f[numstud]</td> 	<td>$f[FIOstud] </td> 
		<td>$f[groop]</td> <td>$f[adress]</td> <td> $f[telefon] </td>";
}
echo "</table>";

echo "<p> <B><br>Форма для добавления записи в таблицу Студенты: </B><br> </p>";
echo '	<form id="FormName" action="http://localhost/zapoln.php3" method="get" name="FormName">
			<label>ФИО     </label><input type="text" name="p1" size="24" ></Input>
			<p><label>Группа  </label><input type="text" name="p2" size="24" ></p>
			<p><label>Адрес    </label><input type="text" name="p3" size="24" ></p>
			<p><label>Телефон</label><input type="text" name="p4" size="24" ></p>
			<p><input type="submit" name="textfieldName" value="Внести данные"></p>
	</form>';
?>