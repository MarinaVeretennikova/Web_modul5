<?
echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#FFEFD5">';

$db=ibase_connect('localhost:/www/file/baza1.gdb','SYSDBA','masterkey','Win1251');


$zapr="SELECT  KODPREDPR  FROM TMAININFO where KODPREDPR=".$_REQUEST['pass'];
@$r=ibase_query($db, $zapr);
if (@$row = ibase_fetch_object($r)>0)
{

$ZARPL=$_REQUEST['p2'];
$REGRAB=$_REQUEST['p6'];
$USLTRRUDA=$_REQUEST['p3'];
$KARROST=$_REQUEST['p7'];
$UDALENNOST=$_REQUEST['p5'];
$PREDOSTGILJA=$_REQUEST['p8'];
$SOCPAKET=$_REQUEST['p9'];
$NAUCHRABOTA=$_REQUEST['p10'];
$KOMANDIROVKI=$_REQUEST['p11'];


$str="INSERT INTO TVAKANSII (ZARPL, REGRAB, USLTRRUDA, KARROST,
  UDALENNOST, PREDOSTGILJA, SOCPAKET, NAUCHRABOTA, KOMANDIROVKI) VALUES ('$ZARPL','$REGRAB','$USLTRRUDA','$KARROST','$UDALENNOST','$PREDOSTGILJA', '$SOCPAKET','$NAUCHRABOTA', '$KOMANDIROVKI')"; 

$zapr = ibase_prepare($str); 
$i=ibase_execute($zapr); 

if ($i==0) {echo '<font color="red"> Извините, но данные не добавлены. Попробуйте еще раз </font>';}
else {echo '<p> <b> Данные успешно добавлены </p> </b>';
}

echo' <table width=40%> <tr > <td align="right"><a href="dobvak.php3"> Добавить вакансию  </a> </td> </tr> <tr > <td align="right"><a href="glavn.php3"><B> на главную </b> </a> </td> </tr></table>';}
else
{ echo '<p><b>Неверный пароль! </b> Попробуйте еще раз <a href="dobvak.php3" target="main"> ввести сведения</a></p> 
<p>Обратитесь к представителям фирмы, если вы <b>забыли пароль </b>    
<a href="mailto:plinor@mail.ru"> plinor@mail.ru</a>
</p> 
<p>Для занесения своих данных в базу необходима 

<a href="registr.php3" target="main"> регистрация </a> </p>
<p> <a href="../index.php3" target="_top"><b> на главную</b></a></p>';
}

?>