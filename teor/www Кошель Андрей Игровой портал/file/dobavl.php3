<?
echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');

$FIO=$_REQUEST['p1'];
$NIK=$_REQUEST['p2'];
$GODROJDENIA=$_REQUEST['p3'];
$KOMANDA=$_REQUEST['p4'];
$PASS=$_REQUEST['p5'];

$str="INSERT INTO TIGROKI (FIO, NIK, GODROJDENIA, KOMANDA) VALUES ('$FIO', '$NIK', $GODROJDENIA,  '$KOMANDA')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr);

 
$zapr = ibase_prepare("SELECT KODIGROKA FROM TIGROKI WHERE NIK='$NIK'"); 
$i=ibase_execute($zapr); 
$row = ibase_fetch_object ($i);
$kod=$row->KODIGROKA;



$str="INSERT INTO TIGROKIPAROLI (KODIGROKA, PAROL) VALUES ($kod, '$PASS')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 


if ($i==0) {echo '<font color="red"> Извините, но данные не добавлены. Попробуйте еще раз </font>';}
else {echo '<p> <b> Данные успешно добавлены </p> </b>';
}

echo' <table width=40%> <tr > <td align="right"> <td align="right"><a href="../index.php3" target="_top"><B> на главную </b> </a> </td> </tr></table>';


?>