<?

echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">
<h2> Статистика команд </h2>
<table width=80% border=1> 
<tr> 
<td><b> № п/п </td>
<td><b> Название команды </td>
<td><b> Рейтинг </td>
<td><b> Участия </td>
<td><b> Победы </td>
<td><b> Поражения </td>  </tr>
';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');

$zapr="SELECT * FROM TISTORIAKOMANDI";
$r = ibase_query($db, $zapr);
$j=1;
while ($row = ibase_fetch_object ($r)) 
{
$reit=$row->KOLUCHASTI+$row->KOLPOBED*10-$row->KOLPORAJEN*4;

$str="UPDATE TISTORIAKOMANDI SET REITING=$reit WHERE KODKOMANDI=$j"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr);
$j++;
}


$zapr="SELECT * FROM TKOMANDI INNER JOIN TISTORIAKOMANDI ON TISTORIAKOMANDI.KODKOMANDI = TKOMANDI.ISTORIAIGR order by REITING DESC";

$r = ibase_query($db, $zapr);

$j=1;
while ($row = ibase_fetch_object ($r)) 
{
$reit=$row->KOLUCHASTI+$row->KOLPOBED*10-$row->KOLPORAJEN*4;
echo '<tr><td> '. $j .'</td>';
echo '<td>'.  $row->NAZVANIE .'</td>';
echo '<td>'.  $row->REITING .'</td>';
echo '<td> '. $row->KOLUCHASTI .'</td>';
echo '<td> '. $row->KOLPOBED .'</td>';
echo '<td> '. $row->KOLPORAJEN .'</td> </tr>';
$j++;
}


echo' </table>

 <table width=80% > 
<tr> </td> <tr><td><br></td></tr> <tr> <td>
<a href="../index.php3" target="_top"><B> на главную </b> </a> </td></tr></table>';


?>