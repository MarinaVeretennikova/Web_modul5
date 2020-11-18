<?
Error_Reporting(1+2+4);
define("DBName","testbase");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Не могу соединиться с базой ".DBName."!<br>"; exit; }

$fio=$_REQUEST['p1'];
$groop=$_REQUEST['p2'];
$adress=$_REQUEST['p3'];
$telefon=$_REQUEST['p4'];
echo "$fio <br>"; echo "$groop<br>"; echo "$adress<br>"; echo "$telefon<br>";
$i=mysql(DBName,"insert into stud(FIOstud, groop,adress, telefon) values('$fio','$groop','$adress','$telefon')");

if ($i==0 ): echo ' <font color=red>Данные не удалось добавить!!! </font>'; endif;
if ($i!=0 ): echo ' <font color=blue>Данные  добавлены </font>'; endif;

?>