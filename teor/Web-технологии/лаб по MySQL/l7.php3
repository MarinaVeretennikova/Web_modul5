<HTML>
<HEAD>
<H4> �������� ��������� ���������� ������<H4>
</HEAD>
<BODY>
 <form >
<select name="sel" id="sort" size="1">
			<option value="asc"> �� ����������� </option>
			<option value="desc"> �� �������� </option>
</select> <br>
<input type="hidden" name="pole" id="p1" > <br>
<input type=submit value="����������" onclick="p1.value='order by namedis'"> </input>
<input type=submit value="���������� �����" onclick="p1.value='order by kolch'"> </input>
<input type=submit value="�������" onclick="p1.value='order by semestr'"> </input>
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
{ echo "�� ���� ����������� � ����� ".DBName."!<br>"; exit; }

$Q=$_REQUEST['pole'];
$F=$_REQUEST['sel'];
$S="SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis ".$Q." ".$F;

$r=mysql(DBName,$S);

echo '<table  border="1" cellspacing="2" cellpadding="0" > 
    	<tr>	<td><B>����������</td> 	<td><B>�������</td> <td><B>���������� �����</td>';



for($i=0; $i<mysql_numrows($r); $i++)
{ $f=mysql_fetch_array($r);

echo "<tr>	<td>$f[namedis]</td> 	<td>$f[semestr] </td> <td>$f[kolch] </td>";
}

 //$r=mysql(DBName,"SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis order by semestr desc");
//$r=mysql(DBName,"SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis order by namedis");

?>