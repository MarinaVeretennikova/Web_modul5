<?

Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "�� ���� ����������� � ����� ".DBName."!<br>"; exit; }

 echo '	 <table  border="1" cellspacing="2" cellpadding="0" > 
    	<tr>	<td><B>����� ��������</td> 	<td><B>���</td> <td><B>������</td>
<td><B>�������� �����</td> <td> <B>����� ��������</td> ';

echo '<B><br>������� ��������: </B><br>';
$r=mysql(DBName,"select * from stud");
for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);
 echo " <tr> <td>$f[numstud]</td> 	<td>$f[FIOstud] </td> 
		<td>$f[groop]</td> <td>$f[adress]</td> <td> $f[telefon] </td>";
}
echo "</table>";

echo "<p> <B><br>����� ��� ���������� ������ � ������� ��������: </B><br> </p>";
echo '	<form id="FormName" action="http://localhost/zapoln.php3" method="get" name="FormName">
			<label>���     </label><input type="text" name="p1" size="24" ></Input>
			<p><label>������  </label><input type="text" name="p2" size="24" ></p>
			<p><label>�����    </label><input type="text" name="p3" size="24" ></p>
			<p><label>�������</label><input type="text" name="p4" size="24" ></p>
			<p><input type="submit" name="textfieldName" value="������ ������"></p>
	</form>';
?>