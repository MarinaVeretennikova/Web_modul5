<?
echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#FFEFD5">';

$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey','Win1251');

$NAZVANIE=$_REQUEST['p1'];
$GOROD=$_REQUEST['p2'];
$ADRESS=$_REQUEST['p3'];
$PROFIL=$_REQUEST['p4'];
$TELEPHON=$_REQUEST['p5'];
$RUKOV_FIO=$_REQUEST['p6'];
$TEL_RUKOV=$_REQUEST['p7'];
$E_MAIL=$_REQUEST['p8'];

$str="INSERT INTO TMAININFO (NAZVANIE, GOROD, ADRESS, PROFIL, TELEPHON,
RUKOV_FIO, TEL_RUKOV,E_MAIL) VALUES ('$NAZVANIE', '$GOROD', '$ADRESS',  '$PROFIL', '$TELEPHON', '$RUKOV_FIO', '$TEL_RUKOV', '$E_MAIL')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 

$zapr = ibase_prepare("SELECT KODPREDPR FROM TMAININFO WHERE NAZVANIE='$NAZVANIE'"); 
$i=ibase_execute($zapr); 
$row = ibase_fetch_object ($i);
$kod=$row->KODPREDPR;

if ($i==0) {echo '<font color="red"> Извините, но данные не добавлены. Попробуйте еще раз </font>';}
else {echo '<p> <b> Данные успешно добавлены </p> </b>';
echo' <p>Пароль, с помощью которого вы сможете получить доступ к своим данным: </p>
<p><input type="text" name="anme" value="';
echo $kod;
echo'" size="8" > </p>';}

echo' <table width=40%> <tr > <td align="right">Теперь вы можете <a href="dobvak.php3"> добавить вакансию </a> </td> </tr> <tr > <td align="right"><a href="index.php3" target="_top"><B> на главную </b> </a> </td> </tr></table>';


?>