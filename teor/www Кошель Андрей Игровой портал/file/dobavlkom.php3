<?
echo '	<head>
		<meta http-equiv="content-type" content="text/html;charset=windows-1251">
	</head>';
echo'  <LINK href="style.css" type=text/css rel=stylesheet> <body bgcolor="#e7e7e7">';

$db=ibase_connect('localhost:/www/file/1.gdb','SYSDBA','masterkey','Win1251');

$NAZVANIE=$_REQUEST['p1'];
$GOROD=$_REQUEST['p2'];
$DATA=$_REQUEST['p3'];
$KAPITAN=$_REQUEST['p4'];

@$str="INSERT INTO TKOMANDI (NAZVANIE, GOROD, GODOBRAZOV, KAPITAN) VALUES ('$NAZVANIE', '$GOROD', '$DATA',  '$KAPITAN')"; 

@$zapr = ibase_prepare($str); 
@$i=ibase_execute($zapr);

 
@$zapr = ibase_prepare("SELECT KODKOMANDI FROM TKOMANDI WHERE NAZVANIE='$NAZVANIE'"); 
@$i=ibase_execute($zapr); 
@$row = ibase_fetch_object ($i);
@$kod=$row->KODKOMANDI;


@$str="INSERT INTO TISTORIAKOMANDI (KODKOMANDI) VALUES ($kod)"; 

@$zapr = ibase_prepare($str); 
@$i=ibase_execute($zapr); 


if ($i==0) {echo '<font color="red"> Извините, но данные не добавлены. Заполните все поля. Попробуйте еще раз </font>';}
else {echo '<p> <b> Данные успешно добавлены </p> </b>';
}

echo' <table width=40%> <tr > <td align="right"> <td align="right"><a href="../index.php3" target="_top"><B> на главную </b> </a> </td> </tr></table>';


?>