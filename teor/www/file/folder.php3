<?
 session_start();
@$pas=$_SESSION['pass'];
echo '
<HTML>
<HEAD>  <title></title>   
 <LINK href="style.css" type=text/css rel=stylesheet>
</HEAD>  
<BODY bgcolor="#FFEFD5"> <b>
<table width=100%> <tr > <td align="right"><a href="out.php3"><B> ����� </b> </a> </td> </tr> </table>
<form id="FormName" action="http://localhost/file/zapoln.php3" method="get" name="FormName">';

$i=1;
$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey');

$zapr="SELECT  *  FROM TMAININFO where KODPREDPR=".$pas;

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
$i=1;
while ($i<9)
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
echo'</table>

	<p><input type=submit value="������� ���������"> </input></p> </form>';



}
else
{
 echo '<p><b>�������� ������! </b> ���������� ��� ��� <a href="pass.php3" target="main"> ������ ������</a></p> 
<p>���������� � �������������� �����, ���� �� <b>������ ������ </b>.    
<a href="mailto:plinor@mail.ru"> plinor@mail.ru</a>
</p> 
<p>��� ��������� ����� ������ � ���� ���������� 

<a href="registr.php3" target="main"> ����������� </a> </p>';
}
echo'	

</BODY>
</HTML>';

?>
