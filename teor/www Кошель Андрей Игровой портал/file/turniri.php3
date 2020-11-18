<?

echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">
<h2> Проведенные турниры </h2>
<table width=80%> 
';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');


$zapr="SELECT * FROM TTURNIR";

$r = ibase_query($db, $zapr);

$j=1;

while ($row = ibase_fetch_object ($r)) 
{
echo '<p> <tr>  <b>'. $row->NAZVANIE .' </b></tr> <br>';
echo '<tr> Дата проведения <i>'. $row->DATA .' </i></tr> <br>';
echo '<tr> Победитель: <i>'. $row->POBEDITEL .' </i></p> </td></tr> <tr><td><br></td></tr>';
$j+=1;
}

echo'

 </td> </tr> 
<tr> <td align="right"><a href="../index.php3" target="_top"><B> на главную </b> </a> </td> </tr></table>';


?>
