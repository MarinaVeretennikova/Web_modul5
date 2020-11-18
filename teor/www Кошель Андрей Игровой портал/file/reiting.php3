<?

echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">
<h2> Рейтинг ИГРОКОВ </h2>
<table width=80% border=1> 
<tr> 
<td><b> № п/п </td>
<td><b> Ник </td>
<td><b> Рейтинг </td>
<td><b> Участия </td>
<td><b> Победы </td>
<td><b> Поражения </td>  </tr>
';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');

$zapr="SELECT * FROM TISTORIAIGROKOV";

$r = ibase_query($db, $zapr);

$j=1;
while ($row = ibase_fetch_object ($r)) 
{
$reit=$row->KOLUCHASTII+$row->KOLPOBED*10-$row->KOLPORAJEN*4;

$str="UPDATE TISTORIAIGROKOV SET REITING=$reit WHERE KODISTORII=$j"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr);
$j++;
}


$zapr="SELECT * FROM TISTORIAIGROKOV INNER JOIN TIGROKI ON  TIGROKI.ISTORIAIGR=TISTORIAIGROKOV.KODISTORII order by REITING DESC";
$r = ibase_query($db, $zapr);

$j=1;
while ($row = ibase_fetch_object ($r)) 
{
echo '<tr><td> '. $j .'</td>';
echo '  <td>'. $row->NIK .'</td>';
echo '<td> '. $row->REITING .'</td>';
echo '<td> '. $row->KOLUCHASTII .'</td>';
echo '<td> '. $row->KOLPOBED .'</td>';
echo '<td> '. $row->KOLPORAJEN .'</td> </tr>';
$j++;
}

echo' </table>

 <table width=80% > 
<tr> </td> <tr><td><br></td></tr> <tr> <td>
<a href="../index.php3" target="_top"><B> на главную </b> </a> </td></tr></table>';


?>