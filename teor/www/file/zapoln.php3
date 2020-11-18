<?
session_start();
$pass=$_SESSION["pass"];
echo $pass;
echo'  <LINK href="style.css" 
type=text/css rel=stylesheet> <body bgcolor="#FFEFD5">';
$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey', 'Win1251');

$NAZVANIE=$_REQUEST['p1']; echo $NAZVANIE.'<br>';
$GOROD=$_REQUEST['p2']; echo $GOROD.'<br>';
$ADRESS=$_REQUEST['p3']; echo $ADRESS.'<br>';
$PROFIL=$_REQUEST['p4']; echo $PROFIL.'<br>';
$TELEPHON=$_REQUEST['p5']; echo $TELEPHON.'<br>';
$RUKOV_FIO=$_REQUEST['p6']; echo $RUKOV_FIO.'<br>';
$TEL_RUKOV=$_REQUEST['p7']; echo $TEL_RUKOV.'<br>';
$E_MAIL=$_REQUEST['p8']; echo $E_MAIL.'<br>';

$str= "UPDATE TMAININFO  SET NAZVANIE='$NAZVANIE', GOROD='$GOROD', ADRESS='$ADRESS', PROFIL='$PROFIL', TELEPHON='$TELEPHON', RUKOV_FIO='$RUKOV_FIO', TEL_RUKOV='$TEL_RUKOV', E_MAIL='$E_MAIL' WHERE  KODPREDPR=".$pass;

@$zapr = ibase_prepare($str); 

@$i=ibase_execute($zapr); 

if ($i==0) {echo '<font color="red"> Извините, но данные не изменены. Попробуйте еще раз </font>';}
else {echo 'Данные успешно изменены <p>';}



echo' <table width=40%> <tr > <td align="right"> </td> </tr> <tr > <td align="right"><a href="folder.php3"><B> Выход </b> </a> </td> </tr></table>';

?>