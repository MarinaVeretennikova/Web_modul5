<?
 session_start();
@$pas=$_SESSION['pass'];
@$nik=$_SESSION['nik'];
echo '
<HTML>
<HEAD>  <title></title>   
 <LINK href="style.css" type=text/css rel=stylesheet>
</HEAD>  
<BODY bgcolor="#e7e7e7"> <b>
<table width=100%> <tr > <td align="right"><a href="out.php3"><B> Выход </b> </a> </td> </tr> </table>
<form id="FormName" action="http://localhost/file/zapoln.php3" method="get" name="FormName">';

$i=1;
$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey');

$zapr="SELECT * FROM TIGROKI WHERE NIK ='".$nik."'";

@$r = ibase_query($db, $zapr);

@$row = ibase_fetch_object($r);
if ($row>0)
{
    $col_info = ibase_field_info($r, $i); $i++;
{
echo ($row->FIO)."\n";
echo '<br>';
}

echo'</B><br>
<p> <B>Основные сведения: </B></p>';

$r = ibase_query($db,$zapr);
while ($row = ibase_fetch_object($r)) 
{

echo '
  <table width="350"  cellspacing="2" cellpadding="0">


<tr>
	<td><label>';
$i=1;
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
echo'</table>

	<p><input type=submit value="Принять изменения"> </input></p> </form>';



}
else
{
 echo '<p><b>Неверный пароль или ник! </b> Попробуйте еще раз <a href="kontrol.php3" target="main"> ввести ник и пароль</a></p> 
<p>Обратитесь к представителям фирмы, если вы <b>забыли пароль </b>.    
<a href="mailto:igrokservise@mail.ru"> igrokservise@mail.ru</a>
</p> 
<p>Для занесения своих данных в базу необходима 

<a href="registr.php3" target="main"> регистрация </a> </p>';
}
echo'	

</BODY>
</HTML>';

?>
