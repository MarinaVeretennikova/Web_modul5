<?
 session_start();
@$pas=$_SESSION['pass'];
@$nik=$_SESSION['nik'];
@$kom=$_SESSION['kom'];

echo '
<HTML>
<HEAD>  <title></title>   
 <LINK href="style.css" type=text/css rel=stylesheet>
</HEAD>  
<BODY bgcolor="#e7e7e7"> <b>
<table width=100%> <tr > <td align="right"><a href="outkom.php3"><B> ����� </b> </a> </td> </tr> </table>
<form id="FormName" action="http://localhost/file/zapolnkom.php3" method="get" name="FormName">';

$i=1;
$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey');

$zapr="SELECT * FROM TKOMANDI where KAPITAN='$nik'";

@$r = ibase_query($db, $zapr);

@$row = ibase_fetch_object($r);
if ($row>0)
{
    $col_info = ibase_field_info($r, $i); $i++;
{
echo ($row->NAZVANIE)."\n";
echo '<br>';
}

echo'</B><br>
<p> <B>�������� ��������: </B></p>';

$r = ibase_query($db,$zapr);
while ($row = ibase_fetch_object($r)) 
{

echo '
  <table width="350"  cellspacing="2" cellpadding="0">


<tr>
	<td><label>';
$i=0;
while ($i<5)
{
 $col_info = ibase_field_info($r, $i); 
 $i++;
echo $col_info['name'].": "."\n"; 
echo'</label></td>
	<td><input type="text" name="p';
echo $i-1;
echo '" value="';

echo ($row->$col_info['name']);
echo'"></input></td></tr> <tr><td>';

}}
echo'
<tr> <td> 

 ������� � ��������� ����������
<p>	<td><select name="u4" size="1">
			<option value="0">���</option>
			<option value="1">��</option>
			</select></td></tr>

</p>
</td></tr>

</table>

	<p><input type=submit value="������� ���������"> </input></p> 



</form>';



}
else
{
 echo '<p><b>�������� ������ ��� ���! </b> ���������� ��� ��� <a href="kontrolkom.php3" target="main"> ������ ��� � ������</a></p> 
<p>���������� � �������������� �����, ���� �� <b>������ ������ </b>.    
<a href="mailto:igrokservise@mail.ru"> igrokservise@mail.ru</a>
</p> 
<p>��� ��������� ����� ������ � ���� ���������� 

<a href="registrkom.php3" target="main"> ����������� </a> </p>';
}
echo'	

</BODY>
</HTML>';

?>
