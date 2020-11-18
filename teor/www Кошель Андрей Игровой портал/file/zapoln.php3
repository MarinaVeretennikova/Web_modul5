<?
session_start();
$nik=$_SESSION["nik"];
echo'  <LINK href="style.css" 
type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">';
$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey', 'Win1251');

$FIO=$_REQUEST['p1'];
$NIK=$_REQUEST['p2'];
$KOMANDA=$_REQUEST['p3'];

$GODROJDENIA=$_REQUEST['p4'];


$str= "UPDATE TIGROKI  SET FIO='$FIO', NIK='$NIK',KOMANDA='$KOMANDA', GODROJDENIA=$GODROJDENIA WHERE  NIK='".$nik."'";

@$zapr = ibase_prepare($str); 

@$i=ibase_execute($zapr); 

if ($i==0) {echo '<font color="red"> Извините, но данные не изменены. Попробуйте еще раз </font>';}
else {echo 'Данные успешно изменены <p>';}



echo' <table width=40%> <tr > <td align="right"> </td> </tr> <tr > <td align="right"><a href="folder.php3"><B> Выход </b> </a> </td> </tr></table>';

?>