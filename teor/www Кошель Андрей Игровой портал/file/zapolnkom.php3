<?
session_start();
$nik=$_SESSION["nik"];
echo'  <LINK href="style.css" 
type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">';
$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey', 'Win1251');

$kod=$_REQUEST['p0'];
$NAZVANIE=$_REQUEST['p1'];
$GOROD=$_REQUEST['p2'];
$u4=$_REQUEST['u4'];

 
$date=date("d.m.Y");
$str= "UPDATE TZAIAVKINAU4ASTIE  SET  ZAIAVKA='$u4', DATAPODA4I='$date' WHERE KODKOMANDI='$kod'";
$zapr = ibase_prepare($str); 
$j=ibase_execute($zapr); 


$str= "UPDATE TKOMANDI  SET GOROD='$GOROD', nazvanie='$NAZVANIE' WHERE KAPITAN='$nik'";
$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 



if (($i==0) or ($j==0)) {echo '<font color="red"> Извините, но данные не изменены. Попробуйте еще раз </font>';}
else {echo 'Данные успешно изменены <p>';}



echo' <table width=40%> <tr > <td align="right"> </td> </tr> <tr > <td align="right"><a href="folderkom.php3"><B> Выход </b> </a> </td> </tr></table>';

?>