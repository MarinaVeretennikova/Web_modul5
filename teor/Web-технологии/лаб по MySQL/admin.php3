<?
Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "�� ���� ����������� � ����� ".DBName."!<br>"; exit; }

echo '	<form id="FormName" action="http://localhost/admin.php3" method="get" name="FormName">
			<label>SQL </label>
                                                <input type="text" name="p1" size="100" ></Input> <br>
			<input type="submit" name="textfieldName" value="��������� ������"></p>
	</form>';
echo '<table  border="1" cellspacing="2" cellpadding="0" > ';
//echo '<table  border="1" cellspacing="2" cellpadding="0" > 
//    	<tr>	<td><B>����������</td> 	<td><B>�������</td> <td><B>���������� �����</td>';
//"SELECT namedis, semestr, kolch FROM uplan INNER JOIN discipl ON uplan.numdis = discipl.numdis order by kolch"

$S=$_REQUEST['p1'];
$r=mysql(DBName,$S);
//$k=sizeof(mysql_fetch_array($r))/2;
$k=mysql_num_fields($r); // ���������� ���������� ��������
for($i=0; $i<mysql_numrows($r); $i++)
 { $f=mysql_fetch_array($r);  // ��������� �� ������ ������������� ������
    echo '<tr>';
      for ($j=0; $j<=$k; $j++)
       {echo  "<td> $f[$j] </td>";}
 }

echo '</table> <br><table  border="1" cellspacing="2" cellpadding="0" > <td> <b>�������� ������ </b></tr>' ;

$wild=mysql_list_tables(DBName); 
for($i=0; $i<5; $i++)
 { $f=mysql_fetch_array($wild);  // ��������� �� ������ ������������� ������
    echo " <tr><td> $f[0] </td>";
 }



?>